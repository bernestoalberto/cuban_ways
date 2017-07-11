/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Town={};
Town.oldElement=null;
//Funcionalidades del Grid
Town.change = function onChange(arg) {
};


Town.change = function onDataBinding(arg) {
};


Town.dataBound=function onDataBound(arg) {
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


Town.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Town.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_town

Town.findbyid_town=function(value){
	var dataItem=null;
	dataItem=$.map(Town.gridDataSource._data,function(val,index){
		if(val.id_town==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_province

Town.findbyid_province=function(value){
	var dataItem=null;
	dataItem=$.map(Town.gridDataSource._data,function(val,index){
		if(val.id_province==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_town

Town.findbyname_town=function(value){
	var dataItem=null;
	dataItem=$.map(Town.gridDataSource._data,function(val,index){
		if(val.name_town.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Town.list_pdf=function( elem ){
	$("#tbody_table_town").append(			"<tr>"+

			"<td>"+elem.name_town+"</td>"+

			"<td>"+elem.name_province+"</td>"+
			"</tr>"

	)
}

