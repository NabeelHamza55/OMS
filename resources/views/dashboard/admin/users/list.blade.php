@extends('dashboard.sidebar') @section('title', 'Manage Users') @section('users', 'active') @section('main_content')


<div class="page-header d-md-flex justify-content-between">
    <div>
        <h3>Users</h3>
        <nav aria-label="breadcrumb" class="d-flex align-items-start">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" l>Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/users">Users</a>
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="user-list" class="table table-reponsive table-lg">
                        <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                        <label class="custom-control-label" for="user-list-select-all"></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Picture</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Lvl</th>
                                <th>Email</th>
                                <th>Usertype</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1;
                                $disable = 'disabled';
                                $status_enable = '';
                                $status_disable = '';
                            @endphp
                            sweit
                            @foreach ($users as $user)

                                @php
                                    if ($user->status == 1) {
                                        $status_enable = 'selected';
                                    } else {
                                        $status_disable = 'selected';
                                    }
                                @endphp

                                <tr>
                                    <td></td>
                                    <td>{{ $id }}</td>
                                    <td>
                                        <a href="">
                                            <figure class="avatar avatar-sm mr-2">
                                                <img src="{{ asset('custom/admin/assets/media/image/user/man_avatar3.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            {{ $user->first_name }}
                                            &nbsp; <span class="badge badge-primary">{{ $user->lvl }}</span>
                                        </a>
                                    </td>
                                    <td>{{ $user->last_name }}</td>
                                    <td style="font-size: 5vw"> <i class="fas {{ $user->tier }} text-dark"></i></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->usertype }}</td>
                                    <td>
                                        <form action="/users/changestatus" method="get">
                                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                                            <select name="userStatus" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example" onchange="this.form.submit()">
                                                <option value="">Select Status</option>
                                                <option class="userenable" {{ $disable }} value="1"
                                                    {{ $status_enable }}>
                                                    Active
                                                </option>
                                                <option class="userdisable" {{ $disable }} value="0"
                                                    {{ $status_disable }}>Deactive
                                                </option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-floating"
                                                aria-haspopup="true" aria-expanded="false">
                                                <img
                                                    src="https://img.icons8.com/ios-glyphs/30/000000/dots-loading--v4.png" />
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a href={{ '/view_user/' . $user->id }} class="dropdown-item">View
                                                    Profile</a>
                                                <a href={{ '/users/edit/' . $user->id }}
                                                    class="dropdown-item {{ $disable }}">Edit</a>

                                                <a href={{ '/users/usertype/' . $user->id }}
                                                    class="dropdown-item {{ $disable }}">Set_Usertype</a>
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="dropdown-item c-btn text-danger {{ $disable }}"
                                                    id="del_btn" data-value="{{ $user->id }}" data-toggle="modal"
                                                    data-target="#conf_del">
                                                    Delete
                                                </button>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="conf_del" tabindex="-1" role="dialog"
                                                aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="lead">Are You Sure!</p>
                                                        </div>
                                                        <div class="modal-footer py-1">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a class="redirect btn btn-primary" href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php

                                    if ($user->usertype = 'admin') {
                                        $disable = '';
                                    }

                                    $id++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
