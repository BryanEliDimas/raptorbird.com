<!DOCTYPE html>

<html lang="en">

<head>
  <title>RaptorBird&mdash;Welcome</title>

  <?php
  include('head.php');
  ?>
  
  <meta name="description" content="Welcome to RaptorBird, a company that gives you the technology to leverage your life in ways you've always dreamed of!" >

  <!-- preload an image with javascript -->

  <script type="text/javascript">


  if (document.images) {      /* We don't want a browser that cannot even use the .images property to preload an image */
    var my_image = new Image();   /* This creates an instance of the image to be preloaded */
    my_image.src = "img/raptorbird.jpg";    /* This is where the image will come from, the src */
  } 


</script>

</head>

<body>



  <?php
  $here = "index.php";

  include('navbar.php');
  ?>



  <div class="container" style="line-height: 30px; margin-top: 5em">



    <div class="row-fluid">

      <div class="span6 pagination-centered">



        <div>

          <h1 style="font-size: 4em; font-family: 'Merriweather Sans', 'Arial-BoldMT', 'Arial', sans-serif;">RaptorBird</h1>

          <p style=" font-size: 18px; text-shadow: 0 0 5px gray">To be human</p>

        </div>



      </div> <!-- span6 END -->



      <div class="span6" style="font-size: 1.3em; margin-top: 6em; margin-bottom: 5em">

        <p class="well pagination-centered">Welcome to RaptorBird, a company that gives you the technology to leverage your life in ways you've always dreamed of!</p>

      </div> <!-- span6 END -->

    </div> <!-- row-fluid END -->



  </div> <!-- container END -->



  <div class="container">

    <div class="row-fluid">

      <div class="span6 offset3 pagination-centered">

        <img src="img/raptorbird.jpg">

      </div>

    </div> <!-- container END -->

  </div> <!-- row-fluid END -->



  <?php include('footer.php'); ?>


  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>



</body>

</html>