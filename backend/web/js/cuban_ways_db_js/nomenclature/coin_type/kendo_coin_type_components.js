/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


			var ComponentsCoin_type= function () {
    		var initComponent = function () {

				/*Coin_type Formulario*/
				Coin_type.gridDataSource.read();
				Coin_type.coin_type_form = $('#coin_type_form');

 		/*Grid Coin_type*/
		var $kgridcoin_type =  $("#gridselection_coin_type").kendoGrid({
	        dataSource: Coin_type.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Coin_type.change,
			resizable: true,
	        dataBound: Coin_type.dataBound,
	        dataBinding: Coin_type.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_coin_type' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_coin_type",
					template:'<div id="item" data-text="#: id_coin_type#">#:id_coin_type#</div>',
	                title: "Id_coin_type",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_coin",
					template:'<div id="item" data-text="#: name_coin#">#:name_coin#</div>',
	                title: "Name_coin",
	                width: '45%',
					type:"string"
	            }
				,

	            {
	                field: "abbrv_coin",
					template:'<div id="item" data-text="#: abbrv_coin#">#:abbrv_coin#</div>',
	                title: "Abbrv_coin",
	                width: '45%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_coin_type(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_coin_type(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Coin_type.gridcoin_type=$("#gridselection_coin_type").data('kendoGrid');

        /*Form Validation*/
        $('#coin_type_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Coin_type[name_coin]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_coin'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_coin no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_coin del coin_type ya esta insertado',
                            url:urlhome+'nomenclature/coin_type/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_coin_type: validator.getFieldElements('Coin_type[id_coin_type]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Coin_type[abbrv_coin]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el abbrv_coin'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El abbrv_coin no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este abbrv_coin del coin_type ya esta insertado',
                            url:urlhome+'nomenclature/coin_type/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_coin_type: validator.getFieldElements('Coin_type[id_coin_type]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Coin_type.bootstrapValidator=$('#coin_type_form').data('bootstrapValidator');

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
			Coin_type.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_coin_type').click(function () {
    						var c = this.checked;
    						$('#gridselection_coin_type :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_coin_type').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_coin_type').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_coin_type').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

