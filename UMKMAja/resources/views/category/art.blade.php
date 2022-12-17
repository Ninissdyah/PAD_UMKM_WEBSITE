@extends('layouts.app')

@section('content')
<section class="home">
        <div class="home">
            <div class="slide" style="background:url(https://www.flokq.com/blog/wp-content/uploads/2020/06/casa-1-1536x1024.jpg);">
                <div class="content">
                <h3 class="wow fadeIn">Art</h3>       
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
                <a href="/art/{{$dashboards->id}}"><img src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini gambar"></a>
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