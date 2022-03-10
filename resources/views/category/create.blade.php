@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Enter new category</h1>

                <form action="{{ route('category.store') }}" method="POST">

                    <input class="form-control" type="text" name="category_title" placeholder="Title"></br>                
                    <textarea  cols="30" rows="10" class="form-control" name="category_description">Category description</textarea></br>                    
                    @csrf
                    <button class="btn btn-success" type="submit">Add category</button>

                </form>
            </div>
            <div class="container my-6">
                <a href="{{ route('category.index') }}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection