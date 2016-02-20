Vue.component('res-education',{
	template:'#resEducation',

	data:function()
	{
		return{

			qualification:{

				name:'',

				institution_name:'',

				institution_location:'',

				graduation_date:'',

				cgpa:''

			},
		};
	},

	methods:{
		addQualification:function()
		{
			console.log("pushing qualification to parent"); 
			this.$dispatch('new-qualification',this.qualification); 
			this.qualification={}; 
		}
	},

	ready:function()
	{
		console.log("res education component is working"); 
	}
});