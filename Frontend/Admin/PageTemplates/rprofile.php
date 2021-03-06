
<?php 
require('../../../function.php');
$title="Profile";
#include("../header.php");

if(isset($_GET['hid'])){
  $query = "SELECT * FROM hotel WHERE hotel_id='{$_GET['hid']}'";
  $hotel = $data->getData($query);
  // print_r($hotel);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./rprofile.css"/>

  <title>Document</title>
</head>
<body>
  <div class="imgcon">
    <img src="../../<?php echo $hotel[0]['cover_image'] ?>" class="bgimage" alt="">
    <img src="../../<?php echo $hotel[0]['profile_image'] ?>" alt="rlogo" class="rlogo" >
  </div>

  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Menu')">Menu</button>
    <button class="tablinks" onclick="openTab(event, 'Location')">Location</button>
    <button class="tablinks" onclick="openTab(event, 'Contactus')">Contactus</button>
    <button class="tablinks" onclick="openTab(event, 'Aboutus')">Aboutus</button>
  </div>

  <!-- Tab content -->
  <div id="Menu" class="tabcontent">
    <h3>Menu</h3>
    <p>Menu Page</p>
  </div>

  <div id="Location" class="tabcontent">
    <h3>Location</h3>
    <p>Location</p>
  </div>

  <div id="Contactus" class="tabcontent">
    <h3>Contactus</h3>
    <p>Contactus</p>
  </div>


  <div id="Aboutus" class="tabcontent">
    <h3>Aboutus</h3>
    <p>Aboutus</p>
  </div>


  <script>
    function openTab(evt, TabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      
      document.getElementById(TabName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    openTab(event, 'Menu');
  </script>

</body>
</html>

	





