/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Owner={};
Owner.oldElement=null;
//Funcionalidades del Grid
Owner.change = function onChange(arg) {
};


Owner.change = function onDataBinding(arg) {
};


Owner.dataBound=function onDataBound(arg) {
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


Owner.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Owner.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_owner

Owner.findbyid_owner=function(value){
	var dataItem=null;
	dataItem=$.map(Owner.gridDataSource._data,function(val,index){
		if(val.id_owner==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersidentification

Owner.findbyidentification=function(value){
	var dataItem=null;
	dataItem=$.map(Owner.gridDataSource._data,function(val,index){
		if(val.identification.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Owner.list_pdf=function( elem ){
	$("#tbody_table_owner").append(			"<tr>"+

			"<td>"+elem.name_owner+"</td>"+

			"<td>"+elem.lastname_owner+"</td>"+

			"<td>"+elem.datebirth+"</td>"+

			"<td>"+elem.email+"</td>"+

			"<td>"+elem.phone+"</td>"+

			"<td>"+elem.createdat+"</td>"+

			"<td>"+elem.identification+"</td>"+

			"<td>"+elem.name_owner_incharge+"</td>"+

			"<td>"+elem.lastname_owner_incharge+"</td>"+

			"<td>"+elem.bank_account+"</td>"+

			"<td>"+elem.photo+"</td>"+
			"</tr>"

	)
}

