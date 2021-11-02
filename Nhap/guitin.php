<?php
function  guitin()
{
    $APIKey="1D6D739D178D0BC1F10A6FF3BFB3DF";
    $SecretKey="E1C6228918BFC383CB96DBAF3C6351";
    $YourPhone="0973137894";
    $Content="Test gui tin SMS";

    $SendContent=urlencode($Content);
    $data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&Brandname=QCAO_ONLINE&SmsType=2";
    $curl = curl_init($data);
    curl_setopt($curl, CURLOPT_FAILONERROR, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    $obj = json_decode($result,true);
    if($obj['CodeResult']==100)
    {
        print "<br>";
        print "CodeResult:".$obj['CodeResult'];
        print "<br>";
        print "CountRegenerate:".$obj['CountRegenerate'];
        print "<br>";
        print "SMSID:".$obj['SMSID'];
        print "<br>";
    }
    else
    {
        print "ErrorMessage:".$obj['ErrorMessage'];
    }
}
