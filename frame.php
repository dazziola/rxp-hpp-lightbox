<html>

<head>
<base
	href="https://hpp.realexpayments.com:443/merchants/cathal050204/bbd/">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<script type="text/javascript" src="/resources/checkout.js"></script>
<script type="text/javascript" src="/resources/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/resources/jquery.validate.js"></script>
<script type="text/javascript"
	src="/resources/jquery.maskedinput-new.js"></script>
<script type="text/javascript" src="/resources/jquery.form.json.js"></script>
<script type="text/javascript" src="/resources/moment.min.js"></script>
<script type="text/javascript" src="/resources/handlebars.js"></script>

<script type="text/javascript" src="/resources/hpp.js"></script>
<script type="text/javascript" src="/resources/messages/messages.js"></script>
<script type="text/javascript"
	src="/resources/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/resources/messages/messages_spa.js"></script>
<link href="/resources/css/hpp.css" rel="stylesheet">
<link href="/resources/css/hpp-float.css" rel="stylesheet">
<link href="/resources/css/form.css" rel="stylesheet">
<link href="/resources/css/hpp-mobile.css" rel="stylesheet">

<link href="/resources/css/santander.css" rel="stylesheet">


<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1" name="viewport">
<title>Realex Payments Payment - Payments Page</title>
<!-- CSS -->
<link href="mobileresources/css/styles.css" rel="stylesheet"
	type="text/css">
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="mobileresources/css/styles_ie.css" />
<![endif]-->
<link type="text/css" rel="stylesheet" charset="UTF-8"
	href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    
    
    <style>
        #rxp-body1 {
            background-color: (255,255,255, 1));
        }
    </style>
    
</head>
<body>

	<div class="rxp-placeholder portfolio-santander">

		<div class="success rxp-well" id="success-pane" style="display: none">
			<span id="result-message"></span>
		</div>

		<div class="rxp-container">

			<div class="rxp-body" id="rxp-body1">
				<div class="rxp-page-title">
					<span class="rxp-page-title-text"><font><font>Payment
								Details </font></font></span> <span class="rxp-security-info"> <span><font><font>Protected
									by 128-bit SSL certificate</font></font></span> <i class="icon-lock">&nbsp;</i></span>
					<div style="clear: both"></div>
				</div>



				<div class="rxp-error-message-pane" id="error-message-pane"
					style="display: none">
					<h2 id="error-message"></h2>
				</div>
				<form class="rxp-form rxp-card-form" id="card-payment-form"
					novalidate="novalidate" _lpchecked="1">
					<input name="pas_cctype" type="hidden" class="valid"> <input
						id="pas_pareq" name="pas_pareq" type="hidden" value=""
						class="valid"> <input id="pas_acsurl" name="pas_acsurl"
						type="hidden" value="" class="valid"> <input
						id="pas_termurlId" name="pas_termurl" type="hidden" value=""
						class="valid"> <input id="encryptMDID" name="encryptMD"
						type="hidden" value="" class="valid"> <input
						id="verifyMessageId" name="verifyMessage" type="hidden" value=""
						class="valid"> <input id="verifyResultId"
						name="verifyResult" type="hidden" value="" class="valid">
					<input id="verifyEnrolledId" name="verifyEnrolled" type="hidden"
						value="" class="valid">

					<div class="rxp-control-group">
						<label class="rxp-control-label" for="pas_ccnum"><font><font>Card123
									Number</font></font></label>
						<div class="controls">
							<input autocomplete="off" class="rxp-wide rxpcol digitsOnly"
								id="pas_ccnum" maxlength="19" name="pas_ccnum"
								required="required" type="tel" placeholder="Número de tarjeta">

							<div class="help-block rxp-allowed-cards">

								<img id="visa-logo" src="/resources/cards/visa.png"> <img
									id="mc-logo" src="/resources/cards/mc.png"> <img
									class="rxp-card-loader rxp-hidden" id="card-loader"
									src="/resources/images/ajax-loader.gif">
							</div>

							<span class="rxp-error" id="card-errors"></span>
						</div>
					</div>

					<div class="rxp-control-group">
						<div class="rxpcol2">
							<div class="rxp-control-group">
								<label class="rxp-control-label rxpcol2 rxp-nospan"
									for="pas_expiry"><span><font><font>Expiration
										</font></font></span><span class="rxp-formatinfo"><font><font>(mm
												/ yy)</font></font></span></label>
								<div class="controls controls-expiry">
									<div id="expiry-controls">
										<input autocomplete="off" id="pas_expiry" maxlength="7"
											name="pas_expiry" type="hidden" class="valid"> <input
											autocomplete="off"
											class="rxp-cc-expiry rxp-cc-expiry-month digitsOnly"
											data-other-expiry="pas_ccyear" id="pas_ccmonth" maxlength="2"
											name="pas_ccmonth" required="required" type="tel"
											placeholder="MM"><font><font> / </font></font><input
											autocomplete="off"
											class="rxp-cc-expiry rxp-cc-expiry-year digitsOnly"
											data-other-expiry="pas_ccmonth" id="pas_ccyear" maxlength="2"
											name="pas_ccyear" required="required" type="tel"
											placeholder="AA">
									</div>
									<div id="expiry-error-container"></div>

								</div>
							</div>
						</div>
						<div class="rxpcol2">
							<div class="rxp-control-group">
								<label class="rxp-control-label rxpcol2 rxp-nospan rxp-popover"
									for="pas_cccvc"
									data-content="El CVV se encuentra en el reverso de la tarjeta. Está formado por tres dígitos.En tarjetas American Express, el número está localizado en la parte frontal de la tarjeta, a la derecha, encima del número de la tarjeta. Está formado por cuatro dígitos."
									data-title="CVV" data-original-title="" title=""><span><font><font>CVV</font></font></span>
									<i class="icon-info-sign"></i></label>
								<div class="controls">
									<input autocomplete="off" class="rxpcol2 digitsOnly "
										id="pas_cccvc" maxlength="4" name="pas_cccvc"
										required="required" type="tel" placeholder="CVV">

								</div>
							</div>
						</div>

					</div>


					<div class="rxp-control-group" id="issue-number-pane"
						style="display: none">
						<label class="rxp-control-label rxpcol2 rxp-nospan"
							for="pas_issuenumber"><font><font>Issue
									Number (if applicable)</font></font></label>
						<div class="controls">
							<div class="rxpcol2">
								<input autocomplete="off" class="rxpcol2 digitsOnly valid"
									id="pas_issuenumber" maxlength="2" name="pas_issuenumber"
									type="tel" placeholder="Número de emisión">
							</div>
						</div>
					</div>

					<div class="rxp-control-group">
						<label class="rxp-control-label" for="pas_ccname"><font><font>Name
									of cardholder</font></font></label>
						<div class="controls">
							<input autocomplete="off" class="rxp-wide rxpcol" id="pas_ccname"
								maxlength="100" name="pas_ccname" required="required"
								type="text"
								pattern="^[ÀÁÄÂÈÉÊËÌÍÎÏÒÓÔÖÙÚÛÜÑàáâäèéêëìíîïçòóôöùúûüñÇÆæa-zA-Z0-9;'&quot;,\s\+\.\-_&amp;/ŒœŽšžŸ]*$"
								placeholder="Nombre del titular de la tarjeta">
						</div>
					</div>
					<div class="rxp-dcc-holder" id="realex-dcc-holder"
						style="display: none;"></div>
					<!-- RealVault Div start -->

					<div style="clear: both">&nbsp;</div>
					<!-- RealVault Div End -->
					<div class="form-actions">
						<div class="rxp-btn-info rxp-center rxp-hidden">
							<font><font>To provide greater security, we take
									you to the verification page of your bank card.</font></font>
						</div>
						<font><font><input
								class="rxp-btn rxp-btn rxp-btn-block rxp-btn-primary rxp-btn-large valid"
								id="rxp-primary-btn" type="submit" value="Pay now"></font></font>
					</div>

					<input type="hidden" name="realexPortfolioName" value="Santander"
						class="valid"><input type="hidden" name="guid"
						value="f3fd21e1-6f6d-4a09-9487-66bea37633ce" class="valid"><input
						type="hidden" name="COMMENT1" value="##" class="valid"><input
						type="hidden" name="COMMENT2" value="" class="valid"><input
						type="hidden" name="CURRENCY" value="EUR" class="valid"><input
						type="hidden" name="ORDERID" value="1392239076-20264-20264"
						class="valid"><input type="hidden" name="AUTOSETTLEFLAG"
						value="0" class="valid"><input type="hidden"
						name="SHA1HASH" value="d3b8deba4e41c2c2bd5544231b53aa201756e2bb"
						class="valid"><input type="hidden" name="TIMESTAMP"
						value="20140212210436" class="valid"><input type="hidden"
						name="AMOUNT" value="199" class="valid"><input
						type="hidden" name="ACCOUNT" value="bbd" class="valid"><input
						type="hidden" name="MERCHANTID" value="cathal050204" class="valid">
					<input name="dccchoice" type="hidden" value="NO" class="valid">
					<input name="dccrate" type="hidden" class="valid"> <input
						name="dcc105" type="hidden" class="valid">

				</form>
			</div>
			<div class="rxp-footer">
				<div class="rxp-footer-left"></div>
			</div>
		</div>
	</div>


</body>
</html>