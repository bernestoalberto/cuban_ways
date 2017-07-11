/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


			var ComponentsTown= function () {
    		var initComponent = function () {

				/*Town Formulario*/
				Town.gridDataSource.read();
				Town.town_form = $('#town_form');


				Town.combobox_province=$("#id_province_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"localization/province/list_json",
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

 		/*Grid Town*/
		var $kgridtown =  $("#gridselection_town").kendoGrid({
	        dataSource: Town.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Town.change,
			resizable: true,
	        dataBound: Town.dataBound,
	        dataBinding: Town.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_town' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_town",
					template:'<div id="item" data-text="#: id_town#">#:id_town#</div>',
	                title: "Id_town",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_town",
					template:'<div id="item" data-text="#: name_town#">#:name_town#</div>',
	                title: "Name_town",
	                width: '45%',
					type:"string"
	            }
				,

	            {
	                field: "id_province",
	                title: "Id_province",
					template:'<div id="item" data-text="#: id_province#">#:id_province#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_province",
	                title: "Name_province",
					template:'<div id="item" data-text="#: name_province#">#: name_province#</div>',
	                width: '45%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_town(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_town(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Town.gridtown=$("#gridselection_town").data('kendoGrid');

        /*Form Validation*/
        $('#town_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Town[name_town]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_town'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_town no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_town del town ya esta insertado',
                            url:urlhome+'localization/town/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Town[id_province]': validator.getFieldElements('Town[id_province]').val(),
							  				id_town: validator.getFieldElements('Town[id_town]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Town[id_province]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_province'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_province no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_province del town ya esta insertado',
                            url:urlhome+'localization/town/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Town[name_town]': validator.getFieldElements('Town[name_town]').val(),
							  				id_town: validator.getFieldElements('Town[id_town]').val(),
								 }
							}
                        }
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
			Town.bootstrapValidator=$('#town_form').data('bootstrapValidator');

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
			Town.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_town').click(function () {
    						var c = this.checked;
    						$('#gridselection_town :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_town').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_town').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_town').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

