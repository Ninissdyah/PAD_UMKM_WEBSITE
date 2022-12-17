@extends('layout-admin.app')

@section('content')
 <!-- form EVENT awal -->
 <section class="form wow fadeInUp">
        <div>
        <h3 class="title-form"> Event </h3>
        <form action="{{ route('admin.store') }}" method="POST" enctype ="multipart/form-data">
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
                    <input type="text" class="form-control @error('namaEvent') is-invalid @enderror" name="namaEvent" placeholder="Event Name">
                    @error('namaEvent')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control @error('linkEvent') is-invalid @enderror" name="linkEvent" placeholder="Link Event" >
                    @error('linkEvent')
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
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="Contact Person">
                    @error('contact')
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