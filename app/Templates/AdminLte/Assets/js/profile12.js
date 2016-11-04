$(document).ready(function() {
	$('#addNewUseBtn').click(function(){
		$('#form1').fadeIn();
		$('#addEditFormTitle1').text("Step 1 - Please provide the user's email address");
		$('#addNewUseBtnDiv').hide();
		return false;
	});

	$('#add_new_user').click(function(){
		var account_id = $('#group_account').val();
		var email = $.trim('#email').val());
		if(!email) {
			alert('Please enter email id');
		}
		if(validateEmail(email)){
			$.ajax({
				url: 'profile/validateEmail',
				data: $('#form1').serialize(),
				type: 'post',
				success: function(response) { 
					if (response.success) {
						if (response.saved) {
							
						} else {
							
						}
					} else if(response.message == 'logout') {
						window.location.href = '/logout';
					} else {
						$('.'+response.errorfor).addClass('has-error');
						alert(response.message);
						if(response.redirect) {
							window.location.href = response.redirect;
						}
						$('html, body').animate({
					        scrollTop: $('.'+response.errorfor).offset().top - 200
					    }, 1000);
					}
				}
			});
		} else {
			alert('Please enter validate email id')
		}
	});

	function validateEmail(sEmail) {
	    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	    if (filter.test(sEmail)) {
	        return true;
	    }
	    else {
	        return false;
	    }
	}​
});
