/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_image={};
Housing_image.oldElement=null;
//Funcionalidades del Grid
Housing_image.change = function onChange(arg) {
};


Housing_image.change = function onDataBinding(arg) {
};


Housing_image.dataBound=function onDataBound(arg) {
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


Housing_image.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_image.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_image

Housing_image.findbyid_housing_image=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_image.gridDataSource._data,function(val,index){
		if(val.id_housing_image==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing_image.list_pdf=function( elem ){
	$("#tbody_table_housing_image").append(			"<tr>"+

			"<td>"+elem.image+"</td>"+

			"<td>"+elem.name_housing+"</td>"+
			"</tr>"

	)
}

