/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_characteristics={};
Housing_characteristics.oldElement=null;
//Funcionalidades del Grid
Housing_characteristics.change = function onChange(arg) {
};


Housing_characteristics.change = function onDataBinding(arg) {
};


Housing_characteristics.dataBound=function onDataBound(arg) {
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


Housing_characteristics.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_characteristics

Housing_characteristics.findbyid_housing_characteristics=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics.gridDataSource._data,function(val,index){
		if(val.id_housing_characteristics==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_housing_characteristics

Housing_characteristics.findbyname_housing_characteristics=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics.gridDataSource._data,function(val,index){
		if(val.name_housing_characteristics.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Housing_characteristics.list_pdf=function( elem ){
	$("#tbody_table_housing_characteristics").append(			"<tr>"+

			"<td>"+elem.name_housing_characteristics+"</td>"+
			"</tr>"

	)
}

