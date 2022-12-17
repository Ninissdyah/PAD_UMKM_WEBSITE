@extends('layouts.app')

@section('content')
    <section class="home">
        <div class="home">
            <div class="slide" style="background:url(https://cdn.pixabay.com/photo/2019/09/17/11/44/conceptual-eyeshadow-palette-4483297_960_720.jpg);">
                <div class="content">
                <h3 class="wow fadeIn">Beauty & Health</h3>       
            </div> 
        </div>
    </section>
    <!-- header akhir -->

    <!-- kategori awal -->
    <section class="home-kategori wow fadeInUp">
        <div class="box-container" style="grid-template-columns: 30rem 30rem 30rem 30rem;">
        @foreach($dashboard as $dashboards)
        <div class="box">
            <div class="image">
                <a href="/beauty&health/{{$dashboards->id}}"><img src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini gambar"></a>
            </div>
            <div class="content">
                <a href="/beauty&health/{{$dashboards->id}}"><h3>{{$dashboards->storeName}}</h3></a>
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