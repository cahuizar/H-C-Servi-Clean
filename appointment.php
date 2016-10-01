<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $first_name = strip_tags(trim($_POST["first_name"]));
		$first_name = str_replace(array("\r","\n"),array(" "," "),$first_name);
		$last_name = strip_tags(trim($_POST["last_name"]));
		$last_name = str_replace(array("\r","\n"),array(" "," "),$last_name);
		$street_address1 = trim($_POST["street_address1"]);
		$street_address2 = trim($_POST["street_address2"]);
		$city = trim($_POST["city"]);
		$zip_code = trim($_POST["zip_code"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$phone = trim($_POST["phone"]);
		$pets = trim($_POST["pets"]);
        $message = trim($_POST["message"]);
		$extra = trim($_POST["extra"]); 
		
		$bedrooms = $_GET["bedrooms"]; 
		

        // Check that data was sent to the mailer.
        if ( empty($first_name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "contact@hcserviclean.com";

        // Set the email subject.
        $subject = "New contact from $first_name";
		
        // Build the email content.
        $email_content = "$first_name $last_name\n";
		$email_content .= "$street_address1 $street_address2\n";
		$email_content .= "$city";
		$email_content .= ", $zip_code\n";
        $email_content .= "Email: $email\n\n";
		$email_content .= "Phone: $phone\n\n";
		$email_content .= "House information: $query_params\n\n";
		$email_content .= "Number of Pets: $pets\n\n";
		$email_content .= "Extras Wanted: $extra\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

		mail($recipient, $subject, $email_content, $email_headers);
        http_response_code(200);
        echo "Thank You! Your message has been sent.";

    }

?>
