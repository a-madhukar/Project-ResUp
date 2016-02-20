Vue.component('basic-info',{
	template:'#basicInfo',

	ready:function()
	{
		console.log('basic-info component is ready'); 
	}
}); 
Vue.component('res-education',{
	template:'#resEducation',

	ready:function()
	{
		console.log("res education component is working"); 
	}
});
Vue.component('res-experience',{
	template:'#resExperience',

	ready:function()
	{
		console.log("res experience component is working"); 
	}
});
Vue.component('res-projects',{
	template:'#resProjects',

	ready:function()
	{
		console.log("res projects component is working"); 
	}
});
Vue.component('res-skills',{
	template:'#resSkills',

	ready:function()
	{
		console.log("res skills component is working"); 
	}
});
Vue.component('res-summary',{
	template:'#resSummary',

	ready:function()
	{
		console.log("res summary component is working"); 
	}
});
new Vue({
	el:'body',

	data:{
		currentView:''
	},

	methods:{
		hashChanges:function()
		{
			window.addEventListener('hashchange',function()
			{
				console.log("identified change in hash "+location.hash);

				var routeName = location.hash.substring(1); 

				if (Vue.options.components[routeName])
				 {
				 	console.log("component with hash name exists");
				 	console.log("routing...");
				 	this.currentView=routeName;
				 }

			}.bind(this)); 
		}
	},  

	ready:function(){
		console.log("main view is working"); 
		this.hashChanges();
	}
}); 
//# sourceMappingURL=all.js.map