<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Prebiothrive - Mobile Order Page</title>
	<link rel="stylesheet" href="//player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />
	<style>
	  *{text-decoration: none; max-width: 100%; margin: 0; padding: 0;}
      html,body{margin: 0; padding: 0; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; background-color: #fff; font-weight: 300; margin: 0; padding: 0; font-size: 14px;
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
      .container{width: auto; margin: auto;}
      .small-cont{width: auto; margin: auto;}
      .smaller-cont{width: auto; margin: auto;}
      .padtop70{padding-top: 70px;}
      .white-text{color: #fff !important;}
      .caps{text-transform: uppercase;}
      .relative{position: relative;}
      .center{text-align: center;}
      .blue{color: #76a6ef;}
      .font12{font-size: 12px;}
      .marg10{margin: 10px 0;}
      .martop100{margin-top: 100px;}
      .auto{margin: auto;}
      .font45{font-size: 2.2em;}
      .bold{font-weight: bold;}
      .text-left{text-align: left !important;}

      header{background: #fff; padding: 15px;}
      header .Fright{padding-top: 10px;}
      .number{display: inline-block; color: #9f9e9f; margin-left: 5px; vertical-align: 2px;}
		
	  #blue-back{width: 100%; padding: 35px 0;
	  			background: rgba(106,129,232,1);
				background: -moz-linear-gradient(top, rgba(106,129,232,1) 0%, rgba(114,153,236,1) 42%, rgba(118,166,239,1) 51%, rgba(118,166,239,1) 68%, rgba(117,163,238,1) 83%, rgba(115,156,237,1) 100%);
				background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(106,129,232,1)), color-stop(42%, rgba(114,153,236,1)), color-stop(51%, rgba(118,166,239,1)), color-stop(68%, rgba(118,166,239,1)), color-stop(83%, rgba(117,163,238,1)), color-stop(100%, rgba(115,156,237,1)));
				background: -webkit-linear-gradient(top, rgba(106,129,232,1) 0%, rgba(114,153,236,1) 42%, rgba(118,166,239,1) 51%, rgba(118,166,239,1) 68%, rgba(117,163,238,1) 83%, rgba(115,156,237,1) 100%);
				background: -o-linear-gradient(top, rgba(106,129,232,1) 0%, rgba(114,153,236,1) 42%, rgba(118,166,239,1) 51%, rgba(118,166,239,1) 68%, rgba(117,163,238,1) 83%, rgba(115,156,237,1) 100%);
				background: -ms-linear-gradient(top, rgba(106,129,232,1) 0%, rgba(114,153,236,1) 42%, rgba(118,166,239,1) 51%, rgba(118,166,239,1) 68%, rgba(117,163,238,1) 83%, rgba(115,156,237,1) 100%);
				background: linear-gradient(to bottom, rgba(106,129,232,1) 0%, rgba(114,153,236,1) 42%, rgba(118,166,239,1) 51%, rgba(118,166,239,1) 68%, rgba(117,163,238,1) 83%, rgba(115,156,237,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6a81e8', endColorstr='#739ced', GradientType=0 );}
	  .special{font-size: 21px; color: #2d589a; text-align: center;}
	  .big-white{color: #fff; margin: 5px 0 25px; font-size: 45px; font-weight: bold; line-height: 1; text-transform: uppercase;
	  			 text-align: center;}
	  .top-list{padding: 0 15px; color: #fff; margin: auto; max-width: 300px; font-size: 13px; line-height: 2;}
	  .top-list p{width: 92%; float: right; margin-top: -3px;}
	  #bottle-section{margin-top: 30px; padding: 0 15px;}
	  .jar{background: #f0f0f0; color: #2d589a; text-align: center; padding:12px 10px; border-radius: 50px; display: inline-block;
			 width: 24%; font-weight: bold; font-size: 14px;}
	  .cont-div{padding: 20px 10px; text-align: left; background: #fff; border-radius: 5px; position: relative;
				  border-bottom-left-radius: 0; border-bottom-right-radius: 0; color: #bbbbbb;}
	  #jar-div{margin: 20px auto; width: 100%; text-align: center;}
	  .active-jar{color: #fff; background: #76a6ef;}
	  .checkbox{border: 2px solid #76a6ef; border-radius: 10px; background-color: #f0f0f0; width: 30px; height: 30px; 
    			  display: inline-block; vertical-align: -6px; margin-right: 5px; text-align: center; position: relative;}
      .red-check{width: 20px; display: none; position: absolute; left: 5px; top: 7px;}
      #inputy{position: absolute; z-index: 100; opacity: 0; height: 30px; width: 30px; left: 0; top: -6px;}
      .subscribe-div{padding: 10px; padding-left: 0;}
      .sub-text{float: right; width: 80%; color: #2d589a;}
      .terms-link{font-weight: bold; color: #f42032 !important; text-align: center; font-size: 10px;}
      .grey-div{background: #fafafa; padding: 15px; border-bottom: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2;}
      .boxes{width: 45%; font-weight: bold; font-size: 12px; text-align: center;}
      .mem-save, .inst-save, .reg-price{font-size: 17px; font-weight: normal; color: #4abe33; margin-top: 7px;}
      .ship{font-weight: bold; margin-top: 5px; color: #4880c2;}
      .reg-price{color: #f77163; text-decoration: line-through;}
      .bottom-grey-div{background: #fafafa; padding: 15px 15px 0; border-bottom-left-radius: 5px;
    					 border-bottom-right-radius: 5px; text-align: center; height: 185px;}
      .big-price{font-size: 30px; display: inline-block; color: #2d589a; }
      .terms-text{margin-top: 40px; background: #fff; padding: 10px; border-radius: 10px; font-size: 10px; text-align: center;}
      .orange-truck{width: 18px; margin-left: 5px; vertical-align: -1px;}
      .mem-save-div{display: none;}
      .inst-save-div{width: 100%;}
      .CTA{background-color: #d7f741; text-align: center; color: #2d589a; border-radius: 5px;
			 display: inline-block; padding: 20px 0; margin: 15px auto 0; font-size: 17px; 
			 width: 100%; position: relative;}
	  .shop-cart{margin-right: 10px; vertical-align: -2px;}
	  #tiny-garan{position: absolute; right: -25px; top: -25px;}
	  
	  #grey-back{background: #ebf1fa; padding: 30px 15px;}
	  #grey-back .container{color: #97a7c0; font-size: 14px; text-align: center; line-height: 1.6;}
	  .blue-text{color: #76a6ef; font-weight: bold; margin-bottom: 5px;}

	  #customer-div{background: #fff; padding: 50px 15px 0;}
	  .this-vid{background: #f5f5f5; text-align: center; width: 100px; padding: 6px; color: #76a6ef;
                font-size: 12px; font-weight: bold; border-radius: 25px; margin-bottom: 10px; letter-spacing: .5px;}
      .big-black{font-size: 30px; color: #48555e; font-weight: bold; text-transform: uppercase;}
      .blue-hr{border: 0; border-top: 1px solid #4e7fc8; width: 50px; margin: 20px auto 90px;}
      .video-div{margin: 40px auto 20px;}
      .reviews-link{font-size: 12px; margin-left: 15px; vertical-align: 4px; text-transform: uppercase;}
      .pie-div{margin-top: 50px; text-align: center;}
      .gun-back{margin-bottom: -4px; width: 100%; margin-top: 20px;}
      .loose-text{margin: 25px 0 45px; line-height: 1.7; font-size: 14px;}
      .smal-text{font-size: 12px; font-weight: bold; margin: 5px 0 20px;}
      .about-section{margin-top: 80px; position: relative;}

      #faq-div{width: 100%; background: #ebf1fa; padding: 40px 0;}
      .faq-div{padding: 0 15px;}
	  .indie-faq{border-top: 1px solid #fff; padding: 20px 10px; cursor: pointer;}
	  .last-faq{border-bottom: 1px solid #fff; margin-bottom: 40px;}
	  .answer{width: 600px; margin-top: 10px; display: none;}
      .plus{color: #76a6ef; float: right; font-weight: bold;}

      #bottom-blue{padding: 35px 15px; background: #76a6ef; color: #fff; line-height: 1.8;}
      .bottom-title{font-size: 22px; text-align: left; margin-top: 15px;}

      footer{background: #4e7fc8; padding: 40px 15px; font-size: 12px; color: #fff; text-align: center;}
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
	
	<!-- Google Tag Manager GUNDRY -->
	    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	    })(window,document,'script','dataLayer','GTM-M266MH');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) GUNDRY -->
	    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M266MH"
	    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<header>
	<div class="container">
		<div class="Fright">
			<img src="img/grey-phone.png" alt="">
			<p class="number">(800) 852 - 0477</p>
		</div>
		<img src="img/mobile-short-logo.png" alt="">
		<div class="clear"></div>
	</div>
</header>
<div id="blue-back">
	<div class="container">
		<div class="center">
			<img src="img/prebiothrive-2.png" alt="Prebiothrive">
		</div>
		<div class="top-right-div">
			<p class="special">Special <b>Online-Only</b> Offer on</p>
			<p class="big-white">Gundry MD<br> Prebiothrive</p>
			<div class="top-list">
				<img src="img/cake-icon.png" alt=""> <p>Helps with weight management</p>
				<div class="clear"></div>
				<img src="img/improved-icon.png" alt=""> <p>Increases appetite control</p>
				<div class="clear"></div>
				<img src="img/lightning-icon.png" alt=""> <p>Helps reduce cravings for junk foods</p>
				<img src="img/gift-icon.png" alt=""> <p>Promotes smoother digestion with less gas, bloating, &amp; discomfort</p>
				<div class="clear"></div>
			</div>
		</div>
		<div id="bottle-section">
		<div class="container center">
		<div class="cont-div">
			<p><b>CHOOSE QUANTITY</b></p>
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
		  <p><b>SUBSCRIBE &amp; SAVE</b></p>
		  <div class="subscribe-div">
		  	<p class="sub-text">Join the <b>GUNDRY VIP CLUB</b> and <span class="blue"><b>SAVE 10%!</b></span></p>
		  	<div class="checkbox"><input type="checkbox" id="inputy" name="inputy"><img src="img/blue-check.png" class="red-check" alt=""></div>
		  	<div class="clear"></div>
		  	<p class="center"><a href="new-you-terms2.php" class="terms-link" target="_blank">(Terms &amp; Conditions apply).</a></p>
		  </div>
		</div>
		<div class="grey-div">
		  		<div class="mem-save-div Fright boxes">
		  			<p>Member Savings:</p>
		  			<p class="mem-save">$12.90</p>
		  		</div>
		  		<div class="inst-save-div boxes marbot0">
		  			<p>Instant Savings</p>
		  			<p class="inst-save">$168</p>
		  		</div>
		  		<div class="clear"></div>
		  </div>
		  <div class="bottom-grey-div">
		  <p><b>Regular Price: </b><span class="reg-price">$237</span></p>
		  	<p class="big-price">$<span class="font45">132</span></p>
		  	<p class="subInfo bold">(This is a one time payment)</p>
		  	<p class="ship"><span class="free">FREE</span> SHIPPING <img src="img/truck.png" alt="" class="orange-truck"></p>
		  	<a href="http://silenceyourcravings.com/cmd.php?pid=dbee7a518200490a810e71660f51bd68&bn=1&clear=1" id="CTALink">
		  		<div class="CTA"><img src="img/tiny-garan.png" id="tiny-garan" alt=""> <img src="img/blue-shop-cart.png" alt="" class="shop-cart"> Buy Now</div>
		  	</a>
		  </div>
		  <p class="terms-text">By checking the "Subscribe" box above. You agree to receive "Prebiothrive" once per month and that your credit card will be charged the amount matching your selected package size, billed to your card as "Gundry MD" You can stop shipments anytime by calling customer service at 1-800-852-0477, from 6am to 6pm PST.<br> <a href="new-terms.php" class="terms-link" target="_blank">(Terms &amp; Conditions apply).</a></p>
	 	</div>
			
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
		<div class="video-div">
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
		   .oo-player-container{min-width: auto !important;}
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
		<div class="review-div">
			<p class="blue"><b>DOES IT WORK?</b></p>
			<p class="marg10">Here's why we average <span class="blue">4.7 Stars</span></p>
			<img src="img/blue-5stars.png" alt=""><a href="http://gundrymd.com/supplements/prebiothrive/#product-reviews-section" target="_blank" class="reviews-link">2284 <u>Customer Reviews</u></a>
			<div class="pie-div">
			<img src="img/blue-pie.png" alt="">
			</div>
		</div>
		<div class="about-section" id="about-section">
		<div class="about-div">
			<div class="this-vid auto">ABOUT</div>
			<p class="loose-text">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart &amp; Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.</p>
			<div class="sign-div">
                    <p class="blue"><b>Dr. Steven Gundry</b></p>
                    <p class="smal-text">Director of the International Heart &amp; Lung </p>
                    <img src="img/gun-sign.png" alt="Steven R. Gundry MD">
             </div>
		</div>
		</div>
	</div>
</div>
<img src="img/gun-back-mobile.jpg" alt="Steven Gundry" class="gun-back">
<div id="faq-div">
	<div class="container">
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
		<div class="center">
			<img src="img/prebio_supp.png" alt="Supplement Facts" width="300">
		</div>
	</div>
</div>
<div id="bottom-blue">
	<div class="container center">
		<img src="img/prebio-90.png" alt="Prebiothrive">
		<p class="bottom-title">GUNDRY MD <b>Prebiothrive</b></p>
		<p class="text-left">This formula was designed to help reduce the fatigue and energy dysfunction which act as warning signs for much more serious health problems. I've combined the power of 25 polyphenol-rich superfruits with dozens of natural fat-burning ingredients to help your body maintain higher energy levels and fast metabolism.</p>
		<div class="CTA" id="bottom-CTA"><img src="img/blue-shop-cart.png" alt="" class="shop-cart"> Buy Now</div>
	</div>
</div>
 <footer>
      <div class="container">
      <img src="img/white-logo.png" alt="" width="190">
        <div class="links-div">
         <a class="product" href="#bottle-section">Product</a>
         <a target="_BLANK" class="additionalInfo clickable" onclick="return !window.open(this.href, 'terms2' , 'scrollbars=1,width=500,height=500')" href="terms.php">Terms</a> <a target="_BLANK" class="additionalInfo clickable" onclick="return !window.open(this.href, 'privacy2' , 'scrollbars=1,width=500,height=500')" href="privacy.php">Privacy</a> <a class="about" href="#about-section">About Us</a>
        <p class="additionalInfo footerDivider">
        </div>
        <div class="clear"></div>
        <hr class="full-hr">
        <p class="info">The information on this website has not been evaluated by the Food and Drug Administration.<br> These products are not intended to diagnose, treat, cure or prevent any disease.</p>
        <p id="copyright" class="caps">&copy; Gundry MD <script>document.write(new Date().getFullYear());</script>. All Rights Reserved 
        <a target="_BLANK"onclick="return !window.open(this.href, 'terms2' , 'scrollbars=1,width=500,height=500')" href="terms.php" >Terms &amp; Conditions |</a>
        <a target="_BLANK"onclick="return !window.open(this.href, 'privacy2' , 'scrollbars=1,width=500,height=500')" href="privacy.php" >Privacy Policy |</a>
          9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p>
      </div>
    </footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/mobile-cont.js"></script>
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