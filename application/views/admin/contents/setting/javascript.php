<script src="<?php echo base_url() ?>assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function() {
		bsCustomFileInput.init();

		$('select[name=time_format]').on('change', function(){
			var time = moment().format($(this).val());
			$('.ex-time-format').text(time);
		});
		
		$('select[name=date_format]').on('change', function(){
			var date = moment().format($(this).val());
			$('.ex-date-format').text(date);
		});
	});

	$('.confirm-update').submit(function(){
		var c = confirm('Are you sure update this data?');
		return c;
	});

	$('.edit-general').on('click', function(e){
		$('select[name=time_format]').removeAttr('disabled');
		$('select[name=date_format]').removeAttr('disabled');
		$('select[name=timezone]').removeAttr('disabled');
		$('select[name=default_role]').removeAttr('disabled');
		$('select[name=language_id]').removeAttr('disabled');
		$('#submit-general').removeAttr('disabled');

		$('.edit-general').fadeOut();
		$('.cancel-general').fadeIn();
	});

	$('.cancel-general').on('click', function(e){
		$('select[name=time_format]').attr('disabled', true);
		$('select[name=date_format]').attr('disabled', true);
		$('select[name=timezone]').attr('disabled', true);
		$('select[name=default_role]').attr('disabled', true);
		$('select[name=language_id]').attr('disabled', true);
		$('#submit-general').attr('disabled', true);

		$('.cancel-general').fadeOut();
		$('.edit-general').fadeIn();
	});

	$('.edit-profile').on('click', function(e){
		$('input[name=company]').removeAttr('disabled');
		$('input[name=email]').removeAttr('disabled');
		$('input[name=phone]').removeAttr('disabled');
		$('input[name=address]').removeAttr('disabled');
		$('input[name=logo]').removeAttr('disabled');
		$('input[name=site_url]').removeAttr('disabled');
		$('#submit-profile').removeAttr('disabled');

		$('.edit-profile').fadeOut();
		$('.cancel-profile').fadeIn();
	});

	$('.cancel-profile').on('click', function(e){
		$('input[name=company]').attr('disabled', true);
		$('input[name=email]').attr('disabled', true);
		$('input[name=phone]').attr('disabled', true);
		$('input[name=address]').attr('disabled', true);
		$('input[name=logo]').attr('disabled', true);
		$('input[name=site_url]').attr('disabled', true);
		$('#submit-profile').attr('disabled', true);

		$('.cancel-profile').fadeOut();
		$('.edit-profile').fadeIn();
	});

	$('.edit-media').on('click', function(e){
		$('input[name=max_size]').removeAttr('disabled');
		$('input[name=max_width]').removeAttr('disabled');
		$('input[name=max_height]').removeAttr('disabled');
		$('input[name=overwrite]').removeAttr('disabled');
		$('#submit').removeAttr('disabled');

		$('.edit-media').fadeOut();
		$('.cancel-media').fadeIn();
	});

	$('.cancel-media').on('click', function(e){
		$('input[name=max_size]').attr('disabled', true);
		$('input[name=max_width]').attr('disabled', true);
		$('input[name=max_height]').attr('disabled', true);
		$('input[name=overwrite]').attr('disabled', true);
		$('#submit').attr('disabled', true);

		$('.cancel-media').fadeOut();
		$('.edit-media').fadeIn();
	});
</script>