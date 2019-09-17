
$(function(){
	$.extend($.fn.disableTextSelect = function() {
		return this.each(function(){
			$(this).mousedown(function(){return false;});
		});
	});
	$('.noSelect').disableTextSelect();//No text selection on elements with a class of 'noSelect'
});

$(function(){
    
    $('.left-side').click(function(){
        if ($('.left-part').hasClass('hidden')) {
            showLeft();
        } else {
            showFull();
        }
    });

    $('.right-side').click(function(){
        if ($('.right-part').hasClass('hidden')) {
            showRight();
        } else {
            showFull();
        }
    });

    $(document).keyup(function(e) {
        if (e.which == 37) showLeft();
        if (e.which == 39) showRight();
    });

    $('.panel').disableTextSelect();
});

function showLeft(){
    $('.full-image').animate({left: '250px'}, 200, function(){
        $('.full-image').css({ 'right': '0px', 'left': '0px' }).addClass('hidden');
    });
    $('.right-part').addClass('hidden');
    $('.left-part').removeClass('hidden');
    $('.left-part').css({ 'right': '', 'left': '-500px' }).animate({left: '0'}, 200);
}

function showRight(){
    $('.full-image').animate({right: '250px'}, 200, function(){
        $('.full-image').css({ 'right': '0px', 'left': '0px' }).addClass('hidden');
    });

    $('.left-part').addClass('hidden');
    $('.right-part').removeClass('hidden');
    $('.right-part').css({ 'right': '-500px', 'left': '' }).animate({right: '0'}, 200);
}

function showFull() {
    $('.left-part').addClass('hidden');
    $('.right-part').addClass('hidden');
    $('.full-image').removeClass('hidden');
    
}

