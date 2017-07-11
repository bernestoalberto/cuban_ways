/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


			var ComponentsHousing_availability= function () {
    		var initComponent = function () {

				/*Housing_availability Formulario*/
				Housing_availability.gridDataSource.read();
				Housing_availability.housing_availability_form = $('#housing_availability_form');


				Housing_availability.combobox_availability_state=$("#id_availability_state_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"nomenclature/availability_state/list_json",
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


				Housing_availability.combobox_housing=$("#id_housing_combo").select2({
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


				Housing_availability.combobox_usuario=$("#id_usuario_combo").select2({
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

				/*Date Range Picker  date_start*/
				$("#date_start").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_availability.date_start=$("#date_start").data('daterangepicker');

				/*Date Range Picker  date_end*/
				$("#date_end").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_availability.date_end=$("#date_end").data('daterangepicker');

 		/*Grid Housing_availability*/
		var $kgridhousing_availability =  $("#gridselection_housing_availability").kendoGrid({
	        dataSource: Housing_availability.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_availability.change,
			resizable: true,
	        dataBound: Housing_availability.dataBound,
	        dataBinding: Housing_availability.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_availability' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_availability",
					template:'<div id="item" data-text="#: id_housing_availability#">#:id_housing_availability#</div>',
	                title: "Id_housing_availability",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "description_housing_availability",
					template:'<div id="item" data-text="#: description_housing_availability#">#:description_housing_availability#</div>',
	                title: "Description_housing_availability",
	                width: '11%',
					type:"string"
	            }
				,

	            {
	                field: "date_start",
	                title: "Date_start",
	                width: '11%',
					type:"date",
	            	format:"{0:dd-MM-yyyy}"	
	            }
				,

	            {
	                field: "date_end",
	                title: "Date_end",
	                width: '11%',
					type:"date",
	            	format:"{0:dd-MM-yyyy}"	
	            }
				,

	            {
	                field: "id_availability_state",
	                title: "Id_availability_state",
					template:'<div id="item" data-text="#: id_availability_state#">#if( id_availability_state==null){#<span>No tiene</span>#}else{##: id_availability_state##}#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "availability_state",
	                title: "Availability_state",
					template:'<div id="item" data-text="#: availability_state#">#: availability_state#</div>',
	                width: '11%',
					type:"string"
				}
			,

	            {
	                field: "id_housing",
	                title: "Id_housing",
					template:'<div id="item" data-text="#: id_housing#">#if( id_housing==null){#<span>No tiene</span>#}else{##: id_housing##}#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_housing",
	                title: "Name_housing",
					template:'<div id="item" data-text="#: name_housing#">#: name_housing#</div>',
	                width: '11%',
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
	                width: '11%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_availability(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_availability(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_availability.gridhousing_availability=$("#gridselection_housing_availability").data('kendoGrid');

        /*Form Validation*/
        $('#housing_availability_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_availability[description_housing_availability]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el description_housing_availability'
                        },
                        stringLength: {
                            max: 2147483647,
                            message: 'El description_housing_availability no puede tener mas de 2147483647 caracteres'
                        },
                    }
                }
                        ,
                'Housing_availability[date_start]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el date_start'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El date_start no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_availability[date_end]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_availability[id_availability_state]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 10,
                            message: 'El id_availability_state no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_availability[id_housing]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 10,
                            message: 'El id_housing no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_availability[id_usuario]': {
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
			Housing_availability.bootstrapValidator=$('#housing_availability_form').data('bootstrapValidator');

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
			Housing_availability.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_availability').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_availability :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_availability').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_availability').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_availability').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

