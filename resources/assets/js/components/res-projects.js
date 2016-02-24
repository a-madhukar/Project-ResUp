Vue.component('res-projects',{
	template:'#resProjects',

	data:function(){
		return {
			
			project:{

				title: '',

				description:''
			},
		}; 
	}, 

	methods:{
		addProject:function()
		{
			console.log("pushing project to parent"); 
			this.$dispatch('new-project',this.project); 
			this.project={}; 

			
		}
	},

	ready:function()
	{
		console.log("res projects component is working"); 
	}
});