/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_availability={};
Housing_availability.oldElement=null;
//Funcionalidades del Grid
Housing_availability.change = function onChange(arg) {
};


Housing_availability.change = function onDataBinding(arg) {
};


Housing_availability.dataBound=function onDataBound(arg) {
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


Housing_availability.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_availability.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_availability

Housing_availability.findbyid_housing_availability=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_availability.gridDataSource._data,function(val,index){
		if(val.id_housing_availability==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing_availability.list_pdf=function( elem ){
	$("#tbody_table_housing_availability").append(			"<tr>"+

			"<td>"+elem.description_housing_availability+"</td>"+

			"<td>"+elem.date_start+"</td>"+

			"<td>"+elem.date_end+"</td>"+

			"<td>"+elem.availability_state+"</td>"+

			"<td>"+elem.name_housing+"</td>"+

			"<td>"+elem.username+"</td>"+
			"</tr>"

	)
}

