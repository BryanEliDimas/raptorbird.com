<!DOCTYPE html>
<html lang="en">
<head>
  <title>RaptorBird&mdash;SleepLite Kit</title>
  
  <?php
    include('head.php');
  ?>
  
  <style type="text/css">

  h3 {
    color: #0096FF;
  }

  </style>

  <!-- JS (jQuery) used to minimize the alert note starts here -->
  <script type="text/javascript">
  function toggleDiv(divId) {
    $("#"+divId).toggle();
  }
  </script>
  <!-- ENDs here -->

</head>
<body> <!-- ; color: gray; margin-top: 60px; font-size: 18px; font-weigth: 200; line-height: 30px -->


  <!-- Display the navbar with php -->
  <?php

    $here = "sleeplite-kit.php";
    include('navbar.php');

  ?>

    <div class="container" style="line-height: 30px; margin-top: 5em; font-weight: bold">
      <div class="row-fluid">
        <div class="span6 offset3 pagination-centered">
          <h1 style="color: #5678ff; font-weight: bold; line-height: 40px; margin: 10px 0; font-size: 3.7em; text-shadow: -2px 0 white, 0 2px white, 2px 0 white, 0 -2px white; font-size: 3.2em; line-height: 1">SleepLite Kit</h1>
        </div> <!-- span6 END -->
      </div> <!-- row-fluid END -->

      <div class="row-fluid">
        <div class="span6 offset3 pagination-centered" style="margin-top: 2em">
          <img src="img/kit_complete.jpg">
        </div>
      </div>

      <br> <br>
      <div class="row-fluid" style="line-height: 30px; font-size: 1.3em">
        <div class="span8">
          <dl> <!-- description list -->
            <dt>
              <dd>
                <h3>Step 1: Program</h3>
                <ol style="list-style-type: none">

                  <a href="javascript:toggleDiv('alert');" class="close"><i class="icon-remove"></i></a>

                  <div class="alert alert-error" id="alert">
                    Note: The kits come with preprogrammed ICs, however if you would like to hack and modify the code for a different experience then follow this tutorial below, otherwise you can skip the next step and go directly to soldering!
                    This process is fairly straightforward and if you have any questions or problems please email us at: <a href="mailto:contact@raptorbird.com">contact@raptorbird.com</a>
                  </div>

                  <li>Step 1: Follow this tutorial to prepare your Arduino and computer for uploading code to your ATTiny85 <a href="http://hlt.media.mit.edu/?p=1695.">mit.edu</a>
                  </li>

                  <li>
                    Step 2: Upload the code below to your ATTiny85 using the instructions provided in step one.
                  </li>
                  <br>

                  <div class="alert alert-info">
                    <b>Note: </b> Make sure it’s on 8MHz, you may need to burn the bootloader by selecting Tools > Burn Bootloader in the Arduino IDE after you select the ATTiny85 8MHz in the Tools > Board menu.
                  </div> <br> <!-- br to get rid of cutoff space that randomly appeared -->

                </ol>
              </dd>
            </dt>
          </dl> <!-- description list END -->

          <div style="height: 15em; overflow: auto">
            <pre>
            <code>
              /*
                Fades an LED at rate of human heart. Note: values are different as this
                is for ATTiny85 @ 8MHz.
                Instructions for ATTiny85 with Arduino Bootloader
                http://hlt.media.mit.edu/?p=1695
              */
               
              #define lightSensor 2 //connect to pin 3 of ATTiny85 
              #define led 1 //Connect to pin 6 of ATTiny85
              int lightReading; //value of ambient light being received
              float time = 1900.0; //time interval, sets frequency
               
              void setup(){ 
                pinMode(led, OUTPUT); //Tells the ATTiny85 that the pin we're connecting 
              }                       //the LED to is an output
                                     
               
              void loop(){
                lightReading = analogRead(lightSensor);
                
                if(lightReading <= 261){// if light level is low enough start SleepLite                                         
                  for(int i=0; i<=255; i++){ //Gently fades in the LED
                    analogWrite(led, i);
                    delayMicroseconds(time);
                  }
                  for(int i=255; i>=0; i--){ //Gently fades out the LED
                    analogWrite(led, i); 
                    delayMicroseconds(time);
                  }
                  if(time < 2600.0) 
                    time+=1.5; //rate at which the flashing slows (higher number=slower)
                }
                else{ //if too much ambient light keep SleepLite off 
                  analogWrite(led, 0); //turns off LED
                  time = 1900.0; //resets frequency to 1Hz
                  delay(1); //gives ATTiny85 a break
                }
              }
            </code>
          </pre>
          </div>

        </div> <!-- span8 END -->

        <br> <br> <!-- br to get rid of cutoff space that randomly appeared -->
        <div class="span3 pull-right">

          <a href="http://www.jameco.com/webapp/wcs/stores/servlet/ProductDisplay?search_type=jamecoall&catalogId=10001&freeText=sleeplite&langId=-1&productId=2184157&storeId=10001&ddkey=http:StoreCatalogDrillDownView" target="_blank">
            <button class="btn btn-success btn-block" type="button" style="font-size: 1.5em; line-height: 1.7em"><span style="text-decoration: none">Purchase Now</span></button>
          </a> <br>

          <div class="pagination-centered">
            <span style="color: #0196FB">Download OSHW files</span>
            <br>

            <a href="https://github.com/RakshakTalwar/SleepLite"><img src="img/github.png">
            </a> <br> <br>
            <img src="img/open_source_hardware.png" alt="open source hardware image">
          </div>

        </div>

        <div class="span1"> <!-- emtpty --> </div>

      </div> <!-- row-fluid END -->



      <div class="row-fluid bringdown">
        <div class="span8">
          <h3>Step 2: Solder</h3>

          <div class="bringdown" style="margin-top: 0">
            Identify all the parts and make sure you have everything.
          </div>


          <img src="img/allcomponentslabeled.jpg">

        </div> <!-- span8 END -->
      </div> <!-- row-fluid END -->

      <div class="row-fluid bringdown">
        <div class="span8">

          <div class="bringdown" style="margin-bottom: 0">
            Begin by soldering the barrel jack connector, switch, and capacitor (make sure to connect the capacitor in the proper orientation, as it’s polarized). The negative side of the capacitor should go to the hole marked by a negative symbol on the printed circuit board.
          </div>


        </div> <!-- span8 END -->
      </div> <!-- row-fluid END -->

      <div class="row-fluid pagination-centered">

        <div class="span8">
          <img src="img/kit_one.png" class="bringdown">
          <img src="img/kit_two.png" class="bringdown pull-right">
        </div> <!-- span8 END -->

      </div> <!-- row-fluid END -->

      <div class="row-fluid">

        <div class="span8">
          Next, solder the 8-pin IC socket, Blue LED, and 6-pin header. 
        </div> <!-- span8 END -->

      </div> <!-- row-fluid END -->

      <div class="row-fluid pagination-centered">
        <div class="span4">
          <img src="img/kit_three.jpg" class="bringdown">
        </div>

        <div class="span4">
          <img src="img/kit_four.png" class="bringdown pull-right">
        </div>

      </div> <!-- row-fluid END -->

      <div class="row-fluid">
        <div class="span8 bringdown">
          Then solder the photocell, potentiometer, and resistors. Note: Please make sure to put the correct resistor in the correct place. There are two resistors. A 10K Ohm which is color-coded brown-black-orange-gold, and a 1K Ohm which is color-coded brown-black-red-gold. Mixing up these two resistors will cause your circuit to not function.
          The printed circuit board has these labeled for your convenience. 
        </div> <!-- span8 END -->
      </div> <!-- row-fluid END -->

      <div class="row-fluid pagination-centered">
        <div class="span8">
          <img src="img/kit_five.png" class="bringdown">
        </div> <!-- span8 END -->
      </div> <!-- row-fluid END -->

      <div class="row-fluid">
        <div class="span8">
          Next you need to solder the battery holder’s wires to the barrel jack adapter. Unscrew the metal portion of the barrel jack connector from the plastic base by twisting it in a counterclockwise direction. Slip both wires from the battery holder through the black base (first through the narrow portion then out the wider portion) and then solder the red wire to the smaller center lead on the metal piece of the barrel jack and the black wire to the larger outer metal piece of the barrel jack adapter. Then screw the metal part of the adapter to the black base.
        </div>
      </div>

      <div class="row-fluid">
        <div class="span8 pagination-centered">
          <img src="img/kit_six.png" class="bringdown">
          <img src="img/kit_seven.jpg" class="bringdown pull-right">
        </div>
      </div>

      <div class="row-fluid">
        <div class="span8">
          Insert ATTiny85 into IC socket. Make sure to place correctly, the little dimple on the ATTiny85 should be towards the bottom left, and the text on the ATTiny85 should be right side up along with the rest of the PCB. 
        </div>
      </div>

      <div class="row-fluid pagination-centered">
        <div class="span8">
          <img src="img/kit_eight.png" class="bringdown">
        </div>
      </div>

      <div class="row-fluid">
        <div class="span8">
          Insert batteries into the battery holder (please insert in the proper orientation or you can damage the circuit, the flat negative side of the battery should go to the spring side of the battery holder). 

          Insert the four adhesive rubber bumper feet onto the corners of the bottom of the printed circuit board. 

          Plug the battery holder into the barrel jack of the printed circuit board, turn the switch to the left position, and leave on your nightstand. 
        </div>
      </div> <!-- row-fluid END -->

      <div class="row-fluid pagination-centered">
        <div class="span8">
          <img src="img/kit_nine.png" class="bringdown">
        </div>
      </div> <!-- row-fluid END -->




      <div class="row-fluid">
        <h3>Step 3: Learn and Hack!</h3>
        <div class="span8 well bringdown" style="color: black">

          <div class="bringdown">
            &nbsp; When it’s dark the LED should fade in and out at specific rates to help you go to sleep. The LED initially fades in and out at 1 Hz (one cycle per second). Then over a period of about 9 minutes the LED oscillates at 0.75 Hz. This gradual change in frequency helps you sleep by gently relaxing your heart rate and lowering your stress and anxiety levels.
          </div>

          <div class="bringdown">
            &nbsp; In order to see the light fade in and out, place your SleepLite on your nightstand (or any other flat surface) and allow the light to gently illuminate your ceiling. To adjust the light levels, turn the potentiometer knob on the top left of your PCB.
          </div>

          <div class="bringdown">
            &nbsp; How it works: Your heart usually beats at 60 BPM (beats per minute) which can also be written as 1Hz. The blue LED in the SleepLite follows the same pattern. As your eyes begin to focus on the light, your heart automatically synchronizes with it. Over time, the frequency reduces and your heartbeat follows. This drop in frequency in your heartbeat safely relaxes you to sleep and eliminates your anxiety and stress. 
            The blue color also helps you relax because our brains are hardwired into finding blue to be a soothing and relaxing color. 
            So lay down, relax, and watch the light show.
          </div>

          <div class="bringdown">
            &nbsp; How the circuit works: The LED is powered from the ATTiny85 microcontroller. The fading effect is achieved through PWM(Pulse Width Modulation) which changes the duty cycle(amount of time it’s on versus amount of time it’s off) of the signal, resulting in a change of brightness. The current through the LED is limited by the 1K Ohm resistor and the potentiometer. You can change the brightness by turning the knob on the circuit because turning the knob changes the resistance of the potentiometer which allows more or less current to get through.
          </div>

          <div class="bringdown">
            &nbsp; To ensure that the SleepLite is on only when it’s dark, there is a photocell. The photocell is a light-sensitive resistor whose resistance changes according to the light it receives. The photocell, along with the 10K Ohm resistor, form a voltage divider. The voltage divider outputs a voltage signal that corresponds with the light level of the surrounding area. This voltage is read by the microcontroller so it knows when to turn the LED on. 
            Remember that you can change the code and create new features for your SleepLite! The code includes comments to show you exactly what is going on. Feel free to hack it!
          </div>

          <div class="bringdown">
            Thanks, I hope you enjoy your SleepLite!
          </div>

          Sincerely,
          Rakshak Talwar
        </div> <!-- span8 END -->
      </div> <!-- row-fluid END -->
  </div> <!-- container END -->


<?php include('footer.php'); ?>



  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>