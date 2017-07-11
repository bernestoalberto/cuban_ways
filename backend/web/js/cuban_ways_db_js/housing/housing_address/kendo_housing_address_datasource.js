/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sat Jun 04 01:42:49 GMT-05:00 2016*/


	Housing_address.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_address/list_json",
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
						id_housing_address:{type:"number"},
						id_town:{type:"number"},
						length:{type:"string"},
						latitude:{type:"string"},
						number_housing:{type:"string"},
						main_street:{type:"string"},
						between_first:{type:"string"},
						between_second:{type:"string"},
						name_town:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_address.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_address/list_json",
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
						id_housing_address:{type:"number"},
						id_town:{type:"number"},
						length:{type:"string"},
						latitude:{type:"string"},
						number_housing:{type:"string"},
						main_street:{type:"string"},
						between_first:{type:"string"},
						between_second:{type:"string"},
						name_town:{type:"string"}
				}
			}
 		},
    });

