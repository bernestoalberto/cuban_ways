/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


	Service_housing.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/service_housing/list_json",
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
						id_service_housing:{type:"number"},
						price:{type:"string"},
						canceled:{type:"string"},
						id_service:{type:"number"},
						id_housing:{type:"number"},
						name_housing:{type:"string"},
						name_service:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Service_housing.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/service_housing/list_json",
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
						id_service_housing:{type:"number"},
						price:{type:"string"},
						canceled:{type:"string"},
						id_service:{type:"number"},
						id_housing:{type:"number"},
						name_housing:{type:"string"},
						name_service:{type:"string"}
				}
			}
 		},
    });

