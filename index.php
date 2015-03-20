<?php include_once("hash.php"); ?>

<html>
<head>

<style>
    .overlay {
        position: fixed;
        left: 0;
        top: 0;
        width: 0;
        height: 0;
        overflow-x: hidden;
        overflow-y: auto;
        z-index: -998;
        font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
        font-weight: 200;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        background: rgba(0, 0, 0, 0.6);
        perspective: 800;
        -webkit-perspective: 800;
        opacity: 0;


    }
    .overlay.active {

        opacity: 1;
        z-index: 998;
        width: 100%;
        height: 100%;
        -webkit-transition: 320ms opacity ease;
        -moz-transition: 320ms opacity ease;
        -ms-transition: 320ms opacity ease;
        -o-transition: 320ms opacity ease;
        transition: 320ms opacity ease;
    }

    body {
        background-color:#f3901e;
    }

    .frame {
        z-index: 999; 
        margin: 0 auto; 
        position: absolute; 
        top: 25px; 
        left: 50%; 
        margin-left: -200px;
    }
    
    iframe {
        top: -200px;
        position: absolute;
    }
    
</style>
    
</head>
<body>
<h1>My Shop</h1>
    
<input type="button" id="pay-button" value="Pay Now" />	
	
<script type="text/javascript" src="rxpcheckout.js" class="rxpcheckout"
	data-merchant-id="darraghtest"
	data-account="internet"
	data-order-id="1392284203-4208-4209"
	data-currency="EUR"
	data-sha1hash="<?=getHash()['hash']?>"
	data-auto-settle-flag="0"
	data-timestamp="<?=getHash()['timestamp']?>"
	data-amount="199"></script>
	
<script>
	document.getElementById("pay-button").addEventListener("click", RxpCheckout.post, true);
</script>
</body>
</html>