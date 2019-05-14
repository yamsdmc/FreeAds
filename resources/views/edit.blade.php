@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card container col-md-7" style="padding: 3%;">
            <div class="col-md-12 container">
                <form action="{{ route('update', $adOnly->id) }}" method="post">
                    @csrf
                    <label for="title" style="font-weight: bold; margin-top: 1em;">Titre</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $adOnly->title }}" />
                    <label for="description" style="font-weight: bold; margin-top: 1em;">Description</label>
                    <textarea type="text" id="description" name="description" style="height: 20em" class="form-control">{{ $adOnly->description }}</textarea>
                    <label for="price" style="font-weight: bold; margin-top: 1em;">Price</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ $adOnly->price }}" />
                    <button style="margin-left: 33%;margin-top: 2em;" type="submit" class="btn btn-outline-success col-md-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
