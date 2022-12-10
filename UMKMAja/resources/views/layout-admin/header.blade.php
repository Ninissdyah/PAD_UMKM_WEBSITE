<!-- header awal -->
<section class="header">
    <nav class="navbar navbar-expand-sm">
        <a href="{{ url('/logout') }}" class="navbar navbar-brand">
            <img src="{{ asset('/storage/UMKMAja!.png')}}" alt="iniGambar" height="25" width="135"></a>
        </a>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNabar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNabar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <button type="button" id="role-name" class="dropdown-toggle" data-toggle="dropdown">
                        {{Auth::guard('admin')->user()->name}}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 18rem;">
                            <li><a class="dropdown-item" href="/admin" style="width: 80%;">Dashboard</a></li>
                            <li><a class="dropdown-item" href="/event2" style="width: 80%;">Event</a></li>
                            <li><a class="dropdown-item" href="{{ url('/logout') }}" style="width: 80%;">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="img-avatar">
                            <img src="{{ asset('storage/noavatar.png')}}" alt="User Avatar" height="30" width="30" style="border-radius: 50%; border: var(--border);
                                overflow: hidden; ">
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
</section>
<!-- header akhir -->