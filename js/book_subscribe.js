
$(document).ready(function() {

	// variable functions
	var six_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=89c154fb041645d08b3a3929f576f9bf&brand=mbg&bn=1&clear=1");
	        $(".reg-price").html("$419.70");
	        $(".subInfo").html("PER MONTH");
	        $(".inst-save").html("$189.75");
	        $(".mem-save").html("$24.75");
	        $(".big-price").html("$<span class='font45'>229.95</span></span>");
	        $(".ship").html("FREE");
	 
	}

	var six_jar_sub_book = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=910f9a061b9b4ef6a89eb7541721910d&brand=mbg&bn=1&clear=1");
		    $(".mem-save").html("$24.75");
	        $(".reg-price").html("$419.70");
	        $(".inst-save").html("$189.75");
	        $(".subInfo").html("+ $9.95 one time payment for book")
	        $(".big-price").html("$<span class='font45'>229.95</span>");
	        $(".ship").html("FREE");
	 
	}

	var three_jar_sub = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=6e2aaf7f141444c99ec67ac88050af3f&brand=mbg&bn=1&clear=1");
	    	$(".reg-price").html("$209.85");
	    	$(".inst-save").html("$87.90");
	    	$(".subInfo").html("PER MONTH");
	    	$(".mem-save").html("$12.90");
	    	$(".big-price").html("$<span class='font45'>121.95</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_sub_book = function() {
		    $("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=b30edb9fadaa4b859feccfd35b91010a&brand=mbg&bn=1&clear=1");
		    $(".mem-save").html("$12.90");
		    $(".subInfo").html("+ $9.95 one time payment for book")
	    	$(".reg-price").html("$209.85");
	    	$(".inst-save").html("$87.90");
	    	$(".big-price").html("$<span class='font45'>121.95</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_sub = function() {
	    	$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=17f8ce53ba6f489d992f063781db08a3&brand=mbg&bn=1&clear=1");
	    	$(".reg-price").html("$69.95");
	    	$(".inst-save").html("$25.00");
	    	$(".subInfo").html("PER MONTH");
	    	$(".mem-save").html("$5.00");
	    	$(".big-price").html("$<span class='font45'>44.95</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_sub_book = function() {
	    	$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=6874c76d8e054dce9f5057147fa61c97&brand=mbg&bn=1&clear=1");
	    	$(".mem-save").html("$5.00");
	    	$(".subInfo").html("+ $9.95 one time payment for book")
	    	$(".reg-price").html("$69.95");
	    	$(".inst-save").html("$25.00");
	    	$(".big-price").html("$<span class='font45'>44.95</span>");
	    	$(".ship").html("FREE");
	}

	var six_jar_reg = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=656e41e6f59341f8a7a6d1f5cf3f930b&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$419.70");
	    	$(".inst-save").html("$165.00");
	    	$(".big-price").html("$<span class='font45'>254.70</span>");
	    	$(".ship").html("FREE");
	}

	var six_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=cc00a60dccfc412e927499ad5d6dec9f&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$419.70");
	    	$(".inst-save").html("$165.00");
	    	$(".big-price").html("$<span class='font45'>264.65</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_reg = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=b65b7894020743d08d2078e219c2bc69&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$209.85");
	    	$(".inst-save").html("$75.00");
	    	$(".big-price").html("$<span class='font45'>134.85</span>");
	    	$(".ship").html("FREE");
	}

	var three_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=c1e30d5794474d25937c95846773d412&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$209.85");
	    	$(".inst-save").html("$75.00");
	    	$(".big-price").html("$<span class='font45'>144.80</span>");
	    	$(".ship").html("FREE");
	}

	var one_jar_reg = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=b65727ce45d041778936d6a374ecda4f&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$69.95");
	    	$(".inst-save").html("$20.00");
	    	$(".big-price").html("$<span class='font45'>49.95</span>");
	    	$(".ship").html("+$4.95");
	}

	var one_jar_reg_book = function() {
			$("#CTALink").attr("href", "http://gundrymd.com/cmd.php?pid=c5fac7bdd5da4d238855918ee3b98fb5&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".reg-price").html("$69.95");
	    	$(".inst-save").html("$20.00");
	    	$(".big-price").html("$<span class='font45'>59.90</span>");
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
		$("#bottom-button").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $("#scroll").offset().top
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