<?php 
session_start();
require 'common.php';
include($root.'includes/dtd.php');
?>
<title>Simon Cordingley Photography - Contact</title>
<?php
include($root.'includes/head.php');
?>
<div class="container">
<?php
include($root.'includes/nav.php');
include($root.'includes/header.php');
include($root.'includes/main-content.php');





$errors = get_user_data($_POST);

  if (isset($_POST['submitBtn'])) {
    
    $email_to = "beccord@iinet.net.au";
    $email_subject = "Simon Cordingley Photography";
    if (count($errors) == 0) { ?>
      <div class="thankyou">Thank you for your feedback</div>
      
      <?php 
      $name = htmlentities($_POST['name']);
      $email = htmlentities($_POST['email']);
      $comments = htmlentities($_POST['comments']);
        
      $email_message = "Form details below.\n\n";
      $email_message .= "Name: ".$name."\n\n";
      $email_message .= "Email: ".$email."\n\n";
      $email_message .= "Comments: ".$comments."\n\n";

      $headers = 'From: '.$email."\r\n".
      'Reply-To: '.$email."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($email_to, $email_subject, $email_message, $headers);  
      exit();
  } 
} ?>
<div class="contact-container">
  <div class="contact-form">
    <h2>Send an E-mail</h2>
    <div class="clear"></div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contact" action=autocomplete="on">
      <fieldset>
        <legend>Your details:</legend>
        <br>
          <ol>
            <li class="details">
              <span>
              <label for="name" class="label">Name:<span class="required">*</span></label>
              <?php if(!isset($errors['name'])){ ?>
                  <input name="name" id="name" type="text" placeholder="First and last name" value="<?php echo $_SESSION['contact']['name'] ?>" required>
        <?php } else {
                  echo "<div class=\"errors\">".$errors['name']."</div>"; ?>
                <input name="name" id="name" type="text" placeholder="First and last name" required>
        <?php } ?></span>
            </li>

            <li class="details"><span>
              <label for="email" class="label">E-mail:<span class="required">*</span></label>
              <?php if(!isset($errors['email'])) { ?>
                  <input name="email" id="email" type="email" placeholder="example@example.com"  value="<?php echo $_SESSION['contact']['email'] ?>" required>
            <?php } else { 
                echo "<div class=\"errors\">".$errors['email']."</div>";?>
            <input name="email" id="email" type="email" placeholder="example@example.com"  required>
            <?php
              } 
              ?></span>
            </li>
          </ol>
      </fieldset>

      <div class="clear"></div>
      
      <fieldset>
        <legend>Your comments:</legend>
        <br>
          <ol>
            <li class="comments"><span>
              <label for="comments" class="label">Feedback:<span class="required">*</span></label>
              <?php if(!isset($errors['comments'])) { ?>
                  <textarea name="comments" id="comments"  rows="10" autocomplete="off" required><?php echo $_SESSION['contact']['comments'] ?></textarea>
              <?php } else {
                  echo "<div class=\"errors\">".$errors['comments']."</div>"; ?>
                  <textarea name="comments" id="comments"  rows="10" autocomplete="off" required></textarea>

             <?php 
                } 
            ?></span>
            </li>
          </ol>
      </fieldset>
      <br>
      
      
        <input type="submit" name="submitBtn" id="submitBtn" value="Submit">
     

    </form>
  </div> <!-- .contact-form -->
  <div class="follow">
		<div class="icons">
			<div class="s-i-f"><a href="http://www.facebook.com/SimonCordingleyPhotography"><img src="images/social-icons/f-32.png"></a></div>
			<div class="s-i-t"><a href="http://www.twitter.com"><img src="images/social-icons/twitter-32.png"></a></div>
			<div class="s-i-500"><a href="http://www.500px.com"><img src="images/social-icons/500-32.png"></a></div>
			<div class="s-i-r"><a href="http://www.simoncordingleyphotography.com"><img src="images/social-icons/rss-32.png"></a></div>
			<div class="s-i-g-p"><a href="http://www.simoncordingleyphotography.com"><img src="images/social-icons/googleplus-32.png"></a></div>
		</div>
  	</div>
  <div class="clear"></div>
</div>






</div> <!-- .main-content -->
<div class="push"></div>
</div>
<?php

include($root.'includes/footer.php');

 ?>