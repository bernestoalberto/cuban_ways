/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


	Housing_image.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_image/list_json",
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
						id_housing_image:{type:"number"},
						image:{type:"string"},
						id_housing:{type:"number"},
						name_housing:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_image.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_image/list_json",
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
						id_housing_image:{type:"number"},
						image:{type:"string"},
						id_housing:{type:"number"},
						name_housing:{type:"string"}
				}
			}
 		},
    });

