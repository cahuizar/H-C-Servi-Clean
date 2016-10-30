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
		$bedrooms =trim($_POST["bedrooms"]); 
		$bathrooms = trim($_POST["bathrooms"]); 
		$size = trim($_POST["size"]); 
		$options= trim($_POST["options"]); 
		
		if (isset($_POST['extra'])) {
    		$extras = implode(", ", $_POST['extra']);
		} else {
    		$extras = "no extras wanter";
		}  
		
        // Check that data was sent to the mailer.
        if ( empty($first_name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
		$email_content .= "Number of bedrooms: $bedrooms\n";
		$email_content .= "Number of bathrooms: $bathrooms\n";
		$email_content .= "House size: $size\n";
		$email_content .= "Cleaning frequency: $options\n\n";
		$email_content .= "Number of Pets: $pets\n\n";
		$email_content .= "Extras Wanted: $extras\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

		mail($recipient, $subject, $email_content, $email_headers);
        
		header("Location: http:///hcserviclean.com/"); /* Redirect browser */
		exit();

    }

?>
