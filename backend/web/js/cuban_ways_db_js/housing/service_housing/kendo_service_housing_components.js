/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsService_housing= function () {
    		var initComponent = function () {

				/*Service_housing Formulario*/
				Service_housing.gridDataSource.read();
				Service_housing.service_housing_form = $('#service_housing_form');


				Service_housing.combobox_housing=$("#id_housing_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"housing/housing/list_json",
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


				Service_housing.combobox_housing_service=$("#id_service_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"housing/housing_service/list_json",
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

 		/*Grid Service_housing*/
		var $kgridservice_housing =  $("#gridselection_service_housing").kendoGrid({
	        dataSource: Service_housing.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Service_housing.change,
			resizable: true,
	        dataBound: Service_housing.dataBound,
	        dataBinding: Service_housing.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_service_housing' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_service_housing",
					template:'<div id="item" data-text="#: id_service_housing#">#:id_service_housing#</div>',
	                title: "Id_service_housing",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "price",
					template:'<div id="item" data-text="#: price#">#:price#</div>',
	                title: "Price",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "canceled",
					template:'<div id="item" data-text="#: canceled#">#:canceled#</div>',
	                title: "Canceled",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "id_service",
	                title: "Id_service",
					template:'<div id="item" data-text="#: id_service#">#:id_service#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_service",
	                title: "Name_service",
					template:'<div id="item" data-text="#: name_service#">#: name_service#</div>',
	                width: '20%',
					type:"string"
				}
			,

	            {
	                field: "id_housing",
	                title: "Id_housing",
					template:'<div id="item" data-text="#: id_housing#">#:id_housing#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_housing",
	                title: "Name_housing",
					template:'<div id="item" data-text="#: name_housing#">#: name_housing#</div>',
	                width: '20%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_service_housing(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_service_housing(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Service_housing.gridservice_housing=$("#gridselection_service_housing").data('kendoGrid');

        /*Form Validation*/
        $('#service_housing_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Service_housing[price]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Service_housing[canceled]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el canceled'
                        },
                        stringLength: {
                            max: 1,
                            message: 'El canceled no puede tener mas de 1 caracteres'
                        },
                    }
                }
                        ,
                'Service_housing[id_service]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_service'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_service no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_service del service_housing ya esta insertado',
                            url:urlhome+'housing/service_housing/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Service_housing[id_housing]': validator.getFieldElements('Service_housing[id_housing]').val(),
							  				id_service_housing: validator.getFieldElements('Service_housing[id_service_housing]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Service_housing[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_housing del service_housing ya esta insertado',
                            url:urlhome+'housing/service_housing/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Service_housing[id_service]': validator.getFieldElements('Service_housing[id_service]').val(),
							  				id_service_housing: validator.getFieldElements('Service_housing[id_service_housing]').val(),
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
			Service_housing.bootstrapValidator=$('#service_housing_form').data('bootstrapValidator');

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
			Service_housing.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_service_housing').click(function () {
    						var c = this.checked;
    						$('#gridselection_service_housing :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_service_housing').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_service_housing').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_service_housing').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

