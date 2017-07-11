/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/



$("#reload_owner").click(function() {
	if($('#taskowner').val()!='update') {
		Owner.owner_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Owner.owner_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_owner").val(Owner.oldElement.id_owner);
	 	$("#name_owner").val(Owner.oldElement.name_owner);
	 	$("#lastname_owner").val(Owner.oldElement.lastname_owner);
	 	$("#datebirth").val(Owner.oldElement.datebirth);
	 	$("#email").val(Owner.oldElement.email);
	 	$("#phone").val(Owner.oldElement.phone);
	 	$("#createdat").val(Owner.oldElement.createdat);
	 	$("#identification").val(Owner.oldElement.identification);
	 	$("#name_owner_incharge").val(Owner.oldElement.name_owner_incharge);
	 	$("#lastname_owner_incharge").val(Owner.oldElement.lastname_owner_incharge);
	 	$("#bank_account").val(Owner.oldElement.bank_account);
	 	$("#photo").val(Owner.oldElement.photo);
	 	$('#id_owner').val(Owner.oldElement.id_owner);
	 	$("#taskowner").val('update');
		Owner.owner_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_owner").click(function() {
    $('#list_owner_pdf').modal();
    $("#tbody_table_owner").html('');
    var list='';
    var filters =  Owner.gridDataSource.filter();
    if(filters) {
        var allData = Owner.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Owner.gridDataSource.data();
    list.forEach(Owner.list_pdf);
});

	$("#excel_owner").click(function() {
				var list='';
				var filters =  Owner.gridDataSource.filter();
				if(filters) {
					var allData = Owner.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Owner.gridDataSource.data();
				$('#owner_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_owner_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_owner_pdf"))
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
		            $('#list_owner_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Owner_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_owner_importar").click(function() {
	$('#import_owner').modal();
});


$("#importar_owner_excel").click(function() {
		if(Owner.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/owner/load_excel";
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
									Owner.gridDataSource.read();
									$('#import_owner').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_owner').click(function () {
    var c = this.checked;
    $('#gridselection_owner :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_owner(e)
				{
				    var dataItem=Owner.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Owner?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/owner/delete",
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
				                    Owner.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Owner.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_owner').click(function(){
        var checkbox_checked=$('#gridselection_owner .check_row:checked');

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
                      var dataItem=Owner.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/owner/delete",
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
				                    Owner.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Owner.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
