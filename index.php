<?php
    include "config.php";
?>
<!doctype html>
<html lang="<?php echo $lang['lang'] ?>">
<!-- YEP, I DID F***ING PHP ... -->
<!-- FOR ANYONE LOOKING AT THIS IN THE FUTURE, IT WAS 2010 AND I SEE NO NEED IN MAKING THIS WITH MODERN TECH ;) -->
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Leon Rudowicz">
		<meta name="description" content="LRud">
		<meta name="keywords" content="Lrud, Leon, Rudowicz, LNRU, Lrudowicz, Lrudowic">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet" type="text/css">
		<title><?php echo $lang['title'] ?></title>
	</head>
	<body>
    <div class="container">
    <nav class="navbar navbar-light navbar-expand-md justify-content-center">
      <a href="/" class="navbar-brand d-flex w-50 mr-auto">
        <img src="images/avatar.jpg" alt="LRud" class="avatar">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100" id="navbarCollapse">
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href=""><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?lang=en"><?php echo $lang['lang_en'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?lang=de"><?php echo $lang['lang_de'] ?></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <br>
      <div class="container text-center">
        <div class="card text-center text-grey d-inline-flex p-2">
          <div class="card-body">
            <h5 class="card-title"><?php echo $lang['description'] ?></h5>
            <p class="card-text"><?php echo $lang['social'] ?></p>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="https://www.linkedin.com/in/leon-rudowicz-b2119a1a8/" role="button" style="color:#0077b5"><i class="fab fa-linkedin" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="GitHub" href="https://github.com/leonrudowicz" role="button" style="color:#333"><i class="fab fa-github" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Instagram" href="https://www.instagram.com/leon.rudowicz/" role="button" style="color:#c13584"><i class="fab fa-instagram" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/leon.rudowicz" role="button" style="color:#3b5998"><i class="fab fa-facebook" style="font-size:48px"></i></a>
          </div>
        </div>
        <br>
        <div class="card text-center text-grey d-inline-flex p-2">
          <div class="card-body">
            <h5 class="card-title"><?php echo $lang['projects'] ?></h5>
            <p class="card-text"><?php echo $lang['projects_desc'] ?></p>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="ITISN" href="https://itisn.de" role="button" style="color:#929293"><i class="fas fa-sitemap" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Study Journey" href="https://studyjourney.de" role="button" style="color:#929293"><i class="fas fa-book-reader" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Cable-Cloud" href="https://cablecloud.herokuapp.com/" role="button" style="color:#929293"><i class="fas fa-plug" style="font-size:48px"></i></a>
            <a class="btn btn-lg shadow-none" data-toggle="tooltip" data-placement="bottom" title="Globe News" href="https://globn.de" role="button" style="color:#929293"><i class="fas fa-globe" style="font-size:48px"></i></a>
          </div>
        </div>
      </div>
      <footer class="footer fixed-bottom text-center">
        <div class="container">
          <p>&copy; <?php echo $lang['copyright']?> Leon Alexander Rudowicz. <a href="impressum.php"><?php echo $lang['impressum']?></a></p>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
      });
      </script>
  </body>
</html>
