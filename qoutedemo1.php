 <?php 
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  

 <!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
  <script type="text/javascript">
    function GetRoute() {
        //*********DIRECTIONS AND ROUTE**********************//
        source = document.getElementById("txtSource").value;
        destination = document.getElementById("txtDestination").value;
        //*********DISTANCE AND DURATION**********************//
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
          origins: [source],
          destinations: [destination],
          travelMode: google.maps.TravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        }, function (response, status) {
          if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.value;
            var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("dvDistance");
            dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: &#8377;" + ((distance/1000)*5+300) + "<br />";
            dvDistance.innerHTML += "Duration:" + duration;

          } else {
            alert("Unable to find the distance via road.");
          }
        });
      }
    </script>-->
  </head>

  <body>


    <script type="text/javascript">
      function display(obj,id1,id2,id3,id4,id5) {
        txt = obj.options[obj.selectedIndex].value;
        document.getElementById(id1).style.display = 'none';
        document.getElementById(id2).style.display = 'none';
        document.getElementById(id3).style.display = 'none';
        document.getElementById(id4).style.display = 'none';
        document.getElementById(id5).style.display = 'none';
        if ( txt.match(id1) ) {
          document.getElementById(id1).style.display = 'block';
        }
        if ( txt.match(id2) ) {
          document.getElementById(id2).style.display = 'block';
        }
        if ( txt.match(id3) ) {
          document.getElementById(id3).style.display = 'block';
        }
        if ( txt.match(id4) ) {
          document.getElementById(id4).style.display = 'block';
        }
        if ( txt.match(id5) ) {
          document.getElementById(id5).style.display = 'block';
        }
      } 
    </script>

    <?php 
    include 'nav1.php';
    $_SESSION['distance'] = 100;
    ?>
    <div class="container">
      <form action="PayUMoney_form.php" method="post">
        <div class="card" style="padding:20px;border:1px dashed #0097a7;">
          <center><h1><b>Find out your site visit charge?</b></h1></center>
          <div class="row">

            <div class="input-field col s12 m5 l5 offset-l3">
              <i class="material-icons prefix">account_circle</i>
              <input id="name" type="text" name="name"   />
              <label for="name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m5 l5 offset-l3">
              <i class="material-icons prefix">location_on</i>
              <input id="address" type="text" name="address"   />
              <label for="address">Address</label>
            </div>
          </div>
          <div class="row">
            <div class="col offset-l3 l1 m2 s3">
              <img src="img/india.svg" style="padding ">
            </div>
            <div class="input-field col s12 m5 l5 ">
              <select name="state" onchange="display(this,'delhi','mp','maharashtra','odisha','tamil');">
                <option value="" disabled selected>Choose your State</option>
                <option value="delhi">Delhi</option>
                <option value="mp">Madhya Pradesh</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="odisha">Odisha</option>
                <option value="tamil">Tamil Nadu</option>
              </select>
              <label style="color:black;"> Select State</label>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12 l5 offset-l3 m5">
              <div id="delhi" >
                <i class="material-icons prefix">fiber_pin</i>
                <input id="txtSource" disabled value="110064" type="text" name="pincode"  />
                <label for="txtSource">Source Pincode</label>
              </div>
              <div id="mp" style="display:none">
                <i class="material-icons prefix">fiber_pin</i>
                <input id="txtSource" disabled value="454331" type="text" name="pincode"  />
                <label for="txtSource">Source Pincode</label>
              </div>
              <div id="maharashtra" style="display:none">
                <i class="material-icons prefix">fiber_pin</i>
                <input id="txtSource" disabled value="400601" type="text" name="pincode"  />
                <label for="txtSource">Source Pincode</label>
              </div>
              <div id="odisha" style="display:none">
                <i class="material-icons prefix">fiber_pin</i>
                <input id="txtSource" disabled value="756035" type="text" name="pincode"  />
                <label for="txtSource">Source Pincode</label>
              </div>
              <div id="tamil" style="display:none">
                <i class="material-icons prefix">fiber_pin</i>
                <input id="txtSource" disabled value="600008" type="text" name="pincode"  />
                <label for="txtSource">Source Pincode</label>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12 l5 offset-l3 m5">
              <i class="material-icons prefix">fiber_pin</i>
              <input id="txtDestination"  type="text" name="pincode"  />
              <label for="txtDestination">Destination Pincode</label>
            </div>
          </div>
          <center><input type="submit" onclick="GetRoute()" name=""></center>
        </div>
      </form>
    </div>


    <script type="text/javascript">
     $(document).ready(function() {
      $('select').material_select();
    });

  </script>
</body>
</html>