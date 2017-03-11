<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        //$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        if(preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", trim($_POST["email"]))) 
        { 
            $email = trim($_POST["email"]);
        }

        $message = trim($_POST["message"]);
        $subject = trim($_POST["objet"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR empty($email) OR empty($subject)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Une erreur s'est produite ! Merci de recompléter le formulaire.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "contact@remi-dupuy.fr";

        // Set the email subject.
        //$subject = "New contact from $name";

        // Build the email content.
        $email_content = "Nom: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: Site perso <contact@remi-dupuy.fr>\n";
        $email_headers .= "MIME-Version: 1.0\n";
        $email_headers .= 'To: Rémi Dupuy <contact@remi-dupuy.fr>' . "\r\n";
        $email_headers .= "Content-Type: text/plain; charset=\"utf-8\"";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            //http_response_code(200);
            echo "Merci ! Votre message a bien été envoyé.";
        } else {
            // Set a 500 (internal server error) response code.
            //http_response_code(500);
            echo "Votre message n'a pas pu être envoyé.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        //http_response_code(403);
        echo "Une erreur s'est produite ! Merci de recompléter le formulaire.";
    }

?>