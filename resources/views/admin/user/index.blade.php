@extends('admin.default')

@section('title', '| user')
@section('content')
    {{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

    <div class="">

        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">User Administration</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Creat header Role</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body ps-child">
                                            <form action="" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Name</strong>
                                                            <input type="text" name="name" class="form-control @error('name'){{"is-invalid"}}@enderror" placeholder="name" value = "{{Request::old('name') ?: ''}}">
                                                            @error('name')
                                                            <span class="form-text text-danger">{{$errors->first('name')}}</span>
                                                            @enderror

                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Email</strong>
                                                                <input type="text" name="email" class="form-control @error('email'){{"is-invalid"}}@enderror" placeholder="email" value = "{{Request::old('email') ?: ''}}">
                                                                @error('email')
                                                                <span class="form-text text-danger">{{$errors->first('email')}}</span>
                                                                @enderror

                                                            </div>

                                                        </div>

                                                        <div  class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="checkbox">
                                                                @foreach ($roles as $role)
                                                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}" >
                                                                    <label>
                                                                        {{ ucfirst($role->name) }}
                                                                    </label>
                                                                    <br>

                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>password</strong>
                                                                <input type="password" name="password" class="form-control @error('password'){{"is-invalid"}}@enderror" placeholder="password" value = "{{Request::old('password') ?: ''}}">
                                                                @error('password')
                                                                <span class="form-text text-danger">{{$errors->first('password')}}</span>
                                                                @enderror

                                                            </div>

                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Comfirm Password</label>
                                                                <input type="password" name="confirmed_password" class="form-control @error('confirmed_password'){{"is-invalid"}}@enderror" value = "{{Request::old('cpnfirmed_password') ?: ''}}">
                                                                @error('confirmed_password')
                                                                <span class="form-text text-danger">{{$errors->first('confirmed_password')}}</span>
                                                                @enderror

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                                        <button type="submit" class="btn btn-primary">Post</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                    <div >

                        <div class="">
                            <div class="table-responsive">

                                <table id="datatable" class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        name
                                    </th>
                                    <th >
                                        email
                                    </th>
                                    <th>
                                        date created
                                    </th>
                                    <th>
                                        User role
                                    </th>
                                    <th >
                                    action.

                                    </th>

                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                            <td>
                                                <a href="" title="show">
                                                    <i class="btn btn-primary btn-sm fa fa-eye" ></i>
                                                </a>

                                                <a href=""  >
                                                    <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                                </a>

                                                <form style="display: inline-block" method="post" action="" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger  p-0"><i class="btn btn-danger btn-sm fa fa-trash" ></i></button>
                                                </form>

                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
