@extends('frontend.templates.default')

@section('content')
    <div class="container" style="margin-bottom: 100px; margin-top: 50px">
        <h3 style="text-align: center">Registrasi Perpustakaan<storng>KITA</storng></h3>
        <form action="{{route('register')}}" class="col-12" method="post">
            @csrf
            <div class="row">

                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="@error('name') invalid @enderror" name="name" value="{{old('name')}}">
                    <label for=""></label>
                    @error('name')
                    <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <label for="">E-Mail</label>
                    <input type="email" class="validate @error('email') is-invalid @enderror"name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="">Kata Sandi (Min: 8 Karakter)</label>
                    <input type="password" class="@error('password') invalid @enderror" name="password">
                    @error('password')
                    <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="">Konfirmasi Password</label>
                    <input type="password" class="@error('password_confirmation') invalid @enderror" name="password_confirmation">
                    @error('password_confirmation')
                    <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                </div>

                <div class="input field right">
                    <input type="submit" class="vawes-effect waves-light btn red accent-1" value="Daftar">
                </div>
            </div>
        </form>
    </div>
@endsection
