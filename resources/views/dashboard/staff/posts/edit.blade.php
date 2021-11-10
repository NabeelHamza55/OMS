@extends('dashboard.sidebar') @section('title', 'Edit Post') @section('main_content')






<nav aria-label="breadcrumb" class="d-flex align-items-start">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/posts">Post</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class=" d-flex justify-content-between">
                    <div>
                        <h3>Edit post</h3>
                    </div>
                    <div class="">
                        <a class=" btn btn-primary" href='{{ route('posts.index') }}'>
                            post List</a>
                    </div>
                </div>
                <div class="text-center">
                    @if ($errors->any())
                        <ul class="list-unstyled alert alert-primary">
                            @foreach ($errors->all() as $error)
                                <li class="text-danger"><b> {{ $error }} </b></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <!-- form -->
                <form action={{ route('posts.update', $posts->id) }} method="post">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col">
                            <input type="hidden" value="{{ $posts->id }}">
                            <div class="form-group">
                                <label for="post_name">Post Title</label>
                                <input type="text" name="post_name" id="post_name" class="form-control"
                                    placeholder="Post Name..." value="{{ $posts->title }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="post_desc">Post Description</label>
                                <input type="text" name="post_desc" value="{{ $posts->description }}" id="post_desc"
                                    class="form-control" placeholder="...." required autofocus>
                            </div>
                            <div class="form-group">
                                {{-- <label for="post_auth">Author Name</label> --}}
                                <input type="hidden" name="post_auth" id="post_auth" class="form-control"
                                    placeholder="Author Name..." value="{{ session('login')->id }}" required
                                    autofocus>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block">Add Post</button>
                    <hr>
                </form>
                <!-- ./ form -->
            </div>
        </div>
    </div>
</div>



@endsection
