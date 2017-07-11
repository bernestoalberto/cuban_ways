/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Availability_state={};
Availability_state.oldElement=null;
//Funcionalidades del Grid
Availability_state.change = function onChange(arg) {
};


Availability_state.change = function onDataBinding(arg) {
};


Availability_state.dataBound=function onDataBound(arg) {
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


Availability_state.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Availability_state.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_availability_state

Availability_state.findbyid_availability_state=function(value){
	var dataItem=null;
	dataItem=$.map(Availability_state.gridDataSource._data,function(val,index){
		if(val.id_availability_state==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersavailability_state

Availability_state.findbyavailability_state=function(value){
	var dataItem=null;
	dataItem=$.map(Availability_state.gridDataSource._data,function(val,index){
		if(val.availability_state.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Availability_state.list_pdf=function( elem ){
	$("#tbody_table_availability_state").append(			"<tr>"+

			"<td>"+elem.availability_state+"</td>"+
			"</tr>"

	)
}

