/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


			var ComponentsHousing_state_rent= function () {
    		var initComponent = function () {

				/*Housing_state_rent Formulario*/
				Housing_state_rent.gridDataSource.read();
				Housing_state_rent.housing_state_rent_form = $('#housing_state_rent_form');

 		/*Grid Housing_state_rent*/
		var $kgridhousing_state_rent =  $("#gridselection_housing_state_rent").kendoGrid({
	        dataSource: Housing_state_rent.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_state_rent.change,
			resizable: true,
	        dataBound: Housing_state_rent.dataBound,
	        dataBinding: Housing_state_rent.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_state_rent' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_state_rent",
					template:'<div id="item" data-text="#: id_housing_state_rent#">#:id_housing_state_rent#</div>',
	                title: "Id_housing_state_rent",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_housing_state_rent",
					template:'<div id="item" data-text="#: name_housing_state_rent#">#:name_housing_state_rent#</div>',
	                title: "Name_housing_state_rent",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_state_rent(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_state_rent(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_state_rent.gridhousing_state_rent=$("#gridselection_housing_state_rent").data('kendoGrid');

        /*Form Validation*/
        $('#housing_state_rent_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_state_rent[name_housing_state_rent]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_housing_state_rent'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_housing_state_rent no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_housing_state_rent del housing_state_rent ya esta insertado',
                            url:urlhome+'housing/housing_state_rent/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_housing_state_rent: validator.getFieldElements('Housing_state_rent[id_housing_state_rent]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Housing_state_rent.bootstrapValidator=$('#housing_state_rent_form').data('bootstrapValidator');

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
			Housing_state_rent.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_state_rent').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_state_rent :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_state_rent').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_state_rent').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_state_rent').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

