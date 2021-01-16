<?php
session_start();
 $num=$_POST['mobile'];
$otp=rand(1111,9999);
$_SESSION["otp"]=$otp;
$_SESSION['number']=$num;
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "$otp",
    "language" => "english",
    "route" => "p",
    "numbers" => "$num",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: zEt4Pfyn3oZwk9luJ1WcFOVLK6gxaqjeIHYh7bMDrTB58ARQiGtDQ5mKk1sHxqOzISvfdlhCELBwTPo7",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "not correct";
} else {
  echo "correct";
  // echo "<script>alert('ok')</script>";
}
?>