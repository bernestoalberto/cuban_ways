/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Slip_for_rent={};
Slip_for_rent.oldElement=null;
//Funcionalidades del Grid
Slip_for_rent.change = function onChange(arg) {
};


Slip_for_rent.change = function onDataBinding(arg) {
};


Slip_for_rent.dataBound=function onDataBound(arg) {
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


Slip_for_rent.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Slip_for_rent.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_slip_for_rent

Slip_for_rent.findbyid_slip_for_rent=function(value){
	var dataItem=null;
	dataItem=$.map(Slip_for_rent.gridDataSource._data,function(val,index){
		if(val.id_slip_for_rent==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Finderscode_slip_for_rent

Slip_for_rent.findbycode_slip_for_rent=function(value){
	var dataItem=null;
	dataItem=$.map(Slip_for_rent.gridDataSource._data,function(val,index){
		if(val.code_slip_for_rent.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Slip_for_rent.list_pdf=function( elem ){
	$("#tbody_table_slip_for_rent").append(			"<tr>"+

			"<td>"+elem.code_slip_for_rent+"</td>"+

			"<td>"+elem.description_slip_for_rent+"</td>"+

			"<td>"+elem.createdat+"</td>"+

			"<td>"+elem.name_housing+"</td>"+

			"<td>"+elem.username+"</td>"+
			"</tr>"

	)
}

