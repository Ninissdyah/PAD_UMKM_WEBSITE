@extends('layouts.app')

@section('content')
 <!-- form EVENT awal -->
 <section class="form wow fadeInUp">
        <div>
        <h3 class="title-form"> Product </h3>
        <form action="{{ route('product.store') }}" method="POST" enctype ="multipart/form-data">
            {{ csrf_field() }}

                <br>
                <div class="form-group">
                    <input type="file" name="imagePath" class="form-control @error('imagePath') is-invalid @enderror">
                    @error('imagePath')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('titleProduct') is-invalid @enderror" name="titleProduct" placeholder="Title Product">
                    @error('titleProduct')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <textarea name="captions" class="form-control @error('captions') is-invalid @enderror" placeholder="Description Product"></textarea>
                    @error('captions')
                        <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                <br>
                <button type="submit" class="btn2">Save</button>
            </form>
        </div>
</section>
<!-- FORM EVENT AKHIR -->
@endsection