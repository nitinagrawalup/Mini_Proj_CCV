<?php



$curlx = curl_init();

curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curlx, CURLOPT_HEADER, 0);
curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curlx, CURLOPT_POST, 1);

$post_data = 
[
    'secret' => '6LeaL9sZAAAAAPKpYnh26UFydAKmp_N2XSpNQEAq', //<--- your reCaptcha secret key
    'response' => $_POST['g-recaptcha-response']
];

curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);

$resp = json_decode(curl_exec($curlx));

curl_close($curlx);

if ($resp->success) 
{
    //success!
} else 
{
    // failed
    echo '<script>alert("Error.")</script>';
    exit;
}



include 'connection.php';
session_start();


$PASSWORD=$_POST["pass"];
$ACC_NO=$_POST["accno"];

$_SESSION['acc_no']=$ACC_NO;
$S="SELECT * FROM user_info WHERE acc_no ='$ACC_NO' && password ='$PASSWORD' ";


//echo "$UNAME";
//echo "$PASSWORD";

$result=(mysqli_query($con,$S));
$num=mysqli_num_rows($result);
if($num==1)

{
	header('location:after_login.php');
}
else
{
    header('location:index.html');
}


?>
