@extends('layouts.app')

@section('content')
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                All Posts
            </div>
            <div class="panel-body">
                <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Category</th>
                <th>Content</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td></td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->featured}}</td>
                        <td>
                        {{-- <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-pencil"></span> 
                            </a> --}}
                        </td>
                        <td>
                            {{-- <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-default btn-sm" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </a> --}}
                        </td>

                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
            </div>
        </div>
@endsection