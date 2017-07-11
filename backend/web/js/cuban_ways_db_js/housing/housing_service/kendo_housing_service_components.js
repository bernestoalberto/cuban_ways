/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsHousing_service= function () {
    		var initComponent = function () {

				/*Housing_service Formulario*/
				Housing_service.gridDataSource.read();
				Housing_service.housing_service_form = $('#housing_service_form');

 		/*Grid Housing_service*/
		var $kgridhousing_service =  $("#gridselection_housing_service").kendoGrid({
	        dataSource: Housing_service.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_service.change,
			resizable: true,
	        dataBound: Housing_service.dataBound,
	        dataBinding: Housing_service.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_service' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_service",
					template:'<div id="item" data-text="#: id_service#">#:id_service#</div>',
	                title: "Id_service",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_service",
					template:'<div id="item" data-text="#: name_service#">#:name_service#</div>',
	                title: "Name_service",
	                width: '45%',
					type:"string"
	            }
				,

	            {
	                field: "description_service",
					template:'<div id="item" data-text="#: description_service#">#if( description_service==null){#<span>No tiene</span>#}else{##: description_service##}#</div>',
	                title: "Description_service",
	                width: '45%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_service(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_service(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_service.gridhousing_service=$("#gridselection_housing_service").data('kendoGrid');

        /*Form Validation*/
        $('#housing_service_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_service[name_service]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_service'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_service no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_service del housing_service ya esta insertado',
                            url:urlhome+'housing/housing_service/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_service: validator.getFieldElements('Housing_service[id_service]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Housing_service[description_service]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 2147483647,
                            message: 'El description_service no puede tener mas de 2147483647 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Housing_service.bootstrapValidator=$('#housing_service_form').data('bootstrapValidator');

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
			Housing_service.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_service').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_service :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_service').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_service').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_service').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

