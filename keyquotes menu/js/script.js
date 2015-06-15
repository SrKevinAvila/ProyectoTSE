$(document).ready(function(){

	$("#banner").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 200){
			if(!flag){
				$("#logo").css({"margin-top": "100px", "width": "200px","height":"100px"});

				$("header").css({"background-color": "white"});
				flag = true;
			}
		}else{
			if(flag){
				$("#logo").css({"margin-top": "-5px", "width": "50px","height":"50px"});

				$("header").css({"background-color": "#3C3C3C"});
				flag = false;
			}
		}


	});

});