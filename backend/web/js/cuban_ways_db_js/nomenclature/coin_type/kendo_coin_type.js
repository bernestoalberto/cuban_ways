/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


//Creando variables globales
////Definir controladora
var Coin_type={};
Coin_type.oldElement=null;
//Funcionalidades del Grid
Coin_type.change = function onChange(arg) {
};


Coin_type.change = function onDataBinding(arg) {
};


Coin_type.dataBound=function onDataBound(arg) {
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


Coin_type.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Coin_type.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_coin_type

Coin_type.findbyid_coin_type=function(value){
	var dataItem=null;
	dataItem=$.map(Coin_type.gridDataSource._data,function(val,index){
		if(val.id_coin_type==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersabbrv_coin

Coin_type.findbyabbrv_coin=function(value){
	var dataItem=null;
	dataItem=$.map(Coin_type.gridDataSource._data,function(val,index){
		if(val.abbrv_coin.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
//Unique Findersname_coin

Coin_type.findbyname_coin=function(value){
	var dataItem=null;
	dataItem=$.map(Coin_type.gridDataSource._data,function(val,index){
		if(val.name_coin.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Coin_type.list_pdf=function( elem ){
	$("#tbody_table_coin_type").append(			"<tr>"+

			"<td>"+elem.name_coin+"</td>"+

			"<td>"+elem.abbrv_coin+"</td>"+
			"</tr>"

	)
}

