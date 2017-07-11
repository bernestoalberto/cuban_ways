/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsHousing_image= function () {
    		var initComponent = function () {

				/*Housing_image Formulario*/
				Housing_image.gridDataSource.read();
				Housing_image.housing_image_form = $('#housing_image_form');


				Housing_image.combobox_housing=$("#id_housing_combo").select2({
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

 		/*Grid Housing_image*/
		var $kgridhousing_image =  $("#gridselection_housing_image").kendoGrid({
	        dataSource: Housing_image.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Housing_image.change,
			resizable: true,
	        dataBound: Housing_image.dataBound,
	        dataBinding: Housing_image.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_housing_image' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_housing_image",
					template:'<div id="item" data-text="#: id_housing_image#">#:id_housing_image#</div>',
	                title: "Id_housing_image",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "image",
					template:'<div id="item" data-text="#: image#">#:image#</div>',
	                title: "Image",
	                width: '45%',
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
	                width: '45%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_image(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_image(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Housing_image.gridhousing_image=$("#gridselection_housing_image").data('kendoGrid');

        /*Form Validation*/
        $('#housing_image_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_image[image]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el image'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El image no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Housing_image[id_housing]': {
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

            }
        }).on('error.field.bv', function(e, data) {

			if(data.element[0].type.lastIndexOf("select")==0)
			{
				$('#select2-'+data.element[0].id+'-container').html('');
			}
			else
				$('#'+data.element[0].id).val('')
		});
			Housing_image.bootstrapValidator=$('#housing_image_form').data('bootstrapValidator');

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
			Housing_image.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_image').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_image :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_image').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_image').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_image').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

