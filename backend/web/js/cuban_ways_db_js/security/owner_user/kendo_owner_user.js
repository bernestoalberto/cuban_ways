/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:48 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Owner_user={};
Owner_user.oldElement=null;
//Funcionalidades del Grid
Owner_user.change = function onChange(arg) {
};


Owner_user.change = function onDataBinding(arg) {
};


Owner_user.dataBound=function onDataBound(arg) {
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


Owner_user.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Owner_user.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_owner

Owner_user.findbyid_owner=function(value){
	var dataItem=null;
	dataItem=$.map(Owner_user.gridDataSource._data,function(val,index){
		if(val.id_owner==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_usuario

Owner_user.findbyid_usuario=function(value){
	var dataItem=null;
	dataItem=$.map(Owner_user.gridDataSource._data,function(val,index){
		if(val.id_usuario==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Owner_user.list_pdf=function( elem ){
	$("#tbody_table_owner_user").append(			"<tr>"+

			"<td>"+elem.name_owner+"</td>"+

			"<td>"+elem.username+"</td>"+
			"</tr>"

	)
}

