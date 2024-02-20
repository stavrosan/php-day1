<?php
$cars = array(
    "Toyota" => array
        (
         "Model" => "Yaris",
        "Availability"  => true,
        "Price"  => 18050,
        "Rental location"=>"Vienna 1050",
        "Image"=>"https://cdn.pixabay.com/photo/2021/10/29/12/25/toyota-gr-yaris-6751755_1280.jpg"
        ),
    "Ford" =>   array
        (
        "Model"  => "Mustang",
        "Availability" => false,
        "Price"  => 40740,
        "Rental location"=>"Graz 1070",
        "Image" =>"https://cdn.pixabay.com/photo/2016/10/04/18/25/auto-1715078_640.jpg"
        ),
    "Opel" =>   array
        (
        "Model"  => "Corsa",
        "Availability"  => true,
        "Price"  => 15600,
        "Rental location"=>"Salzburg 1220",
        "Image"=> "https://cdn.pixabay.com/photo/2016/02/02/21/05/opel-1176099_640.jpg"

        )
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row row-cols-lg-3 row-cols-md-2">
     <div class="card mx-auto" style="width: 18rem;">
      <div class="card-body">
        <img src="<?=$cars["Toyota"]["Image"]?>" class="card-img-top" alt="...">
        <h5 class="card-title"><?="Toyota {$cars["Toyota"]["Model"]}"?></h5>
        <p class="card-text"><?="Price: {$cars["Toyota"]["Price"]} € "?></p>
        <p class="card-text">Availability: <?=$cars["Toyota"]["Availability"]?"Yes":"None"?></p>
        <p class="card-text"><?="Where: {$cars["Toyota"]["Rental location"]} "?></p>
      </div>
    </div>
<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
    <img src="<?=$cars["Ford"]["Image"]?>" class="card-img-top" alt="...">
    <h5 class="card-title"><?="Ford {$cars["Ford"]["Model"]}"?></h5>
    <p class="card-text"><?="Price: {$cars["Ford"]["Price"]} €"?></p>
    <p class="card-text">Availability: <?=$cars["Ford"]["Availability"]?"Yes":"None"?></p>
    <p class="card-text"><?="Where: {$cars["Ford"]["Rental location"]}"?></p>
  </div>
</div>
<div class="card m-auto" style="width: 18rem;">
  <div class="card-body">
    <img src="<?=$cars["Opel"]["Image"]?>" class="card-img-top" alt="...">
    <h5 class="card-title"><?="Opel {$cars["Opel"]["Model"]}"?></h5>
    <p class="card-text"><?="Price: {$cars["Opel"]["Price"]} €"?></p>
    <p class="card-text">Availability: <?=$cars["Opel"]["Availability"]?"Yes":"None"?></p>
    <p class="card-text"><?="Where: {$cars["Opel"]["Rental location"]} "?></p>
  </div>
</div>
</div>
</body>
</html>