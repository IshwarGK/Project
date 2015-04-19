$(document).ready(function(){
			$(".pull_feedback").toggle(function(){
					$("#feedback").animate({right:"0px"},300);
					return false;
				},
				function(){
					$("#feedback").animate({right:"-385px"},300);	
					return false;
				}
			); //toggle
		}); //document.ready
