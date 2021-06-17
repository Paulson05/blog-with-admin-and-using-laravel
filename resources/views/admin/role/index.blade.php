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
                                <h4 class="card-title">Roles</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Creat  Role</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body ps-child">
                                            <form action="{{route('role.store')}}" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>name</strong>
                                                            <input type="text" name="name" class="form-control @error('name'){{"is-invalid"}}@enderror" placeholder="title" value = "{{Request::old('title') ?: ''}}">
                                                            @error('name')
                                                            <span class="form-text text-danger">{{$errors->first('name')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>
{{--                                                    <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            @foreach ($permissions as $permission)--}}

{{--                                                                <div class="checkbox">--}}
{{--                                                                    <label>--}}
{{--                                                                        {{ ucfirst($permission->name) }}--}}
{{--                                                                    </label>--}}
{{--                                                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }} {{($role->permissions == $permission->id) ? 'checked' : ''}}">--}}
{{--                                                                    <br>--}}
{{--                                                                </div>--}}

{{--                                                            @endforeach--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}



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
                                    @foreach($roles as $role)
                                        <tr>

                                            <td>
                                                {{$role->id}}
                                            </td>
                                            <td>
                                                {{$role->name}}
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
