/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_type={};
Housing_type.oldElement=null;
//Funcionalidades del Grid
Housing_type.change = function onChange(arg) {
};


Housing_type.change = function onDataBinding(arg) {
};


Housing_type.dataBound=function onDataBound(arg) {
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


Housing_type.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_type.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_type

Housing_type.findbyid_housing_type=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_type.gridDataSource._data,function(val,index){
		if(val.id_housing_type==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_housing_type

Housing_type.findbyname_housing_type=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_type.gridDataSource._data,function(val,index){
		if(val.name_housing_type.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Housing_type.list_pdf=function( elem ){
	$("#tbody_table_housing_type").append(			"<tr>"+

			"<td>"+elem.name_housing_type+"</td>"+
			"</tr>"

	)
}

