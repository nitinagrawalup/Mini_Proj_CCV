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

$ACC_NO=$_SESSION['acc_no'];
$LOAN_AMT=$_POST["loan_amount"];
$LOAN_TYPE=$_POST["loantype"];

    
    $TIME=$_POST['time'];
    $RATE=14;


    $Future_Value = round($LOAN_AMT * pow(1 + ($RATE/100),$TIME), 2);

$x="SELECT loan FROM user_info WHERE  acc_no='$ACC_NO'";

$result1=(mysqli_query($con,$x));

$loan_bal=mysqli_fetch_array($result1,MYSQLI_ASSOC);

if($LOAN_AMT <= 500000)
{

    if($loan_bal['loan'] ==0)
    {

    $S="SELECT acc_balance FROM user_info WHERE  acc_no='$ACC_NO'";

    $result=(mysqli_query($con,$S));

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    $x= $row['acc_balance']+ $LOAN_AMT;
    $y=$Future_Value;
    echo $x;

    $m= "UPDATE user_info SET acc_balance='$x'   where acc_no='$ACC_NO'";
    $y= "UPDATE user_info SET loan='$y' where acc_no='$ACC_NO'";
    $S="UPDATE user_info SET loantype='$LOAN_TYPE' where acc_no='$ACC_NO'";

    mysqli_query($con,$S);
    mysqli_query($con,$m);
    mysqli_query($con,$y);

    header('location:http:loan_success.php');
    }
    else
    {
        header('location:http:loan_failed.php');
    }
}
else
{
    header('location:http:loan.php');
    echo '<script>alert("Amount should be less than 500000")</script>';
}


?>