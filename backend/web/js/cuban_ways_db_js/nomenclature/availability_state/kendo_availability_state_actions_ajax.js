/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


$("#btn_modal_availability_state").click(function() {
	Availability_state.oldElement=null;
    Availability_state.availability_state_form.data('bootstrapValidator').resetForm(true);
    $('#availability_state_form')[0].reset();
	 $("#title_availability_state").html('Insertar Availability_state');
	 $("#taskavailability_state").val('insert');
    $("#modal_availability_state").modal();
	});

$("#reload_availability_state").click(function() {
	if($('#taskavailability_state').val()!='update') {
		Availability_state.availability_state_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Availability_state.availability_state_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_availability_state").val(Availability_state.oldElement.id_availability_state);
	 	$("#availability_state").val(Availability_state.oldElement.availability_state);
	 	$('#id_availability_state').val(Availability_state.oldElement.id_availability_state);
	 	$("#taskavailability_state").val('update');
		Availability_state.availability_state_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_availability_state").click(function() {
				var list='';
				var filters =  Availability_state.gridDataSource.filter();
				if(filters) {
					var allData = Availability_state.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Availability_state.gridDataSource.data();
				$('#availability_state_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_availability_state").click(function() {
    $('#list_availability_state_pdf').modal();
    $("#tbody_table_availability_state").html('');
    var list='';
    var filters =  Availability_state.gridDataSource.filter();
    if(filters) {
        var allData = Availability_state.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Availability_state.gridDataSource.data();
    list.forEach(Availability_state.list_pdf);
});

$("#export_availability_state_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_availability_state_pdf"))
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
		            $('#list_availability_state_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Availability_state_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_availability_state_importar").click(function() {
	$('#import_availability_state').modal();
});


$("#importar_availability_state_excel").click(function() {
		if(Availability_state.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"nomenclature/availability_state/load_excel";
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
									Availability_state.gridDataSource.read();
									$('#import_availability_state').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_availability_state(e) {

    Availability_state.availability_state_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Availability_state.finditem(e.id);
	 Availability_state.oldElement= dataItem;
	 $('#id_availability_state').val(dataItem.id_availability_state);
	 	$("#id_availability_state").val(Availability_state.oldElement.id_availability_state);
	 	$("#availability_state").val(Availability_state.oldElement.availability_state);
	 $("#taskavailability_state").val('update');
	 $("#title_availability_state").html('Actualizar Availability_state');
	 $("#modal_availability_state").modal();
	}


//Boton Accion
$('#btnaction_availability_state').click(function () {
    Availability_state.availability_state_form.data('bootstrapValidator').validate();
        if(Availability_state.availability_state_form.data('bootstrapValidator').isValid())
			{
       		var availability_state={};
       		availability_state.availability_state=$("#availability_state").val();
       		var url=urlhome+"nomenclature/availability_state/create";
        	if($('#taskavailability_state').val()=="update")
        		{
            		var url=urlhome+"nomenclature/availability_state/update";
            		availability_state.id_availability_state=Availability_state.oldElement.id_availability_state;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Availability_state:availability_state,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskavailability_state').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El availability_state fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskavailability_state').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Availability_state.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_availability_state").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_availability_state").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_availability_state(e)
				{
				    var dataItem=Availability_state.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Availability_state?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/nomenclature/availability_state/delete",
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
				                    Availability_state.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Availability_state.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_availability_state').click(function(){
        var checkbox_checked=$('#gridselection_availability_state .check_row:checked');

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
                      var dataItem=Availability_state.finditem($(this).attr('id'));
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
				                url:urlhome+"/nomenclature/availability_state/delete",
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
				                    Availability_state.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Availability_state.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
