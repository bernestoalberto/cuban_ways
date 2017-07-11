/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsSlip_for_rent= function () {
    		var initComponent = function () {

				/*Slip_for_rent Formulario*/
				Slip_for_rent.gridDataSource.read();
				Slip_for_rent.slip_for_rent_form = $('#slip_for_rent_form');


				Slip_for_rent.combobox_housing=$("#id_housing_combo").select2({
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


				Slip_for_rent.combobox_usuario=$("#id_usuario_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"security/usuario/list_json",
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

				/*Date Range Picker  createdat*/
				$("#createdat").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Slip_for_rent.createdat=$("#createdat").data('daterangepicker');

 		/*Grid Slip_for_rent*/
		var $kgridslip_for_rent =  $("#gridselection_slip_for_rent").kendoGrid({
	        dataSource: Slip_for_rent.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Slip_for_rent.change,
			resizable: true,
	        dataBound: Slip_for_rent.dataBound,
	        dataBinding: Slip_for_rent.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_slip_for_rent' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_slip_for_rent",
					template:'<div id="item" data-text="#: id_slip_for_rent#">#:id_slip_for_rent#</div>',
	                title: "Id_slip_for_rent",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "code_slip_for_rent",
					template:'<div id="item" data-text="#: code_slip_for_rent#">#:code_slip_for_rent#</div>',
	                title: "Code_slip_for_rent",
	                width: '15%',
					type:"string"
	            }
				,

	            {
	                field: "description_slip_for_rent",
					template:'<div id="item" data-text="#: description_slip_for_rent#">#:description_slip_for_rent#</div>',
	                title: "Description_slip_for_rent",
	                width: '15%',
					type:"string"
	            }
				,

	            {
	                field: "createdat",
	                title: "Createdat",
	                width: '15%',
					type:"date",
	            	format:"{0:dd-MM-yyyy}"	
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
	                width: '15%',
					type:"string"
				}
			,

	            {
	                field: "id_usuario",
	                title: "Id_usuario",
					template:'<div id="item" data-text="#: id_usuario#">#:id_usuario#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "username",
	                title: "Username",
					template:'<div id="item" data-text="#: username#">#: username#</div>',
	                width: '15%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_slip_for_rent(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_slip_for_rent(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Slip_for_rent.gridslip_for_rent=$("#gridselection_slip_for_rent").data('kendoGrid');

        /*Form Validation*/
        $('#slip_for_rent_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Slip_for_rent[code_slip_for_rent]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el code_slip_for_rent'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El code_slip_for_rent no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este code_slip_for_rent del slip_for_rent ya esta insertado',
                            url:urlhome+'housing/slip_for_rent/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_slip_for_rent: validator.getFieldElements('Slip_for_rent[id_slip_for_rent]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Slip_for_rent[description_slip_for_rent]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el description_slip_for_rent'
                        },
                        stringLength: {
                            max: 2147483647,
                            message: 'El description_slip_for_rent no puede tener mas de 2147483647 caracteres'
                        },
                    }
                }
                        ,
                'Slip_for_rent[createdat]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el createdat'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El createdat no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Slip_for_rent[id_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Slip_for_rent[id_usuario]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_usuario'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_usuario no puede tener mas de 10 caracteres'
                        },
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
			Slip_for_rent.bootstrapValidator=$('#slip_for_rent_form').data('bootstrapValidator');

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
			Slip_for_rent.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_slip_for_rent').click(function () {
    						var c = this.checked;
    						$('#gridselection_slip_for_rent :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_slip_for_rent').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_slip_for_rent').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_slip_for_rent').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

