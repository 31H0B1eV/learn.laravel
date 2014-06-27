<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        body {
            margin-top: 50px; /* 50px is the height of the navbar - change this if the navbar height changes */
            background-color: #f5f5f5;
            background-clip: padding-box;
            border: solid transparent;
            border-width: 1px 1px 1px 6px;
            min-height: 28px;
            padding: 10px 0 0;
            box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);
        }
        footer {
            margin: 50px 0;
        }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Home page</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="#popular">About</a></li> -->
                        <li><a href="/lessons">Lessons</a></li>
                        <!-- <li><a href="#contacts">Contacts</a></li> -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
            	&nbsp
            </div>
            <div class="row">
                <div class="lessons col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script>
            /*pagination via ajax*/
           /* $(document).ready(function() {
               $(document).on('click', '.pagination a', function (e) {
                    getLessons($(this).attr('href').split('page=')[1]);
                    e.preventDefault();
                });
            });
            function getLessons(page) {
                $.ajax({
                    url : '?page=' + page,
                    dataType: 'json'
                }).done(function (data) {
                    $('.lessons').html(data);
                    location.hash = page;
                }).fail(function () {
                    alert('Lessons could not be loaded.');
                });
            }*/
            /*end pagination via ajax*/
            function equalHeight(group) {
                var tallest = 0;
                group.each(function() {
                    var thisHeight = $(this).height();
                    if(thisHeight > tallest) {
                        tallest = thisHeight;
                    }
                });
                group.each(function() { $(this).height(tallest); });
            }
            $(document).ready(function() {
                equalHeight($(".thumbnail"));
            });
        </script>
    </body>
</body>
</html>