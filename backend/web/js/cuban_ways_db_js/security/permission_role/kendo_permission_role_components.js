/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/


			var ComponentsPermission_role= function () {
    		var initComponent = function () {

				/*Permission_role Formulario*/
				Permission_role.gridDataSource.read();
				Permission_role.permission_role_form = $('#permission_role_form');


				Permission_role.combobox_permission=$("#id_permission_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"security/permission/list_json",
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


				Permission_role.combobox_role=$("#id_role_combo").select2({
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

 		/*Grid Permission_role*/
		var $kgridpermission_role =  $("#gridselection_permission_role").kendoGrid({
	        dataSource: Permission_role.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Permission_role.change,
			resizable: true,
	        dataBound: Permission_role.dataBound,
	        dataBinding: Permission_role.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_permission_role' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_permission_role",
					template:'<div id="item" data-text="#: id_permission_role#">#:id_permission_role#</div>',
	                title: "Id_permission_role",
	                width: '0%',
					type:"number",
	            	hidden:true
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
	                title: "Name_role",
					template:'<div id="item" data-text="#: name_role#">#: name_role#</div>',
	                width: '45%',
					type:"string"
				}
			,

	            {
	                field: "id_permission",
	                title: "Id_permission",
					template:'<div id="item" data-text="#: id_permission#">#:id_permission#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_permission",
	                title: "Name_permission",
					template:'<div id="item" data-text="#: name_permission#">#: name_permission#</div>',
	                width: '45%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_permission_role(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_permission_role(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Permission_role.gridpermission_role=$("#gridselection_permission_role").data('kendoGrid');

        /*Form Validation*/
        $('#permission_role_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Permission_role[id_role]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_role'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_role no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_role del permission_role ya esta insertado',
                            url:urlhome+'security/permission_role/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Permission_role[id_permission]': validator.getFieldElements('Permission_role[id_permission]').val(),
							  				id_permission_role: validator.getFieldElements('Permission_role[id_permission_role]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Permission_role[id_permission]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_permission'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_permission no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_permission del permission_role ya esta insertado',
                            url:urlhome+'security/permission_role/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Permission_role[id_role]': validator.getFieldElements('Permission_role[id_role]').val(),
							  				id_permission_role: validator.getFieldElements('Permission_role[id_permission_role]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

			if(data.element[0].type.lastIndexOf("select")==0)
			{
				$('#select2-'+data.element[0].id+'-container').html('');
			}
			else
				$('#'+data.element[0].id).val('')
		});
			Permission_role.bootstrapValidator=$('#permission_role_form').data('bootstrapValidator');

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
			Permission_role.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_permission_role').click(function () {
    						var c = this.checked;
    						$('#gridselection_permission_role :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_permission_role').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_permission_role').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_permission_role').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

