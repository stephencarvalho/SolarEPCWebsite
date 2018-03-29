<!DOCTYPE html>
<html lang="en">
<title>Robotics | Industrial Automation | Renewable Energy</title>
<head>
  <!-- set the title of you site -->
  <title>Vision Mechatronics</title>
  <!-- encoding -->
  <meta charset="utf-8">
  <!-- responsiveness, scaling... -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- set the descritpion of you site -->
  <meta name="description" content="Vision Mechatronics operates in segments like research and development of Robotics, Industrial Automation and Renewable Energy. Our mission is to provide our customers with complete tailor made solutions that are customized to their specific needs and requirements.">
  <!-- set author of your site -->
  <meta name="author" content="Kadbros Solutions LLP">
  <!-- IE compatibility modes -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- modernizr -->
  <script src="js/modernizr.js"></script>
  <!-- jwplayer -->
  <script src="tools/jwplayer/jwplayer.js"></script>
  
  <!-- custom styling -->
  <link href="css/style.css" rel="stylesheet">
  <!-- iconic font - FontAwesome -->
  
  <!-- Google font -->
  <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
  <!-- site thumbnail -->
  <link rel="image_src" href="thumbnail.png" />
  <!-- favicon -->
  <link rel="icon" type="image/ico" href="favicon.ico">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries. All other JS at the end of file. -->
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <style>
        html * {
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }

        *, *:after, *:before {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
        }





        img {
          max-width: 100%;
        }

        h1, h4 {
          font-family: "Open Sans", sans-serif;
          font-weight: bold;
        }

/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.cd-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.cd-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}

/* -------------------------------- 

Main components 

-------------------------------- */
header {
  height: 200px;
  line-height: 200px;
  text-align: center;
  background: #303e49;
}
header h1 {
  color: #ffffff;
  font-size: 18px;
  font-size: 1.125rem;
}
@media only screen and (min-width: 1170px) {
  header {
    height: 300px;
    line-height: 300px;
  }
  header h1 {
    font-size: 24px;
    font-size: 1.5rem;
  }
}

#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#cd-timeline::before {
  /* this is the vertical line */
  content: '';
  position: absolute;
  top: 0;
  left: 18px;
  height: 100%;
  width: 4px;
  background: #d7e4ed;
}
@media only screen and (min-width: 1170px) {
  #cd-timeline {
    margin-top: 3em;
    margin-bottom: 3em;
  }
  #cd-timeline::before {
    left: 50%;
    margin-left: -2px;
  }
}

.cd-timeline-block {
  position: relative;
  margin: 2em 0;
}
.cd-timeline-block::after {
  clear: both;
  content: "";
  display: table;
}
.cd-timeline-block:first-child {
  margin-top: 0;
}
.cd-timeline-block:last-child {
  margin-bottom: 0;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-block {
    margin: 4em 0;
  }
  .cd-timeline-block:first-child {
    margin-top: 0;
  }
  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }
}

.cd-timeline-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  box-shadow: 0 0 0 4px #ffffff, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
}
.cd-timeline-img img {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -12px;
}
.cd-timeline-img.cd-picture {
  background: #75ce66;
}
.cd-timeline-img.cd-movie {
  background: #c03b44;
}
.cd-timeline-img.cd-location {
  background: #f0ca45;
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-img {
    width: 60px;
    height: 60px;
    left: 50%;
    margin-left: -30px;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translateZ(0);
    -webkit-backface-visibility: hidden;
  }
  .cssanimations .cd-timeline-img.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-img.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-1 0.6s;
    -moz-animation: cd-bounce-1 0.6s;
    animation: cd-bounce-1 0.6s;
  }
}

@-webkit-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -moz-transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -moz-transform: scale(1.2);
  }
  100% {
    -moz-transform: scale(1);
  }
}
@keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
}
.cd-timeline-content {
  position: relative;
  margin-left: 60px;
  background: #ffffff;
  border-radius: 0.25em;
  padding: 1em;
  box-shadow: 0 3px 0 #d7e4ed;
}
.cd-timeline-content::after {
  clear: both;
  content: "";
  display: table;
}
.cd-timeline-content h4 {
  color: #303e49;
}
.cd-timeline-content p, .cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
  font-size: 13px;
  font-size: 0.8125rem;
}
.cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
  display: inline-block;
}
.cd-timeline-content p {
  margin: 1em 0;
  line-height: 1.6;
}
.cd-timeline-content .cd-read-more {
  float: right;
  padding: .8em 1em;
  background: #acb7c0;
  color: #ffffff;
  border-radius: 0.25em;
}
.no-touch .cd-timeline-content .cd-read-more:hover {
  background-color: #bac4cb;
}
.cd-timeline-content .cd-date {
  float: left;
  padding: .8em 0;
  opacity: .7;
}
.cd-timeline-content::before {
  content: '';
  position: absolute;
  top: 16px;
  right: 100%;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-right: 7px solid #ffffff;
}
@media only screen and (min-width: 768px) {
  .cd-timeline-content h4 {
    font-size: 20px;
    font-size: 1.25rem;
  }
  .cd-timeline-content p {
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
    font-size: 14px;
    font-size: 0.875rem;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-content {
    margin-left: 0;
    padding: 1.6em;
    width: 45%;
  }
  .cd-timeline-content::before {
    top: 24px;
    left: 100%;
    border-color: transparent;
    border-left-color: #ffffff;
  }
  .cd-timeline-content .cd-read-more {
    float: left;
  }
  .cd-timeline-content .cd-date {
    position: absolute;
    width: 100%;
    left: 122%;
    top: 6px;
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
    top: 24px;
    left: auto;
    right: 100%;
    border-color: transparent;
    border-right-color: #ffffff;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
    left: auto;
    right: 122%;
    text-align: right;
  }
  .cssanimations .cd-timeline-content.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-content.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-2 0.6s;
    -moz-animation: cd-bounce-2 0.6s;
    animation: cd-bounce-2 0.6s;
  }
}

@media only screen and (min-width: 1170px) {
  /* inverse bounce effect on even content blocks */
  .cssanimations .cd-timeline-block:nth-child(even) .cd-timeline-content.bounce-in {
    -webkit-animation: cd-bounce-2-inverse 0.6s;
    -moz-animation: cd-bounce-2-inverse 0.6s;
    animation: cd-bounce-2-inverse 0.6s;
  }
}
@-webkit-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -moz-transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -moz-transform: translateX(20px);
  }
  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
    -moz-transform: translateX(-100px);
    -ms-transform: translateX(-100px);
    -o-transform: translateX(-100px);
    transform: translateX(-100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
@-webkit-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
  }
  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -moz-transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -moz-transform: translateX(-20px);
  }
  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
    -moz-transform: translateX(100px);
    -ms-transform: translateX(100px);
    -o-transform: translateX(100px);
    transform: translateX(100px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
.img1{
  max-width: 100%;
  height: 12rem;
  border-radius: 100px;
  border: 5px solid black;
}
.card{
  background-color: #0097a7;
  height:400px;
}
.input-field label {
 color: #000;
}
/* label underline focus color */
.input-field input[type=text],input[type=tel],input[type=email],textarea.materialize-textarea {
 border-bottom: 1px solid #000;
 box-shadow: 0 1px 0 0 #000;
}
/* label focus color */
.input-field input[type=text]:focus + label {
 color: #000;
}
.input-field input[type=tel]:focus + label {
 color: #000;
}
.input-field input[type=email]:focus + label {
 color: #000;
}
.input-field textarea.materialize-textarea:focus + label {
 color: #000;
}
body{
  color:black;
}
.item1 {
  position: relative;


  overflow: hidden;
  width: 100%;
}
.item1 img {
  max-width: 100%;

  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item1:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.2);
}

</style>

<script>
 var options = [
 {selector: '.class', offset: 200, callback: customCallbackFunc } },
 {selector: '.other-class', offset: 200, callback: function() {
  customCallbackFunc();
} },
];
Materialize.scrollFire(options);


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-72590708-1', 'auto');
ga('send', 'pageview');
</script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="61">
  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W267Z5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W267Z5');</script>

  <?php include 'nav1.php';?>

  <!-- nav end-->
  <!--start career header-->
  <section id="career-top" data-bottom-top="background-position: 50% 24.493px;" data-top-bottom="background-position: 50% 50px;">
    <h1 class="header" style="color:#0097a7">
      <b>
        Looking For Real Gems<br><center style="color:black">LIKE YOU!</center>
      </b>
    </h1>

  </section>

  <!--start career-->
  <style type="text/css">
    ul.tabs
    {
      flex-direction: column;  !important;
      height: 100% !important; 
      float: left !important;

    }
    ul.tabs .indicator
    {
      display: none
    }
    ul.tabs li:active{
      color: red !important;
    }
    .tabs .tab a {
      color: #0097a7;
      display: block;
      width: 100%;
      height: 100%;
      text-overflow: ellipsis;
      overflow: hidden;
      transition: color .28s ease;
    }
    .tabs .tab a:hover {
      color: #000;
      display: block;
      width: 100%;
      height: 100%;
      text-overflow: ellipsis;
      overflow: hidden;
      transition: color .28s ease;
    }
    .li1{
      border-right: 1px  solid #0097a7;
      border-bottom: 1px  solid #0097a7;
    }

  </style>
  <div class="row ">
    <div class="col l4 s12" >
      <ul class="tabs" >
        <li class="tab col l12 s12 li1" ><a class="active" href="#test3" style="text-align:left;color:black"><b>CAREER'S</b></a></li>
        <li class="tab col l12 s12 li1"><a href="#test1" style="text-align:left;">Business Development(2)</a></li><br>
        <li class="tab col l12 s12 li1"><a  href="#test2" style="text-align:left;">Content Writing(1)</a></li>

        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Marketing & Stratergy(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Mobile App Development(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Accountant(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Electrical Engineer(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Mechanical Engineer(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Mechatronics Engineer(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Electronics Engineer(1)</a></li>
        <li class="tab col l12 s12 li1"><a href="#test4" style="text-align:left;">Digital Marketing(1)</a></li>
      </ul>

      <!-- Job Application Form-->
      <div  class="col s12 l12 " style="border: 5px double #0097a7; background-color:black ;margin:0; padding:0;">
        <br>
        <h3 style="color:white;"><p class="flow-text">Looking for a Job? </p>
          <p class="flow-text">Fill-in your details.</p></h3>
        </div>

        <img src="img/li-rack/careers_img.jpg" width="100%" style=" border: 5px double #0097a7;">
        <form class="col s12" action="career-submit.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="input-field col s10 m6 l9 offset-s1 offset-m3 offset-l1">

                      <input id="name" type="text" name="candidateName" class="validate" required>
                      <label for="name">Name<span style="color:red;">*</span></label>
                    </div>
                  </div>
                  <div class="row">

                    <div class="input-field col s10 m6 l9 offset-s1 offset-m3 offset-l1">

                      <input id="email" type="email" name="candidateMail" class="validate" required>
                      <label for="email">Email Id<span style="color:red;">*</span></label>
                    </div>
                  </div>
                  
                    <div class="row">

                    <div class="input-field col s10 m6 l9 offset-s1 offset-m3 offset-l1">

                      <input id="mobile" type="text" name="mobile" class="validate"  required>
                      <label for="mobile">Mobile/Telephone</label>
                    </div>
                  </div>
                <div class="row">
                    <div class="col col s10 m6 l9 offset-s1 offset-m3 offset-l1">
                      <div class="file-field input-field">
                        <div class="btn cyan darken-2"><i class="material-icons right">file_upload</i>File Upload
                          
                          <input type="file" name="attachment" accept=".doc,.docx,.pdf,.txt" required>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div> 
                    </div>    
                </div>
                  <div class="row">

                    <div class="input-field col s10 m6 l9 offset-s1 offset-m3 offset-l1">

                     <textarea id="comments" class="materialize-textarea" name="candidateMsg"></textarea>
          
                      <label for="comments">Comments</label>
                    </div>
                  </div>
                  <div class="row"> 
                  <div class="col l9 s10 m10 offset-s1 offset-m1 offset-l1">
                    <?php
                            $min_number = 1;
                            $max_number = 15;

                            $random_number1 = mt_rand($min_number, $max_number);
                            $random_number2 = mt_rand($min_number, $max_number);

                            echo 'Please verify that you are human by solving this simple problem: ' . $random_number1 . ' + ' . $random_number2 . ' = ?';
                          ?>
                          <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
                          <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />

                          <input name="captchaResult" type="text" required/>
                  </div>
                  </div>
               
<br>
<br>
  <center><button class="btn waves-effect waves-light cyan darken-2"  value="Send" type="submit" id="feedbtn" name="submit">Submit
                </button></center>  <br> <br>
                
                </form>

       <!-- Job Application Form End-->


       
     </div>
     <style type="text/css">
       blockquote {
        margin: 20px 0;
        padding-left: 1.5rem;
        border-left: 5px solid #0097a7;
      }
    </style>
    <div class="col l8 s12">
      <div id="test1" class="col s12">
        <h1>Business Development</h1>
        <p>Experience Range: <span style="color:#424242;" >8years</span></p>
        <p>Location:<span style="color:#424242;" > Mumbai</span></p>
        <p>Reporting To: <span style="color:#424242;" >Director</span></p>
        <p>Qualifications Required: </p>
        <span style="color:#424242;" >
          <ol style="list-style-type: square;">
            <li>BSE/IT</li>
            <li>MBA</li>


          </ol></span>
          <p>Role:</p>
          <span style="color:#424242;" >
            <ol style="list-style-type: square;">
              <li>DEsign website</li>
              <li>Develop Website</li>

            </ol>
          </span>






        </div>
        <div id="test2" class="col s12">
          Test 2
        </div>
        <div id="test3" class="col s12">
          <div class="row ">
            <div class="col s12 m12 l9  offset-s0 offset-m0 offset-l0" style="margin-left:">
              
              <div class="row">


                <div class="col l1 m5  ">

                  <h1 class=" flow-text" size="18" style="color:#0097a7; font-weight:900; font-size:2.60em; float:left; text-align:left "><b><blockquote>Why Vision<span style=" color:black;"> Mechatronics?</span></blockquote></b></h1> 

                </div>
              </div>

              <h5 style="color:#0097a7">We always welcome a new talent to the VMPL family.</h5>
              <p>At VMPL, we are proud to function in a work environment that thrives on cultural diversity and mutual trust. Our focus lies on our people, who are our most valuable asset.</p>
              <p>VMPL provides equal employment opportunities to all its employees and applicants for employment without regard to sex, race, color, religion, marital status, national origin, age, sexual orientation, gender identity, disability, veteran status, pregnancy or any other factor that may be protected by law. This policy extends to all VMPL employees and includes all aspects of the employment relationship.</p>
              <p>In keeping with our core values, VMPL fosters a diverse work environment characterized by respect and dignity for people and prohibits unlawful discrimination or harassment.</p>
              <p>We are evening hiring people looking for internships(including student & freshers). </p>

              
              <p>Send us your CV and we will get in touch with you when something suitable comes up.</p>
              <h3 ><b><blockqoute>Mission <span style="color:#0097a7">WOW!</span></blockqoute></b></h3>
              <p>At VMPL we offer a special incentive for all employees based on the WOW! mission.
                In the mission WOW! we look for employees to create, design or propose something that is out of the box,new, attractive and can be classified as WOW!</p>
                <h3><b> WE OFFER:</b></h3>
                <ol style="list-style-type:disc;">
                 <li>Competitive salary</li>
                 <li> Paid national holidays and vacation</li>
                 
                 <li> An excellent training program</li>
                 <li> Fast-paced working environment</li>
                 <li> Experience working with the latest technologies from leading industry experts</li>
               </ol>
             </div>

           </div>
         </div>
         <div id="test4" class="col s12">
          Test 4
        </div>
      </div>
    </div>

    

    

    <div class="row">

      <div class="row">


        <div class="col l4 m5  ">

          <h1 class=" flow-text" size="18" style="color:#0097a7; font-weight:900; font-size:2.60em; float:left; text-align:left "><b><blockquote>Vision Mechatronics<span style=" color:black;"> Testimonials</span></blockquote></b></h1> 

        </div>
      </div>
      <div class="col s12 m6 l6">

        

      </div>
      
    </div>
    <section id="cd-timeline" class="cd-container">
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4 >Parth Panchal</h4>
          <img class="img1" src="img/id.jpg">
          <p class="flow-text"><q >Loved Working with my partner stephen,the most awesome & funny collegue anyone could ask for. Most fun part of the job was making the calculator. Aur roz ka 2 muft ka chai aur kya maang sakteh. Vision Mechatronics Rocks! VMecha Bouy for life!</q></p>
          
          <span class="cd-date">July 2016</span>
        </div> <!-- cd-timeline-content -->

      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4>Parth Panchal</h4>
          <img class="img1" src="img/id.jpg">
          <p>Loved Working with my partner stephen,the most awesome & funny collegue anyone could ask for. Most fun part of the job was making the calculator. Aur roz ka 2 muft ka chai aur kya maang sakteh. Vision Mechatronics Rocks! VMecha Bouy for life!</p>
          
          <span class="cd-date">July 2016</span>
        </div> <!-- cd-timeline-content -->
        
      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4>Parth Panchal</h4>
          <img class="img1" src="img/id.jpg">
          <p>Loved Working with my partner stephen,the most awesome & funny collegue anyone could ask for. Most fun part of the job was making the calculator. Aur roz ka 2 muft ka chai aur kya maang sakteh. Vision Mechatronics Rocks! VMecha Bouy for life!</p>
          
          <span class="cd-date">July 2016</span>
        </div> <!-- cd-timeline-content -->
        
      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4>Parth Panchal</h4>
          <img class="img1" src="img/id.jpg">
          <p>Loved Working with my partner stephen,the most awesome & funny collegue anyone could ask for. Most fun part of the job was making the calculator. Aur roz ka 2 muft ka chai aur kya maang sakteh. Vision Mechatronics Rocks! VMecha Bouy for life!</p>
          
          <span class="cd-date">July 2016</span>
        </div> <!-- cd-timeline-content -->
        
      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4>Parth Panchal</h4>
          <img class="img1" src="img/id.jpg">
          <p>Loved Working with my partner stephen,the most awesome & funny collegue anyone could ask for. Most fun part of the job was making the calculator. Aur roz ka 2 muft ka chai aur kya maang sakteh. Vision Mechatronics Rocks! VMecha Bouy for life!</p>
          
          <span class="cd-date">July 2016</span>
        </div> <!-- cd-timeline-content -->
        
      </div> <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture">
          
        </div> <!-- cd-timeline-img -->

        <div class="cd-timeline-content">
          <h4>This Can Be You</h4>
          <img src="img/you.jpg"><br><br>
          <a class="waves-effect waves-light btn cyan darken-2  hide-on-small-only" href="career.php">View Current Openings</a>
          <a class="waves-effect waves-light btn cyan darken-2  hide-on-med-and-up" href="career.php">View  Openings</a>
        </div> <!-- cd-timeline-content -->
        
      </div> <!-- cd-timeline-block -->

      
    </section> <!-- cd-timeline -->
    <?php include 'footer.php';?>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
      $('ul.tabs').tabs();
    });

  </script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var $timeline_block = $('.cd-timeline-block');

  //hide timeline blocks which are outside the viewport
  $timeline_block.each(function() {
    if ($(this).offset().top > $(window).scrollTop() + $(window).height() * 0.75) {
      $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
    }
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
  _gaq.push(['_trackPageview']);

     //on scolling, show/animate timeline blocks when enter the viewport
     $(window).on('scroll', function() {
      $timeline_block.each(function() {
        if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
          $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        }
      });
    });
   });

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!--end scripts-->
</body>
</html>
