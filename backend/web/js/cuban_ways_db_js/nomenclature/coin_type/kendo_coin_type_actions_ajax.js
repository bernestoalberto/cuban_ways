/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


$("#btn_modal_coin_type").click(function() {
	Coin_type.oldElement=null;
    Coin_type.coin_type_form.data('bootstrapValidator').resetForm(true);
    $('#coin_type_form')[0].reset();
	 $("#title_coin_type").html('Insertar Coin_type');
	 $("#taskcoin_type").val('insert');
    $("#modal_coin_type").modal();
	});

$("#reload_coin_type").click(function() {
	if($('#taskcoin_type').val()!='update') {
		Coin_type.coin_type_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Coin_type.coin_type_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_coin_type").val(Coin_type.oldElement.id_coin_type);
	 	$("#name_coin").val(Coin_type.oldElement.name_coin);
	 	$("#abbrv_coin").val(Coin_type.oldElement.abbrv_coin);
	 	$('#id_coin_type').val(Coin_type.oldElement.id_coin_type);
	 	$("#taskcoin_type").val('update');
		Coin_type.coin_type_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_coin_type").click(function() {
				var list='';
				var filters =  Coin_type.gridDataSource.filter();
				if(filters) {
					var allData = Coin_type.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Coin_type.gridDataSource.data();
				$('#coin_type_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_coin_type").click(function() {
    $('#list_coin_type_pdf').modal();
    $("#tbody_table_coin_type").html('');
    var list='';
    var filters =  Coin_type.gridDataSource.filter();
    if(filters) {
        var allData = Coin_type.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Coin_type.gridDataSource.data();
    list.forEach(Coin_type.list_pdf);
});

$("#export_coin_type_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_coin_type_pdf"))
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
		            $('#list_coin_type_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Coin_type_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_coin_type_importar").click(function() {
	$('#import_coin_type').modal();
});


$("#importar_coin_type_excel").click(function() {
		if(Coin_type.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"nomenclature/coin_type/load_excel";
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
									Coin_type.gridDataSource.read();
									$('#import_coin_type').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_coin_type(e) {

    Coin_type.coin_type_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Coin_type.finditem(e.id);
	 Coin_type.oldElement= dataItem;
	 $('#id_coin_type').val(dataItem.id_coin_type);
	 	$("#id_coin_type").val(Coin_type.oldElement.id_coin_type);
	 	$("#name_coin").val(Coin_type.oldElement.name_coin);
	 	$("#abbrv_coin").val(Coin_type.oldElement.abbrv_coin);
	 $("#taskcoin_type").val('update');
	 $("#title_coin_type").html('Actualizar Coin_type');
	 $("#modal_coin_type").modal();
	}


//Boton Accion
$('#btnaction_coin_type').click(function () {
    Coin_type.coin_type_form.data('bootstrapValidator').validate();
        if(Coin_type.coin_type_form.data('bootstrapValidator').isValid())
			{
       		var coin_type={};
       		coin_type.name_coin=$("#name_coin").val();
       		coin_type.abbrv_coin=$("#abbrv_coin").val();
       		var url=urlhome+"nomenclature/coin_type/create";
        	if($('#taskcoin_type').val()=="update")
        		{
            		var url=urlhome+"nomenclature/coin_type/update";
            		coin_type.id_coin_type=Coin_type.oldElement.id_coin_type;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Coin_type:coin_type,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskcoin_type').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El coin_type fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskcoin_type').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Coin_type.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_coin_type").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_coin_type").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_coin_type(e)
				{
				    var dataItem=Coin_type.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Coin_type?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/nomenclature/coin_type/delete",
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
				                    Coin_type.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Coin_type.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_coin_type').click(function(){
        var checkbox_checked=$('#gridselection_coin_type .check_row:checked');

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
                      var dataItem=Coin_type.finditem($(this).attr('id'));
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
				                url:urlhome+"/nomenclature/coin_type/delete",
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
				                    Coin_type.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Coin_type.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
