<?php
error_reporting(E_ALL);
class Paystack{

    public function paystack_verify($reference){
        $headers=['Content-Type: application/json','Authorization:Bearer sk_test_4ade9ba097f43057b20ddb7a361bf0c8d357331e'];
        $url = "https://api.paystack.co/transaction/verify/$reference";

        
        $curlobj = curl_init($url);

        
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlobj, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curlobj, CURLOPT_SSL_VERIFYPEER, false);
        $apiResponse = curl_exec($curlobj); 
        if($apiResponse){

            curl_close($curlobj); 
            return json_decode($apiResponse); 
        }else{
            
            $r = curl_error($curlobj);
           
            return false;
        }
    }
    public function paystack_initialize($email,$amt,$ref){
        $postRequest = ['email'=> $email,'amount' =>$amt,'reference'=>$ref,"callback_url"=>"http://localhost/labfit/paydirect.php"];
        $headers=['Content-Type: application/json','Authorization:Bearer sk_test_4ade9ba097f43057b20ddb7a361bf0c8d357331e'];
        $url = "https://api.paystack.co/transaction/initialize";

       
        $curlobj = curl_init($url);

        curl_setopt($curlobj, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curlobj, CURLOPT_POSTFIELDS, json_encode($postRequest));
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlobj, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curlobj, CURLOPT_SSL_VERIFYPEER, false);

        $apiResponse = curl_exec($curlobj);
        if($apiResponse){
            curl_close($curlobj); 
            return json_decode($apiResponse); 
        }else{
            $r = curl_error($curlobj);
           
            return false;
        }
    }
}

?>