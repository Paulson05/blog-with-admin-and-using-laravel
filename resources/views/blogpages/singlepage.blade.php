@extends('blogpages.templete.defaults')
@section('content')
    <div class="blog-box wow fadeIn">
        <div class="post-media">
            <a href="marketing4.blade.php" title="">
                <img  src ="/upload/images/{{$post->image}}" class="img-fluid">

                <div class="hovereffect">
                    <span></span>
                </div>
                <!-- end hover -->
            </a>
        </div>
        <!-- end media -->
        <div class="blog-meta big-meta text-center">
            <div class="post-sharing">
                <ul class="list-inline">
                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end post-sharing -->
            <h4><a href="marketing4.blade.php" title="">{{$post->title}}</a></h4>
            <p>{{$post->body}} </p>

            <small><a href="marketing4.blade.php" title="">{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</a></small>
            <small><a href="#" title="">by Martin</a></small>
            <small><a href="#" title=""><i class="fa fa-eye"></i> 192</a></small>
        </div>
    </div>
    <div class="row">
        <form action="{{route('comments.store',['comments'=>$post->id])}}" method="post">
            @csrf

            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="text" name="name" class="form-control" placeholder="name" @error('name'){{'is-invalid'}}@enderror>
                    @error('name')
                    <span class="form-text text-danger">{{$errors->first('name')}}</span>
                    @enderror
                </div>

                <div class="col-md-4 p-2">
                    <input type="email" name="email" class="form-control" placeholder="your email" @error('email'){{'is-invalid'}}@enderror>
                    @error('email')
                    <span class="form-text text-danger">{{$errors->first('email')}}</span>
                    @enderror
                </div>


            </div>

            <div class="row justify-content-center ml-5">
                <div class="col-md-8">
                    <textarea name="comments" id="" cols="82" rows="6"  placeholder="add your comment" class="form-control"></textarea>
                    @error('comments')
                    <span class="form-text text-danger">{{$errors->first('comments')}}</span>
                    @enderror
                </div>
                <div class="col-md-8 m-2">
                    <button type="submit" class="btn btn-danger" >
                        comment
                    </button>
                </div>

            </div>

        </form>
    </div>
@endsection
