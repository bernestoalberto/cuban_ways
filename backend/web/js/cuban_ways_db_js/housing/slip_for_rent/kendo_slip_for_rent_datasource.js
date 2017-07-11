/*Generado by Pro Generator */
/*@author Charlietyn  */ 
/*@Date: Mon May 30 19:22:21 GMT-05:00 2016*/


	Slip_for_rent.gridDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/slip_for_rent/list_json",
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
						id_slip_for_rent:{type:"number"},
						code_slip_for_rent:{type:"string"},
						description_slip_for_rent:{type:"string"},
						createdat:{type:"date"},
						id_housing:{type:"number"},
						id_usuario:{type:"number"},
						name_housing:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
        pageSize: 8
    });
	Slip_for_rent.comboDataSource = new kendo.data.DataSource({
        transport: {
            read: {
                //type:'POST',
                url: urlhome+"housing/slip_for_rent/list_json",
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
						id_slip_for_rent:{type:"number"},
						code_slip_for_rent:{type:"string"},
						description_slip_for_rent:{type:"string"},
						createdat:{type:"date"},
						id_housing:{type:"number"},
						id_usuario:{type:"number"},
						name_housing:{type:"string"},
						username:{type:"string"}
				}
			}
 		},
    });

