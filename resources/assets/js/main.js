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