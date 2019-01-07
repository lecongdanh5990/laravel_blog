@extends('layouts.app')

@section('content')
    @include('admin.include.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create new Category
        </div>
        <div class="panel-body">
        <form action="{{route('category.store')}}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-info" type="submit">
                        Create
                    </button>
                </div>
                
            </form>
        </div>
    </div>
@endsection