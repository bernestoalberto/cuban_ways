/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


$("#btn_modal_housing_image").click(function() {
	Housing_image.oldElement=null;
    $('#select2-id_housing-container').html('');
    Housing_image.combobox_housing.append('<option selected="" value=""></option>').change();
    Housing_image.housing_image_form.data('bootstrapValidator').resetForm(true);
    $('#housing_image_form')[0].reset();
	 $("#title_housing_image").html('Insertar Housing_image');
	 $("#taskhousing_image").val('insert');
	$('#select2-id_housing_combo-container').html('');
    $("#modal_housing_image").modal();
	});

$("#reload_housing_image").click(function() {
	if($('#taskhousing_image').val()!='update') {
    $('#select2-id_housing-container').html('');
    Housing_image.combobox_housing.append('<option selected="" value=""></option>').change();
		Housing_image.housing_image_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_image.housing_image_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_image").val(Housing_image.oldElement.id_housing_image);
	 	$("#image").val(Housing_image.oldElement.image);
	 	Housing_image.combobox_housing.append('<option selected="" value="'+Housing_image.oldElement.id_housing+'">'+Housing_image.oldElement.name_housing+'</option>').change();
	 	Housing_image.combobox_housing.val(Housing_image.oldElement.id_housing);
	 	$('#id_housing_image').val(Housing_image.oldElement.id_housing_image);
	 	$("#taskhousing_image").val('update');
		Housing_image.housing_image_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing_image").click(function() {
				var list='';
				var filters =  Housing_image.gridDataSource.filter();
				if(filters) {
					var allData = Housing_image.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_image.gridDataSource.data();
				$('#housing_image_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing_image").click(function() {
    $('#list_housing_image_pdf').modal();
    $("#tbody_table_housing_image").html('');
    var list='';
    var filters =  Housing_image.gridDataSource.filter();
    if(filters) {
        var allData = Housing_image.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_image.gridDataSource.data();
    list.forEach(Housing_image.list_pdf);
});

$("#export_housing_image_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_image_pdf"))
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
		            $('#list_housing_image_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_image_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_image_importar").click(function() {
	$('#import_housing_image').modal();
});


$("#importar_housing_image_excel").click(function() {
		if(Housing_image.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_image/load_excel";
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
									Housing_image.gridDataSource.read();
									$('#import_housing_image').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing_image(e) {

    Housing_image.housing_image_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing_image.finditem(e.id);
	 Housing_image.oldElement= dataItem;
	 $('#id_housing_image').val(dataItem.id_housing_image);
	 	$("#id_housing_image").val(Housing_image.oldElement.id_housing_image);
	 	$("#image").val(Housing_image.oldElement.image);
	 	Housing_image.combobox_housing.append('<option selected="" value="'+Housing_image.oldElement.id_housing+'">'+Housing_image.oldElement.name_housing+'</option>').change();
	 	Housing_image.combobox_housing.val(Housing_image.oldElement.id_housing);
	 $("#taskhousing_image").val('update');
	 $("#title_housing_image").html('Actualizar Housing_image');
	 $("#modal_housing_image").modal();
	}


//Boton Accion
$('#btnaction_housing_image').click(function () {
    Housing_image.housing_image_form.data('bootstrapValidator').validate();
        if(Housing_image.housing_image_form.data('bootstrapValidator').isValid())
			{
       		var housing_image={};
       		housing_image.image=$("#image").val();
       		housing_image.id_housing=Housing_image.combobox_housing.val();
       		var url=urlhome+"housing/housing_image/create";
        	if($('#taskhousing_image').val()=="update")
        		{
            		var url=urlhome+"housing/housing_image/update";
            		housing_image.id_housing_image=Housing_image.oldElement.id_housing_image;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing_image:housing_image,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing_image').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing_image fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing_image').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing_image.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing_image").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing_image").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing_image(e)
				{
				    var dataItem=Housing_image.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_image?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_image/delete",
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
				                    Housing_image.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_image.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_image').click(function(){
        var checkbox_checked=$('#gridselection_housing_image .check_row:checked');

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
                      var dataItem=Housing_image.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_image/delete",
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
				                    Housing_image.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_image.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
