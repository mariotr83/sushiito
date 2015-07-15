/*
 * 	Additional function for manageblog.html
 *	Written by ThemePixels	
 *	http://themepixels.com/
 *
 *	Copyright (c) 2012 ThemePixels (http://themepixels.com)
 *	
 *	Built for Amanda Premium Responsive Admin Template
 *  http://themeforest.net/category/site-templates/admin-templates
 */


$(document).ready(function(){

	$.post('posts/ajax/all-posts', function(data){
		$('#contentwrapper').html(data);
	});

    $('.tab_item').click(function(event){
        event.preventDefault();
        var url = $(this).attr('href');
        $.post(url, function(response){
            $('#contentwrapper').html(response);
        });
        $('.tab_item').parent().removeClass('current');
        $(this).parent().addClass('current');
        return false;
    });
	
	$('.checkall, .checkall2').on('click',function(){
		if(!$(this).is(':checked')) {
			checkbox($(this),false);	
		} else {
			checkbox($(this),true);
		}
	});
	
	function checkbox(t,v) {
		t.parents('table').find('input[type=checkbox]').each(function(){
			if(!$(this).parents('tr').hasClass('togglerow')) {
				$(this).attr('checked',v);
			}
			$.uniform.update();
		});	
	}
	
	///// DELETE A SINGLE BLOG LIST /////
	
	$('.stdtable .delete').on('click',function(){
		var p = $(this).parents('tr');
		confirm('Are you sure you want to delete this post?', 'Delete Post', function(r) {
			if(r) {
				if(p.next().hasClass('togglerow'))
					p.next().remove();
				p.fadeOut(function(){
					$(this).remove();
				});
			}
		});
	return false;
	});
	
	
	///// QUICK VIEW /////

	
	///// QUICK VIEW UPDATE BUTTON /////
	$('.quickformbutton .update').on('click',function(){
		$(this).parent().find('.loading').show();
		return false;
	});
	
	///// QUICK VIEW CANCEL BUTTONS /////
	$('.quickformbutton .cancel').on('click', function(){
		$(this).parents('tr.togglerow').remove();
		return false;
	});
		
		
	///// SWITCHING LIST FROM 3 COLUMNS TO 2 COLUMN LIST /////
	function shortenedTab() {
		if($(window).width() < 450) {
			if(!$('.hornav').hasClass('shortened')) { //checked to prevent running multiple times when resizing windows
				$('.hornav').addClass('shortened');
				$('.hornav').append('<li class="more"><a>More</a><ul></ul></li>');
				var count = 0;
				$('.hornav li').each(function(){
					if(count > 1) {
						if(!$(this).hasClass('more'))
							$('.hornav li.more ul').append($(this));
					}
					count++;
				});	
			}
		} else {
			if($('.hornav').hasClass('shortened')) { //checked to prevent running multiple times when resizing windows
				$('.hornav').removeClass('shortened');
				
				$('.hornav li.more ul li').each(function(){
					$('.hornav').append($(this));
				});
				$('.hornav li.more').remove();
			}
		}
	}
	
	///// MORE DROPDOWN MENU IN HORIZONTAL MENU /////
	$('.hornav li.more > a').on('click',function(){
		if(!$('.hornav li.more ul').is(':visible')) {												
			$('.hornav li').removeClass('current');
			$(this).parent().addClass('current');
			$(this).parent().find('ul').show();
		} else {
			$('.hornav li.more ul').hide();	
		}
	});
		
	
	shortenedTab();
	
	///// ON RESIZE WINDOW /////
	$(window).resize(function(){
		shortenedTab();
	});

	
	
});