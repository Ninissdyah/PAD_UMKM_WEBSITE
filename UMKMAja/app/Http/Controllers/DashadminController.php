<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Admins;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Hash;
use Auth;


class DashadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*echo "<pre>"; print_r(Auth::guard('admin')->user()); die; */
        $data = array(
            'id' => "event",
            'event' => Event::orderBy('created_at', 'asc')->paginate(5)
        );
        $no = 1;
        return view('admin.dash', compact('no'))->with($data);
    }


    public function login(Request $request)
    {   
        if($request->isMethod('post')){
            $data =$request->all();

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],
            'status'=>1])){
                return redirect('/admin')->with(['login' => 'You have successfully logged in!']);
            } elseif(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],
            'status'=>0])){
                return redirect('/dashboard')->with(['login' => 'You have successfully logged in!']);
            }else{
                return redirect()->back()->with(['false' => 'Your password or email is wrong!!']);
            }
        }
        return view('auth.login');
    }

    public function logout()
    {   
        Auth::guard('admin')->logout();
        return redirect('/home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        return view('admin.postEvent', ['event' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'namaEvent.required'    => 'Event Name is required!',
            'desc.required'    => 'Description Store is required!',
            'linkEvent.required'    => 'Event link is required! If the event doesnt have a link, fill it with -',
            'contact.required'    => 'Contact is required!',
            'namaEvent.uniqe' => 'The event name already exists!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'namaEvent' => 'required|unique:events',
            'desc' => 'required',
            'linkEvent' => 'required',
            'contact' => 'required'
        ],$messages);

        $event = new Event;
        $event->namaEvent = $request->input('namaEvent');
        $event->linkEvent = $request->input('linkEvent');
        $event->desc = $request->input('desc');
        $event->contact = $request->input('contact');
        
        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/eventPoster/'.'/'.$imageName);
            $event->imagePath = $imageName;
        } 

        $event->save();
        return redirect('/admin')->with(['success' => 'Event uploaded successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "event",
            'event' => Event::find($id)
        );
        return view('events.event')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $image = Event::findOrFail($id);
        $destination = 'storage/eventPoster/'.$event->imagePath;
        File::delete($destination);
        $event->delete();
        return redirect('/admin')->with(['berhasil' => 'Event deleted successfully']);
    }
}
