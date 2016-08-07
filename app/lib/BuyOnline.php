<?php
namespace App\lib;

class BuyOnline
{
	public static function send($url,$MerchantID,$Password,$Price,$redirect,$ResNumber,$Description,$Paymenter,$Email,$Mobile)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"MerchantID=$MerchantID&Password=$Password&Price=$Price&ReturnPath=$redirect&ResNumber=$ResNumber&Description=$Description&Paymenter=$Paymenter&Email=$Email&Mobile=$Mobile");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
    public static function get($url,$MerchantID,$Password,$Price,$RefNum)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&MerchantID=$MerchantID&Password=$Password&Price=$Price&RefNum=$RefNum");
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
    public static function pardakht($price,$resnumber,$description,$paymenter,$email,$mobile)
    {
        // $url = 'http://merchant.arianpal.com/postservice/';
        $url = 'http://sandbox.arianpal.com/WebService.asmx?wsdl';
        $MerchantID = '100001';
		$Password='abcdeFGHI';
		$Price=$price;
		$ResNumber=$resnumber;
		$Description=urlencode($description);
		$Paymenter=urlencode($paymenter);
		$Email=$email;
		$Mobile=$mobile;
        $redirect = urlencode('http://localhost:84/CmsLaravel/buy');
        return $result =self::send($url,$MerchantID,$Password,$Price,$ResNumber,$Description,$Paymenter,$Email,$Mobile,$redirect);
    }
    public static function Verify($price,$refnum)
    {
		$MerchantID = '100001';
		$Password='abcdeFGHI';
		$Price=$price;
		$RefNum=$refnum;
        $url = 'http://sandbox.arianpal.com/postservice/?Method=Verify';
        return $Verify=self::get($url,$api,$trans_id,$id_get);
    }
}