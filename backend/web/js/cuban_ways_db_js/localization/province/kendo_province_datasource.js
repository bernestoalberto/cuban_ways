/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Sun Jun 05 14:48:30 GMT-05:00 2016*/


	Province.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/province/list_json",
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
						id_province:{type:"number"},
						name_province:{type:"string"},
						id_country:{type:"number"},
						name_country:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Province.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/province/list_json",
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
						id_province:{type:"number"},
						name_province:{type:"string"},
						id_country:{type:"number"},
						name_country:{type:"string"}
				}
			}
 		},
    });

