$input = "{query}";

if ($input != ''){
$gethip = curl_init();
curl_setopt($gethip, CURLOPT_URL, "http://hipsterjesus.com/api/?type=hipster-centric&paras=" . $input . "&html=false");
curl_setopt($gethip, CURLOPT_HEADER, 0);
curl_setopt($gethip, CURLOPT_RETURNTRANSFER, 1);

$behip = curl_exec($gethip);
error_log($behip,0);
curl_close($gethip);

//extract the result
$result = json_decode($behip);
$finalHipsum = $result->{"text"};

//return the result
echo $finalHipsum;
}
