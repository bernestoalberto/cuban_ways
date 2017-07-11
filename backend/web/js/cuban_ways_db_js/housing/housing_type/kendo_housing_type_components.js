/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


			var ComponentsHousing_type= function () {
    		var initComponent = function () {

				/*Housing_type Formulario*/
				Housing_type.gridDataSource.read();
				Housing_type.housing_type_form = $('#housing_type_form');

 		/*Grid Housing_type*/
		var $kgridhousing_type =  $("#gridselection_housing_type").kendoGrid({
	        dataSource: Housing_type.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_type.change,
			resizable: true,
	        dataBound: Housing_type.dataBound,
	        dataBinding: Housing_type.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_type' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_type",
					template:'<div id="item" data-text="#: id_housing_type#">#:id_housing_type#</div>',
	                title: "Id_housing_type",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_housing_type",
					template:'<div id="item" data-text="#: name_housing_type#">#:name_housing_type#</div>',
	                title: "Name_housing_type",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_type(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_type(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_type.gridhousing_type=$("#gridselection_housing_type").data('kendoGrid');

        /*Form Validation*/
        $('#housing_type_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_type[name_housing_type]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_housing_type'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_housing_type no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_housing_type del housing_type ya esta insertado',
                            url:urlhome+'housing/housing_type/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_housing_type: validator.getFieldElements('Housing_type[id_housing_type]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Housing_type.bootstrapValidator=$('#housing_type_form').data('bootstrapValidator');

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
			Housing_type.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_type').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_type :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_type').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_type').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_type').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

