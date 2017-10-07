	$(document).ready(function() {
		
	// variable functions
	var six_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=3ac8267aacfe4c2e9cb83e26a801329b&bn=1&clear=1");
	        $(".reg-price").html("$474.00");
	        $(".inst-save").html("$294.05");
	        $(".mem-save").html("$19.05");
	        $(".big-price").html("$<span class='font45'>179.95</span>");
	        $(".free").html("FREE");
	}

	var three_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=17f53685665444d695d3f78f8473a1f9&bn=1&clear=1");
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$118.05");
	    	$(".mem-save").html("$13.05");
	    	$(".big-price").html("$<span class='font45'>118.95</span>");
	    	$(".free").html("FREE");
	}

	var one_jar_sub = function() {
	    	$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=0f02deade4954a26b34e2c6f28a60926&bn=1&clear=1");
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$34");
	    	$(".mem-save").html("$5");
	    	$(".big-price").html("$<span class='font45'>44.95</span>");
	    	$(".free").html("FREE");
	}

	var six_jar_reg = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=5c9ef8390d394683832a74247429b76b&bn=1&clear=1");
	    	$(".reg-price").html("$474.00");
	    	$(".inst-save").html("$275");
	    	$(".big-price").html("$<span class='font45'>199.00</span>");
	    	$(".free").html("FREE");
	}

	var three_jar_reg = function() {
			$("#CTALink").attr("href", "http://silenceyourcravings.com/cmd.php?pid=dbee7a518200490a810e71660f51bd68&bn=1&clear=1");
	    	$(".reg-price").html("$237.00");
	    	$(".inst-save").html("$105");
	    	$(".big-price").html("$<span class='font45'>132.00</span>");
	    	$(".free").html("FREE");
	}

	var one_jar_reg = function() {
			$("#CTALink").attr("href", "http://silenceyourcravings.com/cmd.php?pid=97263673a78c455290b3afae678bef31&bn=1&clear=1");
	    	$(".reg-price").html("$79.00");
	    	$(".inst-save").html("$29");
	    	$(".big-price").html("$<span class='font45'>49.99</span>");
	    	$(".free").html("+$4.95");
	}

	// Adding the class of Active-jar
	$('.jar').click(function() {
		if(!$(this).hasClass("active-jar")) {
			$(".jar").removeClass("active-jar");
			$(this).addClass("active-jar");
		}
		if( $(".jar6").hasClass("active-jar") ){
            if ($('input[name=inputy]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}
		if($(".jar3").hasClass("active-jar")){
            if ($('input[name=inputy]').is(':checked')) {
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}
		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}

	})
	
	function SubscribeOn() {	 
		$('html, body').animate({
		     scrollTop: $(".subscribe-div").offset().top
		    }, 1000);
		$(".mem-save-div").show()
		$(".inst-save-div").css("width", "45%")
		$('#inputy').prop('checked', true).triggerHandler('click')
		$('.red-check').show()
		$(".subInfo").html("PER MONTH")

		if($(".jar6").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			} 
		}

		if($(".jar3").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				three_jar_sub()
			}
			else {
				three_jar_reg();
			} 
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				one_jar_sub()
			}
			else {
				one_jar_reg();
			} 
		}
	}

	function SubscribeOff() {	
		$('#inputy').prop('checked', false).triggerHandler('click')  
		$(".subInfo").html("(This is a one time payment)")
		$('.red-check').hide()
		$(".mem-save-div").hide()
		$(".inst-save-div").css("width", "100%")

		if($(".jar6").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				six_jar_reg_sub();
			}
			else {
				six_jar_reg()
			}
		}

		if($(".jar3").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				three_jar_reg_sub();
			}
			else {
				three_jar_reg()
			}
		}

		if($(".jar1").hasClass("active-jar")){
			if ($('input[name=inputy]').is(':checked')) {
				one_jar_reg_sub();
			}
			else {
				one_jar_reg()
			}
		}
	}


	$('.subscribe-div').click(function() { 
		return (this.tog = !this.tog) ? SubscribeOn() : SubscribeOff();
	})

	
	// FAQ functionality 
	$(".indie-faq").click(function(){

		if(!$(this).hasClass("active-jar")) {
			$(".indie-faq").removeClass("active-jar")
			$(".answer").slideUp("slow");
			$(".plus").html("+");
			$(this).addClass("active-jar");
			$(this).find(".answer").slideDown("slow")
			$(this).find(".plus").html("-");
			}

		    else if($(this).hasClass("active-jar")) {
				$(this).removeClass("active-jar");
				$(".answer").slideUp("slow");
				$(".plus").html("+");
			  }

			}) // click function


		// slow scroll
		$("#bottom-CTA").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $(".cont-div").offset().top
		    }, 1000);
	   });

		// slow scroll
		$("a.product").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#bottle-section").offset().top
		    }, 1000);
	   });

		// slow scroll
		$("a.about").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#about-section").offset().top
		    }, 1000);
	   });

	}) // ready function