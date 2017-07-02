<html>
<head>
    <title>My Page</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="{{url('/')}}/css/materialize-rtl.css" type="text/css"/>
    <link rel="stylesheet" href="{{url('/')}}/css/materialize.css" type="text/css"/>
    <link rel="stylesheet" href="{{url('/')}}/css/style.css" type="text/css"/>
    <script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('/')}}/js/materialize.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">

</head>
<body>

<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </div>
</nav>

<ul id="slide-out" class="side-nav">

    </li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>


@section('wrap')
    <div class="container">
        <h3>@yield('header')</h3>

        <div class="row" style="height: 50%;margin: auto 0;">
            <div class="col l3 m3 hide-on-small-only" style="background-color: #d43f3a;">
                @yield('sidebar')
            </div>
            <div class="col l9 m9 s12" style="background-color: #00b0ff">
                @yield('content')
            </div>
        </div>
        <div class="row" style="height: 20%;margin: auto 0;">
            <div class="col l12 m12 s12" style="background-color: #fbc02d">
                Footer
            </div>
        </div>
    </div>
@show

<script>
    $(".button-collapse").sideNav();
</script>

</body>
</html>
