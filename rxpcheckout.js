var RxpCheckout = function() {

	var endpoint = "https://hpp.sandbox.realexpayments.com/pay";
	var formElement;
	var overlayElement;
	var iFrameElement;
	
	var dataElements = {
			"merchant-id":"MERCHANT_ID",
			"account":"ACCOUNT",
			"order-id":"ORDER_ID",
			"timestamp":"TIMESTAMP",
			"currency":"CURRENCY",
			"amount":"AMOUNT",
			"sha1hash":"SHA1HASH",
			"auto-settle-flag":"AUTO_SETTLE_FLAG"
	};
	
	var merchantData = {
			
	};
	
	var getMerchantData = function() {
		var script = document.querySelector(".rxpcheckout");
		if(script === null || script === undefined) {
			console.error("could not find script tag");
			return false;
		}
		for(dataAttribute in dataElements) {
			var value = script.getAttribute("data-"+dataAttribute);
			if(value !== undefined && value !== null) {
				merchantData[dataElements[dataAttribute]] = value;
			}
		}
		console.log(merchantData);
	};
	
	var createIFrame = function() {
		var iFrame = document.createElement("iframe");
		iFrame.setAttribute("width", "400px");
		iFrame.setAttribute("frameBorder", "0");
		iFrame.setAttribute("height", "600px");
		iFrame.setAttribute("seamless", "seamless");
		iFrame.setAttribute("class", "frame");
		iFrame.setAttribute("name", "rxpframe");
		iFrame.setAttribute("id", "rxpframe");
		document.body.appendChild(iFrame);
		iFrameElement = iFrame;
	};

	var createOverlay = function() {
		var overlay = document.createElement("div");
		overlay.setAttribute("class", "overlay");
		overlay.setAttribute("id", "rxp-overlay");
		document.body.appendChild(overlay);
		overlayElement = overlay;
	};
	
	var buildForm = function() {
		var form = document.createElement("form");
		form.setAttribute("method", "POST");
		form.setAttribute("action", endpoint);
		form.setAttribute("target", "rxpframe");
		
		for(el in merchantData) {
			var hiddenInput = document.createElement("input");
			hiddenInput.setAttribute("type", "hidden");
			hiddenInput.setAttribute("name", el);
			hiddenInput.setAttribute("value", merchantData[el]);
			form.appendChild(hiddenInput);
		}
		document.body.appendChild(form);
		formElement = form;
	};
	
	var post = function() {
		//console.log("posting data to HPP");
		//formElement.submit();
		
		overlayElement.setAttribute("class", overlayElement.getAttribute("class")+" active");
	};
	
	var cancel = function() {
		overlayElement.setAttribute("class", "overlay");
		document.body.removeChild(iFrameElement);
		createIFrame();
		
	};
	
	var init = function() {
		getMerchantData();
		buildForm();
		createOverlay();
		createIFrame();
	};
	
	init();
	return {
		
		post:post,
		cancel:cancel
		
	};
    
    
    
}();