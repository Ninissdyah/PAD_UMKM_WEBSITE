@extends('layouts.app')

@section('content')
<!-- Dashboard awal -->
<section>
<div class="title-dashboard" style="margin-left: 5rem; margin-top:5rem;">
  @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    @if ($message = Session::get('berhasil'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
</div>
    <h3 class="title-form wow fadeInUp"> Dashboard</h3>
    <br><br><br>
    <div class="wow fadeInUp">
        <h3 class="title-page"> Product </h3><hr>
        <br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($product))
                @foreach($product as $pro)
                <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$pro->titleProduct}}</td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->created_at}}</td>
                        <td style="text-align: center;">
                                <form action= "{{ route('product.destroy', $pro->id)}}" method="POST">@method('DELETE')
                                    {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$pro->id }}"> <br></br>
                                        <button type="submit" class="btn bg-danger" onclick="return confirm('Are You Sure You Want To Remove This Product?');" style="margin-bottom:5rem;">Delete</button>
                                    </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <th scope="row"> </th>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                @endif
                
            </tbody>
        </table>
        <div class="d-flex justify-content-center" style="margin:5px; padding:3px;">
            <h1>
                {!! $product->links() !!}
            </h1>
        </div>
    </div>

    <div class="box4 wow fadeInUp">
        <h3 class="title-page">Post Product </h3><hr>
        <br>
        <a href="/product/create" class="btn2" >Post</a>
        <br><br><br>
    </div>
</section>
<!-- Dashboard akhir -->
@endsection