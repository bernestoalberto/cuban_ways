/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


$("#btn_modal_permission").click(function() {
	Permission.oldElement=null;
    Permission.permission_form.data('bootstrapValidator').resetForm(true);
    $('#permission_form')[0].reset();
	 $("#title_permission").html('Insertar Permission');
	 $("#taskpermission").val('insert');
    $("#modal_permission").modal();
	});

$("#reload_permission").click(function() {
	if($('#taskpermission').val()!='update') {
		Permission.permission_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Permission.permission_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_permission").val(Permission.oldElement.id_permission);
	 	$("#name_permission").val(Permission.oldElement.name_permission);
	 	$("#url").val(Permission.oldElement.url);
	 	$('#id_permission').val(Permission.oldElement.id_permission);
	 	$("#taskpermission").val('update');
		Permission.permission_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_permission").click(function() {
				var list='';
				var filters =  Permission.gridDataSource.filter();
				if(filters) {
					var allData = Permission.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Permission.gridDataSource.data();
				$('#permission_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_permission").click(function() {
    $('#list_permission_pdf').modal();
    $("#tbody_table_permission").html('');
    var list='';
    var filters =  Permission.gridDataSource.filter();
    if(filters) {
        var allData = Permission.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Permission.gridDataSource.data();
    list.forEach(Permission.list_pdf);
});

$("#export_permission_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_permission_pdf"))
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
		            $('#list_permission_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Permission_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_permission_importar").click(function() {
	$('#import_permission').modal();
});


$("#importar_permission_excel").click(function() {
		if(Permission.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"security/permission/load_excel";
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
									Permission.gridDataSource.read();
									$('#import_permission').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_permission(e) {

    Permission.permission_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Permission.finditem(e.id);
	 Permission.oldElement= dataItem;
	 $('#id_permission').val(dataItem.id_permission);
	 	$("#id_permission").val(Permission.oldElement.id_permission);
	 	$("#name_permission").val(Permission.oldElement.name_permission);
	 	$("#url").val(Permission.oldElement.url);
	 $("#taskpermission").val('update');
	 $("#title_permission").html('Actualizar Permission');
	 $("#modal_permission").modal();
	}


//Boton Accion
$('#btnaction_permission').click(function () {
    Permission.permission_form.data('bootstrapValidator').validate();
        if(Permission.permission_form.data('bootstrapValidator').isValid())
			{
       		var permission={};
       		permission.name_permission=$("#name_permission").val();
       		permission.url=$("#url").val();
       		var url=urlhome+"security/permission/create";
        	if($('#taskpermission').val()=="update")
        		{
            		var url=urlhome+"security/permission/update";
            		permission.id_permission=Permission.oldElement.id_permission;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Permission:permission,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskpermission').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El permission fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskpermission').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Permission.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_permission").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_permission").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_permission(e)
				{
				    var dataItem=Permission.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Permission?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/permission/delete",
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
				                    Permission.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Permission.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_permission').click(function(){
        var checkbox_checked=$('#gridselection_permission .check_row:checked');

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
                      var dataItem=Permission.finditem($(this).attr('id'));
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
				                url:urlhome+"/security/permission/delete",
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
				                    Permission.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Permission.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
