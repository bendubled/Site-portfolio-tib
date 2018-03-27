

<?php
//echo "blabla";
//$destinataire = $_POST['email'];
//// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
//$expediteur = 'jonabe66@hotmail.fr';
//$objet = $_POST['subject'];
//$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
//$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
//$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
//$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
//$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire    
//$message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour'.$_POST['name'].'! \n'.$_POST['message'].'</div>';
//if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
//{
//    echo 'Votre message a bien été envoyé ';
//}
//else // Non envoyé
//{
//    echo "Votre message n'a pas pu être envoyé";
//}
//
//
$to      = 'jonabe66@hotmail.fr';
               $message = $thisinput->post('message');
               $from_email="=?UTF-8?B?".base64_encode( $this->input->post('email'))."?=";
               $from_user = "=?UTF-8?B?".base64_encode( $this->input->post('name'))."?=";
                $subject = "=?UTF-8?B?".base64_encode($this->input->post('subject'))."?=";
 
                $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" .
                 "Content-type: text/html; charset=UTF-8" . "\r\n";
 
               mail($to, $subject, $message, $headers);
//               redirect('contact/?m=added');
