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
                        <h3>Roles List</h3>
                    </div>
                    <div class="">
                        <a class=" btn btn-primary" href={{ route('roles.create') }}>Add Role</a>
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
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Name</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                            $disable = 'disabled';

                        @endphp

                        @foreach ($roles as $role)
                            @php
                                if ($role->id != 1) {
                                    $disable = '';
                                } else {
                                    $disable = 'disabled';
                                }
                            @endphp
                            <tr>
                                <td>{{ $sr }}</td>
                                <td class="text-center">{{ $role->role }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img
                                                src="https://img.icons8.com/ios-glyphs/30/000000/dots-loading--v4.png" />
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">

                                            <a href={{ route('roles.edit', $role->id) }}
                                                class="dropdown-item {{ $disable }}">Edit</a>

                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="dropdown-item  del_role text-danger {{ $disable }}"
                                                id="del_role" data-value="{{ $role->id }}" data-toggle="modal"
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
                                                        <h5 class="modal-title">Delete Role</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="lead">Are You Sure?</p>
                                                        <input class="pass_val" type="hidden">
                                                    </div>
                                                    <div class="modal-footer py-1">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <form class="redirect2" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="btn btn-primary">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php

                            @endphp
                            @php
                                $sr++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
