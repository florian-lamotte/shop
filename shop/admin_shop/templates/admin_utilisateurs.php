<?php
  require_once("../boot.php");

  $utilisateur = new Utilisateur();
  $utilisateurs = $utilisateur->findAll();
?>

<h1 class="page-header">Utilisateurs<a class="btn btn-success" id="add" href="#/ajouter_utilisateur" role="button">Ajouter</a></h1>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Mail</th>
        <th>Inscription</th>
        <th>Modifier</th>
        <th>Supprimer</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($utilisateurs as $u) {
      echo '<tr>';
        echo '<td>' . $u->prenom . '</td>';
        echo '<td>' . $u->nom . '</td>';
        echo '<td>' . $u->mail . '</td>';
        echo '<td>' . $u->inscription . '</td>';
        echo '<td><a class="btn btn-warning" href="#/modifier_utilisateur" role="button">Modifier</a></td>';
        echo '<td><a class="btn btn-danger" href="#/supprimer_utilisateur" role="button">Supprimer</a></td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
</div>