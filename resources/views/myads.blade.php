@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-primary col-md-4 container" role="alert">
            <h3 style="text-align: center">Bonjour {{ $user->name }} {{ $user->lastname }}</h3>
        </div>

        @foreach($myAds as $ad)
            <div class="col-md-10" style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                <div style="text-align: center">
                    <h2>{{ $ad->title }}</h2>
                    <p>{{ $ad->description }}</p>
                    <h4>{{ $ad->price }} €</h4>
                </div>
                <div style="margin-left: 13%;">
                    @foreach($img as $image)
                        <img src="../storage/app/public/upload/{{$image->name}}" style="width: 200px; height: 120px">
                    @endforeach
                </div>
                <p style="text-align: right; margin-top: 2%"><a href="profile/{{ $ad->id }}/edit"><button type="submit" class="btn btn-success" style="margin-right: 1%;">Edit</button> </a><a href="profile/{{ $ad->id }}/delete"><button type="submit" class="btn btn-danger col-md-1">Delete</button></a></p>
                <span style="float: right">{{ $ad->created_at }}</span>
            </div>
        @endforeach
    </div>
    <div style="padding-left: 25%;">
        {{ $myAds->links() }}
    </div>

@endsection
