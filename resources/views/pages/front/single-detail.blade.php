@extends('main.app')


@section('content')
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Hello Sir</h1>
            </div>
            <div class="col-md-4">
                @include('main.right-side1')
                @include('main.right-side2')
            </div>
        </div>
    </div>
@endsection