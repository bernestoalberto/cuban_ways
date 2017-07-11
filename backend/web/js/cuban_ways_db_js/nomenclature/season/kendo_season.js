/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Season={};
Season.oldElement=null;
//Funcionalidades del Grid
Season.change = function onChange(arg) {
};


Season.change = function onDataBinding(arg) {
};


Season.dataBound=function onDataBound(arg) {
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


Season.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Season.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_season

Season.findbyid_season=function(value){
	var dataItem=null;
	dataItem=$.map(Season.gridDataSource._data,function(val,index){
		if(val.id_season==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersname_season

Season.findbyname_season=function(value){
	var dataItem=null;
	dataItem=$.map(Season.gridDataSource._data,function(val,index){
		if(val.name_season.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Season.list_pdf=function( elem ){
	$("#tbody_table_season").append(			"<tr>"+

			"<td>"+elem.name_season+"</td>"+
			"</tr>"

	)
}

