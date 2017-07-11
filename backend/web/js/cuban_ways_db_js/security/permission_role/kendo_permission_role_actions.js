/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/



$("#reload_permission_role").click(function() {
	if($('#taskpermission_role').val()!='update') {
    $('#select2-id_permission-container').html('');
    Permission_role.combobox_permission.append('<option selected="" value=""></option>').change();
    $('#select2-id_role-container').html('');
    Permission_role.combobox_role.append('<option selected="" value=""></option>').change();
		Permission_role.permission_role_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Permission_role.permission_role_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_permission_role").val(Permission_role.oldElement.id_permission_role);
	 	Permission_role.combobox_permission.append('<option selected="" value="'+Permission_role.oldElement.id_permission+'">'+Permission_role.oldElement.name_permission+'</option>').change();
	 	Permission_role.combobox_permission.val(Permission_role.oldElement.id_permission);
	 	Permission_role.combobox_role.append('<option selected="" value="'+Permission_role.oldElement.id_role+'">'+Permission_role.oldElement.name_role+'</option>').change();
	 	Permission_role.combobox_role.val(Permission_role.oldElement.id_role);
	 	$('#id_permission_role').val(Permission_role.oldElement.id_permission_role);
	 	$("#taskpermission_role").val('update');
		Permission_role.permission_role_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_permission_role").click(function() {
    $('#list_permission_role_pdf').modal();
    $("#tbody_table_permission_role").html('');
    var list='';
    var filters =  Permission_role.gridDataSource.filter();
    if(filters) {
        var allData = Permission_role.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Permission_role.gridDataSource.data();
    list.forEach(Permission_role.list_pdf);
});

	$("#excel_permission_role").click(function() {
				var list='';
				var filters =  Permission_role.gridDataSource.filter();
				if(filters) {
					var allData = Permission_role.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Permission_role.gridDataSource.data();
				$('#permission_role_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_permission_role_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_permission_role_pdf"))
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
		            $('#list_permission_role_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Permission_role_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_permission_role_importar").click(function() {
	$('#import_permission_role').modal();
});


$("#importar_permission_role_excel").click(function() {
		if(Permission_role.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"security/permission_role/load_excel";
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
									Permission_role.gridDataSource.read();
									$('#import_permission_role').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_permission_role').click(function () {
    var c = this.checked;
    $('#gridselection_permission_role :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_permission_role(e)
				{
				    var dataItem=Permission_role.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Permission_role?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/permission_role/delete",
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
				                    Permission_role.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Permission_role.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_permission_role').click(function(){
        var checkbox_checked=$('#gridselection_permission_role .check_row:checked');

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
                      var dataItem=Permission_role.finditem($(this).attr('id'));
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
				                url:urlhome+"/security/permission_role/delete",
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
				                    Permission_role.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Permission_role.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
