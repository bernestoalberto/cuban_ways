/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Continent={};
Continent.oldElement=null;
//Funcionalidades del Grid
Continent.change = function onChange(arg) {
};


Continent.change = function onDataBinding(arg) {
};


Continent.dataBound=function onDataBound(arg) {
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


Continent.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Continent.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersname_continent

Continent.findbyname_continent=function(value){
	var dataItem=null;
	dataItem=$.map(Continent.gridDataSource._data,function(val,index){
		if(val.name_continent.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersid_continent

Continent.findbyid_continent=function(value){
	var dataItem=null;
	dataItem=$.map(Continent.gridDataSource._data,function(val,index){
		if(val.id_continent==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Continent.list_pdf=function( elem ){
	$("#tbody_table_continent").append(			"<tr>"+

			"<td>"+elem.name_continent+"</td>"+
			"</tr>"

	)
}

