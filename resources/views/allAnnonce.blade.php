@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($annonceView as $all)
            <div class="col-md-10">
                <div class="card" style=" margin:2% 0">
                    <div class="card-body" style="text-align: center">
                        <h3 class="card-title" ><u>{{ $all->title }}</u></h3>
                        <p class="card-text">{{ $all->description }}</p>
                        <p style="font-size: 23px; font-weight: bold">{{ $all->price }} €</p>
                        <div style="margin-left: 2%;">
                            @foreach($img as $image)
                                <img src="../storage/app/public/upload/{{$image->name}}" style="width: 200px; height: 120px">
                            @endforeach
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">Go somewhere</a>

                </div>
            </div>
        @endforeach
        <div style="margin-left: 20%;">
            <p>{{ $annonceView->links() }}</p>
        </div>
    </div>

@endsection
