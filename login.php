<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">
    <style>
    
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  } 
  </style>
  <style type="text/css">
    body{
      background-image: url(img/flow.jpg);
    }
  </style>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form action="proses.php" method="POST" class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="img/fav2.jpg" alt="" width="127" height="128">
    <h1 class="h3 mb-3 font-weight-normal">log in</h1>
    <p>Ayuni Only</p>
  </div>
  <div class="form-label-group">
    <input type="text" name="username"  class="form-control" placeholder="username">
    <label >Masukan username</label>
  </div>
  <div class="form-label-group">
    <input type="password" name="password" class="form-control"  placeholder="password">
    <label >Password</label>
  </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">
  <a href="#"><span>Forgot Password</span></a>
</div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">SIGN IN</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy;Private Site 2021 @dwiayunir</p>
</form>
  </body>
</html>
