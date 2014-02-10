<html lnag="en">
<head>
	<title>RaptorBird&mdash;Programmable Capacitor</title>
	<?php
  include('head.php');
  ?>

  <style>

  div {
    font-size: 15px;
  }

  .accordion-group {
    border: none;
  }

  .buttons-accordion {
    color: white;
    font-size: 1.2em;
  }

  </style>

</head>
<body style="margin-bottom: 5em">

  <?php

  $here = "capacitor.php";
  include('navbar.php');

  ?>

  <div class="container" style="line-height: 30px; margin-top: 5em">
    <div class="row-fluid pagination-centered">
      <div class="span10 offset1">
        <div style="color: #5678ff; font-weight: bold; line-height: 40px; margin: 10px 0; font-size: 3.7em; text-shadow: -2px 0 white, 0 2px white, 2px 0 white, 0 -2px white">
          <div class="text-center" style="font-size: .8em">
            <p>Programmable</p>
          </div>
          <div class="text-center">
            <p style="font-size: 3.7em">&nbsp;Capacitor&nbsp;</p>
          </div>
        </div>

      </div> <!-- span END -->
    </div> <!-- row-fluid END -->

    <div class="row-fluid pagination-centered">
      <p><span style="font-size: 1.4em; text-shadow: 0 0 0.3em #8F7">4.29 Billion+ Capacitor Combinations. No Coding Required.</span></p>
    </div>

  </div> <!-- container END -->
  
  <div class="container" style="line-height: 30px; font-size: 1.3em; margin-top: 5em; margin-bottom: 5em">

    <div class="row-fluid">
      <div class="span8 offset2">

        <div>
          <img src="img/x1.png">
        </div>

      </div>
    </div>

    <div class="row-fluid">
      <div class="span10 offset1">
        <h1 style="color: green; font-size: 1.7em; padding-bottom: .4em">Humanity has always blossomed when makers and tinkerers got their hands on the right tools to design a better world.</h1>
        <div class="well">

          <div class="panel-group" id="accordion">

            <div class="panel panel-default">


              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="panel-title">
                    <span style="font-size: larger">
                      There’s a need for making hardware more like software. The experience of tinkering and building with electronics is very rewarding. 
                      You’re able to design, build, and execute your creations at a level you’ve always dreamed of. You learn about an amazing way to self 
                      fulfillment and progress, all while being able to hold your creations in your hands. <br> <br>
                    </span>
                  </div>
                </div>
              </div>
            </div>


            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <div onClick="this.style.display='none'">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><button class="btn btn-large" style="margin-bottom: .7em; color: royalblue">See more</button></a>
                  </div>
                </h4>

              </div>

              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    However, getting started with electronics isn’t always the easiest. You have to deal with new terminology, inadequate and 
                    incomplete information, and most importantly, a lack of immediate tools and resources, and the knowledge required to work 
                    with them. Even with today’s super connected world, and mass availability of low cost and cheap information, we still find 
                    ourselves asking questions such as. Where can I get that? How do I use it? Please, how do I make this easier?!
                  </p>

                  <p>
                    It’s also evident that these issues have mostly been mitigated in the world of software. Where mass availability of information
                    directly translates into free and/or cheap development tools that arrive as fast as you can click “download” and the speed of 
                    your internet connection. And practical implementation and prototyping depend more on a working keyboard and monitor than physical 
                    frustrations.
                  </p>

                  <p>
                    So how can we bring this solution from the world of bits and bytes to the world of atoms and physical laws? Simple, redesign the 
                    tools that are needed to create, invent, and explore. Design them with the same principles of accessibility, low cost, and ease 
                    of use in mind. Then you can change the world of hardware. And that’s exactly what we’ve done with the Programmable Capacitor. 
                    With just a few switches you can select a capacitance combination that’ll make your circuit function as intended, and maybe a bit 
                    better! The Programmable Capacitor may not use any code, but it was designed with software in mind. The idea that an individual or 
                    small team can design a revolution with the limited number of keys on a keyboard inspired the RaptorBird team to design a hardware 
                    tool that can port over that very ease to your breadboard.
                  </p>


                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span6 offset3">
        <img src="img/x4.png" style="margin-top: 4em; margin-bottom: 4em">
      </div>
    </div>

    <div class="row-fluid">
      <div class="span10 offset1">


        <div class="accordion" id="accordion2">


          <div class="accordion-group">

            <div class="accordion-heading">
              <button class="btn btn-primary">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">
                  <span class="buttons-accordion">Why the capacitor?</span>
                </a>
              </button>
            </div>

            <div id="collapseOne1" class="accordion-body collapse in">
              <div class="accordion-inner">
                Simple. Capacitors are found in just about every electronic circuit. They come in many sizes, voltage ranges, 
                and a dizzying array of values. These all can be overwhelming to a beginner in electronics, and an unnecessary 
                burden to many makers when they’re prototyping to find the right value for their circuit.
              </div>
            </div>
          </div>

          <div class="accordion-group">

            <div class="accordion-heading">
              <button class="btn btn-primary" style="margin-top: 2em">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                  <span class="buttons-accordion">So what exactly does it solve?</span>
                </a>
              </button>
            </div>

            <div id="collapseTwo2" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Three things: <span style="color: #DF2E25"><b>Time</b></span>, <span style="color: green"><b>Money</b></span>, and <span style="color: #3439FF"><b>Ease of Use</b></span>. <br></p>

                <p><span style="color: #DF2E25"><b>Time</b></span>: A lot of time is wasted looking for just the right part when designing circuits. Whether you misplaced the one capacitor you needed and can’t get a quick replacement because your local RadioShack doesn’t carry that value, or you are too busy deciphering teensy capacitor labels using a magnifying glass hoping you stumble across the right one in your bin of hundreds of capacitors. It becomes apparent that with a better tool you could’ve been done with your new toy a lot earlier. </p>

                <p><span style="color: green"><b>Money</b></span>: Anyone who’s done any level of making hardware knows that you need money, usually quite a bit more than you planned on spending for a specific project. The main reason people end up paying more for their design is because they realize they needed another part they never planned for, or they might want to add more functionality and clarity to their circuit. To accomplish that in an electronics design we can guarantee you that you’ll need some more capacitors! Sometimes rare values that you may not have, so you’ll either endlessly construct the desired value using your other capacitors (which of course you’ll have to dig through your parts bin for), or you’ll end up having to fork over your cash to get your circuit functioning.</p>

                <p>
                  <span style="color: #3439FF"><b>Ease of Use</b></span>: We want to make it easier to prototype and learn electronics. Everyone wants the prototyping process to be as smooth as possible because you don’t have to be a clairvoyant to know that there will be rough spots. That’s where the Programmable Capacitor comes to the rescue! Instead of digging through your pile of components, plugging in dozens of different values for the desired result, or dealing with tons of unnecessary math to get your high pass filter to work, you can just plug in the Programmable Capacitor and change the value of the capacitor in seconds by just clicking a few switches. No coding or digging required. 
                  A big constraint beginners have when learning electronics is getting accustomed to all the different components and buying all the right values. Usually this would boggle any beginner because all the different capacitor values can disorient a newbie (trust me, I was one). So instead of buying a bunch of random values you may never use, why not pick up a Programmable Capacitor and save yourself a hassle!
                </p>

              </div>
            </div>
          </div>

          <div class="accordion-group">

            <div class="accordion-heading">
              <button class="btn btn-primary" style="margin-top: 2em">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree3">
                  <span class="buttons-accordion">How Do I Use It?</span>
                </a>
              </button>
            </div>

            <div id="collapseThree3" class="accordion-body collapse">
              <div class="accordion-inner">

                <ol>
                  <li>Attach jumper wires into the screw terminal.</li>
                  <li>Place other ends of Jumper Wires into breadboard.</li>
                  <li>Select desired capacitor value(s).</li>
                </ol>

                Capacitor values add up. So just pick the values that'll add up to your desired value, it's that easy! You have a plentiful range with many combinations in between! You'll be able to do quite a bit of selecting and fine tuning in a matter of seconds.
              </div>
            </div>
          </div>


        </div>


      </div>
    </div>

    <div class="row-fluid">
      <div class="span1"></div>
      <div class"span4">
        <button class="btn btn-success btn-large" style="margin-left: 2.8%"><a href="contact.php"><span style="color: white">Contact Us</span></a></button>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span1"></div>
      <div class"span4" style="padding-left: 8%; padding-top: 4em">
        <span style="color: #00A9BE; font-size: 1.3em">Download OSHW files</span>
            <br>

            <a href="https://github.com/RakshakTalwar/ProgrammableCapacitor" target="_blank"><img src="img/github.png"></a> <br> <br>
            <img src="img/open_source_hardware.png" alt="open source hardware image">
      </div>
    </div>

    <div class="row-fluid visible-desktop" style="margin-top: 7em">
      <div class="span10 offset1 badge badge-info" style="font-size: .9em">

        <h1 style="font-size: 2em">Programmable Capacitor Visualization</h1>
        <p>A very handy file that helps you select the switches based on your desired value.</p> <br />
        Author: Rick Skubic &nbsp; &nbsp; &nbsp; <button class="btn btn-large" style="margin-bottom: .7em"><a style="color: darkOrange" href="programmable_capacitor.xlsx">Excel</a></button>
        <button class="btn btn-large" style="margin-bottom: .7em; margin-left: 2em"><a style="color: darkOrange" href="programmable_capacitor_ods.ods">OpenOffice/LibreOffice</a></button>

      </div>
    </div> <br />

    <div class="row-fluid hidden-desktop" style="margin-top: 7em">
      <div class="span10 offset1 alert" style="font-size: .9em">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h1 style="font-size: 2em">Programmable Capacitor Visualization</h1>
        <p>A very handy Excel file that helps you select the switches based on your desired value. Available for download on desktop.</p> <br />
      </div>
    </div> <br />

    <div class="row-fluid">
      <div class="span10 offset1 alert alert-success visible-phone" style="font-size: .9em">
        <p style="font-size: 2em; padding-top: .8em">Many thanks to our greatly appreciated contributors!</p> <br />
        <button class="btn btn-large" data-toggle="modal" data-target="#thanks" role="dialog" style="margin-left: 1em">Display Contributors</button>
      </div>
      <div class="span10 badge badge-success hidden-phone" style="font-size: .9em; margin-left: 8.55%">
        <p style="font-size: 2em; padding-top: .8em">Many thanks to our greatly appreciated contributors!</p> <br />
        <button class="btn btn-large" data-toggle="modal" data-target="#thanks" role="dialog" style="margin-bottom: .7em">Display Contributors</button>

      </div>

      <div id="thanks" class="modal hide fade" style="color: black">
        <div class="modal-header pagination-centered">
          <h3>~ You Deserve A Round Of Applause ~</h3>
        </div>
        <div class="modal-body">
          <div class="accordion" id="accordion22">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion22" href="#collapse11">
                  Contributors
                </a>
              </div>
              <div id="collapse11" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <ul style="list-style-type: none">
                    <li>Ashley Wurzbacher</li>
                    <?php include('names.php'); ?>
                    <li>@TheJamesJones</li>
                    <li class="visible-phone" style="visibility:hidden">--------------</li>
                  </ul>
                </div>
              </div>
            </div>
              <!-- ALL OTHER BACKERS
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    Product Supporters
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <ul style="list-style-type: none">
                      <li>Rakshak</li>
                    </ul>
                  </div>
                </div>
              </div> -->
            </div>

          </div>
        </div>
      </div>
    </div> <!-- TEMPORARILY HIDDEN -->



    <?php include('footer.php'); ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/carousel.min.js"></script>

  </body>
  </html>