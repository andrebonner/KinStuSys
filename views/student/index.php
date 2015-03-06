
<table id="flex1" >
</table><script language="javascript" src="<?php print URL.'/views/student/js/student_grid.js';?>"></script>
<script language="javascript" >
	//$('.flexme').flexigrid({height: 200, width: 500, striped: false});

	$("#flex1").flexigrid({
	url : '<?php print URL.'/student/xhrGetListings';?>',
	dataType : 'json',
	colModel : [
	{ display: 'ID', name : 'id', width : 40, sortable : true, align: 'left'},
	{ display: 'First Name', name : 'firstname', width : 140, sortable : true, align: 'left'},
	{ display: 'Last Name', name : 'lastname', width : 140, sortable : true, align: 'left'},
	{ display: 'Sex', name : 'sex', width : 40, sortable : true, align: 'left'},
	{ display: 'Address', name : 'address', width : 240, sortable : true, align: 'left'}		
	],
	buttons : [
	{ name: 'Edit', bclass: 'edit', onpress: doCommand},
	{ separator: true},
	{ name: 'Delete', bclass: 'delete', onpress: doCommand}
	],
	searchitems : [
	{ display: 'ID', name:'id'},
	{ display: 'First Name', name:'firstname', isdefault: true},
	{ display: 'Last Name', name:'lastname'}
	],
	sortname: "id",
	sortorder: "asc",
	usepager: true,
	title: "Students",
	useRp: true,
	rp: 10,
	showTableToggleBtn: false,
	resizable: false,
	width: 580,
	height: 170,
	singleSelect: true
});

</script>
