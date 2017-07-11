/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun May 29 12:09:33 GMT-05:00 2016*/


	Housing.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing/list_json",
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
						id_housing:{type:"number"},
						name_housing:{type:"string"},
						keywords_housing:{type:"string"},
						announce:{type:"string"},
						description:{type:"string"},
						id_housing_type:{type:"number"},
						id_housing_state_rent:{type:"number"},
						createdat:{type:"date"},
						id_housing_address:{type:"number"},
						id_owner:{type:"number"},
						id_town:{type:"number"},
						name_housing_state_rent:{type:"string"},
						name_housing_type:{type:"string"},
						name_owner:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });

    Housing.gridDataSourceHCH = new kendo.data.DataSource({
	data:Housing.datasourceHCH,
	change:function(data)
	{
		////console.clear();
	},
	schema:{
		model:{
			fields:{
				count_housing_characteristics:{type:"number"},
				name_housing_characteristics:{type:"string"}
			}
		}
	},
	pageSize: 8
});

Housing.gridDataSourceHC = new kendo.data.DataSource({
	data:Housing.datasourceHC,
	change:function(data)
	{
		////console.clear();
	},
	schema:{
		model:{
			fields:{
				id_housing_characteristics:{type:"number"},
				name_housing_characteristics:{type:"string"}
			}
		}
	},
	pageSize: 8
});

Housing.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing/list_json",
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
						id_housing:{type:"number"},
						name_housing:{type:"string"},
						keywords_housing:{type:"string"},
						announce:{type:"string"},
						description:{type:"string"},
						id_housing_type:{type:"number"},
						id_housing_state_rent:{type:"number"},
						createdat:{type:"date"},
						id_housing_address:{type:"number"},
						id_owner:{type:"number"},
						id_town:{type:"number"},
						name_housing_state_rent:{type:"string"},
						name_housing_type:{type:"string"},
						name_owner:{type:"string"}
				}
			}
 		},
    });

