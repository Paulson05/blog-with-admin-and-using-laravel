@extends('blogpages.templete.defaults')

@section('content')
    <div id="wrapper">
    <section class="section lb m3rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active">The golden rules you need to know for a positive life</li>
                            </ol>

                            <span class="color-yellow"><a href="marketing-category.html" title="">Lifestyle</a></span>

                            <h3>{{$post->title}}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="marketing-single.html" title="">21 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Jessica</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img  src ="/upload/images/{{$post->image}}" class="img-fluid">

                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">
                              <p>{{$post->body}}</p>
                            </div><!-- end pp -->




                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                <small><a href="#" title="">lifestyle</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->



                        <hr class="invis1">

                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                                </div><!-- end col -->

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">Jessica</a></h4>
                                    <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Markedia!</p>

                                    <div class="topsocial">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                    </div><!-- end social -->

                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="marketing-single.html" title="">
                                                <img src="upload/market_blog_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="marketing-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                            <small><a href="blog-category-01.html" title="">Trends</a></small>
                                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="marketing-single.html" title="">
                                                <img src="upload/market_blog_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="marketing-single.html" title="">Nostalgia at work with family</a></h4>
                                            <small><a href="blog-category-01.html" title="">News</a></small>
                                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">3 Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <div class="media">
                                            <a class="media-left" href="#">
                                                <img src="upload/author.jpg" alt="" class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                                <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" action="{{route('comments.store',['comments'=>$post->id])}}" method="post">

                                        <input type="text" name="name" class="form-control" placeholder="your name" @error('name'){{'is-invalid'}}@enderror>
                                        @error('name')
                                        <span class="form-text text-danger">{{$errors->first('name')}}</span>
                                        @enderror
                                        <input type="email" name="email" class="form-control" placeholder="your email" @error('email'){{'is-invalid'}}@enderror>
                                        @error('email')
                                        <span class="form-text text-danger">{{$errors->first('email')}}</span>
                                        @enderror

                                        <textarea name="comments" id="" cols="82" rows="6"  placeholder="add your comment" class="form-control"></textarea>
                                        @error('comments')
                                        <span class="form-text text-danger">{{$errors->first('comments')}}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
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
                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/small_07.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/small_08.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/small_09.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
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
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    </div>
@endsection
