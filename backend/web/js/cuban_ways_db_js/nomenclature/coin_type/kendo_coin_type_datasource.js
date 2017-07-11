/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:19 GMT-05:00 2016*/


	Coin_type.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"nomenclature/coin_type/list_json",
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
						id_coin_type:{type:"number"},
						name_coin:{type:"string"},
						abbrv_coin:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Coin_type.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"nomenclature/coin_type/list_json",
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
						id_coin_type:{type:"number"},
						name_coin:{type:"string"},
						abbrv_coin:{type:"string"}
				}
			}
 		},
    });

