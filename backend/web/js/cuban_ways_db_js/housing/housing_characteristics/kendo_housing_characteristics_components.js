/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


			var ComponentsHousing_characteristics= function () {
    		var initComponent = function () {

				/*Housing_characteristics Formulario*/
				Housing_characteristics.gridDataSource.read();
				Housing_characteristics.housing_characteristics_form = $('#housing_characteristics_form');

 		/*Grid Housing_characteristics*/
		var $kgridhousing_characteristics =  $("#gridselection_housing_characteristics").kendoGrid({
	        dataSource: Housing_characteristics.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_characteristics.change,
			resizable: true,
	        dataBound: Housing_characteristics.dataBound,
	        dataBinding: Housing_characteristics.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_characteristics' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_characteristics",
					template:'<div id="item" data-text="#: id_housing_characteristics#">#:id_housing_characteristics#</div>',
	                title: "Id_housing_characteristics",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_housing_characteristics",
					template:'<div id="item" data-text="#: name_housing_characteristics#">#:name_housing_characteristics#</div>',
	                title: "Name_housing_characteristics",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_characteristics(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_characteristics(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_characteristics.gridhousing_characteristics=$("#gridselection_housing_characteristics").data('kendoGrid');

        /*Form Validation*/
        $('#housing_characteristics_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_characteristics[name_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_housing_characteristics'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_housing_characteristics no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_housing_characteristics del housing_characteristics ya esta insertado',
                            url:urlhome+'housing/housing_characteristics/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_housing_characteristics: validator.getFieldElements('Housing_characteristics[id_housing_characteristics]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Housing_characteristics.bootstrapValidator=$('#housing_characteristics_form').data('bootstrapValidator');

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
			Housing_characteristics.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_characteristics').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_characteristics :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_characteristics').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_characteristics').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_characteristics').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

