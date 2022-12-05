@extends('layouts.app')

@section('content')
<div class="store">
    <h4>{{$dashboard->storeName}}</h4> 
    <div class="containerx" style="background-color:unset; box-shadow:var(--box-shadow); grid-template-columns:50% 50%;">
        <div class="content1" style="grid-column: 1 / 2 span ;">
            <div class="image-dashboard">
                <img src="{{asset('storage/dashboard/'. $dashboard->imagePath)}}" style="position:relative">
            </div>
        </div>
        <div style="margin-left:8rem;"> 
            <h4 style="font-style: bold; font-size: 20px;">Description</h4> 
            <p class="desc"> 
                @if(strlen($dashboard->desc) > 200)
                {{substr($dashboard->desc,0,200)}}
                <span class="btn read-more-show hide_content">Readmore</span>
                <span class="read-more-content">{{substr($dashboard->desc,200,strlen($dashboard->desc))}} 
                <span class="btn read-more-hide hide_content">Readless</span> </span>
                @else
                    {{$dashboard->desc}}
                @endif
            </p>
            <h4 style="font-style: bold; font-size: 20px;">Address</h4> 
            <p class="desc">{{$dashboard->address}}</p>
        </div>
        <div style="margin-left:10rem;">
            <h4 style="font-style: bold; font-size: 20px;">Social Media</h4> 
                <a href="https://wa.me/{{$dashboard->noWa}}" style="color:black;"><p class="desc">WhatsApp : {{$dashboard->noWa}}</p></a>
                <a href="https://www.instagram.com/{{$dashboard->ig}}/" style="color:black;"><p class="desc">Instagram : {{$dashboard->ig}}</p></a>
                <p class="desc">Shopee : {{$dashboard->shopee}}</p>
                <p class="desc">Others : {{$dashboard->others}}</p>
        </div>
    </div>
    
    <h3 class="title-page"> Product </h3><hr>
    <br>
    <div class="box4">
        <a href="/product/store/{{$dashboard->id}}" class="btn2" >Show</a>
        <br><br><br>
    </div>

</div>
@endsection