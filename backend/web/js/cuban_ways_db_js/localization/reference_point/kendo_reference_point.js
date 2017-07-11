/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:22 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Reference_point={};
Reference_point.oldElement=null;
//Funcionalidades del Grid
Reference_point.change = function onChange(arg) {
};


Reference_point.change = function onDataBinding(arg) {
};


Reference_point.dataBound=function onDataBound(arg) {
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


Reference_point.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Reference_point.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_reference_point

Reference_point.findbyid_reference_point=function(value){
	var dataItem=null;
	dataItem=$.map(Reference_point.gridDataSource._data,function(val,index){
		if(val.id_reference_point==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_reference_point

Reference_point.findbyname_reference_point=function(value){
	var dataItem=null;
	dataItem=$.map(Reference_point.gridDataSource._data,function(val,index){
		if(val.name_reference_point.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Reference_point.list_pdf=function( elem ){
	$("#tbody_table_reference_point").append(			"<tr>"+

			"<td>"+elem.name_reference_point+"</td>"+

			"<td>"+elem.latitude+"</td>"+

			"<td>"+elem.length+"</td>"+

			"<td>"+elem.image+"</td>"+
			"</tr>"

	)
}

