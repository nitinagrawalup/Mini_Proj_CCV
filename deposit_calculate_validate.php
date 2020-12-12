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
    echo '<script>alert("Recaptcha Error.")</script>';
    exit;
}



    include 'connection.php';

    session_start();

    $AMT=$_POST['amount'];
	$my_acc_no=$_SESSION['acc_no'];
			
	$x="SELECT * FROM user_info WHERE  acc_no='$my_acc_no'";
	$result1=(mysqli_query($con,$x));
	$acc_bal=mysqli_fetch_array($result1,MYSQLI_ASSOC);
	$a= $acc_bal['loan'];
	$b= $acc_bal['acc_balance'];
	if($a>0)
	{
		 $x=$a-$AMT;
		 $y=$b-$AMT;
		 if($x>=0 && $y>=0)
		 {
						
			$m= "UPDATE user_info SET acc_balance='$y' where acc_no='$my_acc_no'";
			$y= "UPDATE user_info SET loan='$x' where acc_no='$my_acc_no'";
			mysqli_query($con,$m);
			mysqli_query($con,$y);
			header('location:loan_paid_success.php');

		 }
		 else
		 {
			 $e=" Either your account balance is less or you don't have taken loan.";
			 echo "<script type='text/javascript'>alert('$e');</script>";
			 header('location:deposit_calculate.php');
		 }
	}
	else
	{
		$e="  you have not taken loan.";
		echo "<script type='text/javascript'>alert('$e');</script>";
		header('location:deposit_calculate.php');
	}
    
?>
