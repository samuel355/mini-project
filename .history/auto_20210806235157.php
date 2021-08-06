<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pick & Drop</title>
  <meta developer="Samuel Osei Adu" name="The developer">
  <meta author="Nhyira Kojo Dey" name="Almighty">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script defer
            src="https://maps.googleapis.com/maps/api/js?libraries=places&language=eng&key=AIzaSyC3jQOcOFgfWrdqFWXvCl3RzsyS_c1DYmY"
            type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

<div class="container-fluid">
    <!-- Language -->

    <div class="row">
        <div class="col-sm-12">
            <div id="map" style="height: 500px; width: 100%" ></div>
        </div>
    </div> <br>

    <div class="text-center"><a href="index.php" class="btn btn-info">Return Home</a></div> <hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <!-- form -->
                <h4 class="text-center font-weight-bolder">Drop Item For Pickup</h4>
                <form id="distance_form">

                    <div class="form-group" style="margin-top: 1rem;">
                        <label class="text-dark"> Pick Up Location : </label>
                        <input class="form-control" id="from_places" placeholder="<?= $lang['enter_location'] ?>" required />
                        <input id="origin" name="origin" required="" type="hidden"/>
                    </div>

                    <div class="form-group"><label> Destination : </label>
                        <input class="form-control" id="to_places" placeholder="<?= $lang['enter_location'] ?>" required />
                        <input id="destination" name="destination" required="" type="hidden"/>
                    </div>

                    <div class="form-group" style="display: none;">
                        <label><?= $lang['travel_mode'] ?></label>
                        <select class="form-control" id="travel_mode" name="travel_mode">
                            <option value="DRIVING"><?= $lang['Driving'] ?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="item detail"> Item Details :</label>
                        <input type="text" class="form-control" required placeholder="item details">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Size : </label>
                        <select class="form-control" name="size" id="size">
                            <option value="1">1kg</option>
                            <option value="2">2kg</option>
                            <option value="3">3kg</option>
                            <option value="4">4kg</option>
                            <option value="5">5kg</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="receiver-details" class="text-dark"> Receiver's Details: </label>
                        <textarea name="receiver-details" id="receiver-details" class="form-control" cols="30" rows="10" required> </textarea>
                    </div> <br>

                    <div class="text-center">
                        <button role="button" class="btn btn-primary text-center" type="submit" style="padding: 10px; font-weight: bold;"> <?= $lang['calculate_btn'] ?> </button>
                    </div><br>

                </form>
            </div>

            <!-- result -->
            <div class="col-sm-4" style="margin-top: 2rem;">
                <div id="result" class="hide">
                    <ul class="list-group">
                        <li id="in_mile" class="list-group-item d-flex justify-content-between align-items-center"></li> <br>
                        <br>
                        <br>
                        <li id="in_kilo" class="list-group-item d-flex justify-content-between align-items-center"></li> <br>
                        <br>
                        <br>

                        <li id="duration_text" class="list-group-item d-flex justify-content-between align-items-center"></li> <br>
                        <br>
                        <li id="price" class="list-group-item d-flex justify-content-between align-items-center"></li> <br>
                        <form action="">
                            <div class="text-center">
                                <button class="btn btn-dark">Proceed to Payment</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include('./includes/script.php') ?>

</body>

</html>