<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel blog</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Популярные посты</h1>
            <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="#navbar" role="button">Читать подробнее ... &raquo;</a>
            </p>
        </div>

        <div class="row col-md-12">
            <div class="col-md-8">
                <h1>Post Title</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex laudantium mollitia obcaecati voluptatum? Ab rem, ullam? At consequatur delectus eos explicabo illo, libero maxime quam quos sit voluptate voluptates?</p>
                <button class="btn btn-primary">Читать дальше...</button>
                <hr>

                <h1>Post Title</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex laudantium mollitia obcaecati voluptatum? Ab rem, ullam? At consequatur delectus eos explicabo illo, libero maxime quam quos sit voluptate voluptates?</p>
                <button class="btn btn-primary">Читать дальше...</button>
                <hr>

                <h1>Post Title</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex laudantium mollitia obcaecati voluptatum? Ab rem, ullam? At consequatur delectus eos explicabo illo, libero maxime quam quos sit voluptate voluptates?</p>
                <button class="btn btn-primary">Читать дальше...</button>
                <hr>

                <h1>Post Title</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ex laudantium mollitia obcaecati voluptatum? Ab rem, ullam? At consequatur delectus eos explicabo illo, libero maxime quam quos sit voluptate voluptates?</p>
                <button class="btn btn-primary">Читать дальше...</button>
                <hr>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>

        </div>
    </div> <!-- container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>