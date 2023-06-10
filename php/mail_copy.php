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

    try {
      $mail->isSMTP();
      $mail->Host = 'mail.1984.is';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'maggymoller@maggymoller.is';
      // Gmail Password
      $mail->Password = 'rAv!ngsofaLunatic1!';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('maggymoller@maggymoller.is');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('maggymoller@maggymoller.is');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maggymoller.is</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar-children">
        <div class="max-width">
            <div class="logo"><a href="#">Portfó<span>líó.</span></a></div>
            <ul class="menu">
                <li><a href="/index.html" class="menu-btn">Heim</a></li>
                <li><a href="/html/aboutme.html" class="menu-btn">Um mig</a></li>
                <li><a href="/html/math.html" class="menu-btn">Stærðfræðikennsla</a></li>
                <li><a href="/html/projects.html" class="menu-btn">Verkefni</a></li>
                <li><a href="/html/published.html" class="menu-btn">Útgefið efni</a></li>
                <li><a href="#" class="menu-btn">Hafa samband</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        </nav>
</head>


</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
 
  <head>
     <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/php-contact-form/style.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>maggymoller.is</title>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
        </div>
        <nav class="navbar-children">
        <div class="max-width">
            <div class="logo"><a href="/index.php">Portfó<span>líó.</span></a></div>
            <ul class="menu">
                <li><a href="/index.php" class="menu-btn">Heim</a></li>
                <!-- <li><a href="/html/aboutme.html" class="menu-btn">Um mig</a></li>
                <li><a href="/html/math.html" class="menu-btn">Stærðfræðikennsla</a></li>
                <li><a href="/html/projects.html" class="menu-btn">Verkefni</a></li>
                <li><a href="/html/published.html" class="menu-btn">Útgefið efni</a></li> -->
                <li><a href="/php/mail_copy.php" class="menu-btn">Hafa samband</a></li>
                <li><a href="/gamliindex.html" class="menu-btn">Gamli indexinn</a></li>

            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
          </div>
        </nav>
<section>
  <section class="bg-info">
    <div class="contact" id="contact">
      <div class="max-width">
      <h3 class="title">Hafðu samband</h3>
          <div class="contact-content">
            <div class="column left">
          
            <div class="icons">
              <div class="row"
              <i class="fas fa-user"></i>
              <div class="info">
              <form action="/mail.php" method="POST">
                <div class="info">
                     <div class="sub-title">Maggý Helga Jóhannsdóttir Möller</div>
                </div>
                <div class="form-group">
                  <?= $output; ?>
                </div>
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="email">E-Mail</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                    required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                    required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
  <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Hafðu samband</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="sub-title">Maggý Helga Jóhannsdóttir Möller</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="sub-title">Reykjavík, Iceland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="sub-title">maggymoller@maggymoller.is</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone-alt"></i>
                            <div class="info">
                                <div class="sub-title">+354 6967979</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Sendu mér skilaboð</div>
                    <form action="mail_copy.php" method="POST">
                        <div class="contact-form">
                            <?= $output; ?>
                            <div class="fields">
                                <form id="contact-form" >
                                <div class="field name">
                                <label for="name">Nafn</label>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
               
                              </div>
                                <div class="field email">
                                <label for="email">Netfang</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
                            </div>
                            </div>
                            <div class="field subject">
                            <label for="subject">Titill</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                              required></div>
                            <div class="field textarea">
                            <label for="message">Skilaboð</label>
                              <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                                required></textarea></div>
                            <div class="button-area">
                                <input type="submit" class="form-control submnit" value="Send" id="sendBtn">Senda skilaboð</input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  <!-- footer section start -->
<footer>
    <div class="socialmedia">
        <ul>
            <li><a href="https://www.facebook.com/maggymoller" <i class="fab fa-facebook-square fa-2x" style="color:white !important;" ></i></a></li>   
            <li><a href="https://twitter.com/maggymoller" <i class="fab fa-twitter-square fa-2x" style="color:white !important;"  ></i></a></li>
            <li><a href="https://www.instagram.com/maggymoller/" <i class="fab fa-instagram-square fa-2x" style="color:white !important;" ></i></a></li>
            <li><a href="https://www.linkedin.com/in/maggymoller/" <i class="fab fa-linkedin fa-2x" style="color:white !important;" ></i></a></li>
            <li><a href="https://github.com/maggymoller" <i class="fab fa-github-square fa-2x" style="color:white !important;" ></i></a></li>   
        </ul>
     </div>
    </div>
    <span>Maggý Möller <span class="far fa-copyright"></span> 2021 Allur réttur áskilinn.</span>
</footer>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="/javascript/script.js"></script>
</body>

</html>