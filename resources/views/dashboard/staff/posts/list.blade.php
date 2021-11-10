@extends('dashboard.sidebar') @section('title', 'List Posts') @section('posts', 'active') @section('main_content')
<div class="page-header d-md-flex justify-content-between">
    <div>
        <h3>Posts</h3>
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" l>Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="route('posts.index')">Posts</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
    </div>

    <div class="mt-2 mt-md-0">
        <div class="dropdown">
            <a href="#" class="btn btn-success dropdown-toggle" title="Filter" data-toggle="dropdown">Filters</a>
            <div class="dropdown-menu dropdown-menu-big p-4 dropdown-menu-right">
                <form>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control">
                            <option value="">Select</option>
                            <option value="">User</option>
                            <option value="">Staff</option>
                            <option value="">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control">
                            <option value="">Select</option>
                            <option value="">Active</option>
                            <option value="">Blocked</option>
                            <option value="">Admin</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Get Results</button>
                    <button class="btn btn-link ml-2">Save Filter</button>
                </form>
            </div>
        </div>
        <div class="dropdown ml-2">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Actions</a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Edit</a>
                <a href="#" class="dropdown-item">Change Status</a>
                <a href="#" class="dropdown-item text-danger">Delete</a>
            </div>
        </div>
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
<div class="container">
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table id="user-list" class="table table-lg">
                    <thead>
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                    <label class="custom-control-label" for="user-list-select-all"></label>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $id = 1;
                        @endphp
                        @foreach ($posts as $post)
                            <tr>
                                <td></td>
                                <td>{{ $id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->first_name }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img
                                                src="https://img.icons8.com/ios-glyphs/30/000000/dots-loading--v4.png" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">


                                            <a href={{ route('posts.store') }} class="dropdown-item ">Edit</a>
                                            <a href={{ route('posts.destroy', $post->id) }}
                                                class="dropdown-item ">Delete</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @php
                                $id++;
                            @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
