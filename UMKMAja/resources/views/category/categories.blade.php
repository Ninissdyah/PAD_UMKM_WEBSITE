@extends('layouts.app')

@section('content')
<section class="home">
        <div class="home">
            <div class="slide" style="background:url(https://images.unsplash.com/photo-1576562331281-d09e46af9854?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80)">
                <div class="content">
                <h3>Categories</h3>   
            </div> 
        </div>
    </section>

    <!-- header akhir -->

    <!-- kategori awal -->
    <section class="home-kategori">
        <h1 class="heading-title"> Categories </h1>
        
        <div class="box-container">
        @if(count($category)>0)
            @foreach($category as $category)
            <div class="box">
                <div class="image">
                    <img src="{{ asset ('storage/categories/'.$category->url.'.jpg') }}" alt="ini gambar">
                </div>
                <div class="content">
                    <a href="/{{$category->url}}"><h3>{{$category->category_name}}</h3></a>
                </div>
            </div> 
            @endforeach
        @else
        <div class="title-dashboard" style="margin:5rem;">
            <div class="alert alert-success alert-block">
                <h3>Data tidak tersedia</h3>
            </div>
        </div>
        @endif
        </div>
    </section>
    <!-- kategori akhir -->
@endsection