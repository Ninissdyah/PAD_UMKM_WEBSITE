@extends('layouts.app')

@section('content')
<!-- bagian home awal -->
<section class="home">
            <div class="home">
            <div class="containerz">
                <div class="slider">
                    <div>
                        <div class="slide">
                            <div class="content">
                                    <span>500++</span>
                                    <h3>UMKM HAS JOINED WITH US</h3>
                                    <a href="{{ url('store/register') }}" class="btn">Join Us!</a>
                            </div>
                        </div> 
                    </div>
                    <div>
                        <a href="/art">
                            <div class="slide" style="background:url(https://raw.githubusercontent.com/Ninissdyah/PAD_UMKM_WEBSITE/94128a300ff373d44dac147f9a487b0ed37cbe57/images/gambar-slide-2.jpg);"></div>
                        </a>            
                    </div>
                    <div>
                        <a href="/food&drink">
                            <div class="slide" style="background:url(https://github.com/Ninissdyah/PAD_UMKM_WEBSITE/blob/main/images/gambar-slide-4.jpg?raw=true);"></div>
                        </a>
                    </div>
                    <div>
                        <a href="/about">
                            <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="Image 2">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- bagian home akhir -->
        <!-- event awal -->
        <section class="home-event">
            <h1 class="heading-title  wow fadeInUp" data-wow-delay="0.1s"> Latest Information </h1>
            <div class="box-container wow fadeInUp"  data-wow-delay="0.3s">
                @if(count($galleries)>0)
                    @foreach ($galleries as $gal)
                    <div class="box">
                        <div class="image">
                            <a href="/event">
                            <img src="{{ asset ('storage/eventPoster/'.$gal->imagePath) }}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="box">
                        <div class="image">
                            <a href="/event">
                            <img src="" alt="image-1">
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="/event">
                            <img src="" alt="image-1">
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="/event">
                            <img src="" alt="image-1">
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="/event">
                            <img src="" alt="image-1">
                            </a>
                        </div>
                    </div>
                @endif 
            </div>
            <div class="load-more wow fadeInUp" data-wow-delay="0.1s"><a href="/event" class="btn">Read More</a></div>
        </section>
        <!-- event akhir -->

        <!-- kategori awal -->
        <section class="home-kategori">
            <h1 class="heading-title  wow fadeInUp" data-wow-delay="0.1s"> Categories </h1>
            <div class="box-container wow fadeInUp" data-wow-delay="0.1s">
            <div class="box">
                <a href="/food&drink">
                <div class="image">
                    <img src="{{ asset ('storage/categories/food&drink.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <a href="/food&drink"><h3>Food And Drink</h3></a>
                </div>
            </div> 
            <div class="box">
                <a href="/clothes">
                <div class="image">
                    <img src="{{ asset ('storage/categories/clothes.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <a href="/clothes"><h3>Clothes</h3></a>
                </div>
            </div> 
            <div class="box">
                <a href="/beauty&health">
                <div class="image">
                    <img src="{{ asset ('storage/categories/beauty&health.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <a href="/beauty&health"><h3>Beauty & Health</h3></a>
                </div>
            </div>
            </div>
            <div class="load-more  wow fadeInUp" data-wow-delay="0.1s"><a href="/category" class="btn">Read More</a></div>
        </section>
        <!-- kategori akhir -->

        <!-- home about awal -->
        <section class="home-about wow fadeInUp" data-wow-delay="0.1s">
            <div class="image">
                <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar">
            </div>
            <div class="content">
                <h3>About Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi pariatur eum itaque sunt esse, quis magnam necessitatibus doloribus rem ipsum odio! Quo a vitae omnis totam. Fugit iusto sequi suscipit dicta repellendus, iure deserunt quaerat, sapiente commodi ea nam quas!</p>
                <a href="/about" class="btn">Read More</a>
            </div>
        </section>
    <!-- home about akhir -->

    <!-- bagian banner bawah awal -->
    <section class="home wow fadeInUp" data-wow-delay="0.1s">
        <div class="home-banner-bawah">
            <div class="slide">
                <div class="content">
                        <span>500++</span>
                        <h3>UMKM HAS JOINED WITH US</h3>
                        <a><button id="myBtn" class="btn">Join Us!</button></a>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <h1>Do you want to create an account for your shop?</h1><br>
                                <p>If you're only using the website to view information, you don't need to create an account.<p><br></br>
                                <a href="{{ url('store/register') }}"><button class="btn-daftar">Sign In</button></a>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
</section>
<!-- bagian banner bawah akhir -->
@endsection