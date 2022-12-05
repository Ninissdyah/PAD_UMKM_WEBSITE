@extends('layouts.app')

@section('content')
<section class="home">
        <div class="home">
            

            <div class="slide" style="background:url(https://images.unsplash.com/photo-1558769132-cb1aea458c5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80);">
                <div class="content">
                <h3>Clothes</h3>       
            </div> 
        </div>
    </section>

    <!-- header akhir -->

    <!-- kategori awal -->
    <section class="home-kategori">

        <div class="box-container" style="grid-template-columns: 30rem 30rem 30rem 30rem;">
        @foreach($dashboard as $dashboards)
        <div class="box">
            <div class="image">
                <img src="{{ asset ('storage/dashboard/'.$dashboards->imagePath) }}" alt="ini gambar">
            </div>
            <div class="content">
                <a href="/clothes/{{$dashboards->id}}"><h3>{{$dashboards->storeName}}</h3></a>
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