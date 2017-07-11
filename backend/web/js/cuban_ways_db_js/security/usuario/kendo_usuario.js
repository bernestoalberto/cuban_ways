/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/


//Creando variables globales
////Definir controladora
var Usuario={};
Usuario.oldElement=null;
//Funcionalidades del Grid
Usuario.change = function onChange(arg) {
};


Usuario.change = function onDataBinding(arg) {
};


Usuario.dataBound=function onDataBound(arg) {
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


Usuario.finditem=function(uid){
	var dataItem=null;
	dataItem=$.map(Usuario.gridDataSource._data,function(val,index){
		if(val.uid==uid)
		{
			return val;
		}
	});
	return dataItem[0];
}
//Unique Findersid_usuario

Usuario.findbyid_usuario=function(value){
	var dataItem=null;
	dataItem=$.map(Usuario.gridDataSource._data,function(val,index){
		if(val.id_usuario==value)
		{
			return val;
		}
	});
	return dataItem[0];
}
		

//Unique Findersusername

Usuario.findbyusername=function(value){
	var dataItem=null;
	dataItem=$.map(Usuario.gridDataSource._data,function(val,index){
		if(val.username.toUpperCase().trim()==value.toUpperCase().trim())
		{
			return val;
		}
	});
	return dataItem[0];
}
		
Usuario.list_pdf=function( elem ){
	$("#tbody_table_usuario").append(			"<tr>"+

			"<td>"+elem.username+"</td>"+

			"<td>"+elem.pass+"</td>"+

			"<td>"+elem.word_pass+"</td>"+

			"<td>"+elem.email+"</td>"+

			"<td>"+elem.foto+"</td>"+

			"<td>"+elem.auth_key+"</td>"+

			"<td>"+elem.active+"</td>"+

			"<td>"+elem.created_at+"</td>"+

			"<td>"+elem.updated_at+"</td>"+

			"<td>"+elem.type_user+"</td>"+

			"<td>"+elem.state+"</td>"+

			"<td>"+elem.name_role+"</td>"+
			"</tr>"

	)
}

