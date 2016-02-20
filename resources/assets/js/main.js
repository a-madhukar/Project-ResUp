new Vue({
	el:'body',

	data:{
		currentView:''
	},

	methods:{
		
		hashChanges:function()
		{
			this.eventListener();
		}, 

		checkIfHashExists:function(){
			if (location.hash) 
			{
				this.changeCurrentView(); 
			} 
		},

		//routes the app based on the hash
		eventListener:function()
		{
			window.addEventListener('hashchange',function()
			{
				console.log("identified change in hash "+location.hash);
				this.changeCurrentView(); 

			}.bind(this));
		}, 

		changeCurrentView:function()
		{
			var routeName = location.hash.substring(1); 

				//checks if the vue component exists
				if (Vue.options.components[routeName])
				{
					console.log("component with hash name exists");
					console.log("routing...");
					this.currentView=routeName;
				}
			}
		},  

		ready:function(){
			console.log("main view is working"); 
			this.checkIfHashExists();
			this.hashChanges();
		}
	}); 