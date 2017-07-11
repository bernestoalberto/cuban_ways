/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Province={};
Province.oldElement=null;
//Funcionalidades del Grid
Province.change = function onChange(arg) {
};


Province.change = function onDataBinding(arg) {
};


Province.dataBound=function onDataBound(arg) {
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


Province.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Province.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_province

Province.findbyid_province=function(value){
	var dataItem=null;
	dataItem=$.map(Province.gridDataSource._data,function(val,index){
		if(val.id_province==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_province

Province.findbyname_province=function(value){
	var dataItem=null;
	dataItem=$.map(Province.gridDataSource._data,function(val,index){
		if(val.name_province.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersid_country

Province.findbyid_country=function(value){
	var dataItem=null;
	dataItem=$.map(Province.gridDataSource._data,function(val,index){
		if(val.id_country==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Province.list_pdf=function( elem ){
	$("#tbody_table_province").append(			"<tr>"+

			"<td>"+elem.name_province+"</td>"+

			"<td>"+elem.name_country+"</td>"+
			"</tr>"

	)
}

