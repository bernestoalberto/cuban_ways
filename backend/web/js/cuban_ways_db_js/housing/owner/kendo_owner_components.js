/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/


			var ComponentsOwner= function () {
    		var initComponent = function () {

				/*Owner Formulario*/
				Owner.owner_form = $('#owner_form');

				/*Date Range Picker  datebirth*/
				$("#datebirth").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Owner.datebirth=$("#datebirth").data('daterangepicker');

				/*Date Range Picker  createdat*/
				$("#createdat").daterangepicker({
					singleDatePicker: true,
					startDate: moment(),
					format: 'MM/DD/YYYY',
					showDropdowns: true,
					readonly:true

				});
		
				Owner.createdat=$("#createdat").data('daterangepicker');

 		/*Grid Owner*/
		var $kgridowner =  $("#gridselection_owner").kendoGrid({
	        dataSource: Owner.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Owner.change,
			resizable: true,
	        dataBound: Owner.dataBound,
	        dataBinding: Owner.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_owner' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_owner",
					template:'<div id="item" data-text="#: id_owner#">#:id_owner#</div>',
	                title: "Id_owner",
	                width: '0%',
					type:"number",
	            	hidden:true
	            }
				,

	            {
	                field: "name_owner",
					template:'<div id="item" data-text="#: name_owner#">#:name_owner#</div>',
	                title: "Name_owner",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "lastname_owner",
					template:'<div id="item" data-text="#: lastname_owner#">#:lastname_owner#</div>',
	                title: "Lastname_owner",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "datebirth",
	                title: "Datebirth",
	                width: '4%',
					type:"date",
	            	format:"{0:dd-MM-yyyy}"	
	            }
				,

	            {
	                field: "email",
					template:'<div id="item" data-text="#: email#">#:email#</div>',
	                title: "Email",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "phone",
					template:'<div id="item" data-text="#: phone#">#:phone#</div>',
	                title: "Phone",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "createdat",
	                title: "Createdat",
	                width: '4%',
					type:"date",
	            	format:"{0:dd-MM-yyyy}"	
	            }
				,

	            {
	                field: "identification",
					template:'<div id="item" data-text="#: identification#">#:identification#</div>',
	                title: "Identification",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "name_owner_incharge",
					template:'<div id="item" data-text="#: name_owner_incharge#">#if( name_owner_incharge==null){#<span>No tiene</span>#}else{##: name_owner_incharge##}#</div>',
	                title: "Name_owner_incharge",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "lastname_owner_incharge",
					template:'<div id="item" data-text="#: lastname_owner_incharge#">#if( lastname_owner_incharge==null){#<span>No tiene</span>#}else{##: lastname_owner_incharge##}#</div>',
	                title: "Lastname_owner_incharge",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "bank_account",
					template:'<div id="item" data-text="#: bank_account#">#if( bank_account==null){#<span>No tiene</span>#}else{##: bank_account##}#</div>',
	                title: "Bank_account",
	                width: '4%',
					type:"string"
	            }
				,

	            {
	                field: "photo",
					template:'<div id="item" data-text="#: photo#">#if( photo==null){#<span>No tiene</span>#}else{##: photo##}#</div>',
	                title: "Photo",
	                width: '4%',
					type:"string"
	            }
				,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_owner(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_owner(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Owner.gridowner=$("#gridselection_owner").data('kendoGrid');

        /*Form Validation*/
        $('#owner_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Owner[name_owner]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el name_owner'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El name_owner no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[lastname_owner]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el lastname_owner'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El lastname_owner no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[datebirth]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 13,
                            message: 'El datebirth no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Owner[email]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el email'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El email no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[phone]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el phone'
                        },
                        stringLength: {
                            max: 100,
                            message: 'El phone no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[createdat]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el createdat'
                        },
                        stringLength: {
                            max: 13,
                            message: 'El createdat no puede tener mas de 13 caracteres'
                        },
                    }
                }
                        ,
                'Owner[identification]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el identification'
                        },
                        stringLength: {
                            max: 15,
                            message: 'El identification no puede tener mas de 15 caracteres'
                        },
                        remote: {

                            message: 'Este identification del owner ya esta insertado',
                            url:urlhome+'housing/owner/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				id_owner: validator.getFieldElements('Owner[id_owner]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Owner[name_owner_incharge]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'El name_owner_incharge no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[lastname_owner_incharge]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 100,
                            message: 'El lastname_owner_incharge no puede tener mas de 100 caracteres'
                        },
                    }
                }
                        ,
                'Owner[bank_account]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 50,
                            message: 'El bank_account no puede tener mas de 50 caracteres'
                        },
                    }
                }
                        ,
                'Owner[photo]': {
                    group: '.form-group',
                    validators: {
                        stringLength: {
                            max: 150,
                            message: 'El photo no puede tener mas de 150 caracteres'
                        },
                    }
                }

            }
        }).on('error.field.bv', function(e, data) {

				$('#'+data.element[0].id).val('')
		});
			Owner.bootstrapValidator=$('#owner_form').data('bootstrapValidator');

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
			Owner.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_owner').click(function () {
    						var c = this.checked;
    						$('#gridselection_owner :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_owner').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_owner').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_owner').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

