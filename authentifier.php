<!DOCTYPE html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>S'authentifier</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  

    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/authentifier.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1 style="font-size:4rem;">S'authentifier</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h3>Veuillez Entrer les coordonnées</h3>
          <form name="sentMessage" id="contactForm" method="POST" action="login.php">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="babel">Login</label>
                <input type="text" class="form-control" id="login"  placeholder="Login" name="login" required data-validation-required-message="Enter le Login.">
                <p class="help-block text-danger"></p>
              </div>
			  <div class="form-group floating-label-form-group controls">
                <label>Mot de Passe</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de Passe" name="mdp" required data-validation-required-message="Enter le Mot de passe.">
                <p class="help-block text-danger"></p>
              </div>
                
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Log in" id="sendMessageButton"></input>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Babel 2018</p>
          </div>
        </div>
      </div>
    </footer>

   

  </body>

</html>
