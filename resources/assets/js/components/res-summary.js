Vue.component('res-summary',{
	template:'#resSummary',

	data:function()
	{
		return {
			summary:''
		}; 
	},

	methods:{
		storeSummary:function()
		{
			console.log("sending summary to parent"); 
			this.$dispatch('new-summary',this.summary); 
			this.summary='';
		}
	},

	ready:function()
	{
		console.log("res summary component is working"); 
	}
});