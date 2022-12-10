@extends('layouts.app')

@section('content')
<section class="home">
        <div class="home">
            

            <div class="slide" style="background:url(https://images.unsplash.com/photo-1505682750263-f3f9e519c565?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Zm9vZCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60);">
                <div class="content">
                <h3>Art</h3>       
            </div> 
        </div>
    </section>

    <!-- header akhir -->

    <!-- kategori awal -->
    <section class="home-kategori">

        <div class="box-container">
        @foreach($dashboard as $dashboards)
        <div class="box">
            <div class="image">
                <img src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini gambar">
            </div>
            <div class="content">
                <a href="/art/{{$dashboards->id}}"><h3>{{$dashboards->storeName}}</h3></a>
            </div>
        </div> 
        @endforeach
        </div>
        <div class="d-flex justify-content-center" style="margin:5px; padding:3px;">
            <h1>
                {!! $dashboard->links() !!}
            </h1>
        </div>
    </section>
    <!-- kategori akhir -->
@endsection