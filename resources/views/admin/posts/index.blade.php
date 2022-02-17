@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Post List</div>

                <div class="card-body">
                <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success my-3">Aggiungi post</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Azioni</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    @if ($post->category)
                                    {{$post->category->name}}                                        
                                    @else
                                    None
                                    @endif                          
                                </td>
                                <td>
                                    <a href="{{route('posts.show', $post->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                                </td>
                                <td>
                                    <a href="{{route('posts.edit', $post->id)}}"><button type="button" class="btn btn-secondary">Modifica</button></a>
                                </td>
                                <td>
                                    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection