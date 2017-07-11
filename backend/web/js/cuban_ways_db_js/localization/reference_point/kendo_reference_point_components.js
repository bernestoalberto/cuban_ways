/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:22 GMT-05:00 2016*/


			var ComponentsReference_point= function () {
    		var initComponent = function () {

				/*Reference_point Formulario*/
				Reference_point.gridDataSource.read();
				Reference_point.reference_point_form = $('#reference_point_form');

 		/*Grid Reference_point*/
		var $kgridreference_point =  $("#gridselection_reference_point").kendoGrid({
	        dataSource: Reference_point.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Reference_point.change,
			resizable: true,
	        dataBound: Reference_point.dataBound,
	        dataBinding: Reference_point.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_reference_point' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_reference_point",
					template:'<div id="item" data-text="#: id_reference_point#">#:id_reference_point#</div>',
	                title: "Id_reference_point",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_reference_point",
					template:'<div id="item" data-text="#: name_reference_point#">#:name_reference_point#</div>',
	                title: "Name_reference_point",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "latitude",
					template:'<div id="item" data-text="#: latitude#">#:latitude#</div>',
	                title: "Latitude",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "length",
					template:'<div id="item" data-text="#: length#">#:length#</div>',
	                title: "Length",
	                width: '20%',
					type:"string"
	            }
				,

	            {
	                field: "image",
					template:'<div id="item" data-text="#: image#">#if( image==null){#<span>No tiene</span>#}else{##: image##}#</div>',
	                title: "Image",
	                width: '20%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_reference_point(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_reference_point(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Reference_point.gridreference_point=$("#gridselection_reference_point").data('kendoGrid');

        /*Form Validation*/
        $('#reference_point_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Reference_point[name_reference_point]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_reference_point'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_reference_point no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_reference_point del reference_point ya esta insertado',
                            url:urlhome+'localization/reference_point/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_reference_point: validator.getFieldElements('Reference_point[id_reference_point]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Reference_point[latitude]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el latitude'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El latitude no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Reference_point[length]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el length'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El length no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Reference_point[image]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 1,
                            message: 'El image no puede tener mas de 1 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Reference_point.bootstrapValidator=$('#reference_point_form').data('bootstrapValidator');

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
			Reference_point.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_reference_point').click(function () {
    						var c = this.checked;
    						$('#gridselection_reference_point :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_reference_point').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_reference_point').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_reference_point').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

