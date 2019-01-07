@extends('layouts.app')

@section('content')
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                All Categories
            </div>
            <div class="panel-body">
                <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-pencil"></span> 
                            </a>
                        </td>
                        <td>
                            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-default btn-sm" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>

                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
            </div>
        </div>
@endsection