$(document).ready(function() {
	var curve_all = RUZEE.ShadedBorder.create({ corner:8 });
	var curve_top = RUZEE.ShadedBorder.create({ corner:8, edges:'tlr' });
	var curve_bottom = RUZEE.ShadedBorder.create({ corner:8, edges:'blr' });
    var messaging = RUZEE.ShadedBorder.create({ corner:8, border:3 });
    
    curve_all.render($('.opt-in fieldset > span'));
	RUZEE.ShadedBorder.create({ corner:4 }).render($('span.hr'));
	
	curve_all.render($('.round-all'));
	curve_top.render($('.round-top'));
	curve_bottom.render($('.round-bottom'));
    messaging.render($('.messaging'));
	
	var _default;
    $(".clear-text").focus(function(){
            if (_default == null) {
                _default = $(this).val();
                $(this).val('');
            }
            else 
                if ($(this).val() == _default) {
                    _default = $(this).val();
                    $(this).val('');
                }
        }).blur(function(){
            if (!$(this).val()) {
                $(this).val(_default);
            }
        });
	swfobject.embedSWF("", "spotlight", "385", "183", "9.0.0", "");
	if (typeof $.fn.validate != 'undefined') {
		var validator = $(".validate").validate({
			messages: {
				emailLogin: {
					required: "Your email address cannot be blank. Try again.",
					email: "Your email address is invalid. Try again."
				},
				password: {
					required: "Your password cannot be blank. Try again."
				}
			}
		});
        var optin = $(".validate-optin").validate({
			messages: {
                optin: {
                    required: "You entered an invalid email address.<br>Please try again.",
                    email: "You entered an invalid email address.<br>Please try again."
                }
			},
            errorPlacement: function(error,element) {
                if(element.is('#optin')) error.appendTo(element.parent().parent());
                else error.insertAfter(element);
            }
		});
        var foreget = $(".validate-forget").validate({
			errorLabelContainer: ".error-msg",
			messages: {
				email: {
					required: "Your email address cannot be blank. Try again.",
					email: "Your email address is invalid. Try again."
				}
			}
		});
	}
});
