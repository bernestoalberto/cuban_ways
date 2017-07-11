/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


	Housing_availability.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_availability/list_json",
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
						id_housing_availability:{type:"number"},
						description_housing_availability:{type:"string"},
						date_start:{type:"date"},
						date_end:{type:"date"},
						id_availability_state:{type:"number"},
						id_housing:{type:"number"},
						id_usuario:{type:"number"},
						availability_state:{type:"string"},
						name_housing:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_availability.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_availability/list_json",
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
						id_housing_availability:{type:"number"},
						description_housing_availability:{type:"string"},
						date_start:{type:"date"},
						date_end:{type:"date"},
						id_availability_state:{type:"number"},
						id_housing:{type:"number"},
						id_usuario:{type:"number"},
						availability_state:{type:"string"},
						name_housing:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
    });

