/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:27 GMT-05:00 2016*/


	Permission_role.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/permission_role/list_json",
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
						id_permission_role:{type:"number"},
						id_role:{type:"number"},
						id_permission:{type:"number"},
						name_permission:{type:"string"},
						name_role:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Permission_role.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/permission_role/list_json",
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
						id_permission_role:{type:"number"},
						id_role:{type:"number"},
						id_permission:{type:"number"},
						name_permission:{type:"string"},
						name_role:{type:"string"}
				}
			}
 		},
    });

