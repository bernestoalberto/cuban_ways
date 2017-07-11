/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


$("#btn_modal_slip_for_rent").click(function() {
	Slip_for_rent.oldElement=null;
    $('#select2-id_housing-container').html('');
    Slip_for_rent.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_usuario-container').html('');
    Slip_for_rent.combobox_usuario.append('<option selected="" value=""></option>').change();
    Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').resetForm(true);
    $('#slip_for_rent_form')[0].reset();
	 $("#title_slip_for_rent").html('Insertar Slip_for_rent');
	 $("#taskslip_for_rent").val('insert');
	$('#select2-id_housing_combo-container').html('');
	$('#select2-id_usuario_combo-container').html('');
    $("#modal_slip_for_rent").modal();
	});

$("#reload_slip_for_rent").click(function() {
	if($('#taskslip_for_rent').val()!='update') {
    $('#select2-id_housing-container').html('');
    Slip_for_rent.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_usuario-container').html('');
    Slip_for_rent.combobox_usuario.append('<option selected="" value=""></option>').change();
		Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_slip_for_rent").val(Slip_for_rent.oldElement.id_slip_for_rent);
	 	$("#code_slip_for_rent").val(Slip_for_rent.oldElement.code_slip_for_rent);
	 	$("#description_slip_for_rent").val(Slip_for_rent.oldElement.description_slip_for_rent);
	 	$("#createdat").val(Slip_for_rent.oldElement.createdat);
	 	Slip_for_rent.combobox_housing.append('<option selected="" value="'+Slip_for_rent.oldElement.id_housing+'">'+Slip_for_rent.oldElement.name_housing+'</option>').change();
	 	Slip_for_rent.combobox_housing.val(Slip_for_rent.oldElement.id_housing);
	 	Slip_for_rent.combobox_usuario.append('<option selected="" value="'+Slip_for_rent.oldElement.id_usuario+'">'+Slip_for_rent.oldElement.username+'</option>').change();
	 	Slip_for_rent.combobox_usuario.val(Slip_for_rent.oldElement.id_usuario);
	 	$('#id_slip_for_rent').val(Slip_for_rent.oldElement.id_slip_for_rent);
	 	$("#taskslip_for_rent").val('update');
		Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_slip_for_rent").click(function() {
				var list='';
				var filters =  Slip_for_rent.gridDataSource.filter();
				if(filters) {
					var allData = Slip_for_rent.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Slip_for_rent.gridDataSource.data();
				$('#slip_for_rent_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_slip_for_rent").click(function() {
    $('#list_slip_for_rent_pdf').modal();
    $("#tbody_table_slip_for_rent").html('');
    var list='';
    var filters =  Slip_for_rent.gridDataSource.filter();
    if(filters) {
        var allData = Slip_for_rent.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Slip_for_rent.gridDataSource.data();
    list.forEach(Slip_for_rent.list_pdf);
});

$("#export_slip_for_rent_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_slip_for_rent_pdf"))
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
		            $('#list_slip_for_rent_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Slip_for_rent_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_slip_for_rent_importar").click(function() {
	$('#import_slip_for_rent').modal();
});


$("#importar_slip_for_rent_excel").click(function() {
		if(Slip_for_rent.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/slip_for_rent/load_excel";
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
									Slip_for_rent.gridDataSource.read();
									$('#import_slip_for_rent').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_slip_for_rent(e) {

    Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Slip_for_rent.finditem(e.id);
	 Slip_for_rent.oldElement= dataItem;
	 $('#id_slip_for_rent').val(dataItem.id_slip_for_rent);
	 	$("#id_slip_for_rent").val(Slip_for_rent.oldElement.id_slip_for_rent);
	 	$("#code_slip_for_rent").val(Slip_for_rent.oldElement.code_slip_for_rent);
	 	$("#description_slip_for_rent").val(Slip_for_rent.oldElement.description_slip_for_rent);
	 	$("#createdat").val(Slip_for_rent.oldElement.createdat);
	 	Slip_for_rent.combobox_housing.append('<option selected="" value="'+Slip_for_rent.oldElement.id_housing+'">'+Slip_for_rent.oldElement.name_housing+'</option>').change();
	 	Slip_for_rent.combobox_housing.val(Slip_for_rent.oldElement.id_housing);
	 	Slip_for_rent.combobox_usuario.append('<option selected="" value="'+Slip_for_rent.oldElement.id_usuario+'">'+Slip_for_rent.oldElement.username+'</option>').change();
	 	Slip_for_rent.combobox_usuario.val(Slip_for_rent.oldElement.id_usuario);
	 $("#taskslip_for_rent").val('update');
	 $("#title_slip_for_rent").html('Actualizar Slip_for_rent');
	 $("#modal_slip_for_rent").modal();
	}


//Boton Accion
$('#btnaction_slip_for_rent').click(function () {
    Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').validate();
        if(Slip_for_rent.slip_for_rent_form.data('bootstrapValidator').isValid())
			{
       		var slip_for_rent={};
       		slip_for_rent.code_slip_for_rent=$("#code_slip_for_rent").val();
       		slip_for_rent.description_slip_for_rent=$("#description_slip_for_rent").val();
       		slip_for_rent.createdat=$("#createdat").val();
       		slip_for_rent.id_housing=Slip_for_rent.combobox_housing.val();
       		slip_for_rent.id_usuario=Slip_for_rent.combobox_usuario.val();
       		var url=urlhome+"housing/slip_for_rent/create";
        	if($('#taskslip_for_rent').val()=="update")
        		{
            		var url=urlhome+"housing/slip_for_rent/update";
            		slip_for_rent.id_slip_for_rent=Slip_for_rent.oldElement.id_slip_for_rent;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Slip_for_rent:slip_for_rent,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskslip_for_rent').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El slip_for_rent fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskslip_for_rent').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Slip_for_rent.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_slip_for_rent").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_slip_for_rent").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_slip_for_rent(e)
				{
				    var dataItem=Slip_for_rent.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Slip_for_rent?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/slip_for_rent/delete",
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
				                    Slip_for_rent.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Slip_for_rent.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_slip_for_rent').click(function(){
        var checkbox_checked=$('#gridselection_slip_for_rent .check_row:checked');

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
                      var dataItem=Slip_for_rent.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/slip_for_rent/delete",
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
				                    Slip_for_rent.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Slip_for_rent.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
