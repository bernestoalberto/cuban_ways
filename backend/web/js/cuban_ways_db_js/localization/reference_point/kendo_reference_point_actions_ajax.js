/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:22 GMT-05:00 2016*/


$("#btn_modal_reference_point").click(function() {
	Reference_point.oldElement=null;
    Reference_point.reference_point_form.data('bootstrapValidator').resetForm(true);
    $('#reference_point_form')[0].reset();
	 $("#title_reference_point").html('Insertar Reference_point');
	 $("#taskreference_point").val('insert');
    $("#modal_reference_point").modal();
	});

$("#reload_reference_point").click(function() {
	if($('#taskreference_point').val()!='update') {
		Reference_point.reference_point_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Reference_point.reference_point_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_reference_point").val(Reference_point.oldElement.id_reference_point);
	 	$("#name_reference_point").val(Reference_point.oldElement.name_reference_point);
	 	$("#latitude").val(Reference_point.oldElement.latitude);
	 	$("#length").val(Reference_point.oldElement.length);
	 	$("#image").val(Reference_point.oldElement.image);
	 	$('#id_reference_point').val(Reference_point.oldElement.id_reference_point);
	 	$("#taskreference_point").val('update');
		Reference_point.reference_point_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_reference_point").click(function() {
				var list='';
				var filters =  Reference_point.gridDataSource.filter();
				if(filters) {
					var allData = Reference_point.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Reference_point.gridDataSource.data();
				$('#reference_point_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_reference_point").click(function() {
    $('#list_reference_point_pdf').modal();
    $("#tbody_table_reference_point").html('');
    var list='';
    var filters =  Reference_point.gridDataSource.filter();
    if(filters) {
        var allData = Reference_point.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Reference_point.gridDataSource.data();
    list.forEach(Reference_point.list_pdf);
});

$("#export_reference_point_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_reference_point_pdf"))
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
		            $('#list_reference_point_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Reference_point_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_reference_point_importar").click(function() {
	$('#import_reference_point').modal();
});


$("#importar_reference_point_excel").click(function() {
		if(Reference_point.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"localization/reference_point/load_excel";
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
									Reference_point.gridDataSource.read();
									$('#import_reference_point').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_reference_point(e) {

    Reference_point.reference_point_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Reference_point.finditem(e.id);
	 Reference_point.oldElement= dataItem;
	 $('#id_reference_point').val(dataItem.id_reference_point);
	 	$("#id_reference_point").val(Reference_point.oldElement.id_reference_point);
	 	$("#name_reference_point").val(Reference_point.oldElement.name_reference_point);
	 	$("#latitude").val(Reference_point.oldElement.latitude);
	 	$("#length").val(Reference_point.oldElement.length);
	 	$("#image").val(Reference_point.oldElement.image);
	 $("#taskreference_point").val('update');
	 $("#title_reference_point").html('Actualizar Reference_point');
	 $("#modal_reference_point").modal();
	}


//Boton Accion
$('#btnaction_reference_point').click(function () {
    Reference_point.reference_point_form.data('bootstrapValidator').validate();
        if(Reference_point.reference_point_form.data('bootstrapValidator').isValid())
			{
       		var reference_point={};
       		reference_point.name_reference_point=$("#name_reference_point").val();
       		reference_point.latitude=$("#latitude").val();
       		reference_point.length=$("#length").val();
       		reference_point.image=$("#image").val();
       		var url=urlhome+"localization/reference_point/create";
        	if($('#taskreference_point').val()=="update")
        		{
            		var url=urlhome+"localization/reference_point/update";
            		reference_point.id_reference_point=Reference_point.oldElement.id_reference_point;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Reference_point:reference_point,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskreference_point').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El reference_point fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskreference_point').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Reference_point.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_reference_point").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_reference_point").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_reference_point(e)
				{
				    var dataItem=Reference_point.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Reference_point?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/localization/reference_point/delete",
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
				                    Reference_point.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Reference_point.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_reference_point').click(function(){
        var checkbox_checked=$('#gridselection_reference_point .check_row:checked');

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
                      var dataItem=Reference_point.finditem($(this).attr('id'));
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
				                url:urlhome+"/localization/reference_point/delete",
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
				                    Reference_point.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Reference_point.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
