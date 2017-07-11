/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


			var ComponentsRole= function () {
    		var initComponent = function () {

				/*Role Formulario*/
				Role.gridDataSource.read();
				Role.role_form = $('#role_form');

 		/*Grid Role*/
		var $kgridrole =  $("#gridselection_role").kendoGrid({
	        dataSource: Role.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Role.change,
			resizable: true,
	        dataBound: Role.dataBound,
	        dataBinding: Role.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_role' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_role",
					template:'<div id="item" data-text="#: id_role#">#:id_role#</div>',
	                title: "Id_role",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_role",
					template:'<div id="item" data-text="#: name_role#">#:name_role#</div>',
	                title: "Name_role",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_role(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_role(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Role.gridrole=$("#gridselection_role").data('kendoGrid');

        /*Form Validation*/
        $('#role_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Role[name_role]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_role'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_role no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_role del role ya esta insertado',
                            url:urlhome+'security/role/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_role: validator.getFieldElements('Role[id_role]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Role.bootstrapValidator=$('#role_form').data('bootstrapValidator');

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
			Role.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_role').click(function () {
    						var c = this.checked;
    						$('#gridselection_role :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_role').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_role').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_role').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

