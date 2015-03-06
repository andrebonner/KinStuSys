

function doCommand(com, grid) {
	if(com == 'Edit'){
		$('.trSelected', grid).each(function(){
			var id = $(this).attr('id');
			id = id.substring(id.lastIndexOf('row')+(3));
			alert("student/edit/" + id);
			location.href = "student/edit/" + id;
		})
	}
	if(com == 'Delete'){
		$('.trSelected', grid).each(function(){
			var id = $(this).attr('id');
			id = id.substring(id.lastIndexOf('row')+(3));
			alert("student/delete/" + id);
			location.href = "student/delete/" + id;
		})
	}
}