/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_service={};
Housing_service.oldElement=null;
//Funcionalidades del Grid
Housing_service.change = function onChange(arg) {
};


Housing_service.change = function onDataBinding(arg) {
};


Housing_service.dataBound=function onDataBound(arg) {
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


Housing_service.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_service.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_service

Housing_service.findbyid_service=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_service.gridDataSource._data,function(val,index){
		if(val.id_service==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_service

Housing_service.findbyname_service=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_service.gridDataSource._data,function(val,index){
		if(val.name_service.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Housing_service.list_pdf=function( elem ){
	$("#tbody_table_housing_service").append(			"<tr>"+

			"<td>"+elem.name_service+"</td>"+

			"<td>"+elem.description_service+"</td>"+
			"</tr>"

	)
}

