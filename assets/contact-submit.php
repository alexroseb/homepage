<?php
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href", "<", ">");
  return str_replace($bad,"",$string);
}

function form_reply(){
  if($_POST['url'] == ''){
    $email_to = "alex@alexroseb.com";
    $email_subject = "Contact from Alex Brenon Website";

    $name = $_POST['name'];
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
      $error_message .= '<p style="color:red">The email you entered is missing or invalid.<br />Please go back and enter a valid email.</p>';
      return($error_message);
    }

    $email_message = "";

    $email_message .= "From: ".clean_string($name)." <".clean_string($email_from).">\n";
    $email_message .= "Subject: ".clean_string($subject)."\n\n";
    $email_message .= clean_string($comments);
    $email_message .= "\n\n ------- \n This email was sent from a contact form on alexroseb.com.";

    if($subject){
      $email_subject = clean_string($subject);
    }

    $headers = 'From: ' . clean_string($name)."<contact@alexroseb.com> \r\n". 'Reply-To: '.clean_string($email_from)."\r\n" . 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
  }
  return('<p style="color:green">Thank you for your contact! I will respond as soon as I can.</p>');
} ?>