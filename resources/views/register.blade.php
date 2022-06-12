@extends('layouts.main')
@section('content')
<h3>Registration Form </h3>
<fieldset>
    <form method="post" action="">
        {{@csrf_field()}}
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        Email: <input type="text" name="email" placeholder="Email"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password"placeholder="Give a Password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Confirm Password: <input type="password" name="conf_password"><br>
        @error('conf_password')
            {{$message}}
        @enderror
    </fieldset><br>
        <input type="submit" name="register" value="Register">
    </form>
@endsection