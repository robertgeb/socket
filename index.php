<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Break Check</title>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <?php
  $ip = $_SERVER["REMOTE_ADDR"];
  $data = file_get_contents('http://freegeoip.net/json/');
  $value=json_decode($data);
  echo("<script>".
  "var latitude= $value->latitude;");

  echo (
  "var longitude=$value->longitude;".
  "</script>\n");
  echo ('<script type="text/javascript" src=js/code.js></script>');
  ?>

  <script type="text/javascript" src=js/markerclusterer.js></script>
  <script type="text/javascript" src=js/jQuery.js></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ4goAFEbjKYg-nP6l4PNnRQzB65CC1B0&libraries=places"async defer></script>
  <link rel=stylesheet href=css/normalize.css>
  <link rel=stylesheet href=css/skeleton.css>
  <link rel=stylesheet href=css/style.css>


</head>
<body >
  <div class=section>
      <div class=container>
          <div class="row">
              <div class="eight columns">
                <input id="pesquisa" class="controls" type="text" placeholder="Digite sua busca aqui">
                  <div id="map">
                  </div>
              </div>
              <div class="four columns">
                <div id="resp">
                </div>
              </div>
          </div>
      </div>
  </div>


</body>
</html>
