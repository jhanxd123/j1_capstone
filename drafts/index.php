<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Draft</title>
    <style type="text/css">

    *{
      box-sizing: border-box;
    }

    body{
      display: flex;
      justify-content: center;
      margin: 0;
    }

    body, html{
      height: 100%;
    }

    .side-nav{
      width: 25%;
      min-width: 180px;
      height: 100vh;
      min-height: 500px;
      padding: 1%;
      background-color: #D5F5E3;
    }

    .links{
      margin-bottom: 1%;
      height: 8%;
    }

    .links > a{
      text-decoration: none;
      color: black;
    }

    .vhcle-cntr{
      height: 100vh;
      min-height: 500px;
      width: 45%;
      min-width: 400px;
    }

    .inpt{
      display: inline-block;
      padding: 5%;
    }

    .right-nav{
      width: 30%;
      height: 100%;
      background-color: black;
      min-height: 500px;
    }

    .right-nav > #qrcode{
      width: 30%;
      min-height: 250px;
      height: 40%;
      background-color: white;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      justify-content: center;
    }
    </style>
    <script src="html2pdf.bundle.min.js"></script>
    <script>
      function savePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("qrcode");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
      }
    </script>
  </head>
  <body>
    <nav class="side-nav">
      <div class="links">
        <a href="javascript:void(0)">Vehicle Registration</a>
      </div>
      <div class="links">
        <a href="javascript:void(0)">Passenger Registration</a>
      </div>
    </nav>
    <section class="vhcle-cntr">
      <form action="index.php" method="post">
        <div class="inpt">
          <label for="fname">Firstname</label>
          <br>
          <input type="text" name="f_name" id="fname">
        </div>
        <div class="inpt">
          <label for="mname">Middlename</label>
          <br>
          <input type="text" name="m_name" id="mname">
        </div>
        <div class="inpt">
          <label for="lname">Lastname</label>
          <br>
          <input type="text" name="l_name" id="lname">
        </div>
        <div class="inpt">
          <label for="dateofbirth">Date of Birth</label>
          <br>
          <input type="date" name="dob" id="dateofbirth">
        </div>
        <div class="inpt">
          <label for="contactnumber">Contact #</label>
          <br>
          <input type="tel" name="cntcnm" id="contactnumber">
        </div>
        <div class="inpt">
          <label for="address">Address</label>
          <br>
          <input type="text" name="adrs" id="address">
        </div>
        <div class="inpt">
          <label for="destination">Destination</label>
          <br>
          <input type="text" name="dstntn" id="destination">
        </div>
        <div class="inpt">
          <input type="submit" value="Generate QR">
        </div>
      </form>
    </section>
    <aside class="right-nav">
      <div id="qrcode">
        <div style="background-color:#ABEBC6; width:189px; height:100%;">
          <?php
          echo "<div style='text-align:center;'><h3 style='margin:0'>" . $_GET['lname'] . ', ' . $_GET['fname'] . "</h3></div>";
          echo "<p style='display:inline;color:#ABEBC6'>a</p><img src='" . $_GET['file'] . "'><p style='display:inline; color:#ABEBC6'>a</p>";
          echo "<div style='text-align:center;'><h3 style='margin:0'>" . $_GET['destination'] . "</h3></div>";
          ?>
        </div>
      </div>
      <button onclick="savePDF()">Download</button>
    </aside>
  </body>
</html>


<?php
include("phpqrcode/qrlib.php");

if(isset($_POST['f_name']) && isset($_POST['m_name']) && isset($_POST['l_name']) && isset($_POST['adrs'])
    && isset($_POST['dob']) && isset($_POST['cntcnm']) && isset($_POST['dstntn'])){
      if(!empty(trim($_POST['f_name'])) && !empty(trim($_POST['m_name'])) && !empty(trim($_POST['l_name']))
         && !empty(trim($_POST['adrs'])) && !empty(trim($_POST['dob'])) && !empty(trim($_POST['cntcnm']))
         && !empty(trim($_POST['dstntn']))){

           $info = array("firstname" => $_POST['f_name'], "middlename" => $_POST['m_name'], "lastname" => $_POST['l_name'],
                         "address" => $_POST['adrs'], "Date of Birth" => $_POST['dob'], "Contact Number" => $_POST['cntcnm'],
                         "destination" => $_POST['dstntn']);

             $tempDir = "images/";
             $lname = $_POST['l_name'];
             $fname = $_POST['f_name'];
             $time = date("Y-m-d");
             $encoded_info = json_encode($info);
             $destination = $_POST['dstntn'];
             $filename = $_POST['l_name'] . "_" . $_POST['f_name'] . "_" . $destination . "_" . $time . ".png";
             $name = $_POST['l_name'] . "_" . $_POST['f_name'];
             $absolutePath = $tempDir.$filename;

             if(!file_exists($absolutePath)){
               QRcode::png($encoded_info, $absolutePath, QR_ECLEVEL_L, 3, 4 );
               header("Location: index.php?file=" . "images/" . $filename . "&lname=" . $lname . "&fname=" . $fname . "&destination=" . $destination);
             }
             else{
               echo "File exist";
             }
  }

}



// $img = imagecreatefrompng("./images/Joebie_Caorte.png");
//
// $black = imagecolorallocate($img, 0, 0, 0);
// $txt = "Hello World";
// $font = "./font/ostrich-regular.ttf";
// imagettftext($img, 24, 0, 5, 24, $black, $font, $txt);
//
// header('Content-type: image/png');
// imagepng($img);
// imagedestroy($img);
//
// imagepng($img, "test.png", 50);




//To add text
    // $text = "WTMatter.com Tutorial";
    //
    // //Background Image - The Image To Write Text On
    // $image = imagecreatefrompng('Joebie_Caorte.png');
    //
    // //Color of Text
    // $textColor = imagecolorallocate($image, 229, 85, 78);
    //
    // //Full Font-File Path
    // $fontPath = '/opt/lampp/htdocs/drafts/font/ostrich-regular.ttf';
    //
    // //Function That Write Text On Image
    // imagettftext($image, 60, 15, 225, 425, $textColor, $fontPath, $text);
    //
    // //Set Browser Content Type
    // header('Content-type: image/png');
    //
    // //Send Image To Browser
    // imagepng($image);
    //
    // //Clear Image From Memory
    // imagedestroy($image);
    //
