@extends('frontend.templates.default')

@section('content')
    <div class="container" style="margin-bottom: 100px; margin-top: 50px">
        <h3 style="text-align: center; margin-bottom: 25px">Login</h3>
        <form action="{{route('login')}}" class="col-12" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <label for="">E-Mail</label>
                    <input type="email" class="validate @error('email') invalid @enderror"name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="helper-text" data-error="Email atau Password Salah"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <label for="">Kata Sandi</label>
                    <input type="password" class="@error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <span class="helper-text" data-error="Email Atau Pasword Salah"></span>
                    @enderror
                </div>
                <div class="input field right">
                    <input type="submit" class="vawes-effect waves-light btn red accent-1" value="login">
                </div>
            </div>
        </form>
    </div>
@endsection
