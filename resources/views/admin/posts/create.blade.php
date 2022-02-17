@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Crea post</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title"
                                placeholder="Inserisci qui il titolo" name='title'>
                            @error('title')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea type="text" class="form-control @error ('content') is-invalid @enderror"
                                id="content" placeholder="Inserisci qui il contenuto" name='content'></textarea>
                            @error('content')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="published">
                            <label class="form-check-label" for="published">Pubblica</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection