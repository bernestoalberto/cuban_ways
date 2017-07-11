/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


			var ComponentsProvince= function () {
    		var initComponent = function () {

				/*Province Formulario*/
				Province.gridDataSource.read();
				Province.province_form = $('#province_form');


				Province.combobox_country=$("#id_country_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"localization/country/list_json",
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

 		/*Grid Province*/
		var $kgridprovince =  $("#gridselection_province").kendoGrid({
	        dataSource: Province.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Province.change,
			resizable: true,
	        dataBound: Province.dataBound,
	        dataBinding: Province.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_province' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_province",
					template:'<div id="item" data-text="#: id_province#">#:id_province#</div>',
	                title: "Id_province",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_province",
					template:'<div id="item" data-text="#: name_province#">#:name_province#</div>',
	                title: "Name_province",
	                width: '45%',
					type:"string"
	            }
				,

	            {
	                field: "id_country",
	                title: "Id_country",
					template:'<div id="item" data-text="#: id_country#">#:id_country#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_country",
	                title: "Name_country",
					template:'<div id="item" data-text="#: name_country#">#: name_country#</div>',
	                width: '45%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_province(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_province(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Province.gridprovince=$("#gridselection_province").data('kendoGrid');

        /*Form Validation*/
        $('#province_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Province[name_province]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_province'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_province no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_province del province ya esta insertado',
                            url:urlhome+'localization/province/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Province[id_country]': validator.getFieldElements('Province[id_country]').val(),
							  				id_province: validator.getFieldElements('Province[id_province]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Province[id_country]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_country'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_country no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_country del province ya esta insertado',
                            url:urlhome+'localization/province/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Province[name_province]': validator.getFieldElements('Province[name_province]').val(),
							  				id_province: validator.getFieldElements('Province[id_province]').val(),
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
			Province.bootstrapValidator=$('#province_form').data('bootstrapValidator');

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
			Province.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_province').click(function () {
    						var c = this.checked;
    						$('#gridselection_province :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_province').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_province').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_province').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

