<?php 
$to="varysha235@gmail".com;
    $Surname= $_POST['Surname']
    $Name= $_POST['Name']
    $Otchestvo= $_POST['Otchestvo']
   $Pasword= $_POST['Pasword']
   $Age= $_POST['Age']
   $Email= $_POST['Email']
   $City= $_POST['City']

   $Surname = htmlspecialchars($Surname);
     $Name = htmlspecialchars( $Name);
$Otchestvo = htmlspecialchars($Otchestvo);
 $Pasword = htmlspecialchars( $Pasword);
 $Age = htmlspecialchars( $Age);
$Email = htmlspecialchars($Email);
$City = htmlspecialchars($City);


    $Surname = urldecode($Surname);
     $Name = urldecode( $Name);
 $Otchestvo = urldecode( $Otchestvo);
  $Pasword = urldecode(  $Pasword);
  $Age = urldecode(  $Age);
 $Email = urldecode($Email);
 $City = urldecode( $City);


  $Surname = trim($Surname);
     $Name = trim( $Name);
 $Otchestvo= trim($Otchestvo);
  $Pasword = trim( $Pasword);
  $Age = trim( $Age);
 $Email = trim($Email);
 $City = trim($City);

mail($to,$Surname, $Name, $Otchestvo, $Pasword,$Age, $Email, $City)
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
   
  
