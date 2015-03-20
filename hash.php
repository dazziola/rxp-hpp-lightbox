<?php

    $secret = "xxxxxxxxxx";

    function generateHash($secret){
        
        $merchantid = $_GET["merchantid"];
        $orderid = $_GET["orderid"];
        $currency = $_GET["currency"];
        $amount = $_GET["amount"];
        $timestamp = strftime("%Y%m%d%H%M%S");
        $tmp1 = "$timestamp.$merchantid.$orderid.$amount.$currency";
        $sha1hash = sha1($tmp1);
        $tmp = "$sha1hash.$secret";
        $sha1hash2 = sha1($tmp);
        
        $response = array("hash1"=>$sha1hash,"hash"=>$sha1hash2,"timestamp"=>$timestamp, "tmp"=>$tmp, "tmp1"=>$tmp1);
        
        return $response;
    }

    function getHash(){
        global $secret;
         return generateHash($secret);
    }

?>