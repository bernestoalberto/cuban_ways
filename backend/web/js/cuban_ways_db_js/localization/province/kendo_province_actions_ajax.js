/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


$("#btn_modal_province").click(function() {
	Province.oldElement=null;
    $('#select2-id_country-container').html('');
    Province.combobox_country.append('<option selected="" value=""></option>').change();
    Province.province_form.data('bootstrapValidator').resetForm(true);
    $('#province_form')[0].reset();
	 $("#title_province").html('Insertar Province');
	 $("#taskprovince").val('insert');
	$('#select2-id_country_combo-container').html('');
    $("#modal_province").modal();
	});

$("#reload_province").click(function() {
	if($('#taskprovince').val()!='update') {
    $('#select2-id_country-container').html('');
    Province.combobox_country.append('<option selected="" value=""></option>').change();
		Province.province_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Province.province_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_province").val(Province.oldElement.id_province);
	 	$("#name_province").val(Province.oldElement.name_province);
	 	Province.combobox_country.append('<option selected="" value="'+Province.oldElement.id_country+'">'+Province.oldElement.name_country+'</option>').change();
	 	Province.combobox_country.val(Province.oldElement.id_country);
	 	$('#id_province').val(Province.oldElement.id_province);
	 	$("#taskprovince").val('update');
		Province.province_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_province").click(function() {
				var list='';
				var filters =  Province.gridDataSource.filter();
				if(filters) {
					var allData = Province.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Province.gridDataSource.data();
				$('#province_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_province").click(function() {
    $('#list_province_pdf').modal();
    $("#tbody_table_province").html('');
    var list='';
    var filters =  Province.gridDataSource.filter();
    if(filters) {
        var allData = Province.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Province.gridDataSource.data();
    list.forEach(Province.list_pdf);
});

$("#export_province_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_province_pdf"))
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
		            $('#list_province_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Province_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_province_importar").click(function() {
	$('#import_province').modal();
});


$("#importar_province_excel").click(function() {
		if(Province.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"localization/province/load_excel";
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
									Province.gridDataSource.read();
									$('#import_province').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_province(e) {

    Province.province_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Province.finditem(e.id);
	 Province.oldElement= dataItem;
	 $('#id_province').val(dataItem.id_province);
	 	$("#id_province").val(Province.oldElement.id_province);
	 	$("#name_province").val(Province.oldElement.name_province);
	 	Province.combobox_country.append('<option selected="" value="'+Province.oldElement.id_country+'">'+Province.oldElement.name_country+'</option>').change();
	 	Province.combobox_country.val(Province.oldElement.id_country);
	 $("#taskprovince").val('update');
	 $("#title_province").html('Actualizar Province');
	 $("#modal_province").modal();
	}


//Boton Accion
$('#btnaction_province').click(function () {
    Province.province_form.data('bootstrapValidator').validate();
        if(Province.province_form.data('bootstrapValidator').isValid())
			{
       		var province={};
       		province.name_province=$("#name_province").val();
       		province.id_country=Province.combobox_country.val();
       		var url=urlhome+"localization/province/create";
        	if($('#taskprovince').val()=="update")
        		{
            		var url=urlhome+"localization/province/update";
            		province.id_province=Province.oldElement.id_province;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Province:province,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskprovince').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El province fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskprovince').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Province.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_province").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_province").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_province(e)
				{
				    var dataItem=Province.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Province?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/localization/province/delete",
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
				                    Province.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Province.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_province').click(function(){
        var checkbox_checked=$('#gridselection_province .check_row:checked');

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
                      var dataItem=Province.finditem($(this).attr('id'));
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
				                url:urlhome+"/localization/province/delete",
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
				                    Province.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Province.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
