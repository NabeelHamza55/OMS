@extends('dashboard.sidebar') @section('title', 'Manage Roles') @section('system', 'active') @section('main_content')



<nav aria-label="breadcrumb" class="d-flex align-items-start">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/roles">Roles</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class=" d-flex justify-content-between">
                    <div>
                        <h3>Add New Role</h3>
                    </div>
                    <div class="">
                            <a class=" btn btn-primary"
                        href='{{ route('roles.index') }}'>
                        Role List</a>
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
                <form action={{ route('roles.store') }} method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="role_name">Role Name</label>
                                <input type="text" name="role_name" id="role_name" class="form-control"
                                    placeholder="Role Name..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block">Add Role</button>
                    <hr>
                </form>
                <!-- ./ form -->
            </div>
        </div>
    </div>
</div>

@endsection
