{{-- Developed by Cristian Franco Bedoya --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="from-group">
                            <label> Title *</label>
                            <input type="text" name="title" class="form-control" required value="{{ old('title', $post->getTitle()) }}">
                        </div>
                        <div class="from-group">
                            <label> Image</label>
                            <input type="file" name="file">
                        </div>
                        <div class="from-group">
                            <label> Content *</label>
                            <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->getBody()) }}</textarea>
                        </div>
                        <div class="from-group">
                            <label>Embebed Content *</label>
                            <textarea name="ifram" class="form-control">{{ old('iframe', $post->getIframe()) }}</textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Update" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
