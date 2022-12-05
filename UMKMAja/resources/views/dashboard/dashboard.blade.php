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
    @if ($message = Session::get('login'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
</div>
    <h3 class="title-form"> Dashboard</h3>
    <br><br><br>
    <h3 class="title-page"> Profile</h3><hr>
    <br>

    <div class="dashboard">
            @foreach($dashboard as $dashboards)
            <div class="box3">
                <div>
                    <div class="title-dashboard"><h3>Store Name</h3></div>
                    <p class="text-dashboard">{{ $dashboards->storeName }}</p>
                </div>
                <div>
                    <div class="title-dashboard"><h3>Category</h3></div>
                    <p class="text-dashboard">{{$dashboards->category}}</p>
                </div>
            </div>
            <div class="box4">
                <a href="/dashboard/{{$dashboards->id}}" class="btn2">Show</a>
            </div>
            @endforeach
            @if(count($dashboard)==0)
            <div class="box4">
                <a href="/dashboard/create" class="btn2" >Create</a>
                <br><br><br>
            </div>
            @endif

    </div>
        <br></br><br></br>
    <h3 class="title-page"> Product </h3><hr>
    <br>
    @foreach($dashboard as $dashboards)
    <div class="box4">
        <a href="/product" class="btn2" >Show</a>
        <br><br><br>
    </div>
    @endforeach

</section>
<!-- Dashboard akhir -->
@endsection