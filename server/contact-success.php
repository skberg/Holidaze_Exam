<!DOCTYPE html>
<html>
   <head>
      <title>HTML Meta tag</title>
      <link rel="stylesheet" type="text/css" href="Contact.css">
      <link href="https://fonts.googleapis.com/css?family=Catamaran|PT+Sans&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
    
   </head>
   <body scroll="no" style="overflow: hidden">

    

   <div class="[ Card ]" >
       <h1 class="[ Card-heding ]"> Thank you</h1>
       <img class="[ Card-img ]" src="okey.svg">
              
       <div class="[ card-test-holder ]">
       <div class="[ card-elemtner ]">
       <div class="[ card-text ]">
       <h2>Hey!</h2>
       Your feedback is greatly appreciated, we are constantly working to develop ourselves And your feedback helps us with that Thank You</div>

       <a href=http://localhost:8081/ContatusPage> <button class="[ card-contet-2 ]" >
         <img class="[ left-button ]" src="rightBlue.svg"  alt="img"><div class="[ text ]">back</div>   
         </button></a>

       

       </div>
    </div>
   </div>
<?php
//Creates a class called Message

class Message
{
    public $clientName;
    public $email;
    public $message;
}

//Creates new message and sets properties
$newMessage = new Message();
$newMessage->clientName = $_POST["clientName"];
$newMessage->email = $_POST["email"];
$newMessage->message = $_POST["message"];

//Adds object to array
$messagesList = file_get_contents('./../Holidaze/public/contact.json');
$jsonInput = json_decode($messagesList, true);
array_push($jsonInput, $newMessage);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('./../Holidaze/public/contact.json', $jsonData);
?>

<!-- Cameron asked me to have holidaze instead of client -->
</body>
</html>