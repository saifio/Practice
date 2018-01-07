<?php
 


require_once($_SERVER['DOCUMENT_ROOT'].'/api/api.php');

  $client_mac = $_GET['client_mac'];
  $client_ip = $_GET['client_ip'];
  $location_index = $_GET['location_index'];
  $ppli = $_GET['ppli'];

  

function random_string($length)
{
    $chars = '123456789';
    $randMax = strlen($chars) - 1;
 
    $r = '';
    for ($i = 1; $i <= $length; $i++)
        $r .= substr($chars, mt_rand(0, $randMax), 1);
 
    return $r;
}

$date = date('d/m/Y h:i:s ', time());
$api = NEW API();
$name = stripslashes(trim($_POST['fname']));
$Lname = stripslashes(trim($_POST['lname']));
$email = stripslashes(trim($_POST['email']));
$mobile2 = stripslashes(trim($_POST['phone']));
$mobile2 = str_replace(" ","",$mobile2);
$mobile2 = str_replace(".","",$mobile2);
$mobile2 = str_replace("+","",$mobile2);
$mobilecountry = trim($_POST['mobilecountry']);
$mobile = $mobilecountry.$mobile2;
// $mobile = $mobile2;

$password1 = random_string(4);
$userid = random_string(6); 


// yaha se   

//  $message = "Welcome+to+The+Xi-Fi-+".$password1; 

// $host = 'https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx';
// $username = 'sbc_webser'; 
// $password = 'Sbweb@789'; 
// // $dlr='1';
// $PushDateTime=$date;

// $Lang='0';
// $flash='Y';



// // $smsURL=$host.'?username='.$username.'&password='.$password.'&type=0&destination=91'.$mobile.'&source=NetGen&dlr=1&message='.$message;

// $smsURL=$host.'?UserId='.$username.'&Password='.$password.'&MobileNo=96897321616&Message='.$message.'&PushDateTime='.$PushDateTime.'&Lang='.$Lang.'&FLashSMS='.$flash; 

// // https://www.ismartsms.net/iBulkSMS/HttpWS/ SMSDynamicAPI.aspx?UserId=[ISMARTSMSUSERID]&Password=[PASSWORD]&MobileNo=[MOBILENO]&Message=[MESSAGE]&PushDateTime=[MESSAGEDATETIME]&Lang=[MESSAGELANGUAGE]&FLashSMS=[FLashSMS]

// $response = file_get_contents($smsURL);

// echo "this is".$response;

// exit;

//  yaha tak


//$nationality = stripslashes(trim($_POST['nationality']));
$date = date('d/m/Y h:i:s ', time());
  $date1 = substr($date, 0, 10);
          $time = substr($date, 10, 18);
          $mobile2=str_replace(':', '', $client_mac);




// acoount validity status
  
$api->SetArg('userid', $mobile2);
if($api->Execute('account_get') && $api->GetResult('result') == 'ok'){
    $temp = explode('|', $api->GetResult('valid_until'));
    
    $valid_until = strtotime($temp[0]);
    $api->Execute('account_delete')
//     // print_r($valid_until);exit;
//   # acocunt still valid, just return the password
//   if ($valid_until > time()){
//         $temp = explode('|', $api->GetResult('billing_id'));
//         $pin = $temp[0];
// //    echo '{"msg":"Already registered. Your PIN is <span style=\'color:red; font-size: 14px; font-weight: bold;\'>'.$pin.'</span>","uid":"'.$mobile.'"}';
//      if (!$api->Execute('account_delete') || $api->GetResult('result') != 'ok'){
//         redirect('otp_failure.php?msg=Failed to assign new free session '.'&client_mac='.$client_mac.'&client_ip='.$client_ip.'&location_index='.$location_index.'&ppli='.$ppli);
//         }
     
//     exit;
//   }
//   else if(($valid_until+(14*60*60)) <= time()){ 
//       # account expired, delete the current account or we can update,
    
//       # now its available to create again
//         if (!$api->Execute('account_delete') || $api->GetResult('result') != 'ok'){
//         redirect('otp_failure.php?msg=Failed to assign new free session '.'&client_mac='.$client_mac.'&client_ip='.$client_ip.'&location_index='.$location_index.'&ppli='.$ppli);
//         }

//     }else if(($valid_until+(1*1*1)) <= time()){
//       # Redirect to require 
// if (!$api->Execute('account_delete') || $api->GetResult('result') != 'ok'){
//         redirect('otp_failure.php?msg=Failed to assign new free session '.'&client_mac='.$client_mac.'&client_ip='.$client_ip.'&location_index='.$location_index.'&ppli='.$ppli);
//         }
    
//     }
//     else{

//       echo "invalid action";
//     }
}


$d= date("_h_i");







$mobile1=$mobile.$d;


 

// generate random password and check if it has already been assigned


        




 $msg = '';

    # send email
  

// $message = "Welcome+to+The+Xi-Fi+Network.+Please+use+this+pin+No+for+browsing-+".$password1; 
// $host = 'http://sms6.routesms.com:8080/bulksms/bulksms';
// $username = 'easternotp'; 
// $password = 'sd6yajad'; 
// $dlr='1';
// echo $mobile.'its heer';


// https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx?UserId=sbc_webser&Password=Sbweb@789&MobileNo=96897321616&Message=Testing%20with%20shahrukh%20again&PushDateTime=%2003/09/2014%2013:30:00&Lang=0&FLashSMS=y

// exit();

 $message = "Welcome+to+Sabco.+Please+use+this+PIN+to+access+Internet+Service+-+".$password1; 

// $host = 'https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx';
// $username = 'sbc_webser'; 
// $password11 = 'Sbweb@789'; 
// // $dlr='1';
// $PushDateTime=$date;

// $Lang='0';
$flash ='Y';
 // $smsURL=$host.'?username='.$username.'&password='.$password.'&type=0&destination=91'.$mobile.'&source=NetGen&dlr=1&message='.$message;

//$smsURL='https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx?UserId='.$username.'&Password='.$password11.'&MobileNo=968'.$mobile.'&Message='.$message.'&Lang=0&FLashSMS=y'; 
 //$smsURL=  'https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx?UserId=sbc_webser&Password=Sbweb@789&MobileNo=96897321616&Message=Testing%20with 20shahrukh 20again&PushDateTime=%2003/09/2014 2013:30:00&Lang=0&FLashSMS=y';

  $smsURL= 'https://www.ismartsms.net/iBulkSMS/HttpWS/SMSDynamicAPI.aspx?UserId=sbc_webser&Password=Sbweb@789&MobileNo=968'.$mobile.'&Message='.$message.'&Lang=0&FLashSMS=y';

// https://www.ismartsms.net/iBulkSMS/HttpWS/ SMSDynamicAPI.aspx?UserId=[ISMARTSMSUSERID]&Password=[PASSWORD]&MobileNo=[MOBILENO]&Message=[MESSAGE]&PushDateTime=[MESSAGEDATETIME]&Lang=[MESSAGELANGUAGE]&FLashSMS=[FLashSMS]

// echo '968'.$mobile;
$response = file_get_contents($smsURL);

// echo "<br>";
// echo "this is::   ".$response;
// if (empty($response))  
// {
//   $msg .= 'Failed to send SMS to your mobile';
//     }else{
// $msg .= 'Your Internet PIN sent to your mobile number via SMS.';
// }


 redirect('otp.php?msg='.$msg.'&client_mac='.$client_mac.'&client_ip='.$client_ip.'&location_index='.$location_index.'&ppli='.$ppli.'&mobile='.$mobile.'&password='.$password1.'&name='.$name.'&email='.$email);





?>

