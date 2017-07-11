/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsContinent= function () {
    		var initComponent = function () {

				/*Continent Formulario*/
				Continent.gridDataSource.read();
				Continent.continent_form = $('#continent_form');

 		/*Grid Continent*/
		var $kgridcontinent =  $("#gridselection_continent").kendoGrid({
	        dataSource: Continent.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Continent.change,
			resizable: true,
	        dataBound: Continent.dataBound,
	        dataBinding: Continent.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_continent' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_continent",
					template:'<div id="item" data-text="#: id_continent#">#:id_continent#</div>',
	                title: "Id_continent",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_continent",
					template:'<div id="item" data-text="#: name_continent#">#:name_continent#</div>',
	                title: "Name_continent",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_continent(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_continent(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Continent.gridcontinent=$("#gridselection_continent").data('kendoGrid');

        /*Form Validation*/
        $('#continent_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Continent[name_continent]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_continent'
                        },
                        stringLength: {
                            max: 20,
                            message: 'El name_continent no puede tener mas de 20 caracteres'
                        },
                        remote: {

                            message: 'Este name_continent del continent ya esta insertado',
                            url:urlhome+'localization/continent/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_continent: validator.getFieldElements('Continent[id_continent]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Continent.bootstrapValidator=$('#continent_form').data('bootstrapValidator');

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
			Continent.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_continent').click(function () {
    						var c = this.checked;
    						$('#gridselection_continent :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_continent').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_continent').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_continent').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

