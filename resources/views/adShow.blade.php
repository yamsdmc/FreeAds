@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div style="display: flex">
            <input type="text" style="margin: 2%;" name="title" class="col-md-4 form-control" placeholder="title" />
            <select style="height: 2.4em; border-radius: 5px; margin: 2%;" class="col-md-4">
                <option selected disabled>prix</option>
                <option>0 - 100</option>
                <option >100 - 200</option>
                <option>200 - 300</option>
            </select>
            <button type="submit" style="margin: 2%;" class="btn btn-success col-md-2">Success</button>
            </div>
        </form>
        @if(isset($annonce))
            <div class="card" style="margin-top: 3%;">
            @foreach($annonce as $ad)
                <div class="col-md-12">
{{--                    <div class="card" style=" margin:2% 0">--}}
                        <div style="margin: 3%; text-align: center" class="card">
                            <div>
                                <h3 class="card-title"><u>{{ $ad->title }}</u></h3>
                                <p class="card-text">{{ $ad->description }}</p>
                                <p style="font-weight: bold; font-size: 23px;">{{ $ad->price }} €</p>
                            </div>
                            <div style="margin-left: 2%;">
                                @foreach($img as $image)
                                    <img src="../storage/app/public/upload/{{$image->name}}" style="width: 200px; height: 120px;margin: 5%;">
                                @endforeach
                            </div>
                            <a href="#" style="" class="btn btn-primary">Go somewhere</a>
                        </div>
{{--                    </div>--}}
                </div>
            @endforeach
            </div>
        @endif
    </div>
@endsection
