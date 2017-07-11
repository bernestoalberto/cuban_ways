/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


			var ComponentsAvailability_state= function () {
    		var initComponent = function () {

				/*Availability_state Formulario*/
				Availability_state.gridDataSource.read();
				Availability_state.availability_state_form = $('#availability_state_form');

 		/*Grid Availability_state*/
		var $kgridavailability_state =  $("#gridselection_availability_state").kendoGrid({
	        dataSource: Availability_state.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Availability_state.change,
			resizable: true,
	        dataBound: Availability_state.dataBound,
	        dataBinding: Availability_state.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_availability_state' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_availability_state",
					template:'<div id="item" data-text="#: id_availability_state#">#:id_availability_state#</div>',
	                title: "Id_availability_state",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "availability_state",
					template:'<div id="item" data-text="#: availability_state#">#:availability_state#</div>',
	                title: "Availability_state",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_availability_state(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_availability_state(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Availability_state.gridavailability_state=$("#gridselection_availability_state").data('kendoGrid');

        /*Form Validation*/
        $('#availability_state_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Availability_state[availability_state]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el availability_state'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El availability_state no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este availability_state del availability_state ya esta insertado',
                            url:urlhome+'nomenclature/availability_state/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_availability_state: validator.getFieldElements('Availability_state[id_availability_state]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Availability_state.bootstrapValidator=$('#availability_state_form').data('bootstrapValidator');

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
			Availability_state.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_availability_state').click(function () {
    						var c = this.checked;
    						$('#gridselection_availability_state :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_availability_state').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_availability_state').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_availability_state').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

