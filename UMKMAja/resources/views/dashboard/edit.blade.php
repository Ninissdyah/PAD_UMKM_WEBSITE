@extends('layouts.app')

@section('content')
 <!-- form EVENT awal -->
 <section class="form">
        <div>
        <h3 class="title-form"> Dashboard </h3>
        <form action="{{ route('dashboard.update', $dashboard->id) }}" method="POST" enctype ="multipart/form-data"> @method('PUT')
            {{ csrf_field() }}

                <br>
                <div class="form-group">
                    <input type="file" name="imagePath" class="form-control @error('imagePath') is-invalid @enderror"><br>
                    <img src="{{ asset('storage/dashboard/'.$dashboard->imagePath) }}" height="100px" alt="Image">
                    @error('imagePath')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('storeName') is-invalid @enderror" name="storeName" placeholder="Store Name" value="{{$dashboard->storeName}}">
                    @error('storeName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                        <option value="{{$dashboard->category}}" selected="selected">{{$dashboard->category}}</option>
                        <option value="Food And Drink">Food and Drink</option>
                        <option value="Clothes" >Clothes</option>
                        <option value="Art">Art</option>
                        <option value="Furniture" >Furniture</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Beauty And Health">Beauty and Health</option>
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <textarea name="desc" class="form-control" placeholder="Descriptions">{{$dashboard->desc}}</textarea>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{$dashboard->address}}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <p style="font-size:1.6rem; font-style:italic;"><b>* Start your number with +62!</b></p>
                    <input type="text" class="form-control @error('noWa') is-invalid @enderror" name="noWa" placeholder="No WhatsApp" value="{{$dashboard->noWa}}">
                    @error('noWa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <p style="font-size:1.6rem; font-style:italic;"><b>* Without @!</b></p>
                    <input type="text" class="form-control @error('ig') is-invalid @enderror" name="ig" placeholder="Instagram" value="{{$dashboard->ig}}">
                    @error('ig')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('shopee') is-invalid @enderror" name="shopee" placeholder="Shopee" value="{{$dashboard->shopee}}">
                    @error('shopee')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('others') is-invalid @enderror" name="others" placeholder="Others" value="{{$dashboard->others}}">
                    @error('others')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <button type="submit" class="btn2">Save</button>
            </form>
        </div>
</section>
<!-- FORM EVENT AKHIR -->
@endsection