@extends('layout-admin.app')

@section('content')
<!-- Dashboard awal -->
<section>
    <div class="title-dashboard" style="margin-left: 5rem; margin-top:5rem;">
    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <h3 class="alertx">{{ $message }}</h3>
            </div>
        @endif
        @if ($message = Session::get('berhasil'))
            <div class="alert alert-success alert-block">
                <h3 class="alertx">{{ $message }}</h3>
            </div>
        @endif
        @if ($message = Session::get('login'))
            <div class="alert alert-success alert-block">
                <h3 class="alertx">{{ $message }}</h3>
            </div>
        @endif
    </div>
    <h3 class="title-form wow fadeInUp"> Dashboard Admin </h3>
    <br><br><br>
    <div class="wow fadeInUp">
        <h2> Role : Admin </h2> <br>
        <h2> Name : {{Auth::guard('admin')->user()->name}} </h2> <br>
    </div>

    <div class="wow fadeInUp">
        <h3 class="title-page"> Event </h3><hr>
        <br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @if(count($event)>0)
                @foreach($event as $events)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$events->namaEvent}}</td>
                        <td>{{$events->linkEvent}}</td>
                        <td>{{$events->contact}}</td>
                        <td>{{$events->created_at}}</td>
                        <td style="text-align: center;">
                        <button id="myBtn" class="btn-delete bg-danger">Delete</button>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h1>Are You Sure You Want To Remove This Event?</h1>
                                    <form action= "{{ route('admin.destroy', $events->id)}}" method="POST">@method('DELETE')
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$events->id }}"> <br></br>
                                        <button type="submit" class="btn bg-danger" style="margin-bottom:5rem;">Delete</button>
                                    </form>
                                </div>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <th scope="row"></th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center" style="margin:5px; padding:3px;">
            <h1>
                {!! $event->links() !!}
            </h1>
        </div>
    </div>

    <div class="box4 wow fadeInUp">
        <h3 class="title-page">Post Event </h3><hr>
        <br>
        <a href="/admin/create" class="btn2" >Post</a>
        <br><br><br>
    </div>

</section>
<!-- Dashboard akhir -->
@endsection