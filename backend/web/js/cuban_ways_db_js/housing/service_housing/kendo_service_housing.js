/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Service_housing={};
Service_housing.oldElement=null;
//Funcionalidades del Grid
Service_housing.change = function onChange(arg) {
};


Service_housing.change = function onDataBinding(arg) {
};


Service_housing.dataBound=function onDataBound(arg) {
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


Service_housing.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Service_housing.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_service_housing

Service_housing.findbyid_service_housing=function(value){
	var dataItem=null;
	dataItem=$.map(Service_housing.gridDataSource._data,function(val,index){
		if(val.id_service_housing==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_service

Service_housing.findbyid_service=function(value){
	var dataItem=null;
	dataItem=$.map(Service_housing.gridDataSource._data,function(val,index){
		if(val.id_service==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_housing

Service_housing.findbyid_housing=function(value){
	var dataItem=null;
	dataItem=$.map(Service_housing.gridDataSource._data,function(val,index){
		if(val.id_housing==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Service_housing.list_pdf=function( elem ){
	$("#tbody_table_service_housing").append(			"<tr>"+

			"<td>"+elem.price+"</td>"+

			"<td>"+elem.canceled+"</td>"+

			"<td>"+elem.name_service+"</td>"+

			"<td>"+elem.name_housing+"</td>"+
			"</tr>"

	)
}

