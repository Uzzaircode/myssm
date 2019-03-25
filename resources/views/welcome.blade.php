<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="{{asset('js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{asset('plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{asset('css/ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
</head>

<body class="relative" data-spy="scroll" data-target=".navbar-landing">
    <header class="section-header">
        <nav class="navbar navbar-landing navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand mr-auto" href="#"> <img class="logo" src="{{asset('images/myssm-logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#intro">Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#content">Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#more">More info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://bootstrap-ecommerce.com"> Download </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- container //  -->
        </nav>
    </header> <!-- section-header.// -->

    <!-- ========================= SECTION INTRO ========================= -->
    <section id="intro" class="section-intro bg-secondary pt-5">
        <div class="container">
            <div class="row d-flex" style="min-height:600px;">
                <div class="col-sm-6 d-flex align-items-center">
                    <header class="intro-wrap text-white">
                        <h2 class="display-3"> Amazing place for hero title </h2>
                        <p class="lead">Bootstrap ecommerce is more then template - also framework. <br> It is modern
                            and fully customizable websites, WebApp and Mobile template for Your Project</p>
                        <a href="#" class="btn btn-warning">Download</a>
                        <a href="#" class="btn btn-light">Learn more</a>
                    </header> <!-- intro-wrap .// -->
                </div> <!-- col.// -->
                <div class="col-sm-6 text-right">
                    <img src="images/items/comp.png" class="img-fluid my-5" width="500">
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->


    <!-- ========================= SECTION FEATURES ========================= -->
    <section id="features" class="section-features bg2 padding-y-lg">
        <div class="container">

            <header class="section-heading text-center">
                <h2 class="title-section">How it works </h2>
                <p class="lead"> Good sub heading this sounded nonsense to Alice </p>
            </header><!-- sect-heading -->

            <div class="row">
                <aside class="col-sm-4">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-lg bg-secondary white"><i class="fa fa-envelope-open"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">Sync across all devices</h4>
                            <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red
                                Queen. To her surprise.</p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </aside> <!-- col.// -->
                <aside class="col-sm-4">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-lg bg-secondary  white"><i class="fa fa-heart"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">Easy to Customize</h4>
                            <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red
                                Queen. To her surprise. </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </aside> <!-- col.// -->
                <aside class="col-sm-4">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-lg bg-secondary  white"><i class="fa fa-users"></i> </span>
                        <figcaption class="text-wrap">
                            <h4 class="title">Unique Interface Design</h4>
                            <p>This sounded nonsense to Alice, so she said nothing, but set off at once toward the Red
                                Queen. To her surprise. </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->

            <p class="text-center">
                <br>
                <a href="#" class="btn btn-warning">Some action button</a>
            </p>

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION FEATURES END// ========================= -->

    <!-- ========================= SECTION CONTENT  ========================= -->
    <section id="content" class="section-content padding-y-lg">
        <div class="container">

            <header class="section-heading text-center">
                <h2 class="title-section">Section name</h2>
                <p class="lead"> Good sub heading this sounded nonsense to Alice </p>
            </header><!-- sect-heading -->

            <div class="row justify-content-center">
                <article class="col-md-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article> <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT  END// ========================= -->


    <!-- ========================= SECTION CONTENT ASIDE ========================= -->
    <section id="more" class="bg section-content padding-y-lg">
        <div class="container">

            <header class="section-heading text-center">
                <h2 class="title-section"> Another Section</h2>
                <p class="lead"> Good sub heading this sounded nonsense to Alice </p>
            </header><!-- sect-heading -->

            <div class="row justify-content-center">
                <article class="col-md-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article> <!-- col.// -->
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT ASIDE END// ========================= -->


    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-dark white">
        <div class="container">
            <section class="footer-bottom row">
                <div class="col-sm-6">
                    <p> Made with <3 <br> by Vosidiy M.</p>
                </div>
                <div class="col-sm-6">
                    <p class="text-sm-right">
                        Copyright &copy 2018 <br>
                        <a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->


</body>

</html>
