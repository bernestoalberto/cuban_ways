/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:28 GMT-05:00 2016*/


	Housing_characteristics_housing.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_characteristics_housing/list_json",
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
						id_housing_characteristics:{type:"number"},
						id_housing:{type:"number"},
						count_housing_characteristics:{type:"number"},
						cancelled:{type:"string"},
						id_housing_characteristics_housing:{type:"number"},
						name_housing:{type:"string"},
						name_housing_characteristics:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_characteristics_housing.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_characteristics_housing/list_json",
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
						id_housing_characteristics:{type:"number"},
						id_housing:{type:"number"},
						count_housing_characteristics:{type:"number"},
						cancelled:{type:"string"},
						id_housing_characteristics_housing:{type:"number"},
						name_housing:{type:"string"},
						name_housing_characteristics:{type:"string"}
				}
			}
 		},
    });

