<!DOCTYPE html>
<html ng-app="admin">
  <head>
    <meta charset="utf-8">
    <title>Dashboard's Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body ng-controller="dashboardController">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#/admin">Shop</a>
        </div>
        <!--
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Deconnexion</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
        -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#/admin">Dashboard</a></li>
            <li><a href="#/admin_livres">Livres</a></li>
            <li><a href="#/admin_utilisateurs">Utilisateurs</a></li>
            <li><a href="#/admin_auteurs">Auteurs</a></li>
            <li><a href="#/admin_genres">Genres</a></li>
            <li><a href="#/admin_editions">Maisons d'édition</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div ng-view></div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/admin.js"></script>
  </body>
</html>
