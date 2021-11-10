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
                        <li class="breadcrumb-item active" aria-current="page">Set UserType</li>
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
        <form action="/users/set_usertype" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $users->id }}">
            <div class="row">
                <div class="form-group col">
                    <label for="usertypes">Select UserType:</label>
                    <select id="usertypes" class="js-example-basic-single" name="usertypes" required>
                        <option class="p-3" value="" selected>Select User Type</option>
                        <option class="p-3" value="1" disabled>admin</option>
                        @foreach ($usertypes as $usertype)
                            @if ($usertype->id > 1)
                                <option value="{{ $usertype->id }}">{{ $usertype->usertype }}</option>
                            @endif
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
