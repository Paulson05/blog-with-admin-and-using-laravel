@extends('admin.default')

@section('title', '| post')
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
                                <h1><i class='fa fa-key'></i> Add Permission</h1>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Permission</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body ps-child">
                                            <form action="" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>name</strong>
                                                            <input type="text" name="name" class="form-control @error('name'){{"is-invalid"}}@enderror" placeholder="name" value = "{{Request::old('name') ?: ''}}">
                                                            @error('title')
                                                            <span class="form-text text-danger">{{$errors->first('name')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            @if(!$roles->isEmpty()) //If no roles exist yet
                                                            <h4>Assign Permission to Roles</h4>
                                                            @foreach ($roles as $role)

                                                            <div class="checkbox">
                                                                    <label>
                                                                        {{ ucfirst($role->name) }}
                                                                    </label>
                                                                    <input type="checkbox" name="role[]" value="{{ $role->id }}">
                                                                    <br>
                                                                </div>

                                                            @endforeach
                                                                @endif
                                                        </div>
                                                    </div>





                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                                        <button type="submit" class="btn btn-primary">save</button>
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
                                        id
                                    </th>
                                    <th >
                                        name
                                    </th>

                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>

                                            <td>
                                                {{$permission->id}}
                                            </td>
                                            <td>
                                                {{$permission->name}}
                                            </td>


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
