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
                                <h4 class="card-title">POSt</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Creat header Post</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body ps-child">
                                            <form action="" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Title</strong>
                                                            <input type="text" name="title" class="form-control" placeholder="title" value = "{{Request::old('title') ?: ''}}">
                                                           @error('title')
                                                            <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                                            @enderror

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>slug</strong>
                                                            <input type="text" name="slug" class="form-control" placeholder="slug" value = "{{Request::old('slug') ?: ''}}">
                                                            @error('slug')
                                                            <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                                            @enderror
                                                        </div>

                                                    </div>


                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>Category:</strong>
                                                            <select class="form-control" name="category_id" value = "{{Request::old('category_id') ?: ''}}">
                                                                @error('category_id')
                                                                <span class="form-text text-danger">{{$errors->first('category_id')}}</span>
                                                                @enderror
                                                                <option>---select category---</option>
{{--                                                                @foreach($categories as $category)--}}
{{--                                                                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                                                @endforeach--}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">


                                                        <div class="form-group">
                                                            <label><strong>Tags:</strong></label><br>
{{--                                                            <select name="name[]" id="cars" multiple class="form-control custom-select">--}}
{{--                                                                @foreach($tags as $tag)--}}


{{--                                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}

                                                        </div>

                                                    </div>
                                                     <div class="col-md-6">
                                                        <h4 class="card-title">Regular Image</h4>
                                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail">
                                                                <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                                                {{Request::old('image') ?: ''}}
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                            <div>
                                  <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select image</span>
                                      <span class="fileinput-exists">Change</span>
                                      <input type="file" name="image" value = "{{Request::old('image') ?: ''}}" />
                                         @error('image')
                                      <span class="form-text text-danger">{{$errors->first('image')}}</span>
                                      @enderror

                                  </span>
                                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>body</strong>
                                                            <textarea  id="mytextarea" cols="10" rows="5" placeholder="body" class="form-control" name="body" value = "{{Request::old('body') ?: ''}}"></textarea>
                                                            @error('body')
                                                            <span class="form-text text-danger">{{$errors->first('body')}}</span>
                                                            @enderror
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
                                        ID
                                    </th>
                                    <th >
                                        name
                                    </th>
                                    <th>
                                        ID
                                    </th>
                                    <th >
                                        name
                                    </th>
                                    <th >
                                        name
                                    </th>
                                    <th >
                                        name
                                    </th>


                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>
                                            name
                                        </td>
                                        <td>
                                            name
                                        </td>
                                        <td>
                                            name
                                        </td>
                                        <td>
                                            name
                                        </td>
                                        <td>
                                            name
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

                                    {{--                            @endforeach--}}
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
