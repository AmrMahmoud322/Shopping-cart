@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sing In</h1>
            @if(count($errors) > 0 )
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p> {{$error}} </p>    
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="POST">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign In </button>
                {{ csrf_field() }}
            </form>
            <p>Don't Have An Account? <a href="{{ route('user.signup') }}">Sign UP</a></p>
        </div>
    </div>    
@endsection