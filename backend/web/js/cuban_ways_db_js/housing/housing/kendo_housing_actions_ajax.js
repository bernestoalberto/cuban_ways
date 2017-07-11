/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/


$("#btn_modal_housing").click(function() {
	Housing.oldElement=null;
    $('#select2-id_housing_address-container').html('');
    Housing.combobox_housing_address.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_state_rent-container').html('');
    Housing.combobox_housing_state_rent.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_type-container').html('');
    Housing.combobox_housing_type.append('<option selected="" value=""></option>').change();
    $('#select2-id_owner-container').html('');
    Housing.combobox_owner.append('<option selected="" value=""></option>').change();
    Housing.housing_form.data('bootstrapValidator').resetForm(true);
    $('#housing_form')[0].reset();
	 $("#title_housing").html('Insertar Housing');
	 $("#taskhousing").val('insert');
	$('#select2-id_housing_address_combo-container').html('');
	$('#select2-id_housing_state_rent_combo-container').html('');
	$('#select2-id_housing_type_combo-container').html('');
	$('#select2-id_owner_combo-container').html('');
    $("#modal_housing").modal();
	});

$("#reload_housing").click(function() {
	if($('#taskhousing').val()!='update') {
    $('#select2-id_housing_address-container').html('');
    Housing.combobox_housing_address.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_state_rent-container').html('');
    Housing.combobox_housing_state_rent.append('<option selected="" value=""></option>').change();
    $('#select2-id_housing_type-container').html('');
    Housing.combobox_housing_type.append('<option selected="" value=""></option>').change();
    $('#select2-id_owner-container').html('');
    Housing.combobox_owner.append('<option selected="" value=""></option>').change();
		Housing.housing_form.data('bootstrapValidator').resetForm(true);
	}
	else {
		Housing.housing_form.data('bootstrapValidator').resetForm(true);
	 	$("#id_housing").val(Housing.oldElement.id_housing);
	 	$("#name_housing").val(Housing.oldElement.name_housing);
	 	$("#keywords_housing").val(Housing.oldElement.keywords_housing);
	 	$("#announce").val(Housing.oldElement.announce);
	 	$("#description").val(Housing.oldElement.description);
	 	$("#createdat").val(Housing.oldElement.createdat);
	 	Housing.combobox_housing_address.append('<option selected="" value="'+Housing.oldElement.id_housing_address+'">'+Housing.oldElement.id_town+'</option>').change();
	 	Housing.combobox_housing_address.val(Housing.oldElement.id_housing_address);
	 	Housing.combobox_housing_state_rent.append('<option selected="" value="'+Housing.oldElement.id_housing_state_rent+'">'+Housing.oldElement.name_housing_state_rent+'</option>').change();
	 	Housing.combobox_housing_state_rent.val(Housing.oldElement.id_housing_state_rent);
	 	Housing.combobox_housing_type.append('<option selected="" value="'+Housing.oldElement.id_housing_type+'">'+Housing.oldElement.name_housing_type+'</option>').change();
	 	Housing.combobox_housing_type.val(Housing.oldElement.id_housing_type);
	 	Housing.combobox_owner.append('<option selected="" value="'+Housing.oldElement.id_owner+'">'+Housing.oldElement.name_owner+'</option>').change();
	 	Housing.combobox_owner.val(Housing.oldElement.id_owner);
	 	$('#id_housing').val(Housing.oldElement.id_housing);
	 	$("#taskhousing").val('update');
		Housing.housing_form.data('bootstrapValidator').validate();
	}
});

	$("#excel_housing").click(function() {
				var list='';
				var filters =  Housing.gridDataSource.filter();
				if(filters) {
					var allData = Housing.gridDataSource.data();
					var query = new kendo.data.Query(allData);
					list = query.filter(filters).data;
				}
				else
					list= Housing.gridDataSource.data();
				$('#housing_export').val(JSON.stringify(list));
				$('#form_excel_export').submit();
		});

$("#pdf_housing").click(function() {
    $('#list_housing_pdf').modal();
    $("#tbody_table_housing").html('');
    var list='';
    var filters =  Housing.gridDataSource.filter();
    if(filters) {
        var allData = Housing.gridDataSource.data();
        var query = new kendo.data.Query(allData);
        list = query.filter(filters).data;
    }
    else
        list= Housing.gridDataSource.data();
    list.forEach(Housing.list_pdf);
});

$("#export_housing_pdf").click(function() {
		    $('body').modalmanager('loading');
		    kendo.drawing.drawDOM($("#table_housing_pdf"))
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
		            $('#list_housing_pdf').modal('hide');
		            kendo.saveAs({
		                dataURI: data,
		                fileName: "Housing_Report_PDF.pdf",
		                //proxyURL: "//demos.telerik.com/kendo-ui/service/export"
		            });
		        });
		});

$("#excel_housing_importar").click(function() {
	$('#import_housing').modal();
});


$("#importar_housing_excel").click(function() {
		if(Housing.importarbootstrapValidator.isValid())
					{
						var data= new FormData();
						var excel= $('#importar_excel')[0].files[0];
						data.append('excel',excel);
						data.append('_backendCSRF',_csrf);
						var url=urlhome+"housing/housing/load_excel";
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
									Housing.gridDataSource.read();
									$('#import_housing').modal('hide');
									img=urlhome+"../themes/inrh/assets/notifications/img/ok.png ",
											NotificationW8('#2D8F3C','Los Elementos fueron importados con exito',result.message ,5000,img)
								}

							}
						});
					}
		});

function showUpdate_housing(e) {

    Housing.housing_form.data('bootstrapValidator').resetForm(true);
	 var dataItem=Housing.finditem(e.id);
	 Housing.oldElement= dataItem;
	 $('#id_housing').val(dataItem.id_housing);
	 	$("#id_housing").val(Housing.oldElement.id_housing);
	 	$("#name_housing").val(Housing.oldElement.name_housing);
	 	$("#keywords_housing").val(Housing.oldElement.keywords_housing);
	 	$("#announce").val(Housing.oldElement.announce);
	 	$("#description").val(Housing.oldElement.description);
	 	$("#createdat").val(Housing.oldElement.createdat);
	 	Housing.combobox_housing_address.append('<option selected="" value="'+Housing.oldElement.id_housing_address+'">'+Housing.oldElement.id_town+'</option>').change();
	 	Housing.combobox_housing_address.val(Housing.oldElement.id_housing_address);
	 	Housing.combobox_housing_state_rent.append('<option selected="" value="'+Housing.oldElement.id_housing_state_rent+'">'+Housing.oldElement.name_housing_state_rent+'</option>').change();
	 	Housing.combobox_housing_state_rent.val(Housing.oldElement.id_housing_state_rent);
	 	Housing.combobox_housing_type.append('<option selected="" value="'+Housing.oldElement.id_housing_type+'">'+Housing.oldElement.name_housing_type+'</option>').change();
	 	Housing.combobox_housing_type.val(Housing.oldElement.id_housing_type);
	 	Housing.combobox_owner.append('<option selected="" value="'+Housing.oldElement.id_owner+'">'+Housing.oldElement.name_owner+'</option>').change();
	 	Housing.combobox_owner.val(Housing.oldElement.id_owner);
	 $("#taskhousing").val('update');
	 $("#title_housing").html('Actualizar Housing');
	 $("#modal_housing").modal();
	}


//Para chequear todos los elementos
$('#all_check_housing').click(function () {
    var c = this.checked;
    $('#gridselection_housing :checkbox').prop('checked',c);
});

//Boton Accion
$('#btnaction_housing').click(function () {
    Housing.housing_form.data('bootstrapValidator').validate();
        if(Housing.housing_form.data('bootstrapValidator').isValid())
			{
       		var housing={};
       		housing.name_housing=$("#name_housing").val();
       		housing.keywords_housing=$("#keywords_housing").val();
       		housing.announce=$("#announce").val();
       		housing.description=$("#description").val();
       		housing.createdat=$("#createdat").val();
       		housing.id_housing_address=Housing.combobox_housing_address.val();
       		housing.id_housing_state_rent=Housing.combobox_housing_state_rent.val();
       		housing.id_housing_type=Housing.combobox_housing_type.val();
       		housing.id_owner=Housing.combobox_owner.val();
       		var url=urlhome+"housing/housing/create";
        	if($('#taskhousing').val()=="update")
        		{
            		var url=urlhome+"housing/housing/update";
            		housing.id_housing=Housing.oldElement.id_housing;
        		}
        $('body').modalmanager('loading');
         $.ajax({
            type: "POST",
            url:url,
            data:{
            Housing:housing,
            _backendCSRF:_csrf
            },
            success:function(response){
                if(response.success)
                {
                    var message='El elemento fue insertado con exito'
                    var accion='insertado';
                    if($('#taskhousing').val()=='update') {
                        message = 'El elemento fue actualizado con exito'
                        accion='actualizado';

                    }
                    img=urlhome+"../themes/make/assets/notifications/img/ok.png ",
                        NotificationW8('#2D8F3C',message,'El housing fue '+accion+' correctamente' ,5000,img)
                }
                else
                {
                    var message='Error en insercion'
                    if($('#taskhousing').val()=='update')
                        message='Error en actualizacion'
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18',message,response.message ,5000,img)
                }
                Housing.gridDataSource.read();
                $('body').modalmanager('removeLoading');
                $("#modal_housing").modal('hide');
            },
            error:function(response){
               if(response)
                {
                    img=urlhome+"../themes/make/assets/notifications/img/error.png ",
                        NotificationW8('#D91E18','Error en accion',response.responseJSON.name ,5000,img)
                }
               $('body').modalmanager('removeLoading');
                $("#modal_housing").modal('hide');
            }
        });
	}
});

//Eliminar elemento
				function delete_element_housing(e)
				{
				    var dataItem=Housing.finditem(e.id);
		    		var array=[];
				    array.push(dataItem);
				    $.MetroMessageBox({
				        title: "<span class='fa fa-trash-o'></span> Eliminar ",
				        content: "<p class='fg-white'>Desea eliminar este Housing?</p> ",
				        NormalButton: "#232323",
			        	ActiveButton: "#008a00 ",
				        buttons: " [Cancelar][Aceptar]"
				    }, function (a) {
				        if(a=="Aceptar")
				        {
				            $.ajax({
				                type: "POST",
				                url:urlhome+"/housing/housing/delete",
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
				                    Housing.gridDataSource.read();
				                },
				                error:function(response){
				                    if(response)
				                    {
				                        img=urlhome+"../themes/make/assets/notifications/img/error.png ",
				                            NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
				                    }
				                    Housing.gridDataSource.read();
				                }
				            });
				        }
				        else
				            close();
				    }
				  )
				}


$('#deletebutton_housing').click(function(){
	var checkbox_checked=$('#gridselection_housing .check_row:checked');

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
					var dataItem=Housing.finditem($(this).attr('id'));
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
					url:urlhome+"/housing/housing/delete",
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
						Housing.gridDataSource.read();
					},
					error:function(response){
						if(response)
						{
							img=urlhome+"../themes/make/assets/notifications/img/error.png ",
									NotificationW8('#D91E18','Error en eliminacion',response.responseJSON.name ,5000,img)
						}
						Housing.gridDataSource.read();
					}
				});
			}
			else
				close();

		})
	}
});