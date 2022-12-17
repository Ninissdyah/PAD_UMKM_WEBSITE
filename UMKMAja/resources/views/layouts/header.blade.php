<!-- header awal -->
<section class="header">
    @if(Auth::guard('admin')->user())
    <nav class="navbar navbar-expand-sm">
        <a href="/home" class="navbar navbar-brand">
            <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="25" width="135"></a>
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNabar">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNabar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <button type="button" id="role-name" class="dropdown-toggle" data-toggle="dropdown">
                        {{Auth::guard('admin')->user()->name}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 18rem;">
                        <li><a class="dropdown-item" href="/dashboard" style="width: 80%;">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}" style="width: 80%;">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-sm">
        <a href="/home" class="navbar navbar-brand">
            <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="25" width="135"></a>
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNabar">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNabar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}"><button class="btn-daftar">Sign In</button></a>
                </li>
            </ul>
        </div>
    </nav>
    @endif
</section>
<!-- header akhir -->