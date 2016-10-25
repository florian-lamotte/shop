<?php
	require_once("../boot.php");

	$livre = new Panier();
	$livres = $livre->findAll();
  $total = $livre->total();
?>

<h2>Votre panier</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Langue</th>
        <th>Parution</th>
        <th>Edition</th>
        <th>Prix</th>
        <th>Quantité</th>
       </tr>
    </thead>
    <tbody>
    <?php
      foreach ($livres as $l) {
      echo '<tr>';
        echo '<td>' . $l->titre . '</td>';
        echo '<td>' . $l->auteur . '</td>';
        echo '<td>' . $l->langue . '</td>';
        echo '<td>' . $l->parution . '</td>';
        echo '<td>' . $l->edition . '</td>';
        echo '<td>' . $l->prix . '</td>';
        echo '<td>' . $l->quantite . '</td>';
        echo '<td>' . $l->total . '</td>';
      echo '</tr>';
      }
    ?>
    </tbody>
  </table>
  <h3>Prix total : <?php echo $total; ?> €</h3>
</div>