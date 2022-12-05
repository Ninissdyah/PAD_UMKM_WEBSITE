@extends('layouts.app')

@section('content')
<div class="container">
<div class="title-dashboard" style="margin-left: 5rem; margin-top:5rem;">
  @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
              <h3 class="alertx">{{ $message }}</h3>
          </div>
    @endif
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-content">
                <div class="card-title">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('store/register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-content @error('name') is-invalid @enderror" name="name" placeholder="Nama Toko" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-content @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-login" style="margin-left: 11rem">
                                    {{ __('Register') }}
                                </button>
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
