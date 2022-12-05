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
                        <a href="/electronic">
                            <img src="{{ asset ('storage/categories/electronic.jpg') }}" alt="Image 3">
                        </a>            
                    </div>
                    <div>
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1501523460185-2aa5d2a0f981?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1231&q=80" alt="Image 4">
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
            <h1 class="heading-title"> Latest Information </h1>
            <div class="box-container">
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
            <div class="load-more"><a href="/event" class="btn">Read More</a></div>
        </section>
        <!-- event akhir -->
        <!-- kategori awal -->
        <section class="home-kategori">
            <h1 class="heading-title"> Categories </h1>
            <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ asset ('storage/categories/food&drink.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                <a href="/food&drink"><h3>Food And Drink</h3></a>
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="{{ asset ('storage/categories/clothes.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <a href="/clothes"><h3>Clothes</h3></a>
                </div>
            </div> 
            <div class="box">
                <div class="image">
                    <img src="{{ asset ('storage/categories/beauty&health.jpg') }}" alt="ini gambar" height="650" width="650">
                </div>
                <div class="content">
                    <a href="/beauty&health"><h3>Beauty & Health</h3></a>
                </div>
            </div>
            </div>
            <div class="load-more"><a href="/category" class="btn">Read More</a></div>
        </section>
        <!-- kategori akhir -->
            <!-- home about awal -->
        <section class="home-about">
            <div class="image">
                <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="100" width="550">
            </div>
            <div class="content">
                <h3>About Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi pariatur eum itaque sunt esse, quis magnam necessitatibus doloribus rem ipsum odio! Quo a vitae omnis totam. Fugit iusto sequi suscipit dicta repellendus, iure deserunt quaerat, sapiente commodi ea nam quas!</p>
                <a href="/about" class="btn">Read More</a>
            </div>
        </section>
        <!-- home about akhir -->
    <!-- bagian banner bawah awal -->
    <section class="home">
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