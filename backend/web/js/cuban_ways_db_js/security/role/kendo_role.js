/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Role={};
Role.oldElement=null;
//Funcionalidades del Grid
Role.change = function onChange(arg) {
};


Role.change = function onDataBinding(arg) {
};


Role.dataBound=function onDataBound(arg) {
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


Role.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Role.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_role

Role.findbyid_role=function(value){
	var dataItem=null;
	dataItem=$.map(Role.gridDataSource._data,function(val,index){
		if(val.id_role==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_role

Role.findbyname_role=function(value){
	var dataItem=null;
	dataItem=$.map(Role.gridDataSource._data,function(val,index){
		if(val.name_role.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Role.list_pdf=function( elem ){
	$("#tbody_table_role").append(			"<tr>"+

			"<td>"+elem.name_role+"</td>"+
			"</tr>"

	)
}

