<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RaptorBird&mdash;Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- Bootstrap Responsive Design -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'> <!-- Google font -->
  <link rel="stylesheet" type="text/css" href="customcss.css">

</head>
<body>

  <?php

  $here = "contact.php";
  include('navbar.php');

    //check if the form POST was successful
  if (isset($_GET['s'])) {
    echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
  }

      //check if there was an error with the form
  elseif (isset($_GET['e'])) {
    echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
  }

  ?>
  
  <div class="container">
    <div class="hero-unit">
      <div class="row-fluid pagination-centered"> 

        <div class="span12" style="margin-bottom: 4em"> <!-- span12, page title -->

          <h1 id="white-border">Contact Us</h1>
        </div>

      </div>

      <div class="row-fluid">

        <div class="span8 offset2 pagination-centered well well-small" style="color: black; font-weight: bold; background-color: white; padding: 1em">
          If you are looking for a business opportunity or would like to ask questions about any of our products or ideas please feel free to contact us
        </div>

      </div>

      <div class="row-fluid" style="margin-top: 3em">

        <div class="span9">

          <form method="POST" action="contact-form.php" class="form-horizontal">
            <div class="control-group">

              <label for="name" class="control-label">Name</label>
              <div class="controls">
                <input type="text" id="name" name="contact_name" placeholder=" ">
              </div>
            </div>

            <div class="control-group">
              <label for="email" class="control-label">Email</label>
              <div class="controls">
                <input type="text" id="email" name="senders_email" placeholder=" ">
              </div>
            </div>

            <div class="control-group">

              <label for="message" class="control-label">Message</label>
              <div class="controls">
                <textarea name="contact_message" id="message" name="message" rows="8" class="span8"></textarea>
              </div>

            </div>

            <div class="control-group">
              <div class="controls">
                <input type="hidden" name="save_hidden" value="contact_hidden_value">
                <button type="submit" class="btn">Send</button>
              </div>
            </div>

          </form>

        </div>

        <div class="span2 pagination-centered" style="margin-bottom: 2em">

          <br>
          <a href="https://twitter.com/TheRaptorBird" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @TheRaptorBird</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

          <br>

          <!-- Facebook Badge START --><br/><a href="https://www.facebook.com/TheRaptorBird" target="_TOP" title="RaptorBird"><img src="https://badge.facebook.com/badge/153130721402018.2310.1122255250.png" /></a><br/><!-- Facebook Badge END -->

          
        </div>

      </div> <!-- row fluid END -->


    </div>
  </div> <!-- container END -->



<?php include('footer.php'); ?>




  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>