/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:50 GMT-05:00 2016*/


	Owner.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/owner/list_json",
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
						name_owner:{type:"string"},
						lastname_owner:{type:"string"},
						datebirth:{type:"date"},
						email:{type:"string"},
						phone:{type:"string"},
						createdat:{type:"date"},
						identification:{type:"string"},
						name_owner_incharge:{type:"string"},
						lastname_owner_incharge:{type:"string"},
						bank_account:{type:"string"},
						photo:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Owner.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/owner/list_json",
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
						name_owner:{type:"string"},
						lastname_owner:{type:"string"},
						datebirth:{type:"date"},
						email:{type:"string"},
						phone:{type:"string"},
						createdat:{type:"date"},
						identification:{type:"string"},
						name_owner_incharge:{type:"string"},
						lastname_owner_incharge:{type:"string"},
						bank_account:{type:"string"},
						photo:{type:"string"}
				}
			}
 		},
    });

