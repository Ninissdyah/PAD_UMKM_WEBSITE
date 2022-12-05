@extends('layouts.app')

@section('content')
 <!-- form EVENT awal -->
 <section class="form">
        <div>
        <h3 class="title-form"> Dashboard </h3>
        <form action="{{ route('dashboard.store') }}" method="POST" enctype ="multipart/form-data">
            {{ csrf_field() }}

                <br>
                <div class="form-group">
                    <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                    @error('imagePath')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('storeName') is-invalid @enderror" name="storeName" placeholder="Store Name">
                    @error('storeName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <select name="category" class="form-select form-control @error('category') is-invalid @enderror">
                        <option value="">Category</option>
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
                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Descriptions"></textarea>
                    @error('desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <p style="font-size:1.6rem; font-style:italic;"><b>* Start your number with +62!</b></p>
                    <input type="text" class="form-control @error('noWa') is-invalid @enderror" name="noWa" placeholder="No WhatsApp">
                    @error('noWa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <p style="font-size:1.6rem; font-style:italic;"><b>* Without @!</b></p>
                    <input type="text" class="form-control @error('ig') is-invalid @enderror" name="ig" placeholder="Instagram">
                    @error('ig')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('shopee') is-invalid @enderror" name="shopee" placeholder="Shopee">
                    @error('shopee')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('others') is-invalid @enderror" name="others" placeholder="Others">
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