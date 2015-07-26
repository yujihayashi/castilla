setTimeout(function(){
	var $j = jQuery.noConflict();
	// increase the default animation speed to exaggerate the effect
	$j.fx.speeds._default = 1000;
	$j(function() {
		$j( ".mlw_qmn_quiz" ).tooltip();
	});
}, 100);
setTimeout(function()
{
	var $j = jQuery.noConflict();
	$j('.mlw_qmn_quiz input').on('keypress', function (e) {
		if (e.which === 13) {
			e.preventDefault();
		}
	});
}, 100);
var myVar=setInterval("mlwQmnTimer();",1000);
function mlwQmnTimer()
{
	var x = +document.getElementById("timer").value;
	x = x + 1;
	document.getElementById("timer").value = x;
}
function clear_field(field)
{
	if (field.defaultValue == field.value) field.value = '';
}

function mlw_validateForm()
{
	mlw_validateResult = true;

	jQuery('#quizForm *').each(function(){
		jQuery(this).css("outline", "");
		if (jQuery(this).attr('class'))
		{
			if(jQuery(this).attr('class').indexOf('mlwEmail') > -1 && this.value != "")
			{
				var x=this.value;
				var atpos=x.indexOf('@');
				var dotpos=x.lastIndexOf('.');
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
				{
					document.getElementById('mlw_error_message').innerHTML = '**'+email_error+'**';
					document.getElementById('mlw_error_message_bottom').innerHTML = '**'+email_error+'**';
					mlw_validateResult =  false;
					jQuery(this).css("outline", "2px solid red");
				}
			}
			if (window.sessionStorage.getItem('mlw_time_quiz'+qmn_quiz_id) == null || window.sessionStorage.getItem('mlw_time_quiz'+qmn_quiz_id) > 0.08) {

				if(jQuery(this).attr('class').indexOf('mlwRequiredNumber') > -1 && this.value == "" && +this.value != NaN)
				{
					document.getElementById('mlw_error_message').innerHTML = '**'+number_error+'**';
					document.getElementById('mlw_error_message_bottom').innerHTML = '**'+number_error+'**';
					jQuery(this).css("outline", "2px solid red");
					mlw_validateResult =  false;
				}
				if(jQuery(this).attr('class').indexOf('mlwRequiredText') > -1 && this.value == "")
				{
					document.getElementById('mlw_error_message').innerHTML = '**'+empty_error+'**';
					document.getElementById('mlw_error_message_bottom').innerHTML = '**'+empty_error+'**';
					jQuery(this).css("outline", "2px solid red");
					mlw_validateResult =  false;
				}
				if(jQuery(this).attr('class').indexOf('mlwRequiredCaptcha') > -1 && this.value != mlw_code)
				{
					document.getElementById('mlw_error_message').innerHTML = '**'+incorrect_error+'**';
					document.getElementById('mlw_error_message_bottom').innerHTML = '**'+incorrect_error+'**';
					jQuery(this).css("outline", "2px solid red");
					mlw_validateResult =  false;
				}
				if(jQuery(this).attr('class').indexOf('mlwRequiredAccept') > -1 && !this.checked)
				{
					document.getElementById('mlw_error_message').innerHTML = '**'+empty_error+'**';
					document.getElementById('mlw_error_message_bottom').innerHTML = '**'+empty_error+'**';
					jQuery(this).css("outline", "2px solid red");
					mlw_validateResult =  false;
				}
				if(jQuery(this).attr('class').indexOf('mlwRequiredRadio') > -1)
				{
	        check_val = jQuery(this).find('input:checked').val();
	        if (check_val == "No Answer Provided")
					{
	          document.getElementById('mlw_error_message').innerHTML = '**'+empty_error+'**';
						document.getElementById('mlw_error_message_bottom').innerHTML = '**'+empty_error+'**';
						jQuery(this).css("outline", "2px solid red");
						mlw_validateResult =  false;
					}
				}
				if(jQuery(this).attr('class').indexOf('mlwRequiredCheck') > -1)
				{
					if (!jQuery(this).find('input:checked').length)
					{
						document.getElementById('mlw_error_message').innerHTML = '**'+empty_error+'**';
						document.getElementById('mlw_error_message_bottom').innerHTML = '**'+empty_error+'**';
						jQuery(this).css("outline", "2px solid red");
						mlw_validateResult =  false;
					}
				}
			}
		}
	});

	if (!mlw_validateResult) {return mlw_validateResult;}

	jQuery( '.mlw_qmn_quiz input:radio' ).attr('disabled',false);
	jQuery( '.mlw_qmn_quiz input:checkbox' ).attr('disabled',false);
	jQuery( '.mlw_qmn_quiz select' ).attr('disabled',false);
	jQuery( '.mlw_qmn_question_comment' ).attr('disabled',false);
	jQuery( '.mlw_answer_open_text' ).attr('disabled',false);
}

if (qmn_ajax_correct) {
	jQuery('.qmn_quiz_radio').change(function() {
		var chosen_answer = jQuery(this).val();
		var question_id = jQuery(this).attr('name').replace(/question/i,'');
		var chosen_id = jQuery(this).attr('id');
		jQuery.each(qmn_question_list, function(i, value) {
			if (question_id == value.question_id) {
				jQuery.each(value.answers, function(j, answer) {
					if ( answer[0] === chosen_answer ) {
						if ( answer[2] !== 1) {
							jQuery('#'+chosen_id).parent().addClass("qmn_incorrect_answer");
						}
					}
					if ( answer[2] === 1) {
						jQuery(':radio[name=question'+question_id+'][value="'+answer[0]+'"]').parent().addClass("qmn_correct_answer");
					}
				});
			}
		});
	});
}

if (qmn_disable_answer) {
	jQuery('.qmn_quiz_radio').change(function() {
		var radio_group = jQuery(this).attr('name');
		jQuery('input[type=radio][name='+radio_group+']').prop('disabled',true);
	});
}
