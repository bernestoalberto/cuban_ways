/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Wed Jun 01 22:39:38 CDT 2016*/


	Usuario.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/usuario/list_json",
                dataType: "json"
            }
        },
    	 change:function(data)
    	  {
    	 	////console.clear();
    	  },
       schema:{
			model:{
				fields:{
						id_usuario:{type:"number"},
						username:{type:"string"},
						pass:{type:"string"},
						word_pass:{type:"string"},
						email:{type:"string"},
						foto:{type:"string"},
						auth_key:{type:"string"},
						active:{type:"number"},
						created_at:{type:"date"},
						updated_at:{type:"date"},
						type_user:{type:"string"},
						state:{type:"string"},
						id_role:{type:"number"},
						name_role:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Usuario.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/usuario/list_json",
                dataType: "json"
            }
        },
    	 change:function(data)
    	  {
    	 	//console.clear();
    	  },
       schema:{
			model:{
				fields:{
						id_usuario:{type:"number"},
						username:{type:"string"},
						pass:{type:"string"},
						word_pass:{type:"string"},
						email:{type:"string"},
						foto:{type:"string"},
						auth_key:{type:"string"},
						active:{type:"number"},
						created_at:{type:"date"},
						updated_at:{type:"date"},
						type_user:{type:"string"},
						state:{type:"string"},
						id_role:{type:"number"},
						name_role:{type:"string"}
				}
			}
 		},
    });

