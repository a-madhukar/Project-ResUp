Vue.component('basic-info',{
	template:'#basicInfo',

	data:function()
	{
		return {
			basic_info:{
				full_name:'',

				phone_number:'',

				twitter_handle:'',

				personal_website:'', 

				email_address:'', 

				linkedin_url:'',

				skype_username:'',

				
			}
		}; 
	},

	methods:{
		storeBasicInfo:function()
		{
			console.log("sending basic_info to parent");

			this.$dispatch('new-basic-info',this.basic_info); 

			this.basic_info={};  
		}, 
	},

	ready:function()
	{
		console.log('basic-info component is ready'); 
	}
}); 