$(function(){
	var $box=$(".banner-cbox");
	var $img=$('.banner');	
	var i=0;
	var t=setInterval(move,4000)
		function move(){
			i++;
		if (i>$img.length-1) {
			i=0;
		}
	$box.animate({marginLeft:-980*i},800);
   }
})