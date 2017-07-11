/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


			var ComponentsCountry= function () {
    		var initComponent = function () {

				/*Country Formulario*/
				Country.gridDataSource.read();
				Country.country_form = $('#country_form');


				Country.combobox_continent=$("#id_continent_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"localization/continent/list_json",
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

 		/*Grid Country*/
		var $kgridcountry =  $("#gridselection_country").kendoGrid({
	        dataSource: Country.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Country.change,
			resizable: true,
	        dataBound: Country.dataBound,
	        dataBinding: Country.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_country' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_country",
					template:'<div id="item" data-text="#: id_country#">#:id_country#</div>',
	                title: "Id_country",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_country",
					template:'<div id="item" data-text="#: name_country#">#:name_country#</div>',
	                title: "Name_country",
	                width: '7%',
					type:"string"
	            }
				,

	            {
	                field: "ie_code_country",
					template:'<div id="item" data-text="#: ie_code_country#">#:ie_code_country#</div>',
	                title: "Ie_code_country",
	                width: '7%',
					type:"string"
	            }
				,

	            {
	                field: "code_country",
					template:'<div id="item" data-text="#: code_country#">#:code_country#</div>',
	                title: "Code_country",
	                width: '7%',
					type:"string"
	            }
				,

	            {
	                field: "prefix",
					template:'<div id="item" data-text="#: prefix#">#:prefix#</div>',
	                title: "Prefix",
	                width: '7%',
					type:"number"
	            }
				,

	            {
	                field: "id_continent",
	                title: "Id_continent",
					template:'<div id="item" data-text="#: id_continent#">#:id_continent#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_continent",
	                title: "Name_continent",
					template:'<div id="item" data-text="#: name_continent#">#: name_continent#</div>',
	                width: '7%',
					type:"string"
				}
			,

	            {
	                field: "subcontinent",
					template:'<div id="item" data-text="#: subcontinent#">#if( subcontinent==null){#<span>No tiene</span>#}else{##: subcontinent##}#</div>',
	                title: "Subcontinent",
	                width: '7%',
					type:"string"
	            }
				,

	            {
	                field: "iso_money",
					template:'<div id="item" data-text="#: iso_money#">#if( iso_money==null){#<span>No tiene</span>#}else{##: iso_money##}#</div>',
	                title: "Iso_money",
	                width: '7%',
					type:"string"
	            }
				,

	            {
	                field: "money_name",
					template:'<div id="item" data-text="#: money_name#">#if( money_name==null){#<span>No tiene</span>#}else{##: money_name##}#</div>',
	                title: "Money_name",
	                width: '7%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_country(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_country(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Country.gridcountry=$("#gridselection_country").data('kendoGrid');

        /*Form Validation*/
        $('#country_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Country[name_country]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_country'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_country no puede tener mas de 100 caracteres'
                        },
                        remote: {

                            message: 'Este name_country del country ya esta insertado',
                            url:urlhome+'localization/country/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_country: validator.getFieldElements('Country[id_country]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Country[ie_code_country]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el ie_code_country'
                        },
                        stringLength: {
                            max: 2,
                            message: 'El ie_code_country no puede tener mas de 2 caracteres'
                        },
                        remote: {

                            message: 'Este ie_code_country del country ya esta insertado',
                            url:urlhome+'localization/country/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_country: validator.getFieldElements('Country[id_country]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Country[code_country]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el code_country'
                        },
                        stringLength: {
                            max: 3,
                            message: 'El code_country no puede tener mas de 3 caracteres'
                        },
                        remote: {

                            message: 'Este code_country del country ya esta insertado',
                            url:urlhome+'localization/country/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_country: validator.getFieldElements('Country[id_country]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Country[prefix]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el prefix'
                        },
                        stringLength: {
                            max: 5,
                            message: 'El prefix no puede tener mas de 5 caracteres'
                        },
                        remote: {

                            message: 'Este prefix del country ya esta insertado',
                            url:urlhome+'localization/country/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_country: validator.getFieldElements('Country[id_country]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Country[id_continent]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_continent'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_continent no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Country[subcontinent]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 32,
                            message: 'El subcontinent no puede tener mas de 32 caracteres'
                        },
                    }
                }
                        ,
                'Country[iso_money]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 3,
                            message: 'El iso_money no puede tener mas de 3 caracteres'
                        },
                    }
                }
                        ,
                'Country[money_name]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'El money_name no puede tener mas de 100 caracteres'
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
			Country.bootstrapValidator=$('#country_form').data('bootstrapValidator');

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
			Country.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_country').click(function () {
    						var c = this.checked;
    						$('#gridselection_country :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_country').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_country').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_country').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

