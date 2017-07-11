/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/


			var ComponentsHousing_characteristics_housing= function () {
    		var initComponent = function () {

				/*Housing_characteristics_housing Formulario*/
				Housing_characteristics_housing.gridDataSource.read();
				Housing_characteristics_housing.housing_characteristics_housing_form = $('#housing_characteristics_housing_form');


				Housing_characteristics_housing.combobox_housing=$("#id_housing_combo").select2({
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


				Housing_characteristics_housing.combobox_housing_characteristics=$("#id_housing_characteristics_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"housing/housing_characteristics/list_json",
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

 		/*Grid Housing_characteristics_housing*/
		var $kgridhousing_characteristics_housing =  $("#gridselection_housing_characteristics_housing").kendoGrid({
	        dataSource: Housing_characteristics_housing.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_characteristics_housing.change,
			resizable: true,
	        dataBound: Housing_characteristics_housing.dataBound,
	        dataBinding: Housing_characteristics_housing.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_characteristics_housing' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_characteristics",
	                title: "Id_housing_characteristics",
					template:'<div id="item" data-text="#: id_housing_characteristics#">#:id_housing_characteristics#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_housing_characteristics",
	                title: "Name_housing_characteristics",
					template:'<div id="item" data-text="#: name_housing_characteristics#">#: name_housing_characteristics#</div>',
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
	                field: "count_housing_characteristics",
					template:'<div id="item" data-text="#: count_housing_characteristics#">#:count_housing_characteristics#</div>',
	                title: "Count_housing_characteristics",
	                width: '20%',
					type:"number"
	            }
				,

	            {
	                field: "cancelled",
					template:'<div id="item" data-text="#: cancelled#">#:cancelled#</div>',
	                title: "Cancelled",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "id_housing_characteristics_housing",
					template:'<div id="item" data-text="#: id_housing_characteristics_housing#">#:id_housing_characteristics_housing#</div>',
	                title: "Id_housing_characteristics_housing",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_characteristics_housing(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_characteristics_housing(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_characteristics_housing.gridhousing_characteristics_housing=$("#gridselection_housing_characteristics_housing").data('kendoGrid');

        /*Form Validation*/
        $('#housing_characteristics_housing_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_characteristics_housing[id_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_housing_characteristics'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_housing_characteristics no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_characteristics_housing[id_housing]': {
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

                            message: 'Este id_housing del housing_characteristics_housing ya esta insertado',
                            url:urlhome+'housing/housing_characteristics_housing/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Housing_characteristics_housing[id_housing_characteristics_housing]': validator.getFieldElements('Housing_characteristics_housing[id_housing_characteristics_housing]').val(),
							  				id_housing_characteristics_housing: validator.getFieldElements('Housing_characteristics_housing[id_housing_characteristics_housing]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Housing_characteristics_housing[count_housing_characteristics]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el count_housing_characteristics'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El count_housing_characteristics no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_characteristics_housing[cancelled]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el cancelled'
                        },
                        stringLength: {
                            max: 1,
                            message: 'El cancelled no puede tener mas de 1 caracteres'
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
			Housing_characteristics_housing.bootstrapValidator=$('#housing_characteristics_housing_form').data('bootstrapValidator');

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
			Housing_characteristics_housing.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_characteristics_housing').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_characteristics_housing :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_characteristics_housing').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_characteristics_housing').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_characteristics_housing').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

