@extends('layouts.app')

@section('content')
    <form enctype="multipart/form-data" action="" method="post">
        @csrf
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" />

        <label for="description">Description</label>
        <input type="text" name="description" id="description" />

        <label for="picture">Photo</label>
        <input type="file" name="picture[]" id="picture" multiple />

        <label for="price">Price</label>
        <input type="number" name="price" id="price"/>

        <input type="submit" value="Publish"/>
    </form>

    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
@endsection
