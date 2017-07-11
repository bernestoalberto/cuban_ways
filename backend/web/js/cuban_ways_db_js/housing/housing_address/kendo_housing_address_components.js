/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/


			var ComponentsHousing_address= function () {
    		var initComponent = function () {

				/*Housing_address Formulario*/
				Housing_address.gridDataSource.read();
				Housing_address.housing_address_form = $('#housing_address_form');


				Housing_address.combobox_town=$("#id_town_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"localization/town/list_json",
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

 		/*Grid Housing_address*/
		var $kgridhousing_address =  $("#gridselection_housing_address").kendoGrid({
	        dataSource: Housing_address.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_address.change,
			resizable: true,
	        dataBound: Housing_address.dataBound,
	        dataBinding: Housing_address.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_address' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_address",
					template:'<div id="item" data-text="#: id_housing_address#">#:id_housing_address#</div>',
	                title: "Id_housing_address",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "id_town",
	                title: "Id_town",
					template:'<div id="item" data-text="#: id_town#">#:id_town#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_town",
	                title: "Name_town",
					template:'<div id="item" data-text="#: name_town#">#: name_town#</div>',
	                width: '9%',
					type:"string"
				}
			,

	            {
	                field: "length",
					template:'<div id="item" data-text="#: length#">#if( length==null){#<span>No tiene</span>#}else{##: length##}#</div>',
	                title: "Length",
	                width: '9%',
					type:"string"
	            }
				,

	            {
	                field: "latitude",
					template:'<div id="item" data-text="#: latitude#">#if( latitude==null){#<span>No tiene</span>#}else{##: latitude##}#</div>',
	                title: "Latitude",
	                width: '9%',
					type:"string"
	            }
				,

	            {
	                field: "number_housing",
					template:'<div id="item" data-text="#: number_housing#">#:number_housing#</div>',
	                title: "Number_housing",
	                width: '9%',
					type:"string"
	            }
				,

	            {
	                field: "main_street",
					template:'<div id="item" data-text="#: main_street#">#:main_street#</div>',
	                title: "Main_street",
	                width: '9%',
					type:"string"
	            }
				,

	            {
	                field: "between_first",
					template:'<div id="item" data-text="#: between_first#">#if( between_first==null){#<span>No tiene</span>#}else{##: between_first##}#</div>',
	                title: "Between_first",
	                width: '9%',
					type:"string"
	            }
				,

	            {
	                field: "between_second",
					template:'<div id="item" data-text="#: between_second#">#if( between_second==null){#<span>No tiene</span>#}else{##: between_second##}#</div>',
	                title: "Between_second",
	                width: '9%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_address(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_address(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_address.gridhousing_address=$("#gridselection_housing_address").data('kendoGrid');

        /*Form Validation*/
        $('#housing_address_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_address[id_town]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_town'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_town no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[length]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 8,
                            message: 'El length no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[latitude]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 8,
                            message: 'El latitude no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[number_housing]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el number_housing'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El number_housing no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[main_street]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el main_street'
                        },
                        stringLength: {
                            max: 20,
                            message: 'El main_street no puede tener mas de 20 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[between_first]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 20,
                            message: 'El between_first no puede tener mas de 20 caracteres'
                        },
                    }
                }
                        ,
                'Housing_address[between_second]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 20,
                            message: 'El between_second no puede tener mas de 20 caracteres'
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
			Housing_address.bootstrapValidator=$('#housing_address_form').data('bootstrapValidator');

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
			Housing_address.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_address').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_address :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_address').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_address').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_address').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

