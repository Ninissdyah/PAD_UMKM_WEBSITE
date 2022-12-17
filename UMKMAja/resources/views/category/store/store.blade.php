@extends('layouts.app')

@section('content')
<div class="store wow fadeInUp" >
    <h4>{{$dashboard->storeName}}</h4> 
    <div class="container-store">
        <div class="content1" style="grid-column: 1 / 2 span ;">
            <div class="image-dashboard">
                <img src="{{asset('storage/dashboard/'. $dashboard->imagePath)}}" style="position:relative">
            </div>
        </div>
        <div class="content-store"> 
            <h4>Description</h4> 
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
            <h4>Address</h4> 
            <p class="desc">{{$dashboard->address}}</p>
        </div>
        <div class="content-store2">
            <h4>Social Media</h4> 
                <a href="https://wa.me/{{$dashboard->noWa}}" style="color:black;"><p class="desc">WhatsApp : {{$dashboard->noWa}}</p></a>
                <a href="https://www.instagram.com/{{$dashboard->ig}}/" style="color:black;"><p class="desc">Instagram : {{$dashboard->ig}}</p></a>
                <p class="desc">Shopee : {{$dashboard->shopee}}</p>
                <p class="desc">Others : {{$dashboard->others}}</p>
        </div>
    </div>
    
    <div class="wow fadeInUp">
        <h3 class="title-page"> Product </h3><hr>
        <br>
        <div class="box4">
            <a href="/product/store/{{$dashboard->id}}" class="btn2" >Show</a>
            <br><br><br>
        </div>
    </div>

</div>
@endsection