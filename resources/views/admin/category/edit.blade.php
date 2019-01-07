@extends('layouts.app')

@section('content')
        @include('admin.include.error')

        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Edit Category
            </div>
            <div class="panel-body">
            <form action="{{route('category.update',['id'=>$category->id])}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="name">Name</label>
                <input class="form-control" type="text" name="name" value="{{$category->name}}">
                </div>
                <div class="form-group text-center">
                        <button class="btn btn-warning">Edit</button>
                </div>
            </form>
            </div>
        </div>
@endsection