/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:48 GMT-05:00 2016*/



$("#reload_owner_user").click(function() {
	if($('#taskowner_user').val()!='update') {
    $('#select2-id_owner-container').html('');
    Owner_user.combobox_owner.append('<option selected="" value=""></option>').change();
    $('#select2-id_usuario-container').html('');
    Owner_user.combobox_usuario.append('<option selected="" value=""></option>').change();
		Owner_user.owner_user_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Owner_user.owner_user_form.data('bootstrapValidator').resetForm(true);
	 	Owner_user.combobox_owner.append('<option selected="" value="'+Owner_user.oldElement.id_owner+'">'+Owner_user.oldElement.name_owner+'</option>').change();
	 	Owner_user.combobox_owner.val(Owner_user.oldElement.id_owner);
	 	Owner_user.combobox_usuario.append('<option selected="" value="'+Owner_user.oldElement.id_usuario+'">'+Owner_user.oldElement.username+'</option>').change();
	 	Owner_user.combobox_usuario.val(Owner_user.oldElement.id_usuario);
	 	$('#id_owner').val(Owner_user.oldElement.id_owner);
	 	$('#id_usuario').val(Owner_user.oldElement.id_usuario);
	 	$("#taskowner_user").val('update');
		Owner_user.owner_user_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_owner_user").click(function() {
    $('#list_owner_user_pdf').modal();
    $("#tbody_table_owner_user").html('');
    var list='';
    var filters =  Owner_user.gridDataSource.filter();
    if(filters) {
        var allData = Owner_user.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Owner_user.gridDataSource.data();
    list.forEach(Owner_user.list_pdf);
});

	$("#excel_owner_user").click(function() {
				var list='';
				var filters =  Owner_user.gridDataSource.filter();
				if(filters) {
					var allData = Owner_user.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Owner_user.gridDataSource.data();
				$('#owner_user_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_owner_user_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_owner_user_pdf"))
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
		            $('#list_owner_user_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Owner_user_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_owner_user_importar").click(function() {
	$('#import_owner_user').modal();
});


$("#importar_owner_user_excel").click(function() {
		if(Owner_user.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"security/owner_user/load_excel";
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
									Owner_user.gridDataSource.read();
									$('#import_owner_user').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_owner_user').click(function () {
    var c = this.checked;
    $('#gridselection_owner_user :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_owner_user(e)
				{
				    var dataItem=Owner_user.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Owner_user?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/owner_user/delete",
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
				                    Owner_user.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Owner_user.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_owner_user').click(function(){
        var checkbox_checked=$('#gridselection_owner_user .check_row:checked');

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
                      var dataItem=Owner_user.finditem($(this).attr('id'));
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
				                url:urlhome+"/security/owner_user/delete",
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
				                    Owner_user.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Owner_user.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
