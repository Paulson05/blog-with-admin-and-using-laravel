@extends('blogpages.templete.defaults')
@section('content')
    @foreach( $alltags  as $post)
        @foreach($post->posts as $value)
            <div id="wrapper">
                <section class="section lb">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="page-wrapper">
                                <div class="blog-custom-build">
        <div class="blog-box wow fadeIn">
            <div class="post-media">
                <a href="marketing4.blade.php" title="">
                    <img  src ="/upload/images/{{$value->image}}" class="img-fluid">

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
                <h4><a href="marketing4.blade.php" title="">{{$value->title}}</a></h4>
                <p>{{$value->body}}</p>

                <small ><a href="" title="">{{$value->category->name}}</a><span>{{$value->category->posts->count()}}</span></small>
                <small><a href="marketing4.blade.php" title="">{{date ('M j, Y h:ia', strtotime($value->updated_at))}}</a></small>
                <small><a href="#" title="">by Martin</a></small>
                <small><a href="#" title=""><i class="fa fa-eye"></i> 192</a></small>
            </div><!-- end meta -->
        </div><!-- end blog-box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </section>
            </div>
        @endforeach
    @endforeach
@endsection
