<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>News & Events | ACEMC - Baypointe</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logos/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Script of the Header -->
    <script src="assets/js/header.js" defer></script>

    <style>
        .blog {
            padding: 40px 0 20px 0;
        }

        .blog .entry {
            padding: 30px;
            margin-bottom: 60px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .entry .entry-img {
            max-height: 440px;
            margin: -30px -30px 20px -30px;
            overflow: hidden;
            padding: 0 30px 0 30px;
        }

        .blog .entry .entry-title {
            font-size: 28px;
            font-weight: bold;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .blog .entry .entry-title a {
            color: #2b2320;
            transition: 0.3s;
        }

        .blog .entry .entry-title a:hover {
            color: #3fbbc0;
        }

        .blog .entry .entry-meta {
            margin-bottom: 15px;
            color: #9c847b;
        }

        .blog .entry .entry-meta ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .blog .entry .entry-meta ul li+li {
            padding-left: 20px;
        }

        .blog .entry .entry-meta i {
            font-size: 16px;
            margin-right: 8px;
            line-height: 0;
        }

        .blog .entry .entry-meta a {
            color: #847872;
            font-size: 14px;
            display: inline-block;
            line-height: 1;
        }

        .blog .entry .entry-content p {
            line-height: 24px;
        }

        .blog .entry .entry-content .read-more {
            -moz-text-align-last: right;
            text-align-last: right;
        }

        .blog .entry .entry-content .read-more a {
            display: inline-block;
            background: #3fbbc0;
            color: #fff;
            padding: 6px 20px;
            transition: 0.3s;
            font-size: 14px;
            border-radius: 4px;
        }

        .blog .entry .entry-content .read-more a:hover {
            background: #fd490f;
        }

        .blog .entry .entry-content h3 {
            font-size: 22px;
            margin-top: 30px;
            font-weight: bold;
        }

        .blog .entry .entry-content blockquote {
            overflow: hidden;
            background-color: #fafafa;
            padding: 60px;
            position: relative;
            text-align: center;
            margin: 20px 0;
        }

        .blog .entry .entry-content blockquote p {
            color: #4d4643;
            line-height: 1.6;
            margin-bottom: 0;
            font-style: italic;
            font-weight: 500;
            font-size: 22px;
        }

        .blog .entry .entry-content blockquote::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: #2b2320;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .blog .entry .entry-footer {
            padding-top: 10px;
            border-top: 1px solid #e6e6e6;
        }

        .blog .entry .entry-footer i {
            color: #836a61;
            display: inline;
        }

        .blog .entry .entry-footer a {
            color: #3a2f2b;
            transition: 0.3s;
        }

        .blog .entry .entry-footer a:hover {
            color: #3fbbc0;
        }

        .blog .entry .entry-footer .cats {
            list-style: none;
            display: inline;
            padding: 0 20px 0 0;
            font-size: 14px;
        }

        .blog .entry .entry-footer .cats li {
            display: inline-block;
        }

        .blog .entry .entry-footer .tags {
            list-style: none;
            display: inline;
            padding: 0;
            font-size: 14px;
        }

        .blog .entry .entry-footer .tags li {
            display: inline-block;
        }

        .blog .entry .entry-footer .tags li+li::before {
            padding-right: 6px;
            color: #6c757d;
            content: ",";
        }

        .blog .entry .entry-footer .share {
            font-size: 16px;
        }

        .blog .entry .entry-footer .share i {
            padding-left: 5px;
        }

        .blog .entry-single {
            margin-bottom: 30px;
        }

        .blog .blog-author {
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .blog-author img {
            width: 120px;
            margin-right: 20px;
        }

        .blog .blog-author h4 {
            font-weight: 600;
            font-size: 22px;
            margin-bottom: 0px;
            padding: 0;
            color: #2b2320;
        }

        .blog .blog-author .social-links {
            margin: 0 10px 10px 0;
        }

        .blog .blog-author .social-links a {
            color: rgba(43, 35, 32, 0.5);
            margin-right: 5px;
        }

        .blog .blog-author p {
            font-style: italic;
            color: #bfb9b6;
        }

        .blog .blog-comments {
            margin-bottom: 30px;
        }

        .blog .blog-comments .comments-count {
            font-weight: bold;
        }

        .blog .blog-comments .comment {
            margin-top: 30px;
            position: relative;
        }

        .blog .blog-comments .comment .comment-img {
            margin-right: 14px;
        }

        .blog .blog-comments .comment .comment-img img {
            width: 60px;
        }

        .blog .blog-comments .comment h5 {
            font-size: 16px;
            margin-bottom: 2px;
        }

        .blog .blog-comments .comment h5 a {
            font-weight: bold;
            color: #4d4643;
            transition: 0.3s;
        }

        .blog .blog-comments .comment h5 a:hover {
            color: #3fbbc0;
        }

        .blog .blog-comments .comment h5 .reply {
            padding-left: 10px;
            color: #2b2320;
        }

        .blog .blog-comments .comment h5 .reply i {
            font-size: 20px;
        }

        .blog .blog-comments .comment time {
            display: block;
            font-size: 14px;
            color: #483b36;
            margin-bottom: 5px;
        }

        .blog .blog-comments .comment.comment-reply {
            padding-left: 40px;
        }

        .blog .blog-comments .reply-form {
            margin-top: 30px;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .blog-comments .reply-form h4 {
            font-weight: bold;
            font-size: 22px;
        }

        .blog .blog-comments .reply-form p {
            font-size: 14px;
        }

        .blog .blog-comments .reply-form input {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .blog-comments .reply-form input:focus {
            box-shadow: none;
            border-color: #fe825a;
        }

        .blog .blog-comments .reply-form textarea {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .blog-comments .reply-form textarea:focus {
            box-shadow: none;
            border-color: #fe825a;
        }

        .blog .blog-comments .reply-form .form-group {
            margin-bottom: 25px;
        }

        .blog .blog-comments .reply-form .btn-primary {
            border-radius: 4px;
            padding: 10px 20px;
            border: 0;
            background-color: #2b2320;
        }

        .blog .blog-comments .reply-form .btn-primary:hover {
            background-color: #3a2f2b;
        }

        .blog .blog-pagination {
            color: #65534c;
        }

        .blog .blog-pagination ul {
            display: flex;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .blog .blog-pagination li {
            margin: 0 5px;
            transition: 0.3s;
        }

        .blog .blog-pagination li a {
            color: #2b2320;
            padding: 7px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .blog .blog-pagination li.active,
        .blog .blog-pagination li:hover {
            background: #3fbbc0;
        }

        .blog .blog-pagination li.active a,
        .blog .blog-pagination li:hover a {
            color: #fff;
        }


        .blog .sidebar {
            padding: 30px;
            margin: 0 0 60px 20px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .sidebar .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 15px 0;
            color: #2b2320;
            position: relative;
        }

        .blog .sidebar .sidebar-item {
            margin-bottom: 30px;
        }

        /* Search Form Styles */
        .sidebar-item.search-form {
            margin-bottom: 20px;
        }

        .search-container {
            position: relative;
        }

        .search-container input[type="text"] {
            width: 100%;
            padding: 10px 40px 10px 10px;
            /* Adjust the padding to make space for the icon */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            /* Ensures padding and border are included in the width */
        }

        .search-container button {
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            height: 100%;
            background-color: #3fbbc0;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-container button i {
            margin-top: 50%;
            /* Align icon vertically in the middle of the button */
            transform: translateY(-50%);
        }

        .blog .sidebar .categories ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .categories ul li+li {
            padding-top: 10px;
        }

        .blog .sidebar .categories ul a {
            color: #2b2320;
            transition: 0.3s;
        }

        .blog .sidebar .categories ul a:hover {
            color: #3fbbc0;
        }

        .blog .sidebar .categories ul a span {
            padding-left: 5px;
            color: #b4aca8;
            font-size: 14px;
        }

        .blog .sidebar .recent-posts .post-item+.post-item {
            margin-top: 15px;
        }

        .blog .sidebar .recent-posts img {
            width: 95px;
            float: left;
        }

        .blog .sidebar .recent-posts h4 {
            font-size: 15px;
            margin-left: 95px;
            font-weight: bold;
            margin-bottom: 0;
            margin-left: 105px;
        }

        .blog .sidebar .recent-posts h4 a {
            color: #2b2320;
            transition: 0.3s;
        }

        .blog .sidebar .recent-posts h4 a:hover {
            color: #3fbbc0;
        }

        .blog .sidebar .recent-posts .side-bardate {
            display: block;
            margin-left: 105px;
            font-style: normal;
            font-size: 11px;
            color: #b4aca8;
        }

        .blog .sidebar .tags {
            margin-bottom: -10px;
        }

        .blog .sidebar .tags ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .tags ul li {
            display: inline-block;
        }

        .blog .sidebar .tags ul a {
            color: #745f56;
            font-size: 14px;
            padding: 6px 14px;
            margin: 0 6px 8px 0;
            border: 1px solid #ded5d2;
            display: inline-block;
            transition: 0.3s;
        }

        .blog .sidebar .tags ul a:hover {
            color: #fff;
            border: 1px solid #3fbbc0;
            background: #3fbbc0;
        }

        .blog .sidebar .tags ul a span {
            padding-left: 5px;
            color: #c8bab5;
            font-size: 14px;
        }
    </style>
    <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php require ('assets/links/header.php') ?> <!-- The Header -->
    <main> <!-- Main -->
        <!-- Title -->
        <div class="bg-dark py-5 my-5">
            <div class="py-5">
            </div>
            <div class="container">
                <div class="col-lg-6">
                    <div class=" display-5 fw-bolder text-center text-xl-start my-5">
                        <h1 class="display-5 fw-bolder text-white mb-lg-2">NEWS & EVENTS DETAILS</h1>
                        <p class="lead text-white-50 mb-0 mb-lg-3"></p>
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title mb-5"> Dolorum optio tempore voluptas dignissimos cumque fuga
                                quiquibusdam quia</a>
                            </h2>
                            <div class="entry-img">
                                <img src="assets/img/slide/slide-3.png" alt="" class="img-fluid">
                            </div>
                            <div class="entry-meta">
                                <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News & Events
                                        <span>&#47; by MIS Department</p>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta.
                                    Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda
                                    perferendis dolore.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Nisl condimentum id venenatis a.
                                    Scelerisque purus semper eget duis. Habitasse platea dictumst quisque sagittis.
                                    Pharetra vel turpis nunc eget lorem dolor sed viverra. Et ligula ullamcorper
                                    malesuada proin libero nunc consequat interdum. Adipiscing tristique risus nec
                                    feugiat in fermentum posuere urna. Eu sem integer vitae justo eget magna fermentum
                                    iaculis eu. Quisque non tellus orci ac auctor augue mauris augue neque. Est
                                    ullamcorper eget nulla facilisi. Blandit volutpat maecenas volutpat blandit. Nisi
                                    quis eleifend quam adipiscing. Rhoncus aenean vel elit scelerisque. Tellus rutrum
                                    tellus pellentesque eu tincidunt tortor aliquam nulla. Consectetur libero id
                                    faucibus nisl tincidunt eget nullam. Morbi leo urna molestie at elementum eu
                                    facilisis sed. Aliquam sem fringilla ut morbi.
                                </p>
                            </div>

                            <!-- <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div> -->

                        </article><!-- End blog entry -->
                    </div><!-- End blog entries list -->

                    <!-- SIDE BAR -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <h3 class="sidebar-title">Search</h3>
                            <!-- Search Form -->
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <div class="search-container">
                                        <input type="text" placeholder="Search..." name="search">
                                        <button type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Form -->

                            <div>
                                <h3 class="sidebar-title">Recent News</h3>
                                <div class="sidebar-item recent-posts">
                                    <div class="post-item clearfix">
                                        <img src="assets/img/slide/slide-3.png" alt="">
                                        <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                        <div class="side-bardate">
                                            <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                    Events <span>&#47; by MIS
                                                        Department</p>
                                        </div>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/slide/slide-3.png" alt="">
                                        <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                        <div class="side-bardate">
                                            <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                    Events <span>&#47; by MIS
                                                        Department</p>
                                        </div>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/slide/slide-3.png" alt="">
                                        <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                        <div class="side-bardate">
                                            <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                    Events <span>&#47; by MIS
                                                        Department</p>
                                        </div>
                                    </div>

                                    <div class="post-item clearfix">
                                        <img src="assets/img/slide/slide-3.png" alt="">
                                        <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                        <div class="side-bardate">
                                            <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                    Events <span>&#47; by MIS
                                                        Department</p>
                                        </div>
                                    </div>

                                    <a href="#" class="d-flex justify-content-center" style="font-size: 15px;">See
                                        More</a>
                                    <!-- see more button -->


                                </div><!-- End sidebar recent news-->

                                <div>
                                    <h3 class="sidebar-title mt-5">Recent Events</h3>
                                    <div class="sidebar-item recent-posts">

                                        <div class="post-item clearfix">
                                            <img src="assets/img/slide/slide-3.png" alt="">
                                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                            <div class="side-bardate">
                                                <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                        Events <span>&#47; by MIS Department</p>
                                            </div>
                                        </div>

                                        <div class="post-item clearfix">
                                            <img src="assets/img/slide/slide-3.png" alt="">
                                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                            <div class="side-bardate">
                                                <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                        Events <span>&#47; by MIS Department</p>
                                            </div>
                                        </div>

                                        <div class="post-item clearfix">
                                            <img src="assets/img/slide/slide-3.png" alt="">
                                            <h4><a href="blog-single.html">Nihil blanditiis at in nihil</a></h4>
                                            <div class="side-bardate">
                                                <p><time datetime="2020-01-01">Jan 1, 2020</time> <span>&#47; in News &
                                                        Events <span>&#47; by MIS Department</p>
                                            </div>
                                        </div>

                                        <a href="#" class="d-flex justify-content-center" style="font-size: 15px;">See
                                            More</a>
                                        <!-- see more button -->
                                    </div>
                                </div><!-- End sidebar recent posts-->
                            </div><!-- End sidebar -->
                        </div><!-- End blog sidebar -->
                    </div><!-- End sidebars -->
                </div><!-- End blog sidebars -->

            </div>

            </div>
        </section><!-- End Blog Single Section -->
    </main> <!-- End Main -->
    <!-- ======= Footer ======= -->
    <!-- Footer -->
    <footer>
        <?php require ('assets/links/footer.php') ?>
    </footer> <!-- End Footer -->

    <?php require ('assets/links/back-to-top.php') ?> <!-- Back to Top -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>