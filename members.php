<!DOCTYPE html>
<html lang="en">
<head>
  <title>RaptorBird&mdash;Members</title>

  <?php
    include('head.php');
  ?>
  
</head>
<body>

  <?php

    $here = "members.php";
    include('navbar.php');

  ?>

    <div class="container" style="margin: 5em auto 5em auto">
      <div class="row-fluid">
        <div class="span12 pagination-centered"> <!-- page title -->
          <div id="white-border" style="font-weight: bold; line-height: 40px; font-size: 3.7em">
            <div>
              <p>Members</p>
            </div>
          </div>
        </div> <!-- span12 page title END -->
      </div> <!-- row-fluid END -->
    </div> <!-- container END -->

    <div class="container" style="margin-top: -5em; font-size: 1.1em">

      <div class="row-fluid">

        <div class="span12">

          <div class="span6 well pagination-centered" style="font-size: 1.1em; margin-top: 2em">
            <h3>Our titles and positions</h3>

            CEO, Chairman, and Founder
            <br>
            Rakshak Talwar
            <br>
            <a href="mailto:rakshak@raptorbird.com">rakshak@raptorbird.com</a>
            <br> <br>

            <span class="bringdown">
              COO and Co-founder
              <br>
              Bryan Dimas
              <br>
              <a href="bryan@raptorbird.com">bryan@raptorbird.com</a>

            </span>

          </div>

          <div class="span6 bringdown pagination-centered">
            <img src="img/aurora_raptorbird.jpg">
          </div>

        </div>
      </div>

    </div>

  <div class="container" style="font-size: 1.1em">
    <div class="row-fluid">

      <div class="span8 offset2 well" style="background-color: white">
        <h3>Background information on Members</h3>

        <span style="font-weight: bold">Rakshak Talwar</span> - Is an environmentalist and engineer/scientist at heart. Highly curious and loyal to the company he started. Leads the company as the CEO and has great goals for the RaptorBird such as boosting the company into the Fortune 500 and developing products that will allow humanity to succeed in the 3rd industrial revolution.

        <div class="bringdown">
          <span style="font-weight: bold">Bryan Dimas</span> - A creative and upcoming computer engineer who does an amazing job at maintaining the operations at RaptorBird. Bryan is learning programming quickly on his own time and easily applies his wealth of knowledge to work at RaptorBird.

        </div>
      </div>

    </div>
  </div>



<?php include('footer.php'); ?>




  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>