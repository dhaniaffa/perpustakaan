@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Harap Verifikasi Email Anda!') }}</b></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, silahkan cek e-mail anda.') }}
                    {{ __('jika anda tidak menerima email dari kami,') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini untuk mengirimkan email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
