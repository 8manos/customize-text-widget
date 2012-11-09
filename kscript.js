jQuery(document).ready(function($){
	
	var  kcselector = $("#kcselector").attr('data-selector');
			 kcselector = $('.'+ kcselector );
	//$("#kslider").slider();
	var kmin = eval($("#kmin").attr("data-min"));
	var kmax = eval($("#kmax").attr("data-max"));
	//alert(kmin);
	//alert(kmax);
	$("#kslider").slider({
		        range : 'min', 
            min: kmin,
            max: kmax,
            value: kmin,
            step:1,
            slide: function( event, ui ) {
                //console.log(ui.value);
                kcselector.css("font-size",ui.value);		
            }
        });
       $("#fcolor li ").click(function(){
					$("#fcolor li ").removeClass("active");
					$(this).addClass("active");
					var fcolor = $(this).attr("data-col");
					kcselector.css("color",fcolor);
				});
				$("#selfont li").click(function(){
					$("#selfont li").removeClass("active");
					$(this).addClass("active");
					var family = $(this).attr('fdata');
					$( "#ftext").css({"font-family":family}); 
					kcselector.css("font-family",family);
				}); 
});