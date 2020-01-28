$('#country').change(function(){
	var country = $(this).val();

	$.ajax({
		url:'/vendor/find_city/'+country,
		type:'GET',
		success:function(result){
           $('#city').html(result);
		}
	});
});