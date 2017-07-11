/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:48 GMT-05:00 2016*/


	Owner_user.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/owner_user/list_json",
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
						id_owner:{type:"number"},
						id_usuario:{type:"number"},
						name_owner:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Owner_user.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"security/owner_user/list_json",
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
						id_owner:{type:"number"},
						id_usuario:{type:"number"},
						name_owner:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
    });

