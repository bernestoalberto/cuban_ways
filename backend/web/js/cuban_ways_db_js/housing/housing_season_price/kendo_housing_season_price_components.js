/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


			var ComponentsHousing_season_price= function () {
    		var initComponent = function () {

				/*Housing_season_price Formulario*/
				Housing_season_price.gridDataSource.read();
				Housing_season_price.housing_season_price_form = $('#housing_season_price_form');


				Housing_season_price.combobox_coin_type=$("#id_coin_type_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"nomenclature/coin_type/list_json",
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


				Housing_season_price.combobox_housing=$("#id_housing_combo").select2({
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


				Housing_season_price.combobox_season=$("#id_season_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"nomenclature/season/list_json",
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

				/*Date Range Picker  cretedat*/
				$("#cretedat").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_season_price.cretedat=$("#cretedat").data('daterangepicker');

				/*Date Range Picker  date_start_publicity*/
				$("#date_start_publicity").daterangepicker({
					//singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_season_price.date_start_publicity=$("#date_start_publicity").data('daterangepicker');

				/*Date Range Picker  date_end_publicity*/
				$("#date_end_publicity").daterangepicker({
					//singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_season_price.date_end_publicity=$("#date_end_publicity").data('daterangepicker');

				/*Date Range Picker  date_start*/
				$("#date_start").daterangepicker({
					//singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_season_price.date_start=$("#date_start").data('daterangepicker');

				/*Date Range Picker  date_end*/
				$("#date_end").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Housing_season_price.date_end=$("#date_end").data('daterangepicker');

 		/*Grid Housing_season_price*/
        //var $kgridhousing_season_price =  $("#gridselection_housing_season_price").kendoGrid({
	    //    dataSource: Housing_season_price.gridDataSource,
	    //    height: 490,
	    //    filterable: true,
	    //    sortable: true,
	    //    change: Housing_season_price.change,
			//resizable: true,
	    //    dataBound: Housing_season_price.dataBound,
	    //    dataBinding: Housing_season_price.dataBinding,
	    //    pageable: {
	    //        buttonCount: 5,
	    //        refresh: true,
	    //        pageSizes: [2,10,20,30,50,100]
	    //    },
	    //    columns: [
	    //        {
			//		field: "",
	    //            title: "",
	    //            width: '35px',
	    //            headerTemplate: "<input class='check_grid' id='all_check_housing_season_price' type='checkbox'/>",
	    //            template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
			//		hidden:false
	    //        }
			//	,
        //
	    //        {
	    //            field: "id_housing_season_price",
			//		template:'<div id="item" data-text="#: id_housing_season_price#">#:id_housing_season_price#</div>',
	    //            title: "Id_housing_season_price",
	    //            width: '0%',
			//		type:"number",
	    //        	hidden:true
	    //        }
			//	,
        //
	    //        {
	    //            field: "price_housing_season",
			//		template:'<div id="item" data-text="#: price_housing_season#">#:price_housing_season#</div>',
	    //            title: "Price_housing_season",
	    //            width: '3%',
			//		type:"string"
	    //        }
			//	,
        //
	    //        {
	    //            field: "comition",
			//	   template:'<div id="item" data-text="#: comition#">#if( comition==null){#<span>No tiene</span>#}else{##: comition##}#</div>',
	    //           title: "Comition",
	    //            width: '3%',
			//		type:"string"
	    //        }
			//	,
        //
	    //        {
	    //            field: "cretedat",
	    //            title: "Cretedat",
	    //            width: '3%',
			//		type:"date",
	    //        	format:"{0:dd-MM-yyyy}"
	    //        }
			//	,
        //
	    //        {
	    //            field: "id_housing",
	    //            title: "Id_housing",
			//		template:'<div id="item" data-text="#: id_housing#">#:id_housing#</div>',
	    //            width: '0%',
			//		type:"number",
			//		hidden:true
			//	}
			//,
	    //        {
	    //            field: "name_housing",
	    //            title: "Name_housing",
			//		template:'<div id="item" data-text="#: name_housing#">#: name_housing#</div>',
	    //            width: '3%',
			//		type:"string"
			//	}
			//,
        //
	    //        {
	    //            field: "id_season",
	    //            title: "Id_season",
			//		template:'<div id="item" data-text="#: id_season#">#:id_season#</div>',
	    //            width: '0%',
			//		type:"number",
			//		hidden:true
			//	}
			//,
	    //        {
	    //            field: "name_season",
	    //            title: "Name_season",
			//		template:'<div id="item" data-text="#: name_season#">#: name_season#</div>',
	    //            width: '3%',
			//		type:"string"
			//	}
			//,
        //
	    //        {
	    //            field: "id_coin_type",
	    //            title: "Id_coin_type",
			//		template:'<div id="item" data-text="#: id_coin_type#">#:id_coin_type#</div>',
	    //            width: '0%',
			//		type:"number",
			//		hidden:true
			//	}
			//,
	    //        {
	    //            field: "name_coin",
	    //            title: "Name_coin",
			//		template:'<div id="item" data-text="#: name_coin#">#: name_coin#</div>',
	    //            width: '3%',
			//		type:"string"
			//	}
			//,
        //
	    //        {
	    //            field: "comition_for_publicitiy",
			//		template:'<div id="item" data-text="#: comition_for_publicitiy#">#if( comition_for_publicitiy==null){#<span>No tiene</span>#}else{##: comition_for_publicitiy##}#</div>',
	    //            title: "Comition_for_publicitiy",
	    //            width: '3%',
			//		type:"string"
	    //        }
			//	,
        //
	    //        {
	    //            field: "date_start_publicity",
	    //            title: "Date_start_publicity",
	    //            width: '3%',
			//		type:"date",
	    //        	format:"{0:dd-MM-yyyy}"
	    //        }
			//	,
        //
	    //        {
	    //            field: "date_end_publicity",
	    //            title: "Date_end_publicity",
	    //            width: '3%',
			//		type:"date",
	    //        	format:"{0:dd-MM-yyyy}"
	    //        }
			//	,
        //
	    //        {
	    //            field: "booking_deposit",
			//		template:'<div id="item" data-text="#: booking_deposit#">#if( booking_deposit==null){#<span>No tiene</span>#}else{##: booking_deposit##}#</div>',
	    //            title: "Booking_deposit",
	    //            width: '3%',
			//		type:"string"
	    //        }
			//	,
        //
	    //        {
	    //            field: "date_start",
	    //            title: "Date_start",
	    //            width: '3%',
			//		type:"date",
	    //        	format:"{0:dd-MM-yyyy}"
	    //        }
			//	,
        //
	    //        {
	    //            field: "date_end",
	    //            title: "Date_end",
	    //            width: '3%',
			//		type:"date",
	    //        	format:"{0:dd-MM-yyyy}"
	    //        }
			//	,
			//	{
	    //            template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_housing_season_price(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
			//				  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_housing_season_price(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	    //            name:'edit',
	    //            headerTemplate: "Acciones",
	    //            width: '10%'
	    //        }
	    //    ]
	    //});
			//Housing_season_price.gridhousing_season_price=$("#gridselection_housing_season_price").data('kendoGrid');

        /*Form Validation*/
        $('#housing_season_price_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Housing_season_price[price_housing_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el price_housing_season'
                        },
                        stringLength: {
                            max: 8,
                            message: 'El price_housing_season no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[comition]': {
                    group: '.form-group',
                    validators: {
   
                        stringLength: {
                            max: 8,
                            message: 'El comition no puede tener mas de 8 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[cretedat]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el cretedat'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El cretedat no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[id_housing]': {
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
                        ,
                'Housing_season_price[id_season]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_season'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_season no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[id_coin_type]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_coin_type'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_coin_type no puede tener mas de 10 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[comition_for_publicitiy]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El comition_for_publicitiy no puede tener mas de 17 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[date_start_publicity]': {
                    group: '.form-group',
                    validators: {
                      stringLength: {
                            max: 13,
                            message: 'El date_start_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[date_end_publicity]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end_publicity no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[booking_deposit]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 17,
                            message: 'El booking_deposit no puede tener mas de 17 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[date_start]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_start no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Housing_season_price[date_end]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El date_end no puede tener mas de 13 caracteres'
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
			Housing_season_price.bootstrapValidator=$('#housing_season_price_form').data('bootstrapValidator');

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
			Housing_season_price.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_housing_season_price').click(function () {
    						var c = this.checked;
    						$('#gridselection_housing_season_price :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_housing_season_price').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_housing_season_price').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_housing_season_price').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

