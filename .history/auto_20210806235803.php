<!DOCTYPE html>
<html>
  <head>
    <title>Places Search Box</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>

    <style>

        
    </style>
  </head>
  <body>
    <input
      id="pac-input"
      class="controls"
      type="text"
      placeholder="Search Box"
    />
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
  </body>
</html>