<?php
if(isset($_POST['fileUrl'])) {
  $fileUrl = $_POST['fileUrl'];

  // Vérifiez si l'URL est valide et autorisée (pour des raisons de sécurité)
  // Vous pouvez ajouter ici des contrôles de sécurité supplémentaires

  // Téléchargement du fichier
  $fileName = basename($fileUrl);
  header("Content-disposition: attachment; filename=$fileName");
  readfile($fileUrl);
  exit();
} else {
  // Gérer le cas où le champ du formulaire n'est pas rempli
  echo "Veuillez entrer l'URL du fichier à télécharger.";
}
?>
