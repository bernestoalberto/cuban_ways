/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


$("#btn_modal_role").click(function() {
	Role.oldElement=null;
    Role.role_form.data('bootstrapValidator').resetForm(true);
    $('#role_form')[0].reset();
	 $("#title_role").html('Insertar Role');
	 $("#taskrole").val('insert');
    $("#modal_role").modal();
	});

$("#reload_role").click(function() {
	if($('#taskrole').val()!='update') {
		Role.role_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Role.role_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_role").val(Role.oldElement.id_role);
	 	$("#name_role").val(Role.oldElement.name_role);
	 	$('#id_role').val(Role.oldElement.id_role);
	 	$("#taskrole").val('update');
		Role.role_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_role").click(function() {
				var list='';
				var filters =  Role.gridDataSource.filter();
				if(filters) {
					var allData = Role.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Role.gridDataSource.data();
				$('#role_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_role").click(function() {
    $('#list_role_pdf').modal();
    $("#tbody_table_role").html('');
    var list='';
    var filters =  Role.gridDataSource.filter();
    if(filters) {
        var allData = Role.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Role.gridDataSource.data();
    list.forEach(Role.list_pdf);
});

$("#export_role_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_role_pdf"))
		        .then(function(group) {
		            // Render the result as a PDF file
		            return kendo.drawing.exportPDF(group, {
		                paperSize: "auto",
		                margin: { left: "1cm", top: "1cm", right: "1cm", bottom: "1cm" }
		            });
		        })
		        .done(function(data) {
		            // Save the PDF file
		            $('body').modalmanager('removeLoading');
		            $('#list_role_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Role_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_role_importar").click(function() {
	$('#import_role').modal();
});


$("#importar_role_excel").click(function() {
		if(Role.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"security/role/load_excel";
						$.ajax({
							type: "POST",
							url:url,
							contentType:false, //Debe estar en false para que pase el objeto sin procesar
							data:data, //Le pasamos el objeto que creamos con los archivos
							processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
							cache:false, //Para que el formulario no guarde cache
							success:function(response){
								var result=jQuery.parseJSON(response);
								if(!result.success)
								{
									$('#text-error').html(result.message);
									$.smallBox({
										title: '',
										content:$('#message-error').html(),
										color: "#BA0916",
										timeout: 6000
									})
								}
								else
								{
									Role.gridDataSource.read();
									$('#import_role').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_role(e) {

    Role.role_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Role.finditem(e.id);
	 Role.oldElement= dataItem;
	 $('#id_role').val(dataItem.id_role);
	 	$("#id_role").val(Role.oldElement.id_role);
	 	$("#name_role").val(Role.oldElement.name_role);
	 $("#taskrole").val('update');
	 $("#title_role").html('Actualizar Role');
	 $("#modal_role").modal();
	}


//Boton Accion
$('#btnaction_role').click(function () {
    Role.role_form.data('bootstrapValidator').validate();
        if(Role.role_form.data('bootstrapValidator').isValid())
			{
       		var role={};
       		role.name_role=$("#name_role").val();
       		var url=urlhome+"security/role/create";
        	if($('#taskrole').val()=="update")
        		{
            		var url=urlhome+"security/role/update";
            		role.id_role=Role.oldElement.id_role;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Role:role,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskrole').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El role fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskrole').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Role.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_role").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_role").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_role(e)
				{
				    var dataItem=Role.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Role?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/role/delete",
				                data:{
				                    array:JSON.stringify(array),
				                    _backendCSRF:_csrf
				                },
				                success:function(response){
				                    if(response.success==true) {
				                        img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
				                            NotificationW8('#2D8F3C','Elemento eliminado correctamente', response.message, 5000,img)
			                    }
				                    else
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.message ,5000,img)
				                    }
				                    Role.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Role.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_role').click(function(){
        var checkbox_checked=$('#gridselection_role .check_row:checked');

        if(checkbox_checked.length==0)
        {

            $.smallBox({
                title: "<span class='fa fa-trash-o'></span>     Eliminar Elemento ",
                content: "<p>Debe seleccionar al menos un elemento a eliminar</p>",
                color: "#F2092A",
                timeout: 1000,
                top:10
            })
        }
        else {
            var array=[];
            checkbox_checked.each(function(){
                      var dataItem=Role.finditem($(this).attr('id'));
                    	array.push(dataItem);
                }
            );
            $.MetroMessageBox({
                title: "<span class='fa fa-trash-o'></span> Eliminar ",
                content: "<p class='fg-white'>Desea eliminar los elementos seleccionados?</p> ",
                NormalButton: "#232323",
                ActiveButton: "#008a00 ",
                buttons: " [Cancelar][Aceptar]"
            }, function (a) {
                if(a=="Aceptar")
                {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/role/delete",
				                data:{
				                    array:JSON.stringify(array),
				                    _backendCSRF:_csrf
				                },
				                success:function(response){
				                    if(response.success==true) {
				                        img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
				                            NotificationW8('#2D8F3C','Elemento eliminado correctamente', response.message, 5000,img)
			                    }
				                    else
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.message ,5000,img)
				                    }
				                    Role.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Role.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
