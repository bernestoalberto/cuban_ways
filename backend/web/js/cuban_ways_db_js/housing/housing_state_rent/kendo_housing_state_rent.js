/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_state_rent={};
Housing_state_rent.oldElement=null;
//Funcionalidades del Grid
Housing_state_rent.change = function onChange(arg) {
};


Housing_state_rent.change = function onDataBinding(arg) {
};


Housing_state_rent.dataBound=function onDataBound(arg) {
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


Housing_state_rent.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_state_rent.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_state_rent

Housing_state_rent.findbyid_housing_state_rent=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_state_rent.gridDataSource._data,function(val,index){
		if(val.id_housing_state_rent==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_housing_state_rent

Housing_state_rent.findbyname_housing_state_rent=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_state_rent.gridDataSource._data,function(val,index){
		if(val.name_housing_state_rent.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Housing_state_rent.list_pdf=function( elem ){
	$("#tbody_table_housing_state_rent").append(			"<tr>"+

			"<td>"+elem.name_housing_state_rent+"</td>"+
			"</tr>"

	)
}

