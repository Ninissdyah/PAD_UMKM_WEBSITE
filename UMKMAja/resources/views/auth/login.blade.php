@extends('layouts.app')

@section('content')
<div class="container">
<div class="title-dashboard" style="margin-left: 5rem; margin-top:5rem;">
    @if ($message = Session::get('regist'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    @if ($message = Session::get('false'))
          <div class="alert alert-danger alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
    @if ($message = Session::get('berhasil'))
          <div class="alert alert-danger alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-content">
                <div class="card-title">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('admin/login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email"  class="form-content @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <p class="text-regist">Don't have an account yet? 
                                <a id="myBtn" class="regist btn-link">Register</a>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h1>Do you want to create an account for your shop?</h1><br>
                                    <p>If you're only using the website to view information, you don't need to create an account.<p><br></br>
                                    <a href="{{ url('store/register') }}" class="btn-daftar">Sign In</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
