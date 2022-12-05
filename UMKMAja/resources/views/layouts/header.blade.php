<!-- header awal -->
<section class="header">
    <a href="/home"><img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="25" width="135"></a>
    @if(Auth::guard('admin')->user())
    <nav class="navbar">
        <a href="/home">Home</a>
        <a href="/event">Event</a>
        <a href="/category">Categories</a>
        <a href="/about">About Us</a>
        <div class="dropdown">
            <button type="button" id="role-name" class="dropdown-toggle" data-toggle="dropdown">
            {{Auth::guard('admin')->user()->name}}
            </button>
            <div class="dropdown-menu" style="min-width: 18rem;">
                <a class="dropdown-item" href="/dashboard" style="width: 80%;">Dashboard</a>
                <a class="dropdown-item" href="{{ url('/logout') }}" style="width: 80%;">Logout</a>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar">
        <a href="/home">Home</a>
        <a href="/event">Event</a>
        <a href="/category">Categories</a>
        <a href="/about">About Us</a>
        <a href="{{ route('login') }}"><button class="btn-daftar">Sign In</button></a>
</div>
    </nav>
    @endif
    <!-- menu bar di samping kanan atas -->
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header akhir -->