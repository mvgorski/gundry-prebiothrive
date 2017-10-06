 <?php
  $tablet_browser = 0;
  $mobile_browser = 0;
  $httpUserAgent = empty($_SERVER['HTTP_USER_AGENT']) ? "" : $_SERVER['HTTP_USER_AGENT'];

  if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($httpUserAgent))) {
    $tablet_browser++;
  }

  if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($httpUserAgent))) {
    $mobile_browser++;
  }

  if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
  }

  $mobile_ua = strtolower(substr($httpUserAgent, 0, 4));
  $mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');

  if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
  }

  if (strpos(strtolower($httpUserAgent),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
  }

  else if ($mobile_browser > 0) {
    // do something for mobile devices
    header("Location: secureOrder_m.php");
  }
  else {
    // do something for everything else - Desktop or unknown
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prebiothrive - Order Page</title>
	<style>
	  *{text-decoration: none; max-width: 100%; margin: 0; padding: 0;}
      html,body{margin: 0; padding: 0; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; background-color: #fff; font-weight: 300; margin: 0; padding: 0; font-size: 17px;
        letter-spacing: 1px;}
      img{border: none;}
      u{text-decoration: underline;}
      s{text-decoration: line-through;}
      i{font-style: italic;}
      b{font-weight: bold;}
      a:link, a:visited, a:active{text-decoration: none; color: inherit;}
      .Fright{float: right;}
      .Fleft{float: left;}
      .clear{clear: both;}
      .container{width: 1100px; margin: auto;}
      .small-cont{width: 960px; margin: auto;}
      .smaller-cont{width: 815px; margin: auto;}
      .padtop70{padding-top: 70px;}
      .white-text{color: #fff !important;}
      .caps{text-transform: uppercase;}
      .relative{position: relative;}
      .center{text-align: center;}
      .blue{color: #76a6ef;}
      .font12{font-size: 12px;}
      .marg10{margin: 10px 0;}
      .martop100{margin-top: 100px;}
      .bold{font-weight: bold;}
      .font24{font-size: 24px;}

      header{background: #fff; padding: 5px 0;}
      header .Fright{padding-top: 25px; position: relative;}
      .number{display: inline-block; color: #9f9e9f; margin-left: 5px; vertical-align: 2px;}
		
	  #blue-back{width: 100%; padding: 80px 0 50px;
	  			background: rgba(103,120,230,1);
				background: -moz-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(103,120,230,1)), color-stop(28%, rgba(118,164,239,1)), color-stop(47%, rgba(118,164,239,1)), color-stop(71%, rgba(118,164,239,1)), color-stop(100%, rgba(103,120,230,1)));
				background: -webkit-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -o-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -ms-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: linear-gradient(to right, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6778e6', endColorstr='#6778e6', GradientType=1 );}
	  .special{font-size: 34px; color: #2d589a;}
	  .big-white{color: #fff; margin: 15px 0 25px; font-size: 75px; font-weight: bold; line-height: 1; text-transform: uppercase;}
	  .top-list{margin-left: 15px;}
	  .top-list li{list-style-type: none; color: #fff; margin-bottom: 15px; font-size: 16px;}
	  .top-right-div{float: right; width: 490px;}
	  
	  #grey-back{width: 100%; background: #ebf1fa; padding: 50px 0;}
	  #grey-back .container{width: 820px; color: #97a7c0; font-size: 14px; text-align: center; line-height: 1.6;}
	  .blue-text{color: #76a6ef; font-weight: bold; margin-bottom: 5px; font-size: 17px;}
	  .choice{float: left; width: 360px; position: relative; z-index: 1;}
	  #first-choice .top-choice{border-top-left-radius: 25px;}
	  #first-choice .bottom-choice{border-bottom-left-radius: 25px;}
	  #second-choice .top-choice{border-top-left-radius: 25px; border-top-right-radius: 25px; padding: 24px 0;background: #2d589a;}
	  #third-choice .top-choice{border-top-right-radius: 25px;}
	  #third-choice .bottom-choice{border-bottom-right-radius: 25px; padding-left: 40px;}
	  #third-choice .mid-choice{padding: 61px 0;}
	  .top-choice{background: #4c70a8; text-align: center; padding: 15px 0; color: #fff;}
	  .optional{color: #76a6ef; margin-bottom: 3px; font-weight: bold; font-size: 12px;}
	  .mid-choice{background: #fafafa; padding: 30px 0 25px;}
	  .book-details{color: #2d589a; margin-left: 40px; margin-top: 15px; line-height: 1.3;}
	  .bottom-choice{background: #fff; padding: 15px 23px 20px;}
	  .checkbox{border: 2px solid #76a6ef; border-radius: 10px; background-color: #fff; width: 30px; height: 30px; 
    			  display: inline-block; vertical-align: -6px; margin-right: 5px; text-align: center; position: relative;}
      .red-check{width: 20px; display: none; position: absolute; left: 5px; top: 7px;}
      .inputy{position: absolute; z-index: 100; opacity: 0; height: 40px; width: 40px; left: 0; top: -6px;cursor:pointer;}
      .subscribe-div{padding: 10px; padding-left: 0; cursor: pointer;}
      .sub-text{float: right; width: 85%; color: #2d589a; font-size: 13px; line-height: 1.4;}
      .sub-list li{list-style-image: url("img/small-blue-check.png"); margin-bottom: 10px; color: #2d589a;
  				   padding-left: 5px;}
  	  .sub-list{width: 200px; margin: auto; padding-left: 50px;}
  	  .jar{background: #f0f0f0; color: #2d589a; text-align: center; padding:12px 10px; border-radius: 50px; display: inline-block;
			 width: 24%;cursor:pointer;}
	  #jar-div{margin: auto; width: 100%; text-align: center;}
	  .active-jar{color: #fff; background: #76a6ef;}
	  .package-div{background: #fff; padding: 20px 0px; border-bottom-right-radius: 25px; border-bottom-left-radius: 25px;}
	  #second-choice{z-index: 10; width: 420px; margin: -70px -20px 0; border-radius: 25px;
	  				 -webkit-box-shadow: 0px 0px 6px 0px rgba(51,51,51,1);
					-moz-box-shadow: 0px 0px 6px 0px rgba(51,51,51,1);
					box-shadow: 0px 0px 6px 0px rgba(51,51,51,1);}
	  .big-price{font-size: 30px; display: inline-block; color: #2d589a; }
      .terms-text{margin-top: 40px; background: #fff; padding: 10px; border-radius: 10px; font-size: 10px; text-align: center;}
      .orange-truck{width: 18px; margin-left: 5px; vertical-align: -1px;}
      .mem-save-div{display: none;}
      .inst-save-div{width: 100%;}
      .CTA{background-color: #d7f741; text-align: center; color: #2d589a; border-radius: 5px; width: 98%;
			 display: inline-block; padding: 25px 0; margin: 15px auto 0; font-size: 17px; position: relative;
			 cursor: pointer; transition: all 0.5s;}
	  .CTA span:after{content: '>'; position: absolute; opacity: 0; right: 40px; transition: 0.5s;
             font-size: 20px; cursor: pointer; vertical-align: middle;}
      .CTA:hover span{padding-right: 25px;}
      #bottom-button span:after{right: 0; vertical-align: -5px;}
      .CTA:hover span:after{opacity: 1; right: 60px;}
      #bottom-button:hover span:after{opacity: 1; right: 20px;}
	  .shop-cart{margin-right: 10px; vertical-align: -2px;}
	  .mem-save, .inst-save, .reg-price, .ship{font-size: 17px; font-weight: normal; color: #4abe33; margin-top: 7px;}
      .reg-price{color: #f77163; text-decoration: line-through;}
      .font45{font-size: 2em;}
      .detail-div{text-align: center; padding: 20px; padding-bottom: 0;}
      .box{float: left; width: 39%; text-align: center; font-size: 14px; padding: 20px; line-height: 1.8; transition: all 0.5s;}
      .details-box{border: 1px solid #ededed; border-radius: 40px;}
      .top-left-box{border-right: 1px solid #ededed; border-bottom: 1px solid #ededed;}
      .bottom-right-box{border-left: 1px solid #ededed; border-top: 1px solid #ededed;}
      .subInfo{color: #2d589a;}
      .mem-box{width: 0; display: none;}
      .top-left-box{border-right: 0; width: 100%; padding: 20px 0;}
      .hover-checking{position: absolute; background: #fff; width: 212px; padding: 20px 15px 10px;
					    border-radius: 5px; right: -215px; top: 250px; border: 1px solid; display: none;}
	  .checking-text{text-align: center; font-size: 13px; letter-spacing: 0; max-width: 365px; margin: 0 auto 12px;}
	  .terms-link{color: #4880c2 !important; font-weight: bold;}
	  .expand{width: 39%; display: block; transition: 0.5s;}
	  .deflate{padding: 20px; width: 39%; border-right: 1px solid #ededed;}

	  #customer-div{background: #fff; width: 100%; padding-top: 90px;}
	  .this-vid{background: #f5f5f5; text-align: center; width: 180px; padding: 6px; color: #76a6ef;
                font-size: 12px; font-weight: bold; margin: auto; border-radius: 25px; margin-bottom: 10px; letter-spacing: .5px;}
      .big-black{font-size: 30px; text-align: center; color: #48555e; font-weight: bold; text-transform: uppercase;}
      .blue-hr{border: 0; border-top: 1px solid #4e7fc8; width: 50px; margin: 20px auto 90px;}
      .review-div{float: right; width: 360px;}
      .reviews-link{font-size: 12px; margin-left: 15px; vertical-align: 4px; text-transform: uppercase;}
      .pie-div{margin-top: 50px;}
      .gun-back{position: absolute; top: -5px; right: -180px; width: 600px;}
      .loose-text{margin: 25px 0 65px; line-height: 1.7; font-size: 14px;}
      .smal-text{font-size: 14px; font-weight: bold; margin: 5px 0 20px;}
      .about-div{width: 630px;}
      .about-section{padding-bottom: 59px; margin-top: 100px; position: relative;}

      #faq-div{width: 100%; background: #ebf1fa; padding: 60px 0 40px;}
      .faq-div{width: 685px;}
	  .indie-faq{border-top: 1px solid #fff; padding: 25px 0; cursor: pointer;}
	  .last-faq{border-bottom: 1px solid #fff}
	  .answer{width: 600px; margin-top: 10px; display: none;}
      .plus{color: #76a6ef; float: right; font-weight: bold;}

      #bottom-blue{width: 100%; padding: 35px 0 25px;
	  			background: rgba(103,120,230,1);
				background: -moz-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(103,120,230,1)), color-stop(28%, rgba(118,164,239,1)), color-stop(47%, rgba(118,164,239,1)), color-stop(71%, rgba(118,164,239,1)), color-stop(100%, rgba(103,120,230,1)));
				background: -webkit-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -o-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: -ms-linear-gradient(left, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				background: linear-gradient(to right, rgba(103,120,230,1) 0%, rgba(118,164,239,1) 28%, rgba(118,164,239,1) 47%, rgba(118,164,239,1) 71%, rgba(103,120,230,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6778e6', endColorstr='#6778e6', GradientType=1 );}
	   .bottom-info{width: 790px; color: #fff; line-height: 1.5;}
	   #bottom-button{width: 25%; padding: 15px 0;}

      footer{background: #4e7fc8; padding: 40px 0; font-size: 12px; color: #fff;}
      .info{color: #234476; text-align: center; text-transform: uppercase; font-weight: bold; margin-bottom: 15px;}
      .links-div{padding-top: 18px;}
      .links-div a{margin-left: 15px; font-weight: bold;}
      .full-hr{border: 0; border-top: 1px solid #4371b5; width: 100%; margin: 20px auto;}
	</style>
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="//player.ooyala.com/static/v4/stable/latest/core.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/video-plugin/main_html5.min.js"></script>
	<script src="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.js"></script>
	<link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content=“Gundry MD Prebiothrive” />
	<meta property="og:description" content=“Internet Only Special on Prebiothrive by Gundry MD” />
	<meta property="og:image" content="http://getenergyatanyage.com/img/combinedProduct.png" />

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB4RFPK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
	<div class="container">
		<div class="Fright">
			<img src="img/grey-phone.png" alt="">
			<p class="number">(800) 852 - 0477</p>
		</div>
		<img src="img/gundry-logo.png" alt="Gundry MD" style="width: 200px;">
		<div class="clear"></div>
	</div>
</header>
<div id="blue-back">
	<div class="container">
		<div class="top-right-div">
			<p class="special">Special <b>Online-Only</b> Offer on</p>
			<p class="big-white">Gundry MD<br> Prebiothrive</p>
			<ul class="top-list">
				<li><img src="img/cake-icon.png" style="margin-right: 6px;" alt=""> Helps against fat build-up around belly, thighs, &amp; waist</li>
				<li><img src="img/improved-icon.png" style="margin-right: 10px;" alt="">Improved digestion with less gas, bloating, &amp; discomfort</li>
				<li><img src="img/lightning-icon.png" style="margin-right: 15px; padding-left: 4px;" alt="">Amazing charge of long-lasting energy</li>
				<li><img src="img/gift-icon.png" style="margin-right: 8px;" alt=""> Additional savings on multi-jar packages</li>
			</ul>
		</div>
		<img src="img/prebio-90.png" alt="Prebiothrive" height="400">
		<div class="clear" id="scroll"></div>
		<div id="bottle-section" style="margin-top: 60px;">
			<div class="choice" id="first-choice">
				<div class="top-choice">
					<p class="optional">OPTIONAL</p>
					<p>Add The Book</p>
				</div>
				<div class="mid-choice">
					<img src="img/book-new.png" alt="" class="Fright">
					<p class="book-details">Supercharge the benefits of Prebiothrive with Dr. Gundry's revolutionary diet program</p>
					<div class="clear"></div>
				</div>
				<div class="bottom-choice">
					<div class="subscribe-div" id="book-subscribe">
						<p class="sub-text"><b>YES!</b> I want to add <b>Dr. Gundry's Diet Evolution</b> for <span class="blue"><b>$9.95</b></span></p>
						<div class="checkbox"><input type="checkbox" class="inputy" id="book-input" name="book-input"><img src="img/blue-check.png" class="red-check" id="book-check" alt=""></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="choice" id="second-choice">
				<div class="top-choice">
					<p>Choose Your Package</p>
				</div>
				<div class="package-div">
					<div id="jar-div">
						<div class="jar jar1">
							<p>1 Jar</p>
						</div>
						<div class="jar active-jar jar3">
							<p>3 Jars</p>
						</div>
						<div class="jar jar6">
							<p>6 Jars</p>
						</div>
					</div>
					<div class="detail-div">
						<div class="details-box">
							<div class="box top-left-box">
								<p><b>Regular Price: </b><br><span class="reg-price">$297</span></p>
							</div>
							<div class="box mem-box">
								<p><b>Member Savings:</b><br>
									<span class="mem-save">$12.90</span></p>
								</div>
							<div class="clear"></div>
							<div class="box">
								<p><b>Instant Savings</b><br>
		  						<span class="inst-save">$168</span></p>
							</div>
							<div class="box bottom-right-box">
								<p><img src="img/truck-icon.png" alt=""> <b>Shipping</b><br>
		  						<span class="ship">FREE</span></p>
							</div>
							<div class="clear"></div>
							</div>
							<p class="big-price">$<span class="font45">129</span></p>
							<p class="subInfo bold">(This is a one time payment)</p>
							<a href="http://gundrymd.com/cmd.php?pid=b65b7894020743d08d2078e219c2bc69&brand=mbg&bn=1&clear=1" id="CTALink">
							<div class="CTA"><img src="img/blue-shop-cart.png" alt="" class="shop-cart"> <span class="arrow">Buy Now</span></div>
							</a>
					</div>
				</div>
			</div>
			<div class="choice" id="third-choice">
				<div class="top-choice">
					<p class="optional">OPTIONAL</p>
					<p>Subscribe &amp; Save</p>
				</div>
				<div class="mid-choice">
					<ul class="sub-list">
						<li>Greater savings</li>
						<li>Lock in low price</li>
						<li>Guaranteed availability</li>
						<li>Cancel anytime</li>
					</ul>
				</div>
				<div class="bottom-choice">
					<div class="subscribe-div" id="main-subscribe">
						<p class="sub-text"><b>YES!</b> I want to add sign up for <b>GUNDRY VIP CLUB</b> and <span class="blue"><b>SAVE 10%</b></span></p>
						<div class="checkbox"><input type="checkbox" class="inputy" id="sub-input" name="sub-input"><img src="img/blue-check.png" class="red-check" alt="" id="sub-check"></div>
						<div class="clear"></div>
						<div class="hover-checking">
			<p class="checking-text">By checking the "Subscribe" box above. You agree to receive "Prebiothrive" once per month and that your credit card will be charged the amount matching your selected package size, billed to your card as "Gundry MD" You can stop shipments anytime by calling customer service at 1-800-852-0477, from 6am to 6pm PST <br><a href="new-terms.php" target="_blank" onclick="return !window.open(this.href, 'GUNDRYMD', 'toolbar=no, scrollbars=no, resizable=no, status=no, menubar=no, location=no, top=300, left=300, width=400, height=400')" class="terms-link">(All terms and conditions apply).</a></p>
			</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div id="grey-back">
	<div class="container">
		<p class="blue-text">100% MONEY BACK GUARANTEE</p>
		<p>We work hard to formulate the most advanced products on the market. Our 90-Day Customer Satisfaction Guarantee<br> is designed to give you ample opportunity to experience optimal results from your product, completely risk-free.</p>
	</div>
</div>
<div id="customer-div">
	<div class="container">
		<div class="this-vid">REVIEWS</div>
		<p class="big-black">Here's what our customers are saying</p>
		<hr class="blue-hr">
		<div class="review-div">
			<p class="blue"><b>DOES IT WORK?</b></p>
			<p class="marg10">Here's why we average <span class="blue">4.7 Stars</span></p>
			<img src="img/blue-5stars.png" alt=""><a href="http://gundrymd.com/supplements/prebiothrive/#product-reviews-section" target="_blank" class="reviews-link">2284 <u>Customer Reviews</u></a>
			<div class="pie-div">
			<img src="img/blue-pie.png" alt="">
			</div>
		</div>
		<div class="video-div" style="width:650px;">
		<div id="LimelightEmbeddedPlayerFlash"></div>
          <!-- start OOYALA ADD -->
          <style type="text/css">

           .oo-control-bar{visibility: hidden; pointer-events: none;}
           .oo-animate-pause{ opacity: 1 !important}
           .oo-spinner-wrapper{ width: 20px;}
           .oo-icon-system-replay{font-size: 20px;}
           .oo-player-container .oo-start-screen .oo-start-screen-linear-gradient{background: transparent !important;}
           .oo-player-container .oo-state-screen .oo-action-icon span.oo-icon, .oo-player-container .oo-spinner-screen .oo-action-icon span.oo-icon{opacity: 0 !important;}
           .oo-state-screen-poster{background-image: url("img/vid-poster3.png") !important;}
		   .oo-fading-underlay { visibility:hidden;}
		   .oo-start-screen-linear-gradient { visibility:hidden;}
		   .oo-player-container .oo-player{background-color: transparent !important;}
		   .innerWrapper{border-radius: 30px;}
        </style>
        <script>
         var playerParam = {
          pcode: '42dWgyOq26LapmzP0dkDCzEhlyfW',
          autoplay: false,
          debug:false,
          playerBrandingId: '1a4519374354edeb30fda41ce0a2b33',
          skin: {
           config: 'gundrymd.json'
         }
       };
       OO.ready(function() {
								// change the second parameter (embed code) to change the video 
								window.pp = OO.Player.create('LimelightEmbeddedPlayerFlash', 'wybzIxYzE6t56kIkKxp9Ki0KWWlgUSXk', playerParam);});
              </script>
		</div>
		<div class="clear"></div>
		<div class="about-section" id="about-section">
		<div class="about-div">
			<p class="loose-text">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart &amp; Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.</p>
			<div class="sign-div">
                    <p class="blue"><b>Dr. Steven Gundry</b></p>
                    <p class="smal-text">Director of the International Heart &amp; Lung </p>
                    <img src="img/gun-sign.png" alt="">
             </div>
		</div>
		<img src="img/gun-back2.jpg" alt="Dr. Steven Gundry" class="gun-back">
		</div>
	</div>
</div>
<div id="faq-div">
	<div class="container">
		<div class="Fright">
			<img src="img/prebio_supp.png" alt="Supplement Facts" width="330">
		</div>
		<div class="faq-div">
				<div class="indie-faq">
					<p class="plus">+</p>
					<p class="blue">How do I use Prebiothrive?</p>
					<p class="answer">Start your day off right with a scoop of PrebioThrive in the morning. PrebioThrive is a dissolving naturally-flavored mix that tastes great in water and a variety of other beverages, including smoothies.</p>
                    <p class="answer">To experience the full benefits of PrebioThrive take one scoop daily with beverage or blended drink, preferably with probiotics to create a synbiotic effect. Use it consistently for the best results.</p>
				</div>
				<div class="indie-faq">
					<p class="plus">+</p>
					<p class="blue">Who should use Prebiothrive?</p>
					<p class="answer">This prebiotic supplement is designed to help support digestive health, and strengthen your immune system. It is perfect for anyone who wants to improve digestive comfort and feelings of wellness.</p>
                    <p class="answer">PrebioThrive is a supplement, and therefore, NOT designed to treat more serious illnesses. It should not be used to replace prescription medication.</p>
				</div>
				<div class="indie-faq">
					<p class="plus">+</p>
					<p class="blue">How safe is Prebiothrive?</p>
					<p class="answer">PrebioThrive contains only 100% natural and safe ingredients. The formula is tested for quality and purity at an independent, 3rd-party facility. However, as a physician I recommend consulting with your own health care provider before beginning any new supplement.</p>
				</div>
				<div class="indie-faq">
					<p class="plus">+</p>
					<p class="blue">What if it doesn't work for me? Is there a guarantee?</p>
					<p class="answer">We’re incredibly proud of our industry-best customer support and equally proud of our groundbreaking supplements, which is why we back up every single one of our supplements with our 90-day customer satisfaction guarantee.</p>
                    <p class="answer">If you’re unsatisfied with your results for any reason, simply contact our customer support team within 90 days of purchasing your products, and we’ll refund your purchase — no hassle, no worries.</p>
				</div>
			</div>
		<div class="clear"></div>
	</div>
</div>
<div id="bottom-blue">
	<div class="container">
	<img src="img/prebio-90.png" class="Fright" alt="Prebiothrive" height="230">
	<div class="bottom-info">
		<p class="font24">GUNDRY MD <b>Prebiothrive</b></p>
		<p>This cutting-edge formula combines five advanced prebiotic ingredients to help promote a probiotic-friendly environment in your gut. By helping the “good bacteria” in your gut to flourish, PrebioThrive supports healthy digestion, energy levels, and overall feelings of wellness.</p>
		<div class="CTA" id="bottom-button"><img src="img/blue-shop-cart.png" alt="shopping cart" class="shop-cart"> <span class="arrow">Buy Now</span></div>
	</div>
	<div class="clear"></div>
	</div>
</div>
 <footer>
      <div class="container">
        <div class="links-div Fright">
         <a href="#bottle-section">Product</a>
         <a target="_BLANK" class="additionalInfo clickable" onclick="return !window.open(this.href, 'terms2' , 'scrollbars=1,width=500,height=500')" href="terms.php" >Terms</a> <a target="_BLANK" class="additionalInfo clickable" onclick="return !window.open(this.href, 'privacy2' , 'scrollbars=1,width=500,height=500')" href="privacy.php" >Privacy</a> <a href="secureOrder.php#doctorWrap" target="_BLANK">About Us</a>
        <p class="additionalInfo footerDivider">
        </div>
        <img src="img/white-logo.png" alt="" width="190">
        <div class="clear"></div>
        <hr class="full-hr">
        <p class="info">The information on this website has not been evaluated by the Food and Drug Administration.<br> These products are not intended to diagnose, treat, cure or prevent any disease.</p>
        <p id="copyright" class="caps">&copy; Gundry MD 2017. All Rights Reserved 
        <a target="_BLANK"onclick="return !window.open(this.href, 'terms2' , 'scrollbars=1,width=500,height=500')" href="terms.php" >Terms &amp; Conditions |</a>
        <a target="_BLANK"onclick="return !window.open(this.href, 'privacy2' , 'scrollbars=1,width=500,height=500')" href="privacy.php" >Privacy Policy |</a>
          9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p>
      </div>
    </footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/book_subscribe.js"></script>
<script>
	$(document).ready(function() {

		window.onbeforeunload = function() {
         //unchecked your check box here.  
    	  $("input[type='checkbox']").prop('checked', false)
		 };

 })
</script>
</body>
</html>