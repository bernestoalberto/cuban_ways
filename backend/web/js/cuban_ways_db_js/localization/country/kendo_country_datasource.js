/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


	Country.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/country/list_json",
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
						id_country:{type:"number"},
						name_country:{type:"string"},
						ie_code_country:{type:"string"},
						code_country:{type:"string"},
						prefix:{type:"number"},
						id_continent:{type:"number"},
						subcontinent:{type:"string"},
						iso_money:{type:"string"},
						money_name:{type:"string"},
						name_continent:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Country.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/country/list_json",
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
						id_country:{type:"number"},
						name_country:{type:"string"},
						ie_code_country:{type:"string"},
						code_country:{type:"string"},
						prefix:{type:"number"},
						id_continent:{type:"number"},
						subcontinent:{type:"string"},
						iso_money:{type:"string"},
						money_name:{type:"string"},
						name_continent:{type:"string"}
				}
			}
 		},
    });

