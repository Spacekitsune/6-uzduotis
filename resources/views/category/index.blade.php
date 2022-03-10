@extends('layouts.app')

@section('content')


<div class="container">

    <h1>Categories</h1>

    @if (session()->has('success_message'))
    <div class="alert alert-success">Category was deleted.</div>
    @endif

    @if (count($categories)== 0)
    <p>There are no articles</p>
    @endif

    <a class="btn btn-primary" href="{{route('category.create')}}">Create new category</a>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Articles</th>
            <th>Action</th>
        </tr>


        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>{{count($category->categoryPosts)}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('category.show', [$category])}}">Show</a>
                <a class="btn btn-success" href="{{route('category.edit', [$category])}}">Edit</a>

                <form action="{{route('category.destroy', [$category])}}" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>


</div>



@endsection