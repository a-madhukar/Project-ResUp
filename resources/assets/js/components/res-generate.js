Vue.component('res-generate',{

	template:'#resGenerate', 

	props:['app_data'],

	methods:{

		checkIfIndexExists:function(index)
		{
			if(this.app_data[index]=={} || this.app_data[index]=='' || this.app_data[index]==[])
			{
				return false; 
			}

			return true; 
		}

	},

	ready:function()
	{
		console.log("res generate component is ready"); 
		console.log(this.app_data); 
	}
}); 