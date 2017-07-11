/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_address={};
Housing_address.oldElement=null;
//Funcionalidades del Grid
Housing_address.change = function onChange(arg) {
};


Housing_address.change = function onDataBinding(arg) {
};


Housing_address.dataBound=function onDataBound(arg) {
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


Housing_address.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_address.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_address

Housing_address.findbyid_housing_address=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_address.gridDataSource._data,function(val,index){
		if(val.id_housing_address==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing_address.list_pdf=function( elem ){
	$("#tbody_table_housing_address").append(			"<tr>"+

			"<td>"+elem.name_town+"</td>"+

			"<td>"+elem.length+"</td>"+

			"<td>"+elem.latitude+"</td>"+

			"<td>"+elem.number_housing+"</td>"+

			"<td>"+elem.main_street+"</td>"+

			"<td>"+elem.between_first+"</td>"+

			"<td>"+elem.between_second+"</td>"+
			"</tr>"

	)
}

