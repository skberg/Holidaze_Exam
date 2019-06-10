<!DOCTYPE html>
<html>
   <head>
      <title>Enquiory-Success-pags</title>
      <link rel="stylesheet" type="text/css" href="Addhotel.css">
      <link href="https://fonts.googleapis.com/css?family=Catamaran|PT+Sans&display=swap" rel="stylesheet"> 

    
   </head>
   <body >

    

       <div class="[ Card ]" >
       <h1 class="[ Card-heding ]">Your Enquiry is placed</h1>
       <img class="[ Card-img ]" src="okey1.svg">
              
       <div class="[ card-test-holder ]">
       <div class="[ card-elemtner ]">
       <div class="[ card-text ]">
       <h2>Thank you</h2>
       that you chose to use our service, Your enquiry will be taken care of in 1-5 work days</div>
       <a href="http://localhost:8081"> <button class="[ card-contet-2 ]" >
         <img class="[ left-button ]" src="Left.svg"  alt="img"><div class="[ text ]">Home</div>   
         </button></a>

       

       </div>
    </div>
   </div>


  
<?php
//Creates a class called Enquiry


class Enquiry
{
    public $establishment;
    public $clientName;
    public $email;
    public $checkin;
    public $checkout;
    public $PhoneNr;
  
}

//Creates new enquiry and sets properties
$newEnquiry = new Enquiry();
$newEnquiry->establishment = $_POST["establishment"];
$newEnquiry->clientName = $_POST["clientName"];
$newEnquiry->email = $_POST["email"];
$newEnquiry->checkin = $_POST["checkin"];
$newEnquiry->checkout = $_POST["checkout"];
$newEnquiry->PhoneNr = $_POST["PhoneNr"];


//Adds object to array
$enquiriesList = file_get_contents('../Holidaze/public/enquiries.json');
$jsonInput = json_decode($enquiriesList, true);
array_push($jsonInput, $newEnquiry);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('../Holidaze/public/enquiries.json', $jsonData);
?>

<!-- Cameron asked me to have holidaze instead of client -->

</body>
</html>