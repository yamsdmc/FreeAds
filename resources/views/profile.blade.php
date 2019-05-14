@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 container">
                    <div id="message" class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6 container" style="background-color: lightblue; border-radius: 10px;padding: 5%;">
                <div style="display: flex;">
                    <img src="storage/upload/profile.png" style="width: 40%; height: 40%; margin:auto;"/>
                    <form action="" method="post">
                        @csrf
                        @foreach($profile as $user)
                            <label for="username" style="font-weight: bold">Username : </label>
                            <input type="text" id="username" class="form-control" value="{{ $user->username }}" name="username" /><br>
                            <label for="email" style="font-weight: bold">Email : </label>
                            <input type="text" id="email" class="form-control" value="{{ $user->email }}" name="email" /><br>
                            <label for="name" style="font-weight: bold">Name : </label>
                            <input type="text" id="name" class="form-control" value="{{ $user->name }}" name="name" /><br>
                            <label for="lastname" style="font-weight: bold">Lastname : </label>
                            <input type="text" id="lastname" class="form-control" value="{{ $user->lastname }}" name="lastname" /><br>
                            <label for="password" style="font-weight: bold">Password : </label>
                            <input type="text" id="password" class="form-control" value="{{ $user->password }}" name="password" /><br>

                            <button type="submit" class="btn btn-info col-md-4" style="margin-left: 33%;">Edit</button>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
