/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_characteristics_housing={};
Housing_characteristics_housing.oldElement=null;
//Funcionalidades del Grid
Housing_characteristics_housing.change = function onChange(arg) {
};


Housing_characteristics_housing.change = function onDataBinding(arg) {
};


Housing_characteristics_housing.dataBound=function onDataBound(arg) {
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


Housing_characteristics_housing.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics_housing.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_characteristics_housing

Housing_characteristics_housing.findbyid_housing_characteristics_housing=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics_housing.gridDataSource._data,function(val,index){
		if(val.id_housing_characteristics_housing==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_housing

Housing_characteristics_housing.findbyid_housing=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics_housing.gridDataSource._data,function(val,index){
		if(val.id_housing==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing_characteristics_housing.list_pdf=function( elem ){
	$("#tbody_table_housing_characteristics_housing").append(			"<tr>"+

			"<td>"+elem.name_housing_characteristics+"</td>"+

			"<td>"+elem.name_housing+"</td>"+

			"<td>"+elem.count_housing_characteristics+"</td>"+

			"<td>"+elem.cancelled+"</td>"+
			"</tr>"

	)
}

