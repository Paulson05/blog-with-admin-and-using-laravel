@extends('blogpages.templete.defaults')
@section('content')
<div id="wrapper">
    <header class="market-header header">
        <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="marketing3.blade.php"><img src="images/version/market-logo.png" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="marketing3.blade.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="marketing2.blade.php">Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="marketing2.blade.php">Make Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="marketing.blade.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="marketing-contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div><!-- end container-fluid -->
    </header><!-- end market-header -->



    <section class="section lb">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">





                          @foreach($posts as $post)

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
                                    <p>{{$post->body}}<span><a href="{{ route('singlepost',['post'=>$post->slug])  }}" class="text-danger" > Read More </a></span> </p>

                                    <small><a href="{{route('categorypost',['id'=>optional($post->category)->id])}}" title="">{{$post->category->name}}</a></small>
                                    <small><a href="marketing4.blade.php" title="">{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</a></small>
                                    <small><a href="#" title="">by Martin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 192</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                                <hr class="invis">

                            @endforeach
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget-no-style">
                            <div class="newsletter-widget text-center align-self-center">
                                <h3>Subscribe Today!</h3>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post">
                                    <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                </form>
                            </div><!-- end newsletter -->
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($resentpost as $post)
                                    <a href="marketing4.blade.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img  src ="/upload/images/{{$post->image}}" class="img-fluid float-left">

                                            <h5 class="mb-1">{{$post->title}}</h5>
                                            <small>{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</small>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div id="" class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="instagram-wrapper clearfix">
                                <a class="" href="#"><img src="upload/small_09.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_01.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_02.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_03.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_04.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_05.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_06.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_07.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_08.jpg" alt="" class="img-fluid"></a>
                            </div><!-- end Instagram wrapper -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    @foreach($posts as $post)
                                    <li><a href="{{route('categorypost',['id'=>optional($post->category)->id])}}">{{optional($post->category)->name}}</a></li>
                                        @endforeach
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                @foreach($resentpost as $post)

                                <a href="marketing4.blade.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">

                                        <img  src ="/upload/images/{{$post->image}}" class="img-fluid float-left">


                                        <h5 class="mb-1">{{$post->title}}</h5>
                                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </div>

                                </a>
                                @endforeach
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">


                                     @foreach($popularpost as $post)
                                <a href="marketing4.blade.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img  src ="/upload/images/{{$post->image}}" class="img-fluid float-left">

                                        <h5 class="mb-1">{{$post->title}}</h5>
                                        <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                @foreach( $alltags  as $post)
                                    @foreach($post->posts as $value)
                                <li><a href="#">{{$value->category->name}} <span>{{$value->category->posts->count()}}</span></a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <br>
                    <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                </div>
            </div>
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

@endsection
