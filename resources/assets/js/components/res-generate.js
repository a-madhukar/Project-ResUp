Vue.component('res-generate',{

	template:'#resGenerate', 

	props:['app_data'],

	methods:{

		checkBasicInfo:function()
		{
			console.log(Object.keys(this.app_data.basic_info).length==0); 

			return Object.keys(this.app_data.basic_info).length==0 ? true : false; 
		}

	},

	ready:function()
	{
		console.log("res generate component is ready"); 
		console.log(this.app_data); 
	}
}); 