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
<div class="heading">
<?php
include($root.'includes/nav.php');
include($root.'includes/header.php');?>
</div> <!-- .heading -->
<div class="clear"></div>

<?php post_form_data(); ?>

<div class="content">

  <div class="column-b-mobile">
		<div class="icons">
			<div class="s-i-f"><a href="http://www.facebook.com/SimonCordingleyPhotography" target="_blank" title="Simon Cordingley Photography on Facebook"><img src="images/social-icons/f-32.png" alt="Simon Cordingley Photography on Facebook" width="32px" height="32px"></a></div>
			<div class="s-i-t"><a href="https://twitter.com/VilliinnyDesign" target="_blank" title="Simon Cordingley on Twitter"><img src="images/social-icons/twitter-32.png" alt="Simon Cordingley Photography on Twitter" width="32px" height="32px"></a></div>
			<div class="s-i-500"><a href="http://www.500px.com/spcordingley" target="_blank" title="Simon Cordingley Photography on 500px"><img src="images/social-icons/500-32.png" alt="Simon Cordingley Photography on 500px" width="32px" height="32px"></a></div>
<!-- 			<div class="s-i-r"><a href="http://www.simoncordingleyphotography.com" title="RSS Feed"><img src="images/social-icons/rss-32.png" alt="RSS Feed" width="32px" height="32px"></a></div> -->
			<div class="s-i-g-p"><a href="https://plus.google.com/116494331156233838164/posts" target="_blank" title="Simon Cordingley on Google+"><img src="images/social-icons/googleplus-32.png" alt="Simon Cordingley on Google+" width="32px" height="32px"></a></div>
		</div>
  	</div>

  <div class="clear"></div>

  <div class="column-a">
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
                  <input name="name" id="name" type="text" placeholder="First and last name" value="<?php echo $_POST['name'] ?>" required>
        <?php } else {
                  echo "<div class=\"errors\">".$errors['name']."</div>"; ?>
                <input name="name" id="name" type="text" placeholder="First and last name" required>
        <?php } ?></span>
            </li>

            <li class="details"><span>
              <label for="email" class="label">E-mail:<span class="required">*</span></label>
              <?php if(!isset($errors['email'])) { ?>
                  <input name="email" id="email" type="email" placeholder="example@example.com"  value="<?php echo $_POST['email'] ?>" required>
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
                  <textarea name="comments" id="comments"  rows="10" autocomplete="off" required><?php echo $_POST['comments'] ?></textarea>
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
  </div> <!-- .column-a -->

  <div class="column-b">
		<div class="icons">
			<div class="s-i-f"><a href="http://www.facebook.com/SimonCordingleyPhotography" target="_blank" title="Simon Cordingley Photography on Facebook"><img src="images/social-icons/f-32.png" alt="Simon Cordingley Photography on Facebook" width="32px" height="32px"></a></div>
			<div class="s-i-t"><a href="https://twitter.com/VilliinnyDesign" target="_blank" title="Simon Cordingley on Twitter"><img src="images/social-icons/twitter-32.png" alt="Simon Cordingley Photography on Twitter" width="32px" height="32px"></a></div>
			<div class="s-i-500"><a href="http://www.500px.com/spcordingley" target="_blank" title="Simon Cordingley Photography on 500px"><img src="images/social-icons/500-32.png" alt="Simon Cordingley Photography on 500px" width="32px" height="32px"></a></div>
<!-- 			<div class="s-i-r"><a href="http://www.simoncordingleyphotography.com" title="RSS Feed"><img src="images/social-icons/rss-32.png" alt="RSS Feed" width="32px" height="32px"></a></div> -->
			<div class="s-i-g-p"><a href="https://plus.google.com/116494331156233838164/posts" target="_blank" title="Simon Cordingley on Google+"><img src="images/social-icons/googleplus-32.png" alt="Simon Cordingley on Google+" width="32px" height="32px"></a></div>
		</div>
  	</div>
  <div class="clear"></div>


</div> <!-- .content -->

</div>
<?php include($root.'includes/footer.php'); ?>
