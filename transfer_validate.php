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


$my_acc_no=$_SESSION['acc_no'];
$ACC_NO=$_POST["acc_no"];
$AMT=$_POST["amount"];
if($ACC_NO != $my_acc_no)
{
    $x="SELECT acc_balance FROM user_info WHERE  acc_no='$my_acc_no'";
    $result1=(mysqli_query($con,$x));
    $acc_bal=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $a= $acc_bal['acc_balance'];

    $result=(mysqli_query($con,$x));
    $nums=mysqli_num_rows($result);

    //*********************************************************************//

    $y="SELECT acc_balance FROM user_info WHERE  acc_no='$ACC_NO'";
    $result=(mysqli_query($con,$y));
    $num=mysqli_num_rows($result);

    if($num==1)
    {
    $acc_bal_rec=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $b=$acc_bal_rec['acc_balance'];
    }



    if($nums==1 && $num==1)
    {
        if($a > 0 && $a >= $AMT)
        {

            $p=$a-$AMT;
            $m= "UPDATE user_info SET acc_balance='$p' where acc_no='$my_acc_no'";
            mysqli_query($con,$m);

            $q=$b+$AMT;
            $n= "UPDATE user_info SET acc_balance='$q' where acc_no='$ACC_NO'";
            mysqli_query($con,$n);

            header('location:successfully_tranfered.php');
        }
        else
        {
            header('location:transfer_fail.php');
        }
    }
    else if($nums==1 && $num!=1)
    {
        if($a > 0 && $a >= $AMT)
        {

            $p=$a-$AMT;
            $m= "UPDATE user_info SET acc_balance='$p' where acc_no='$my_acc_no'";
            mysqli_query($con,$m);

            $q=$b+$AMT;
            $n= "UPDATE user_info SET acc_balance='$q' where acc_no='$ACC_NO'";
            mysqli_query($con,$n);

            header('location:successfully_tranfered.php');
        }
        else
        {
            header('location:transfer_fail.php');
        }
    }
    else
    {
        header('location:error.php');
    }
}
else
{
    header('location:error.php');
}
?>