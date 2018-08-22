$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$tomail = "greenterrance2018@gmail.com";
$frommail = $email;

$subject = "New Booking";
$body = "Name $name \n  Phone $phone \n Address $address \nEmail $email"
if(mail($tomail, $subject, $body)){
    echo "Booked Successfully";
}else{
    echo "Booking Unsuccessful."
}