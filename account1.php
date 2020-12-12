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

$FNAME=$_POST["fname"];
$LNAME=$_POST["lname"];
$ADDRESS=$_POST["add"];
$NO=$_POST["num"];
$PASSWORD=$_POST["pass"];
$CITY=$_POST["city"];
$ZIP=$_POST["zip"];
$UNAME=$_POST["uname"];
$EMAIL=$_POST["email"];
$ACC=$_POST["acc"];
$ACC_BALANCE=$_POST["acc_bal"];
$filename = $_FILES['file']['name'];

$S="SELECT * FROM user_info";
$result=(mysqli_query($con,$S));
$res=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($res['email']!=$EMAIL || $res['phone']!=$NO )
{
    if($ACC_BALANCE < 100)
    {
        header('location:CreateAcc.php');
    }
    else
    {

                    # Get File size
            $filesize = $_FILES['file']['size'];

            # Location
            $location = "upload/".$username;

            # create directory if not exists in upload/ directory
            if(!is_dir($location)){
                mkdir($location, 0755);
            }

            $location .= "/".$filename;

            # Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],$location);

            $ACC_NO = mt_rand(100000, 999999);

            $_SESSION['USERNAME']=$UNAME;
            $_SESSION['ACCOUNT_NO']=$ACC_NO;
            $_SESSION['PASS']= $PASSWORD;




            $S="INSERT INTO user_info (fname,lname,address1,password,city,zip,username,email,account,phone,acc_no,acc_balance,filename)
            VALUES ('$FNAME','$LNAME','$ADDRESS','$PASSWORD','$CITY','$ZIP','$UNAME','$EMAIL','$ACC','$NO','$ACC_NO','$ACC_BALANCE','$filename')";






            if(mysqli_query($con,$S))

            {
                    header('location:After_acc_create.php');
            }
            else
            {
                echo '<script>alert("Retry!! Some error occured.")</script>';
            }
    }
}
else
{
    echo '<script>alert("Phone no and Email already used.")</script>';
}

?>
