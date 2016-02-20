Vue.component('res-skills',{
	template:'#resSkills',

	data:function()
	{
		return {
			skill:''
		}; 
	}, 

	methods:{
		addSkill:function()
		{
			console.log("pushing skill to parent"); 
			this.$dispatch('new-skill',this.skill); 
			this.skill=''; 
		}
	},

	ready:function()
	{
		console.log("res skills component is working"); 
	}
});