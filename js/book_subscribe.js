$(document).ready(function() {

	// variable functions
	var six_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=3ac8267aacfe4c2e9cb83e26a801329b&bn=1&clear=1");
	        $(".reg-price").html("$474.00");
	        $(".subInfo").html("PER MONTH");
	        $(".inst-save").html("$294.05");
	        $(".mem-save").html("$19.05");
	        $(".big-price").html("$<span class='font45'>179.95</span></span>");
	        $(".ship").html("FREE");
	 
	}

	var six_jar_sub_book = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=bd648df641974f96bb634c916af2577d&bn=1&clear=1");
		    //$(".mem-save").html("$24.75");
	        $(".reg-price").html("$474.00");
	        $(".inst-save").html("$294.05");
	        $(".subInfo").html("+ $9.95 one time payment for book")
	        $(".big-price").html("$<span class='font45'>179.95</span>");
	        $(".ship").html("FREE");
	 
	}

	var three_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=17f53685665444d695d3f78f8473a1f9&bn=1&clear=1");
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$118.05");
	    	$(".subInfo").html("PER MONTH");
	    	$(".mem-save").html("$13.05");
	    	$(".big-price").html("$<span class='font45'>118.95</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_sub_book = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=c4728a8b0e444481b985549629c25bf1&bn=1&clear=1");
		    // $(".mem-save").html("$12.90");
		    $(".subInfo").html("+ $9.95 one time payment for book")
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$118.05");
	    	$(".big-price").html("$<span class='font45'>118.95</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_sub = function() {
	    	$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=0f02deade4954a26b34e2c6f28a60926&bn=1&clear=1");
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$34.05");
	    	$(".subInfo").html("PER MONTH");
	    	$(".mem-save").html("$5.05");
	    	$(".big-price").html("$<span class='font45'>44.95</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_sub_book = function() {
	    	$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=2727dc3ed1824c5b90cf63c1d069d32b&bn=1&clear=1");
	    	//$(".mem-save").html("$5.05");
	    	$(".subInfo").html("+ $9.95 one time payment for book")
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$34.05");
	    	$(".big-price").html("$<span class='font45'>44.95</span>");
	    	$(".ship").html("FREE");
	}

	var six_jar_reg = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=5c9ef8390d394683832a74247429b76b&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$474.00");
	    	$(".inst-save").html("$275.00");
	    	$(".big-price").html("$<span class='font45'>199.00</span>");
	    	$(".ship").html("FREE");
	}

	var six_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=5efd1148e4f7484abb5ab2d9e067ce6a&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$474.00");
	    	$(".inst-save").html("$275.00");
	    	$(".big-price").html("$<span class='font45'>208.95</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_reg = function() {
			$("#CTALink").attr("href", "http://silenceyourcravings.com/cmd.php?pid=dbee7a518200490a810e71660f51bd68&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$105.00");
	    	$(".big-price").html("$<span class='font45'>132.00</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=c1e30d5794474d25937c95846773d412&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$105.00");
	    	$(".big-price").html("$<span class='font45'>141.95</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_reg = function() {
			$("#CTALink").attr("href", "http://silenceyourcravings.com/cmd.php?pid=97263673a78c455290b3afae678bef31&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$29.01");
	    	$(".big-price").html("$<span class='font45'>49.99</span>");
	    	$(".ship").html("+$4.95");
	}

	var one_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=9efb780ce0864fdb8a3a8dc6e9bffca1&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$29.01");
	    	$(".big-price").html("$<span class='font45'>59.94</span>");
	    	$(".ship").html("+$4.95");
	}


	// Adding the class of active-jar
	$('.jar').click(function() {
		if(!$(this).hasClass("active-jar")) {
			$(".jar").removeClass("active-jar");
			$(this).addClass("active-jar");
		}
		if( $(".jar6").hasClass("active-jar") ){
			if ($('input[name=sub-input]').is(':checked')  && $('input[name=book-input]').is(':checked') ) {
				six_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				six_jar_reg_book();
			}
			else if ($('input[name=sub-input]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}
		if($(".jar3").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked') && $('input[name=sub-input]').is(':checked')) {
				three_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				three_jar_reg_book();
			}
			else if ($('input[name=sub-input]').is(':checked')) {
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}
		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked') && $('input[name=sub-input]').is(':checked')) {
				one_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				one_jar_reg_book();
			}
			else if ($('input[name=sub-input]').is(':checked')) {
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}

	})
	
	function SubscribeOn() {	  
		$('#sub-input').prop('checked', true).triggerHandler('click')
		$('#sub-check').show()
		$(".top-left-box").addClass("deflate")
		setTimeout(function() {
		    $(".mem-box").addClass("expand");
			}, 500);

		if ($('input[name=book-input]').is(':checked')) {
				$(".subInfo").html("+ $9.95 one time payment for book");
			}

		else {
			$(".subInfo").html("PER MONTH");
		}

		if($(".jar6").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				six_jar_sub_book();
			}
			else {
				six_jar_sub()
			} 
		}

		if($(".jar3").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				three_jar_sub_book();
			}
			else {
				three_jar_sub()
			} 
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				one_jar_sub_book();
			}
			else {
				one_jar_sub()
			} 
		}
	}

	function SubscribeOff() {	
		$('#sub-input').prop('checked', false).triggerHandler('click')  
		$('#sub-check').hide()
		$(".mem-box").removeClass("expand")
		$(".top-left-box").removeClass("deflate")

		if($(".jar6").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				six_jar_reg_book();
			}
			else {
				six_jar_reg()
			}
		}

		if($(".jar3").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				three_jar_reg_book();
			}
			else {
				three_jar_reg()
			}
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=book-input]').is(':checked')) {
				one_jar_reg_book();
			}
			else {
				one_jar_reg()
			}
		}
	}


	$('#main-subscribe').click(function() { 
		return (this.tog = !this.tog) ? SubscribeOn() : SubscribeOff();
	})

	function BuyBookOn() {	  
		$('#book-input').prop('checked', true).triggerHandler('click')
		$('#book-check').show()

		if($(".jar6").hasClass("active-jar")){
		   if ($('input[name=sub-input]').is(':checked')) {
		
				six_jar_sub_book();
			}
			else {
				six_jar_reg_book();
			} 
		}

		if($(".jar3").hasClass("active-jar")){
		   if ($('input[name=sub-input]').is(':checked')) {
		
				three_jar_sub_book();
			}
			else {
				three_jar_reg_book();
			}
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=sub-input]').is(':checked')) {
				one_jar_sub_book();
			}
			else {
				one_jar_reg_book();
			}
		}
	}

	function BuyBookOff() {	
		$('#book-input').prop('checked', false).triggerHandler('click')  
		$('#book-check').hide()

		if($(".jar6").hasClass("active-jar")){
			
			if ($('input[name=sub-input]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}

		if($(".jar3").hasClass("active-jar")){
			
			if ($('input[name=sub-input]').is(':checked')) {
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=sub-input]').is(':checked')) {
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}
	}

	$('#book-subscribe').click(function(){
		return (this.tog = !this.tog) ? BuyBookOn() : BuyBookOff();
	})

	// slow scroll
		$("#bottom-button", ).click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#scroll").offset().top
		    }, 1000);
	   });

	// slow scroll
		$(".about", ).click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#about").offset().top
		    }, 1000);
	   });

	// slow scroll
		$(".product", ).click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#bottle-section").offset().top
		    }, 1000);
	   });

	// terms hover code
	$('#main-subscribe, .hover-checking').hover(
  		function () {
    		$('.hover-checking').show();
  	}, 
  		function () {
    		$(".hover-checking").hide();
 	 }
	);

	// faq questions code
	$(".indie-faq").click(function(){

		if(!$(this).hasClass("active")) {
			$(".indie-faq").removeClass("active")
			$(".answer").slideUp("slow");
			$(".plus").html("+");
			$(this).addClass("active");
			$(this).find(".answer").slideDown("slow")
			$(this).find(".plus").html("-");
			}

		    else if($(this).hasClass("active")) {
				$(this).removeClass("active");
				$(".answer").slideUp("slow");
				$(".plus").html("+");
			  }

	})
	})

	window.onbeforeunload = function() {
         //unchecked your check box here.  
      $("input[type='checkbox']").prop('checked', false)
 };