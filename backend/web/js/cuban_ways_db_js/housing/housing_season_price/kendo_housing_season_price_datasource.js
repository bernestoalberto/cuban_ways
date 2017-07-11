/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:20 GMT-05:00 2016*/


	Housing_season_price.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_season_price/list_json",
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
						id_housing_season_price:{type:"number"},
						price_housing_season:{type:"string"},
						comition:{type:"string"},
						cretedat:{type:"date"},
						id_housing:{type:"number"},
						id_season:{type:"number"},
						id_coin_type:{type:"number"},
						comition_for_publicitiy:{type:"string"},
						date_start_publicity:{type:"date"},
						date_end_publicity:{type:"date"},
						booking_deposit:{type:"string"},
						date_start:{type:"date"},
						date_end:{type:"date"},
						name_coin:{type:"string"},
						name_housing:{type:"string"},
						name_season:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Housing_season_price.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/housing_season_price/list_json",
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
						id_housing_season_price:{type:"number"},
						price_housing_season:{type:"string"},
						comition:{type:"string"},
						cretedat:{type:"date"},
						id_housing:{type:"number"},
						id_season:{type:"number"},
						id_coin_type:{type:"number"},
						comition_for_publicitiy:{type:"string"},
						date_start_publicity:{type:"date"},
						date_end_publicity:{type:"date"},
						booking_deposit:{type:"string"},
						date_start:{type:"date"},
						date_end:{type:"date"},
						name_coin:{type:"string"},
						name_housing:{type:"string"},
						name_season:{type:"string"}
				}
			}
 		},
    });

