@extends('layouts.origi')
@section('title','Single Post')
@section('content')

@section('menu')
    @parent
@endsection

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <img src="img/bg-img/b5.jpg" alt="">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-date">
                                    <a href="#">12 <span>march</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Lifestyle</a>
                            <h4><a href="#" class="post-headline mb-0">Party people in the house</a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#">james smith</a></p>
                                <p>3 comments</p>
                            </div>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel nisi dapibus pretium et et leo.</p>

                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim. Ut varius eros at fringilla aliquet. Sed sed sodales quam. Nam fermentum sed turpis sollicitudin lobortis.</p>

                            <p>Proin a nibh dignissim, volutpat mauris vitae, pellentesque nisi. In euismod non ligula at gravida. Nunc blandit eget enim vel mattis. Sed semper, purus ac suscipit scelerisque, eros dui fermentum tortor, vitae facilisis lacus nulla sit amet diam. Nullam eget sagittis mi. Suspendisse vitae volutpat lorem. Cras porta velit id sagittis ultrices. Maecenas efficitur tellus ac aliquam molestie. Morbi vel ipsum gravida, ultricies nunc sed, posuere purus. Donec ipsum lectus, congue ut fermentum vitae, molestie hendrerit erat. Sed lacinia accumsan egestas. Cras ac ipsum a ante placerat pellentesque.</p>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-thumbnail">
                            <img src="img/bg-img/b6.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Author</span>
                            <h4><a href="#" class="author-name">James Morrison</a></h4>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <h5 class="title">Comments</h5>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/b7.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">March 12</a>
                                        <p><a href="#" class="post-author">William James</a></p>
                                        <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                        <a href="#" class="comment-reply">Reply</a>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/b7.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">March 12</a>
                                                <p><a href="#" class="post-author">William James</a></p>
                                                <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                                <a href="#" class="comment-reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/b7.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">March 12</a>
                                        <p><a href="#" class="post-author">William James</a></p>
                                        <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                        <a href="#" class="comment-reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mt-70">
                        <h5>Leave a reply</h5>
                        <!-- Reply Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="subject" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Reply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                            <div class="widget-content">
                                <form action="#" class="newsletterForm">
                                    <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
                                    <button type="submit" class="btn original-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Advertisement</h5>
                            <a href="#"><img src="img/bg-img/add.gif" alt=""></a>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Latest Posts</h5>

                            <div class="widget-content">

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp1.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp2.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp3.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp4.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tags</h5>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">music</a></li>
                                    <li><a href="#">party</a></li>
                                    <li><a href="#">video</a></li>
                                    <li><a href="#">photography</a></li>
                                    <li><a href="#">adventure</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Follow us @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/1.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/2.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/3.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/4.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/5.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/6.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="img/instagram-img/7.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">travel</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

@endsection