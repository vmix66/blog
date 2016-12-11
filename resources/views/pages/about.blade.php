<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Blog - About</title>

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
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/about">About</a></li>
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

    <div class="row col-md-12">
        <h1>Обо мне</h1>
        <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad dolores, eligendi eos et fugit illum laborum libero molestias neque placeat quasi qui repellendus, temporibus ullam ut veniam voluptatem voluptatum.</span><span>A at atque esse illum minus officia omnis quasi, quis quod voluptates. Amet eum exercitationem harum illum mollitia quisquam temporibus. Debitis dolorum fuga fugiat itaque necessitatibus nesciunt numquam recusandae sit.</span><span>Amet asperiores cum doloribus error fuga magni molestiae, officia quas saepe sit. Aut autem dicta eaque eius expedita id illum iste libero magni minus nesciunt nobis praesentium quibusdam, quos sequi!</span><span>Architecto consequatur dignissimos dolorum eaque ex hic illo ipsum laborum maiores neque nisi numquam, possimus quasi rem rerum sapiente similique? Aperiam architecto doloribus iste labore provident quas qui sint tenetur?</span><span>Adipisci blanditiis commodi consequuntur corporis delectus doloremque doloribus illo in, inventore iste libero nostrum praesentium, quas quos repudiandae sequi, suscipit. Autem beatae consectetur dolorum eligendi enim facere, nostrum optio. Cupiditate!</span></p>

    </div>
</div> <!-- container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>