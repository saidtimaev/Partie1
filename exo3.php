<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ».<br> Afficher l’ancienne et la nouvelle phrase.
</p> 

<h2>Résultat</h2>



<?php
  $phrase1 = "Notre formation DL commence aujourd’hui<br>";
  $phrase2 = "Notre formation DL commence aujourd’hui";

  echo $phrase1;
  echo str_replace("aujourd'hui", "demain", $phrase2);
?>


