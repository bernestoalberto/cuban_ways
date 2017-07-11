/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/



$("#reload_housing_season_price").click(function() {
	if($('#taskhousing_season_price').val()!='update') {
    $('#select2-id_coin_type-container').html('');
    Housing_season_price.combobox_coin_type.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing-container').html('');
    Housing_season_price.combobox_housing.append('<option selected="" value=""></option>').change();
    $('#select2-id_season-container').html('');
    Housing_season_price.combobox_season.append('<option selected="" value=""></option>').change();
		Housing_season_price.housing_season_price_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing_season_price.housing_season_price_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing_season_price").val(Housing_season_price.oldElement.id_housing_season_price);
	 	$("#price_housing_season").val(Housing_season_price.oldElement.price_housing_season);
	 	$("#comition").val(Housing_season_price.oldElement.comition);
	 	$("#cretedat").val(Housing_season_price.oldElement.cretedat);
	 	$("#comition_for_publicitiy").val(Housing_season_price.oldElement.comition_for_publicitiy);
	 	$("#date_start_publicity").val(Housing_season_price.oldElement.date_start_publicity);
	 	$("#date_end_publicity").val(Housing_season_price.oldElement.date_end_publicity);
	 	$("#booking_deposit").val(Housing_season_price.oldElement.booking_deposit);
	 	$("#date_start").val(Housing_season_price.oldElement.date_start);
	 	$("#date_end").val(Housing_season_price.oldElement.date_end);
	 	Housing_season_price.combobox_coin_type.append('<option selected="" value="'+Housing_season_price.oldElement.id_coin_type+'">'+Housing_season_price.oldElement.name_coin+'</option>').change();
	 	Housing_season_price.combobox_coin_type.val(Housing_season_price.oldElement.id_coin_type);
	 	Housing_season_price.combobox_housing.append('<option selected="" value="'+Housing_season_price.oldElement.id_housing+'">'+Housing_season_price.oldElement.name_housing+'</option>').change();
	 	Housing_season_price.combobox_housing.val(Housing_season_price.oldElement.id_housing);
	 	Housing_season_price.combobox_season.append('<option selected="" value="'+Housing_season_price.oldElement.id_season+'">'+Housing_season_price.oldElement.name_season+'</option>').change();
	 	Housing_season_price.combobox_season.val(Housing_season_price.oldElement.id_season);
	 	$('#id_housing_season_price').val(Housing_season_price.oldElement.id_housing_season_price);
	 	$("#taskhousing_season_price").val('update');
		Housing_season_price.housing_season_price_form.data('bootstrapValidator').validate();
	}
});

$("#pdf_housing_season_price").click(function() {
    $('#list_housing_season_price_pdf').modal();
    $("#tbody_table_housing_season_price").html('');
    var list='';
    var filters =  Housing_season_price.gridDataSource.filter();
    if(filters) {
        var allData = Housing_season_price.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing_season_price.gridDataSource.data();
    list.forEach(Housing_season_price.list_pdf);
});

	$("#excel_housing_season_price").click(function() {
				var list='';
				var filters =  Housing_season_price.gridDataSource.filter();
				if(filters) {
					var allData = Housing_season_price.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing_season_price.gridDataSource.data();
				$('#housing_season_price_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#export_housing_season_price_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_season_price_pdf"))
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
		            $('#list_housing_season_price_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_season_price_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_season_price_importar").click(function() {
	$('#import_housing_season_price').modal();
});


$("#importar_housing_season_price_excel").click(function() {
		if(Housing_season_price.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing_season_price/load_excel";
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
									Housing_season_price.gridDataSource.read();
									$('#import_housing_season_price').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

//Para chequear todos los elementos
$('#all_check_housing_season_price').click(function () {
    var c = this.checked;
    $('#gridselection_housing_season_price :checkbox').prop('checked',c);
});

//Eliminar elemento
				function delete_element_housing_season_price(e)
				{
				    var dataItem=Housing_season_price.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing_season_price?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing_season_price/delete",
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
				                    Housing_season_price.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_season_price.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}

    $('#deletebutton_housing_season_price').click(function(){
        var checkbox_checked=$('#gridselection_housing_season_price .check_row:checked');

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
                      var dataItem=Housing_season_price.finditem($(this).attr('id'));
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
				                url:urlhome+"/housing/housing_season_price/delete",
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
				                    Housing_season_price.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing_season_price.gridDataSource.read();
				                }
				            });
               }
                else
                    close();

            })
        }
    });
