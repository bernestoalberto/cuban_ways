/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


			var ComponentsSeason= function () {
    		var initComponent = function () {

				/*Season Formulario*/
				Season.gridDataSource.read();
				Season.season_form = $('#season_form');

 		/*Grid Season*/
		var $kgridseason =  $("#gridselection_season").kendoGrid({
	        dataSource: Season.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Season.change,
			resizable: true,
	        dataBound: Season.dataBound,
	        dataBinding: Season.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_season' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_season",
					template:'<div id="item" data-text="#: id_season#">#:id_season#</div>',
	                title: "Id_season",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_season",
					template:'<div id="item" data-text="#: name_season#">#:name_season#</div>',
	                title: "Name_season",
	                width: '95%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_season(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_season(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Season.gridseason=$("#gridselection_season").data('kendoGrid');

        /*Form Validation*/
        $('#season_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Season[name_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_season'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_season no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_season del season ya esta insertado',
                            url:urlhome+'nomenclature/season/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_season: validator.getFieldElements('Season[id_season]').val(),
								 }
							}
                        }
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Season.bootstrapValidator=$('#season_form').data('bootstrapValidator');

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
			Season.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_season').click(function () {
    						var c = this.checked;
    						$('#gridselection_season :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_season').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_season').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_season').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

