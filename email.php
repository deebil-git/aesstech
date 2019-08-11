$email = isset($_POST['emailInput']) ? $_POST['emailInput'] : false;

if($email != false)
{
    $yourEmail = "example@example.com";.
    $subject = "Link";
    $message = "The link and some message";
    $success = sendMail($email, $yourEmail, $subject, $message);
}
