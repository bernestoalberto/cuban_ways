/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:48 GMT-05:00 2016*/


			var ComponentsOwner_user= function () {
    		var initComponent = function () {

				/*Owner_user Formulario*/
				Owner_user.gridDataSource.read();
				Owner_user.owner_user_form = $('#owner_user_form');


				Owner_user.combobox_owner=$("#id_owner_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"housing/owner/list_json",
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


				Owner_user.combobox_usuario=$("#id_usuario_combo").select2({
					language: "es",
						ajax: {
						url: urlhome+"security/usuario/list_json",
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

 		/*Grid Owner_user*/
		var $kgridowner_user =  $("#gridselection_owner_user").kendoGrid({
	        dataSource: Owner_user.gridDataSource,
	        height: 490,
	        filterable: true,
	        sortable: true,
	        change: Owner_user.change,
			resizable: true,
	        dataBound: Owner_user.dataBound,
	        dataBinding: Owner_user.dataBinding,
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
	                headerTemplate: "<input class='check_grid' id='all_check_owner_user' type='checkbox'/>",
	                template: "<input class='check_row' id='#: uid#' type='checkbox'/>",
					hidden:false
	            }
				,

	            {
	                field: "id_owner",
	                title: "Id_owner",
					template:'<div id="item" data-text="#: id_owner#">#:id_owner#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "name_owner",
	                title: "Name_owner",
					template:'<div id="item" data-text="#: name_owner#">#: name_owner#</div>',
	                width: '45%',
					type:"string"
				}
			,

	            {
	                field: "id_usuario",
	                title: "Id_usuario",
					template:'<div id="item" data-text="#: id_usuario#">#:id_usuario#</div>',
	                width: '0%',
					type:"number",
					hidden:true
				}
			,
	            {
	                field: "username",
	                title: "Username",
					template:'<div id="item" data-text="#: username#">#: username#</div>',
	                width: '45%',
					type:"string"
				}
			,
				{
	                template: "<div class='row'><a class='edit col-md-2' id='#: uid#' onclick='showUpdate_owner_user(this)' data-toggle='tooltip' data-original-title='Modificar|Modificar elemento'><i class='fa fa-edit text-primary edit'></i></a>"+
							  "<a class='delete col-md-2 ' id='#: uid#' onclick='delete_element_owner_user(this)' data-toggle='tooltip' data-original-title='Eliminar|Eliminar elemento'><i class='fa fa-trash-o text-danger delete' ></i></a></div>",
	                name:'edit',
	                headerTemplate: "Acciones",
	                width: '10%'
	            }
	        ]
	    });
			Owner_user.gridowner_user=$("#gridselection_owner_user").data('kendoGrid');

        /*Form Validation*/
        $('#owner_user_form').bootstrapValidator({
            //live: 'disabled',
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            feedbackIcons: {
                validating: 'glyphicon glyphicon-refresh'
            },
            message: 'El valor no es valido',
            fields: {
                'Owner_user[id_owner]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_owner'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_owner no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_owner del owner_user ya esta insertado',
                            url:urlhome+'security/owner_user/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Owner_user[id_owner]': validator.getFieldElements('Owner_user[id_owner]').val(),
							  				'Owner_user[id_usuario]': validator.getFieldElements('Owner_user[id_usuario]').val(),
								 }
							}
                        }
                    }
                }
                        ,
                'Owner_user[id_usuario]': {
                    group: '.form-group',
                    validators: {
                        notEmpty: {
                            message: 'Entre el id_usuario'
                        },
                        stringLength: {
                            max: 10,
                            message: 'El id_usuario no puede tener mas de 10 caracteres'
                        },
                        remote: {

                            message: 'Este id_usuario del owner_user ya esta insertado',
                            url:urlhome+'security/owner_user/findbyukjson',
							 delay:250,
                            data: function(validator, $field, value) {
								return {
							  				'Owner_user[id_owner]': validator.getFieldElements('Owner_user[id_owner]').val(),
							  				'Owner_user[id_usuario]': validator.getFieldElements('Owner_user[id_usuario]').val(),
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
			Owner_user.bootstrapValidator=$('#owner_user_form').data('bootstrapValidator');

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
			Owner_user.importarbootstrapValidator=$('#importar_form').data('bootstrapValidator');


    }
    		return {
        		//main function to initiate the module
        		init: function () {
            		initComponent();
						//Para chequear todos los elementos
						$('#all_check_owner_user').click(function () {
    						var c = this.checked;
    						$('#gridselection_owner_user :checkbox').prop('checked',c);
						});
//Convertir a Icheck
				$('#all_check_owner_user').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%'
					});
//Para deschequear y chequear todos los elementos
			$('#all_check_owner_user').on('ifChecked', function(event){
					$('.check_row').iCheck('check');
			});
			$('#all_check_owner_user').on('ifUnchecked', function(event){
					$('.check_row').iCheck('uncheck');			});

        			}
    		};

		}();

