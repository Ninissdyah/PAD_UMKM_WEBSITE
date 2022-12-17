@extends('layouts.app')

@section('content')
<!-- postingan event awal -->
<section class="home">
  <div class="home">
    <div class="slide" style="background:url(https://4.bp.blogspot.com/-4q1c3mCni98/VadIyHfJI6I/AAAAAAAAADI/NcJz8CYPFXY/s1600/seminar-conference.jpg);">
      <div class="content">
        <h3 class="wow fadeIn">Event</h3>       
      </div> 
    </div>
  </div>

@if(count($event)>0)
    @foreach($event as $events)
    <div class="containerx wow fadeInUp">
      <!-- <div class="content1">
            <p> </p>
        </div> -->
      <div class="content1">
            <div class="image-event">
            <a class="example-image-link" href="{{ asset ('storage/eventPoster/'.$events->imagePath) }}"
                data-lightbox="example-2" data-title="{{$events->namaEvent}}">
                    <img class="example-image img-fluid mb-2"
                    src="{{ asset ('storage/eventPoster/'.$events->imagePath) }}" alt="image-1"></a>
               
            </div>
      </div>
      <div class="content2">
              <div class="content-event">
                <h3>{{$events->namaEvent}}</h3>
                <p>
                  @if(strlen($events->desc) > 200)
                  {{substr($events->desc,0,200)}}
                    <span class="btn read-more-show hide_content">Readmore</span>
                    <span class="read-more-content">{{substr($events->desc,200,strlen($events->desc))}} 
                    <span class="btn read-more-hide hide_content">Readless</span> </span>
                  @else
                    {{$events->desc}}
                  @endif
                </p>
                <p>
                  <b>Contact:</b> {{$events->contact}}
                </p>
                <p>
                  <b>Link Event:</b> 
                  <p><a href="{{$events->linkEvent}}" style="color:black;"> {{$events->linkEvent}}</a></p>
                </p>
              </div>
      </div> 
    </div>
    @endforeach
@else
<div class="title-dashboard" style="margin:5rem;">
  <div class="alert alert-success alert-block">
    <h3>Data Event tidak tersedia</h3>
  </div>
</div>
@endif
<div class="d-flex justify-content-center" style="margin:5px; padding:3px;">
  <h1>
    {!! $event->links() !!}
  </h1>
</div>
</section>

<!-- postingan event akhir -->
@endsection