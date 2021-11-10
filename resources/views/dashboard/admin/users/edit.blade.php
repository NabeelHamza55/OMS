@extends('dashboard.sidebar')
@section('title', 'Manage Users')
@section('users', 'active')
@section('main_content')

    <div class="container">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h3>Edit User</h3>
                <nav aria-label="breadcrumb" class="d-flex align-items-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/users">Users</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
            </div>
            <div><a class="btn btn-primary" type="button" href="/users">User List</a></div>
        </div>
        <hr>
        <div class="text-center">
            @if ($errors->any())

                <ul class="list-unstyled alert alert-primary">
                    @foreach ($errors->all() as $error)
                        <li class="text-danger"><b> {{ $error }} </b></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- form -->
        <form action="/users/edit_user" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $users->id }}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="first_name" value="{{ old('first_name', $users->first_name) }}"
                            class="form-control" placeholder="Firstname" required autofocus>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control"
                            value="{{ old('last_name', $users->last_name) }}" placeholder="Lastname" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" value="{{ old('email', $users->email) }}" class="form-control"
                    placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                    placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                    class="form-control" placeholder="Confirm Password" required>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label for="usertypes">Select UserType:</label>
                    <select id="usertypes" class="js-example-basic-single" name="usertypes" required>
                        <option class="p-3" value="" selected>Select User Type</option>
                        @php
                            $disable = 'disabled';
                        @endphp
                        @foreach ($usertypes as $usertype)

                            <option value="{{ $usertype->id }}" {{ $disable }}>{{ $usertype->usertype }}</option>
                            @php
                                if ($usertypes->id = 1) {
                                    $disable = '';
                                }
                            @endphp
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="roles">Select Roles:</label>
                    <select id="roles" class="js-example-basic-single" name="roles" required>
                        <option class="p-3" value="" selected>User Role</option>
                        <option class="p-3" value="1" disabled>owner</option>
                        @php
                            $disable = 'disabled';
                        @endphp
                        @foreach ($roles as $role)
                            @if ($role->id > 1)
                                <option value="{{ $role->id }}" {{ $disable }}>{{ $role->role }}</option>
                            @endif
                            @php
                                if ($role->id = 1) {
                                    $disable = '';
                                }
                            @endphp
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-block">Update User</button>
            <hr>
        </form>
        <!-- ./ form -->

    </div>


@endsection
