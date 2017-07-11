/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/



$("#reload_country").click(function() {
	if($('#taskcountry').val()!='update') {
    $('#select2-id_continent-container').html('');
    Country.combobox_continent.append('<option selected="" value=""></option>').change();
		Country.country_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Country.country_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_country").val(Country.oldElement.id_country);
	 	$("#name_country").val(Country.oldElement.name_country);
	 	$("#ie_code_country").val(Country.oldElement.ie_code_country);
	 	$("#code_country").val(Country.oldElement.code_country);
	 	$("#prefix").val(Country.oldElement.prefix);
	 	$("#subcontinent").val(Country.oldElement.subcontinent);
	 	$("#iso_money").val(Country.oldElement.iso_money);
	 	$("#money_name").val(Country.oldElement.money_name);
	 	Country.combobox_continent.append('<option selected="" value="'+Country.oldElement.id_continent+'">'+Country.oldElement.name_continent+'</option>').change();
	 	Country.combobox_continent.val(Country.oldElement.id_continent);
	 	$('#id_country').val(Country.oldElement.id_country);
	 	$("#taskcountry").val('update');
		Country.country_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_country").click(function() {
    $('#list_country_pdf').modal();
    $("#tbody_table_country").html('');
    var list='';
    var filters =  Country.gridDataSource.filter();
    if(filters) {
        var allData = Country.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Country.gridDataSource.data();
    list.forEach(Country.list_pdf);
});

	$("#excel_country").click(function() {
				var list='';
				var filters =  Country.gridDataSource.filter();
				if(filters) {
					var allData = Country.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Country.gridDataSource.data();
				$('#country_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_country_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_country_pdf"))
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
		            $('#list_country_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Country_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_country_importar").click(function() {
	$('#import_country').modal();
});


$("#importar_country_excel").click(function() {
		if(Country.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"localization/country/load_excel";
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
									Country.gridDataSource.read();
									$('#import_country').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_country').click(function () {
    var c = this.checked;
    $('#gridselection_country :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_country(e)
				{
				    var dataItem=Country.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Country?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/localization/country/delete",
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
				                    Country.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Country.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_country').click(function(){
        var checkbox_checked=$('#gridselection_country .check_row:checked');

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
                      var dataItem=Country.finditem($(this).attr('id'));
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
				                url:urlhome+"/localization/country/delete",
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
				                    Country.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Country.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
