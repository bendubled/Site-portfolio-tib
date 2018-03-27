

<?php

$to      = 'jonabe66@hotmail.fr';
               $message = $thisinput->post('message');
               $from_email="=?UTF-8?B?".base64_encode( $this->input->post('email'))."?=";
               $from_user = "=?UTF-8?B?".base64_encode( $this->input->post('name'))."?=";
                $subject = "=?UTF-8?B?".base64_encode($this->input->post('subject'))."?=";
 
                $headers = "From: $from_user <$from_email>\r\n".   "MIME-Version: 1.0" . "\r\n" .
                 "Content-type: text/html; charset=UTF-8" . "\r\n";
 
               mail($to, $subject, $message, $headers);

