/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


			var ComponentsPermission= function () {
    		var initComponent = function () {

				/*Permission Formulario*/
				Permission.gridDataSource.read();
				Permission.permission_form = $('#permission_form');

 		/*Grid Permission*/
		var $kgridpermission =  $("#gridselection_permission").kendoGrid({
	        dataSource: Permission.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Permission.change,
			resizable: true,
	        dataBound: Permission.dataBound,
	        dataBinding: Permission.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_permission' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_permission",
					template:'<div id="item" data-text="#: id_permission#">#:id_permission#</div>',
	                title: "Id_permission",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_permission",
					template:'<div id="item" data-text="#: name_permission#">#:name_permission#</div>',
	                title: "Name_permission",
	                width: '45%',
					type:"string"
	            }
				,

	            {
	                field: "url",
					template:'<div id="item" data-text="#: url#">#:url#</div>',
	                title: "Url",
	                width: '45%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_permission(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_permission(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Permission.gridpermission=$("#gridselection_permission").data('kendoGrid');

        /*Form Validation*/
        $('#permission_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Permission[name_permission]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_permission'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_permission no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_permission del permission ya esta insertado',
                            url:urlhome+'security/permission/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_permission: validator.getFieldElements('Permission[id_permission]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Permission[url]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el url'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El url no puede tener mas de 100 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Permission.bootstrapValidator=$('#permission_form').data('bootstrapValidator');

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
			Permission.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_permission').click(function () {
    						var c = this.checked;
    						$('#gridselection_permission :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_permission').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_permission').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_permission').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

