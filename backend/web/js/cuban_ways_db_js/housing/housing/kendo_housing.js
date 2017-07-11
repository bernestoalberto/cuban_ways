/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing={};
//Arreglo q contiene los datos del grid housing_characteristics_housing
Housing.datasourceHCH = [];
Housing.datasourceHC=[];
Housing.datasourceHC_function = function()
{
	Housing.datasourceHC.splice(0, Housing.datasourceHC.length );
	$.map(Housing_characteristics.gridDataSource._data,function(val,index){
		if(Housing.finditembynameHCH(val.name_housing_characteristics)==null)
		{
			Housing.datasourceHC.push(val);
		}
	});
	return Housing.datasourceHC;
};


Housing.oldElement=null;
//Funcionalidades del Grid
Housing.change = function onChange(arg) {
};


Housing.change = function onDataBinding(arg) {
};


Housing.dataBound=function onDataBound(arg) {
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


Housing.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}

Housing.finditemHCH=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing.gridDataSourceHCH._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
Housing.finditemHCHindex=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing.gridDataSourceHCH._data,function(val,index){
		if(val.uid==uid)
		{
			return index;
		}
	});
	return dataItem;
}
Housing.finditembynameHCH=function(name){
	var dataItem=null;
	dataItem=$.map(Housing.gridDataSourceHCH._data,function(val,index){
		if(val.name_housing_characteristics==name)
		{
			return val;
		}
	});
	return dataItem[0];
}
Housing.finditemHC=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_characteristics.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing

Housing.findbyid_housing=function(value){
	var dataItem=null;
	dataItem=$.map(Housing.gridDataSource._data,function(val,index){
		if(val.id_housing==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing.list_pdf=function( elem ){
	$("#tbody_table_housing").append(			"<tr>"+

			"<td>"+elem.name_housing+"</td>"+

			"<td>"+elem.keywords_housing+"</td>"+

			"<td>"+elem.announce+"</td>"+

			"<td>"+elem.description+"</td>"+

			"<td>"+elem.name_housing_type+"</td>"+

			"<td>"+elem.name_housing_state_rent+"</td>"+

			"<td>"+elem.createdat+"</td>"+

			"<td>"+elem.id_town+"</td>"+

			"<td>"+elem.name_owner+"</td>"+
			"</tr>"

	)
}

