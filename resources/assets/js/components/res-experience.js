Vue.component('res-experience',{
	template:'#resExperience',

	data:function()
	{
		return {

			experience:{
				
				company_name:'',

				company_location:'',

				duration:'',

				role:'',

				responsibilities:''
			},
		}; 
	}, 

	methods:{
		addExperience:function()
		{
			console.log("pushing experience to parent"); 
			this.$dispatch('new-experience',this.experience); 
			this.experience={}; 
		}
	},

	ready:function()
	{
		console.log("res experience component is working"); 
	}
});