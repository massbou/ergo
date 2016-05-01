<?php
function securite_entree($entree) {
  $entree = trim($entree);
  $entree = stripslashes($entree);
  $entree = htmlspecialchars($entree);
  return $entree;
}

?>