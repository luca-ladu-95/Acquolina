@extends('app')


<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand page-scroll" href="#page-top">Acquolina
            </a></div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/modifica-menu" class="page-scroll">Modifica menu</a></li>
                <li><a href="#portfolio" class="page-scroll">Modifica gallery</a></li>
                <li><a href="/logout" class="page-scroll">Log Out</a></li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <div class="col-xs-12 col-md-6 ">
                            <div class="about-img"><img src="img/logo.png" class="img-logo img" alt=""></div>
                        </div>
                        <p>Amministratore</p>
                        <a href="/logout" class="btn btn-custom btn-lg page-scroll">Log Out</a></div>
                </div>
            </div>
        </div>
    </div>
</header>

@section('content')

    @include('menu')


@endsection

<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
