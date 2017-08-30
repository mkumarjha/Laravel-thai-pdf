$(document).ready(function() {
	console.log('adfsf');
	$('#languageswitcher').change(function(){
		var locale = $(this).val();
		console.log(locale);
		var _token = $('input[name=_token]').val();
		$.ajax({
			url:"/language",
			type:'POST',
			data:{ locale: locale, _token: _token},
			datatype:'json',
			success:function(data){

			},
			complete:function(data){
				window.location.reload(true);
			}
		});
	});
});