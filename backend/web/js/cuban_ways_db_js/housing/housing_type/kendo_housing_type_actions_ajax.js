/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


$("#btn_modal_housing_type").click(function() {
	Housing_type.oldElement=null;
    Housing_type.housing_type_form.data('bootstrapValidator').resetForm(true);
    $('#housing_type_form')[0].reset();
	 $("#title_housing_type").html('Insertar Housing_type');
	 $("#taskhousing_type").val('insert');
    $("#modal_housing_type").modal();
	});

$("#reload_housing_type").click(function() {
	if($('#taskhousing_type').val()!='update') {
		Housing_type.housing_type_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_type.housing_type_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_type").val(Housing_type.oldElement.id_housing_type);
	 	$("#name_housing_type").val(Housing_type.oldElement.name_housing_type);
	 	$('#id_housing_type').val(Housing_type.oldElement.id_housing_type);
	 	$("#taskhousing_type").val('update');
		Housing_type.housing_type_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing_type").click(function() {
				var list='';
				var filters =  Housing_type.gridDataSource.filter();
				if(filters) {
					var allData = Housing_type.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_type.gridDataSource.data();
				$('#housing_type_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing_type").click(function() {
    $('#list_housing_type_pdf').modal();
    $("#tbody_table_housing_type").html('');
    var list='';
    var filters =  Housing_type.gridDataSource.filter();
    if(filters) {
        var allData = Housing_type.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_type.gridDataSource.data();
    list.forEach(Housing_type.list_pdf);
});

$("#export_housing_type_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_type_pdf"))
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
		            $('#list_housing_type_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_type_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_type_importar").click(function() {
	$('#import_housing_type').modal();
});


$("#importar_housing_type_excel").click(function() {
		if(Housing_type.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_type/load_excel";
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
									Housing_type.gridDataSource.read();
									$('#import_housing_type').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing_type(e) {

    Housing_type.housing_type_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing_type.finditem(e.id);
	 Housing_type.oldElement= dataItem;
	 $('#id_housing_type').val(dataItem.id_housing_type);
	 	$("#id_housing_type").val(Housing_type.oldElement.id_housing_type);
	 	$("#name_housing_type").val(Housing_type.oldElement.name_housing_type);
	 $("#taskhousing_type").val('update');
	 $("#title_housing_type").html('Actualizar Housing_type');
	 $("#modal_housing_type").modal();
	}


//Boton Accion
$('#btnaction_housing_type').click(function () {
    Housing_type.housing_type_form.data('bootstrapValidator').validate();
        if(Housing_type.housing_type_form.data('bootstrapValidator').isValid())
			{
       		var housing_type={};
       		housing_type.name_housing_type=$("#name_housing_type").val();
       		var url=urlhome+"housing/housing_type/create";
        	if($('#taskhousing_type').val()=="update")
        		{
            		var url=urlhome+"housing/housing_type/update";
            		housing_type.id_housing_type=Housing_type.oldElement.id_housing_type;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing_type:housing_type,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing_type').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing_type fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing_type').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing_type.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing_type").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing_type").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing_type(e)
				{
				    var dataItem=Housing_type.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_type?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_type/delete",
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
				                    Housing_type.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_type.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_type').click(function(){
        var checkbox_checked=$('#gridselection_housing_type .check_row:checked');

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
                      var dataItem=Housing_type.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_type/delete",
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
				                    Housing_type.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_type.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
