// JavaScript Document<script type='text/javascript'>//<![CDATA[ 
(function ($) {
	$(function() {
		$( ".se-search" ).addClass("hidden");
		if ($(window).width()>740){
			if(("ontouchstart" in document.documentElement)){
			}
			else{
				$(".mega-container").sticky({ topSpacing: 0 });		
			}
		}		
	$(".double, .triple, .quad").append("<div class='clear'></div>");
	})
})(jQuery);//]]>  


//SEARCH SUBMIT HANDLER
function checkSubmit(e)
{
   if(e && e.keyCode == 13)
   {
      document.forms[0].submit();
   }
}