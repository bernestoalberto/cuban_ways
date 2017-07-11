/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Housing_season_price={};
Housing_season_price.oldElement=null;
//Funcionalidades del Grid
Housing_season_price.change = function onChange(arg) {
};


Housing_season_price.change = function onDataBinding(arg) {
};


Housing_season_price.dataBound=function onDataBound(arg) {
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


Housing_season_price.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Housing_season_price.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_housing_season_price

Housing_season_price.findbyid_housing_season_price=function(value){
	var dataItem=null;
	dataItem=$.map(Housing_season_price.gridDataSource._data,function(val,index){
		if(val.id_housing_season_price==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

Housing_season_price.list_pdf=function( elem ){
	$("#tbody_table_housing_season_price").append(			"<tr>"+

			"<td>"+elem.price_housing_season+"</td>"+

			"<td>"+elem.comition+"</td>"+

			"<td>"+elem.cretedat+"</td>"+

			"<td>"+elem.name_housing+"</td>"+

			"<td>"+elem.name_season+"</td>"+

			"<td>"+elem.name_coin+"</td>"+

			"<td>"+elem.comition_for_publicitiy+"</td>"+

			"<td>"+elem.date_start_publicity+"</td>"+

			"<td>"+elem.date_end_publicity+"</td>"+

			"<td>"+elem.booking_deposit+"</td>"+

			"<td>"+elem.date_start+"</td>"+

			"<td>"+elem.date_end+"</td>"+
			"</tr>"

	)
}

