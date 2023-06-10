<?php
  // use PHPMailerPHPMailerPHPMailer;
  // use PHPMailerPHPMailerException;
  use PHPMailer\PHPMailer\PHPMailer;

  require __DIR__.'/PHPMailer-master/src/Exception.php';
  require __DIR__.'/PHPMailer-master/src/PHPMailer.php';
  require __DIR__.'/PHPMailer-master/src/SMTP.php';

  // Include autoload.php file
  require __DIR__ . '/PHPMailer-master/vendor/autoload.php';  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
// 
    try {
      $mail->isSMTP();
      $mail->Host = 'mail.1984.is';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'maggy@maggymoller.is';
      // Gmail Password
      $mail->Password = 'Lykil0rd';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('maggy@maggymoller.is');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('maggy@maggymoller.is');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();	
      header('Location: /redirect.html');
	// echo 'Skilaboðin voru send';
      $output = '<div class="alert alert-success"><h2>Skilaboðin voru send!</h2>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
