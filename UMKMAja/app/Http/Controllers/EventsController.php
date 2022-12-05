<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Vendor;
use Illuminate\Http\Request;
use DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::all();
        foreach ($vendor as $post) {
           $vendorx[] = [
              'email' => $post->email,   
           ];
        }; 
        dd($vendorx);

        
        $data = array(
            'id' => "event",
            'event' => Event::orderBy('created_at', 'desc')->paginate(3)
        );
        return view('events.event')->with($data);
    }

    public function index2()
    {
        $data = array(
            'id' => "event",
            'event' => Event::orderBy('created_at', 'desc')->paginate(3)
        );
        return view('events.event2')->with($data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
