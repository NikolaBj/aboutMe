<?php
if (isset($_REQUEST['email'])) {

  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("nikola.jovancevic2112@gmail.com", $subject,
  $message, "From:" . $email);

  echo "Merci! Votre requête a été soumise à notre webmestre.";

} else {

  echo "Erreur: Prière de remplir le formulaire.";

}
?>