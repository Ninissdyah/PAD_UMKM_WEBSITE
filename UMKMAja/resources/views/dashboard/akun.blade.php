@extends('layouts.app')

@section('content')
<!-- Dashboard awal -->
<section>
<h3 class="title-form"> Dashboard </h3>
<br><br><br>
<h3 class="title-page"> Profil </h3><hr>
<br>
    <div class="dashboard">
            <div class="box2">
                <div class="image-dashboard">
                    <img src="{{ asset ('storage/dashboard/'.$dashboard->imagePath) }}">
                </div>
            </div>
            <div class="box3">
                <div>
                    <div class="title-dashboard"><h3>Store Name</h3></div>
                    <p class="text-dashboard">{{$dashboard->storeName}}</p>
                </div>
                <div>
                    <div class="title-dashboard"><h3>Category</h3></div>
                    <p class="text-dashboard">{{$dashboard->category}}</p>
                </div>
                <div>
                    <div class="title-dashboard"><h3>Address</h3></div>
                    <p class="text-dashboard">{{$dashboard->address}}</p>
                </div>
                <div>
                    <div class="title-dashboard"><h3>Description</h3></div>
                        <p class="text-dashboard"> 
                            @if(strlen($dashboard->desc) > 200)
                            {{substr($dashboard->desc,0,200)}}
                                <span class="btn read-more-show hide_content">Readmore</span>
                                <span class="read-more-content">{{substr($dashboard->desc,200,strlen($dashboard->desc))}} 
                                <span class="btn read-more-hide hide_content">Readless</span> </span>
                            @else
                                {{$dashboard->desc}}
                            @endif
                        </p>
                </div>
                <div>
                    <div class="title-dashboard"><h3>Social Media</h3></div>
                    <p class="text-dashboard">Instagram : {{$dashboard->ig}}</p>
                    <p class="text-dashboard">WhatsApp : {{$dashboard->noWa}}</p>
                    <p class="text-dashboard">Shopee : {{$dashboard->shopee}}</p>
                    <p class="text-dashboard">Others : {{$dashboard->others}}</p>
                </div>
            </div>
        <div class="box4">
            <a href="/dashboard/{{$dashboard->id}}/edit" class="btn2">Edit</a>
        </div>
    </div>
</section>
<!-- Dashboard akhir -->
@endsection