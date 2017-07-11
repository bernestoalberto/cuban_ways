/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Permission={};
Permission.oldElement=null;
//Funcionalidades del Grid
Permission.change = function onChange(arg) {
};


Permission.change = function onDataBinding(arg) {
};


Permission.dataBound=function onDataBound(arg) {
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


Permission.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Permission.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_permission

Permission.findbyid_permission=function(value){
	var dataItem=null;
	dataItem=$.map(Permission.gridDataSource._data,function(val,index){
		if(val.id_permission==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_permission

Permission.findbyname_permission=function(value){
	var dataItem=null;
	dataItem=$.map(Permission.gridDataSource._data,function(val,index){
		if(val.name_permission.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Permission.list_pdf=function( elem ){
	$("#tbody_table_permission").append(			"<tr>"+

			"<td>"+elem.name_permission+"</td>"+

			"<td>"+elem.url+"</td>"+
			"</tr>"

	)
}

