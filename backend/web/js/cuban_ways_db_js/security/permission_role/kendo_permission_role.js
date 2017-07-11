/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Permission_role={};
Permission_role.oldElement=null;
//Funcionalidades del Grid
Permission_role.change = function onChange(arg) {
};


Permission_role.change = function onDataBinding(arg) {
};


Permission_role.dataBound=function onDataBound(arg) {
	var dataarray=this._data;
	var i=0;
	$('#all_check').prop('checked',false);
	$('#all_check').iCheck('uncheck');
	$('.check_row').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%'
	});
}


Permission_role.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Permission_role.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_role

Permission_role.findbyid_role=function(value){
	var dataItem=null;
	dataItem=$.map(Permission_role.gridDataSource._data,function(val,index){
		if(val.id_role==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_permission

Permission_role.findbyid_permission=function(value){
	var dataItem=null;
	dataItem=$.map(Permission_role.gridDataSource._data,function(val,index){
		if(val.id_permission==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_permission_role

Permission_role.findbyid_permission_role=function(value){
	var dataItem=null;
	dataItem=$.map(Permission_role.gridDataSource._data,function(val,index){
		if(val.id_permission_role==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Permission_role.list_pdf=function( elem ){
	$("#tbody_table_permission_role").append(			"<tr>"+

			"<td>"+elem.name_role+"</td>"+

			"<td>"+elem.name_permission+"</td>"+
			"</tr>"

	)
}

