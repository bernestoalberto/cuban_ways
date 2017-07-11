/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


	Town.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/town/list_json",
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
						id_town:{type:"number"},
						name_town:{type:"string"},
						id_province:{type:"number"},
						name_province:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Town.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/town/list_json",
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
						id_town:{type:"number"},
						name_town:{type:"string"},
						id_province:{type:"number"},
						name_province:{type:"string"}
				}
			}
 		},
    });

