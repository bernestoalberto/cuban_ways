/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


$("#btn_modal_season").click(function() {
	Season.oldElement=null;
    Season.season_form.data('bootstrapValidator').resetForm(true);
    $('#season_form')[0].reset();
	 $("#title_season").html('Insertar Season');
	 $("#taskseason").val('insert');
    $("#modal_season").modal();
	});

$("#reload_season").click(function() {
	if($('#taskseason').val()!='update') {
		Season.season_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Season.season_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_season").val(Season.oldElement.id_season);
	 	$("#name_season").val(Season.oldElement.name_season);
	 	$('#id_season').val(Season.oldElement.id_season);
	 	$("#taskseason").val('update');
		Season.season_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_season").click(function() {
				var list='';
				var filters =  Season.gridDataSource.filter();
				if(filters) {
					var allData = Season.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Season.gridDataSource.data();
				$('#season_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_season").click(function() {
    $('#list_season_pdf').modal();
    $("#tbody_table_season").html('');
    var list='';
    var filters =  Season.gridDataSource.filter();
    if(filters) {
        var allData = Season.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Season.gridDataSource.data();
    list.forEach(Season.list_pdf);
});

$("#export_season_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_season_pdf"))
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
		            $('#list_season_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Season_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_season_importar").click(function() {
	$('#import_season').modal();
});


$("#importar_season_excel").click(function() {
		if(Season.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"nomenclature/season/load_excel";
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
									Season.gridDataSource.read();
									$('#import_season').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_season(e) {

    Season.season_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Season.finditem(e.id);
	 Season.oldElement= dataItem;
	 $('#id_season').val(dataItem.id_season);
	 	$("#id_season").val(Season.oldElement.id_season);
	 	$("#name_season").val(Season.oldElement.name_season);
	 $("#taskseason").val('update');
	 $("#title_season").html('Actualizar Season');
	 $("#modal_season").modal();
	}


//Boton Accion
$('#btnaction_season').click(function () {
    Season.season_form.data('bootstrapValidator').validate();
        if(Season.season_form.data('bootstrapValidator').isValid())
			{
       		var season={};
       		season.name_season=$("#name_season").val();
       		var url=urlhome+"nomenclature/season/create";
        	if($('#taskseason').val()=="update")
        		{
            		var url=urlhome+"nomenclature/season/update";
            		season.id_season=Season.oldElement.id_season;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Season:season,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskseason').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El season fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskseason').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Season.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_season").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_season").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_season(e)
				{
				    var dataItem=Season.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Season?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/nomenclature/season/delete",
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
				                    Season.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Season.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_season').click(function(){
        var checkbox_checked=$('#gridselection_season .check_row:checked');

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
                      var dataItem=Season.finditem($(this).attr('id'));
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
				                url:urlhome+"/nomenclature/season/delete",
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
				                    Season.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Season.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
