/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


	Housing_state_rent.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_state_rent/list_json",
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
						id_housing_state_rent:{type:"number"},
						name_housing_state_rent:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_state_rent.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_state_rent/list_json",
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
						id_housing_state_rent:{type:"number"},
						name_housing_state_rent:{type:"string"}
				}
			}
 		},
    });

