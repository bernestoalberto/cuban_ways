/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Country={};
Country.oldElement=null;
//Funcionalidades del Grid
Country.change = function onChange(arg) {
};


Country.change = function onDataBinding(arg) {
};


Country.dataBound=function onDataBound(arg) {
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


Country.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Finderscode_country

Country.findbycode_country=function(value){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.code_country.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersie_code_country

Country.findbyie_code_country=function(value){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.ie_code_country.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersname_country

Country.findbyname_country=function(value){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.name_country.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersprefix

Country.findbyprefix=function(value){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.prefix==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersid_country

Country.findbyid_country=function(value){
	var dataItem=null;
	dataItem=$.map(Country.gridDataSource._data,function(val,index){
		if(val.id_country==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Country.list_pdf=function( elem ){
	$("#tbody_table_country").append(			"<tr>"+

			"<td>"+elem.name_country+"</td>"+

			"<td>"+elem.ie_code_country+"</td>"+

			"<td>"+elem.code_country+"</td>"+

			"<td>"+elem.prefix+"</td>"+

			"<td>"+elem.name_continent+"</td>"+

			"<td>"+elem.subcontinent+"</td>"+

			"<td>"+elem.iso_money+"</td>"+

			"<td>"+elem.money_name+"</td>"+
			"</tr>"

	)
}

