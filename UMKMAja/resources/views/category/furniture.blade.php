@extends('layouts.app')

@section('content')
<section class="home">
        <div class="home">
            <div class="slide" style="background:url(https://cdn.pixabay.com/photo/2016/11/18/17/20/living-room-1835923_960_720.jpg);">
                <div class="content">
                <h3 class="wow fadeIn">Furniture</h3>       
            </div> 
        </div>
    </section>
    <!-- header akhir -->

    <!-- kategori awal -->
    <section class="home-kategori wow fadeInUp">
        <div class="box-container">
        @foreach($dashboard as $dashboards)
        <div class="box">
            <div class="image">
                <a href="/furniture/{{$dashboards->id}}"><img src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini gambar"></a>
            </div>
            <div class="content">
                <a href="/furniture/{{$dashboards->id}}"><h3>{{$dashboards->storeName}}</h3></a>
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