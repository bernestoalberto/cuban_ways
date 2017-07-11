/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/



$("#reload_usuario").click(function() {
	if($('#taskusuario').val()!='update') {
   $('#select2-id_role-container').html('');
    Usuario.combobox_role.append('<option selected="" value=""></option>').change();
		Usuario.usuario_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Usuario.usuario_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_usuario").val(Usuario.oldElement.id_usuario);
	 	$("#username").val(Usuario.oldElement.username);
	 	$("#pass").val(Usuario.oldElement.pass);
	 	$("#word_pass").val(Usuario.oldElement.word_pass);
	 	$("#email").val(Usuario.oldElement.email);
	 	$("#foto").val(Usuario.oldElement.foto);
	 	$("#auth_key").val(Usuario.oldElement.auth_key);
	 	$("#active").val(Usuario.oldElement.active);
	 	$("#created_at").val(Usuario.oldElement.created_at);
	 	$("#updated_at").val(Usuario.oldElement.updated_at);
	 	$("#type_user").val(Usuario.oldElement.type_user);
	 	$("#state").val(Usuario.oldElement.state);
	 	Usuario.combobox_role.append('<option selected="" value="'+Usuario.oldElement.id_role+'">'+Usuario.oldElement.name_role+'</option>').change();
	 	Usuario.combobox_role.val(Usuario.oldElement.id_role);
	 	$('#id_usuario').val(Usuario.oldElement.id_usuario);
	 	$("#taskusuario").val('update');
		Usuario.usuario_form.data('bootstrapValidator').validate();
	}
});

$("#foto").change(function () {
	var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
	if (regex.test($(this).val().toLowerCase())) {
		if (false) {
			$("#image_user")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
		}
		else {
			if ($(this)[0].files[0].size / 1048576 <= 2.097152) {

				if (typeof (FileReader) != "undefined") {
					var reader = new FileReader();
					reader.onload = function (e) {
						$("#image_user").attr("src", e.target.result);
					}
					reader.readAsDataURL($(this)[0].files[0]);
				} else {
					alert("This browser does not support FileReader.");
				}

			}
		}
	}
});

$("#pdf_usuario").click(function() {
    $('#list_usuario_pdf').modal();
    $("#tbody_table_usuario").html('');
    var list='';
    var filters =  Usuario.gridDataSource.filter();
    if(filters) {
        var allData = Usuario.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Usuario.gridDataSource.data();
    list.forEach(Usuario.list_pdf);
});

	$("#excel_usuario").click(function() {
				var list='';
				var filters =  Usuario.gridDataSource.filter();
				if(filters) {
					var allData = Usuario.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Usuario.gridDataSource.data();
				$('#usuario_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_usuario_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_usuario_pdf"))
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
		            $('#list_usuario_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Usuario_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_usuario_importar").click(function() {
	$('#import_usuario').modal();
});


$("#importar_usuario_excel").click(function() {
		if(Usuario.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"security/usuario/load_excel";
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
									Usuario.gridDataSource.read();
									$('#import_usuario').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_usuario').click(function () {
    var c = this.checked;
    $('#gridselection_usuario :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_usuario(e)
				{
				    var dataItem=Usuario.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Usuario?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/security/usuario/delete",
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
				                    Usuario.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Usuario.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_usuario').click(function(){
        var checkbox_checked=$('#gridselection_usuario .check_row:checked');

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
                      var dataItem=Usuario.finditem($(this).attr('id'));
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
				                url:urlhome+"/security/usuario/delete",
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
				                    Usuario.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Usuario.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
