/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


$("#btn_modal_town").click(function() {
	Town.oldElement=null;
    $('#select2-id_province-container').html('');
    Town.combobox_province.append('<option selected="" value=""></option>').change();
    Town.town_form.data('bootstrapValidator').resetForm(true);
    $('#town_form')[0].reset();
	 $("#title_town").html('Insertar Town');
	 $("#tasktown").val('insert');
	$('#select2-id_province_combo-container').html('');
    $("#modal_town").modal();
	});

$("#reload_town").click(function() {
	if($('#tasktown').val()!='update') {
    $('#select2-id_province-container').html('');
    Town.combobox_province.append('<option selected="" value=""></option>').change();
		Town.town_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Town.town_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_town").val(Town.oldElement.id_town);
	 	$("#name_town").val(Town.oldElement.name_town);
	 	Town.combobox_province.append('<option selected="" value="'+Town.oldElement.id_province+'">'+Town.oldElement.name_province+'</option>').change();
	 	Town.combobox_province.val(Town.oldElement.id_province);
	 	$('#id_town').val(Town.oldElement.id_town);
	 	$("#tasktown").val('update');
		Town.town_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_town").click(function() {
				var list='';
				var filters =  Town.gridDataSource.filter();
				if(filters) {
					var allData = Town.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Town.gridDataSource.data();
				$('#town_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_town").click(function() {
    $('#list_town_pdf').modal();
    $("#tbody_table_town").html('');
    var list='';
    var filters =  Town.gridDataSource.filter();
    if(filters) {
        var allData = Town.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Town.gridDataSource.data();
    list.forEach(Town.list_pdf);
});

$("#export_town_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_town_pdf"))
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
		            $('#list_town_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Town_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_town_importar").click(function() {
	$('#import_town').modal();
});


$("#importar_town_excel").click(function() {
		if(Town.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"localization/town/load_excel";
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
									Town.gridDataSource.read();
									$('#import_town').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_town(e) {

    Town.town_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Town.finditem(e.id);
	 Town.oldElement= dataItem;
	 $('#id_town').val(dataItem.id_town);
	 	$("#id_town").val(Town.oldElement.id_town);
	 	$("#name_town").val(Town.oldElement.name_town);
	 	Town.combobox_province.append('<option selected="" value="'+Town.oldElement.id_province+'">'+Town.oldElement.name_province+'</option>').change();
	 	Town.combobox_province.val(Town.oldElement.id_province);
	 $("#tasktown").val('update');
	 $("#title_town").html('Actualizar Town');
	 $("#modal_town").modal();
	}


//Boton Accion
$('#btnaction_town').click(function () {
    Town.town_form.data('bootstrapValidator').validate();
        if(Town.town_form.data('bootstrapValidator').isValid())
			{
       		var town={};
       		town.name_town=$("#name_town").val();
       		town.id_province=Town.combobox_province.val();
       		var url=urlhome+"localization/town/create";
        	if($('#tasktown').val()=="update")
        		{
            		var url=urlhome+"localization/town/update";
            		town.id_town=Town.oldElement.id_town;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Town:town,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#tasktown').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El town fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#tasktown').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Town.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_town").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_town").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_town(e)
				{
				    var dataItem=Town.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Town?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/localization/town/delete",
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
				                    Town.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Town.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_town').click(function(){
        var checkbox_checked=$('#gridselection_town .check_row:checked');

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
                      var dataItem=Town.finditem($(this).attr('id'));
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
				                url:urlhome+"/localization/town/delete",
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
				                    Town.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Town.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
