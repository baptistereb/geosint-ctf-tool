<?php
include "config.php";

if(isset($_GET["challId"]) AND isset($correctValues[$_GET["challId"]])) {

} else {
  echo "No challenges specified<br>";

  for($i=0; $i<count($correctValues); $i++) {
    echo "<a href='?challId=".$i."'>Chall ".($i+1)."<a><br>";
  }
  die();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="src/leaflet.css" />
  <link rel="stylesheet" href="src/style.css">
  <script src="src/jquery-1.11.3.min.js"></script>
  <script src="src/leaflet.js"></script>
  <script src="src/OSMLocationPicker.js"></script>
  <script src="src/aframe.min.js"></script>

  <title><?= $name_website ?></title>
  <meta name="description" content="<?= $desc_website ?>" />

  <link rel="icon" type="image/png" sizes="32x32" href="src/images/logo.png">

  <meta property="og:title" content="<?= $name_website ?>" />
  <meta property="og:description" content="<?= $desc_website ?>" />
  <meta property="og:type" content="website" />

  <script>
    $(document).ready(function(){
      OSMPICKER.initmappicker(43.570645855738995, 1.4669175446033478, <?= $accepted_error ?>, null);

      let latitude = 43.570645855738995
      let longitude = 1.4669175446033478

      document.addEventListener('myCustomEvent', function(e) {
        longitude = e.detail.lon
        latitude = e.detail.lat
        console.log('latitude et longitude :', [e.detail.lat, e.detail.lon])
      })

      let button = document.getElementById('submit')

      button.addEventListener('click', function() {
        let url = `endpoint.php?challId=1&lat=${latitude}&lon=${longitude}`

        fetch(url)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok')
            }
            return response.text();
          })
          .then(data => {
            document.getElementById('text_picker').textContent = data
          })
          .catch(error => {
            console.error('Unable to contact server : ', error)
            document.getElementById('text_picker').textContent = "Error"
            alert("Error")
          })
      })

    })
  </script>
</head>
<body>
  <div id="picker">
    <div id="infos">
      <p id="text_picker"><?= $select_bar ?></p>
      <button id="submit"><?= $send_button ?></button>
    </div>
    <div id="locationPicker"></div>
  </div>

  <a-scene>
      <a-sky src="<?= $images[$_GET["challId"]]; ?>"></a-sky>
  </a-scene>

  <img id="logo" src="src/images/logo.png">
</body>
</html>