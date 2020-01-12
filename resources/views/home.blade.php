@extends('master')


@section('title', 'Digiplan')


@section('content')
<h3 class="text-center">Welcome to Digiplan!</h3>
<br>
<p>This is digiplan, a great platform where you can manage your hotel with a nice and easy interface. More than that you have a nice chat integrated where you can connect with different travel agencies to create special contracts with them. Down below you have the register place where you can enter your credencials. First you must register as a user then you have the option to create a hotel connected with your user account.</p>
<hr class="hr-white"> 
@if (Route::has('login'))
    <div class="text-center">
        @auth
            <a class="btn btn-primary" href="{{ url('/hotels') }}">Main Page</a>
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
        @endauth
    </div>
@endif
@endsection
