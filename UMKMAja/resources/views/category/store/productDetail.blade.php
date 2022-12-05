@extends('layouts.app')

@section('content')
<div class="store">
<h3 class="title-page">Product</h3><hr>

    <div class="row">
    @foreach($product as $products)
        <div class="col-sm-4">
            <div class="card" style="height:unset; width:35rem; overflow:hidden;">
                <a class="example-image-link" href="{{ asset ('storage/product/'.$products->imagePath) }}"
                data-lightbox="example-2" data-title="{{$products->titleProduct}}" style="height:25rem;">
                    <img class="example-image img-fluid mb-2"
                    src="{{ asset ('storage/product/'.$products->imagePath) }}" style="height: 100%; width:100%" alt="image-1"></a>
                <div class="card-body" style="padding:1.5rem">
                    <h3 style="text-align:center; padding:2rem; font-size:3rem;"><b>{{$products->titleProduct}}</b></h3>
                    <p class="desc" style="margin: 1rem;"><b> Harga: </b>Rp {{$products->price}}</p>
                    <p class="desc" style="margin: 1rem;"> 
                        @if(strlen($products->captions) > 50)
                        {{substr($products->captions,0,50)}}
                        <span class="btn read-more-show hide_content">Readmore</span>
                        <span class="read-more-content"> {{substr($products->captions,50,strlen($products->captions))}} 
                        <span class="btn read-more-hide hide_content">Readless</span> </span>
                        @else
                            {{$products->captions}}
                        @endif
                    </p>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
    
    <br>
    <div class="d-flex justify-content-center" style="margin:5px; padding:3px;">
        <h1>
            {!! $product->links() !!}
        </h1>
    </div>
</div>
@endsection