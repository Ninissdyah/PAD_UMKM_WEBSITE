<!-- header awal -->
<section class="header">
    <a href="{{ url('/logout') }}"><img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="25" width="135"></a>
    <nav class="navbar">
        <div class="dropdown">
            <button type="button" id="role-name" class="dropdown-toggle" data-toggle="dropdown">
            {{Auth::guard('admin')->user()->name}}
            </button>
            <div class="dropdown-menu" style="min-width: 18rem;">
                <a class="dropdown-item" href="/admin" style="width: 80%;">Dashboard</a>
                <a class="dropdown-item" href="/event2" style="width: 80%;">Event</a>
                <a class="dropdown-item" href="{{ url('/logout') }}" style="width: 80%;">Logout</a>
            </div>
        </div>
        <a class="img-avatar">
          <img src="{{ asset('storage/noavatar.png')}}" alt="User Avatar">
        </a>
    </nav>
    <!-- menu bar di samping kanan atas -->
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header akhir -->