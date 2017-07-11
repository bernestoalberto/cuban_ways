/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:22 GMT-05:00 2016*/


	Reference_point.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/reference_point/list_json",
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
						id_reference_point:{type:"number"},
						name_reference_point:{type:"string"},
						latitude:{type:"string"},
						length:{type:"string"},
						image:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Reference_point.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"localization/reference_point/list_json",
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
						id_reference_point:{type:"number"},
						name_reference_point:{type:"string"},
						latitude:{type:"string"},
						length:{type:"string"},
						image:{type:"string"}
				}
			}
 		},
    });

