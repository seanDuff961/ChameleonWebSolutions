jQuery(document).ready(function($){
    /*var hiddenImage = $('.hidden-image');
	
    $('.heading-image').css({width: hiddenImage.css('width'), height: hiddenImage.css('height')});
    hiddenImage.remove();*/
    function startTransition() {
        var $active = $('.heading-image .active');
        var $next = ($active.next().length > 0) ? $active.next() : $('.heading-image .slide:first');
        $next.css('z-index',2);//move the next image up the pile
        $active.fadeOut(5000,function(){//fade out the top image
            $next.css('z-index',3).addClass('active');//make the next image the top one
            $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
        });
        setTimeout(startTransition, 10000);
    }
    setTimeout(startTransition(), 10000);
});