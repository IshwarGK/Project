$(document).ready(function () {
	
	// ["Label" , "website link" , "bar color" , "bar image"]
	var social = [
	 ["facebook", "http://fb.com", "#3B5998", "image/social/facebook.png"],
	 ["google+", "http://google.com", "#dd4b39", "image/social/google_plus.png"],
	 ["linkedin", "https://www.linkedin.com/", "#0e76a8", "image/social/linkedin.png"],
	 ["skype", "http://www.skype.com", "#00aff0", "image/social/skype.png"],
	 ["twitter", "https://twitter.com/", "#55acee", "image/social/twitter.png"]
	 ];

		
	$("#socialside").append('<ul class="mainul"></ul>');
	
	/// generating bars
	for(var i = 0 ; i < social.length ; i++){
		$(".mainul").append("<li>" + '<ul class="scli" style="background-color:' + social[i][2] + '">' +
						'<li>' + social[i][0] + '<img src="' + social[i][3] + '"/></li></ul></li>');
	 }
	
	/// bar click event
	$(".scli").click(function(){
		var link = $(this).text();		
		for(var i=0;i<social.length;i++){
			if(social[i][0] == link){
				window.open(social[i][1]);
			}
		}		
	});
	
	/// mouse hover event
	$(".scli").mouseenter(function() {	
		$(this).stop(true);	
		$(this).clearQueue();
			$(this).animate({
				left : "120px"
			}, 100);
				
	});

	/// mouse out event
	$(".scli").mouseleave(function(){
		$(this).animate({
			left:"0px"
		},100);
	});

});
