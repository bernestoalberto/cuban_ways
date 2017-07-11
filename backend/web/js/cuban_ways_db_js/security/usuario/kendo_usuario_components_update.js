/*Generado by Pro Generator */
/*@author Charlietyn  */
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/


var ComponentsUsuario= function () {
	var initComponent = function () {

		/*Usuario Formulario*/
		Usuario.gridDataSource.read();
		Usuario.usuario_form = $('#usuario_form');


		Usuario.combobox_owner=$("#id_owner_combo").select2({
			language: "es",
			ajax: {
				url: urlhome+"housing/owner/list_json",
				dataType: 'json',
				delay: 100,
				data: function (params) {
					return {
						q: params.term, // search term
						combo:true
					};
				},
				processResults: function (data, params) {
					// parse the results into the format expected by Select2
					// since we are using custom formatting functions we do not need to
					// alter the remote JSON data, except to indicate that infinite
					// scrolling can be used
					params.page = params.page || 1;
					return {
						results: data.data,
					};
				},
				cache: true
			}
		});


		Usuario.combobox_role=$("#id_role_combo").select2({
			language: "es",
			ajax: {
				url: urlhome+"security/role/list_json",
				dataType: 'json',
				delay: 100,
				data: function (params) {
					return {
						q: params.term, // search term
						combo:true
					};
				},
				processResults: function (data, params) {
					// parse the results into the format expected by Select2
					// since we are using custom formatting functions we do not need to
					// alter the remote JSON data, except to indicate that infinite
					// scrolling can be used
					params.page = params.page || 1;
					return {
						results: data.data,
					};
				},
				cache: true
			}
		});

		/*Date Range Picker  created_at*/
		$("#created_at").daterangepicker({
			singleDatePicker: true,
			startDate: moment(),
			format: 'MM/DD/YYYY',
			showDropdowns: true,
			readonly:true

		});

		Usuario.created_at=$("#created_at").data('daterangepicker');

		/*Date Range Picker  updated_at*/
		$("#updated_at").daterangepicker({
			singleDatePicker: true,
			startDate: moment(),
			format: 'MM/DD/YYYY',
			showDropdowns: true,
			readonly:true

		});

		Usuario.updated_at=$("#updated_at").data('daterangepicker');



		/*Grid Usuario*/
		var $kgridusuario =  $("#gridselection_usuario").kendoGrid({
			dataSource: Usuario.gridDataSource,
			height: 490,
			filterable: true,
			sortable: true,
			change: Usuario.change,
			resizable: true,
			dataBound: Usuario.dataBound,
			dataBinding: Usuario.dataBinding,
			pageable: {
				buttonCount: 5,
				refresh: true,
				pageSizes: [2,10,20,30,50,100]
			},
			columns: [
				{
					field: "",
					title: "",
					width: '35px',
					headerTemplate: "<input class='check_grid' id='all_check_usuario' type='checkbox'/>",
					template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:true
				}
				,

				{
					field: "id_usuario",
					template:'<div id="item" data-text="#: id_usuario#">#:id_usuario#</div>',
					title: "Id_usuario",
					width: '0%',
					type:"number",
					hidden:true
				}
				,

				{
					field: "username",
					template:'<div id="item" data-text="#: username#">#:username#</div>',
					title: "Usuario",
					width: '20%',
					type:"string"
				}
				,

				{
					field: "email",
					template:'<div id="item" data-text="#: email#">#:email#</div>',
					title: "Correo",
					width: '20%',
					type:"string"
				}
				,

				{
					field: "foto",
					template:'<div id="item" data-text="#: foto#"><img class="user-image img-circle" data-image="#: foto#" data-nombre="#: username#" width="30px" height="30px" src="'+urlhome+'/image/users/#: foto#"></div>',
					title: "Fotografia",
					width: '15%',
					type:"string"
				}
				,

				{
					field: "created_at",
					title: "Creado",
					width: '20%',
					type:"date",
					format:"{0:dd-MM-yyyy}"
				}
				,
				{
					field: "type_user",
					template:'<div id="item" data-text="#: type_user#">#if( type_user==null){#<span>No tiene</span>#}else{##: type_user##}#</div>',
					title: "Tipo de Usuario",
					width: '20%',
					type:"string"
				}
				,
				{
					field: "state",
					template:'<div id="item" data-text="#: state#">#if( state==1){#<span><i class="fa fa-check text-success"></i></span>#}else{#<span><i class="fa fa-ban text-danger"></i></span>#}#</div>',
					title: "Estado",
					width: '15%',
					type:"string"
				}
				,

				{
					field: "id_role",
					title: "Id_role",
					template:'<div id="item" data-text="#: id_role#">#:id_role#</div>',
					width: '0%',
					type:"number",
					hidden:true
				}
				,
				{
					field: "name_role",
					title: "Rol",
					template:'<div id="item" data-text="#: name_role#">#: name_role#</div>',
					width: '20%',
					type:"string"
				}
				,

				{
					field: "id_owner",
					title: "Id_owner",
					template:'<div id="item" data-text="#: id_owner#">#if( id_owner==null){#<span>No tiene</span>#}else{##: id_owner##}#</div>',
					width: '0%',
					type:"number",
					hidden:true
				}
				,
				{
					field: "name_owner",
					title: "Name_owner",
					template:'<div id="item" data-text="#: name_owner#">#: name_owner#</div>',
					width: '2%',
					type:"string",
					hidden:true
				}
				,
				{
					template: "<div class='row'><a class='edit col-md-2' id='#: uid#' href='"+urlhome+"/security/usuario/update?id_usuario=#: id_usuario#' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
					"<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_usuario(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
					name:'edit',
					headerTemplate: "<p>Acciones</p>",
					width: '10%'
				}
			]
		});
		Usuario.gridusuario=$("#gridselection_usuario").data('kendoGrid');

		/*Form Validation*/
		$('#usuario_form').bootstrapValidator({
			//live: 'disabled',
			excluded: ':disabled',   // <=== Adding the 'excluded' option
			feedbackIcons: {
				validating: 'glyphicon glyphicon-refresh'
			},
			message: 'El valor no es valido',
			fields: {
				'Usuario[username]': {
					group: '.form-group',
					validators: {
						notEmpty: {
							message: 'Entre el username'
						},
						stringLength: {
							min:6,
							max: 30,
							message: 'El usuario solamente puede tener entre 6 y 8 caracteres'
						},
						different: {
							field: 'Usuario[pass]',
							message: 'El usuario no puede ser igual a la contraseña'
						},
						remote: {

							message: 'Este usuario ya esta insertado',
							url:urlhome+'security/usuario/findbyukjson',
							delay:250,
							data: function(validator, $field, value) {
								return {
									id_usuario: validator.getFieldElements('Usuario[id_usuario]').val(),
								}
							}
						}
					}
				}
				,
				'Usuario[pass]': {
					group: '.form-group',
					validators: {
						different: {
							field: 'Usuario[username]',
							message: 'El usuario no puede ser igual a la contraseña'
						},
						identical: {
							field: 'Usuario[pass_confirm]',
							message: 'Debe confirmar correctamente la contraseña'
						},
						stringLength: {
							min:8,
							max: 255,
							message: 'La contraseña debe tener mas de 8 caracteres'
						},
					}
				}         ,
				'Usuario[pass_confirm]': {
					group: '.form-group',
					validators: {
						different: {
							field: 'Usuario[username]',
							message: 'El usuario no puede ser igual a la contraseña'
						},
						identical: {
							field: 'Usuario[pass]',
							message: 'Debe confirmar correctamente la contraseña'
						},
						stringLength: {
							min:8,
							max: 255,
							message: 'La contraseña debe tener mas de 8 caracteres'
						},
					}
				},
				'Usuario[word_pass]': {
					group: '.form-group',
					validators: {
						notEmpty: {
							message: 'Entre el word_pass'
						},
						stringLength: {
							max: 100,
							message: 'El word_pass no puede tener mas de 100 caracteres'
						},
					}
				}
				,
				'Usuario[email]': {
					group: '.form-group',
					validators: {
						notEmpty: {
							message: 'Entre el email'
						},
						stringLength: {
							max: 45,
							message: 'El email no puede tener mas de 45 caracteres'
						},
						emailAddress: {
							message: 'Este no es un correo valido'
						},
						remote: {
							message: 'Este email ya ha sido usado por otro usuario',
							url:urlhome+'security/usuario/findbyukjson',
							delay:250,
							data: function(validator, $field, value) {
								return {
									id_usuario: validator.getFieldElements('Usuario[id_usuario]').val(),
								}
							}
						}
					}
				}
				,
				'Usuario[id_role]': {
					group: '.form-group',
					validators: {
						notEmpty: {
							message: 'Entre el id_role'
						},
						stringLength: {
							max: 10,
							message: 'El id_role no puede tener mas de 10 caracteres'
						},
					}
				}
			}
		}).on('error.field.bv', function(e, data) {

			console.log(e)
			console.log(data)
		});
		Usuario.bootstrapValidator=$('#usuario_form').data('bootstrapValidator');

		/*Form Validation Import*/
		$('#importar_form').bootstrapValidator({
			//live: 'disabled',
			excluded: ':disabled',   // <=== Adding the 'excluded' option
			feedbackIcons: {
				validating: 'glyphicon glyphicon-refresh'
			},
			message: 'El valor no es v�lido',
			fields: {
				'importar_excel': {
					group: '.form-group',
					validators: {
						file: {
							extension: 'xls,xlsx',
							message: 'Debe tener una extension valida para Excel'
						}
						,
						notEmpty: {
							message: 'Entre la direcci�n del Excel'
						}
					}
				},
			}
		});
		Usuario.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


	}
	return {
		//main function to initiate the module
		init: function () {
			initComponent();
			//Para chequear todos los elementos
			$('#all_check_usuario').click(function () {
				var c = this.checked;
				$('#gridselection_usuario :checkbox').prop('checked',c);
			});
			$('#state').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%'
			});
//Convertir a Icheck
			$('#all_check_usuario').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%'
			});
//Para deschequear y chequear todos los elementos
			$('#all_check_usuario').on('ifChecked', function(event){
				$('.check_row').iCheck('check');
			});
			$('#all_check_usuario').on('ifUnchecked', function(event){
				$('.check_row').iCheck('uncheck');
			});
			$('#state').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%'
			});
			$('#state').on('ifChecked', function(event){
				$('#checkstate').val(1);
			});
			$('#state').on('ifUnchecked', function(event){
				$('#checkstate').val(0);
			});
		}
	};

}();

