<!DOCTYPE html>
<html>
   <head>
      <title>HTML Meta tag</title>
      <link rel="stylesheet" type="text/css" href="Addhotel.css">
      <link href="https://fonts.googleapis.com/css?family=Catamaran|PT+Sans&display=swap" rel="stylesheet"> 

    
   </head>
   <body >

    

   <div class="[ Card ]" >
       <h1 class="[ Card-heding ]">Your Establishment is now done</h1>
       <img class="[ Card-img ]" src="okey1.svg" >
       <div class="[ card-test-holder ]">
       <div class="[ card-elemtner ]">

          <a href=http://localhost:8081/AdminPanelpage><button  class="[ card-contet-1 ]">
         <img class="[ left-button ]" src="Left.svg"  alt="img"><div class="[ text ]">Admin Panelen</div>
       </button ></a>
       <a href=http://localhost:8081> <button class="[ card-contet-2 ]" >
         <img class="[ left-button ]" src="Left.svg"  alt="img"><div class="[ text ]">Home</div>   
         </button></a>

        
       </div>
    </div>
   </div>








<?php
//Creates a class called Contact
class Establishment
{
  //To add more variables create the variable name here and set below
    public $establishmentName;
    public $establishmentEmail;
    public $imageUrl;
    public $price;
    public $maxGuests;
    public $description;
    public $selfCatering;
    public $contryChosing;
    public $adress;
    public $shop;
    public $cityC;
    public $parking;
    public $babyBead;
    public $tV;
    public $animal;
    public $id;
}

//Creates new establishment and sets properties
$newEstablishment = new Establishment();
$newEstablishment->establishmentName = $_POST["establishmentName"];
$newEstablishment->establishmentEmail = $_POST["establishmentEmail"];
$newEstablishment->imageUrl = $_POST["imageUrl"];
$newEstablishment->price = $_POST["price"];
$newEstablishment->maxGuests = $_POST["maxGuests"];
$newEstablishment->description = $_POST["description"];
$newEstablishment->shop = $_POST["shop"];
$newEstablishment->cityC = $_POST["cityC"];
$newEstablishment->selfCatering = $_POST["selfCatering"];
$newEstablishment->contryChosing = $_POST["contryChosing"];
$newEstablishment->adress = $_POST["adress"];
$newEstablishment->parking = $_POST["parking"];
$newEstablishment->babyBead = $_POST["babyBead"];
$newEstablishment->tV = $_POST["tV"];
$newEstablishment->animal = $_POST["animal"];
$newEstablishment->id = $_POST["id"];

//Adds object to array
$establishmentsList = file_get_contents('./../Holidaze/public/establishments.json');
$jsonInput = json_decode($establishmentsList, true);
array_push($jsonInput, $newEstablishment);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('./../Holidaze/public/establishments.json', $jsonData);
?>

<!-- Cameron asked me to have holidaze instead of client -->
</body>
</html>