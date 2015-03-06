// JavaScript Document
$(function(){
	$.get('dashboard/xhrGetListings', function(o){
		
		for(var i=0; i<o.length; i++){
			
			$('#listInserts').append('<div>'+o[i].text+'</div>');
		}
	},'json');
	
	$('#randomInsert').submit(function(){
		   var url = $(this).attr('action');
			var data = $(this).serialize();
//			console.log(data);
			$.post(url, data, function(o){
				//alert(1);
			});
			return false;
	});
});