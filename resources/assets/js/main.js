new Vue({
	el:'body',

	data:{

		basic_info:{},

		summary:'',

		experiences:[], 

		projects:[], 

		qualifications:[], 

		skills:[],

		currentView:''
	},

	events:{

		//get the basic info from the child & set it
		'new-basic-info':function(_basicInfo)
		{
			console.log("parent received the basic info. setting it...");
			console.log(_basicInfo.full_name);  
			this.basic_info=_basicInfo; 
			console.log(this.basic_info.email_address); 
			this.setHash('#res-summary'); 
		},

		'new-summary':function(_summary)
		{
			console.log("received the summary. setting up...");
			console.log(_summary);
			this.summary=_summary;   
			console.log(); 
			this.setHash('#res-experience');
		},

		'new-experience':function(experience)
		{
			console.log("receiving experience. adding it"); 
			this.experiences.push(experience); 
		},

		'new-project':function(project)
		{
			console.log("receiving the project. adding it"); 
			this.projects.push(project); 
		},

		'new-qualification':function(qualification)
		{
			console.log("receiving the qualification. adding it"); 
			this.qualifications.push(qualification); 
		},

		'new-skill':function(skill)
		{
			console.log("receiving the skill. adding it"); 
			this.skills.push(skill); 
		},
	},

	methods:{
		
		//routes when link is clicked
		hashChanges:function()
		{
			this.eventListener();
		}, 

		//routes if there's hash 
		//when page is refreshed
		checkIfHashExists:function()
		{
			if (location.hash) 
			{
				this.changeCurrentView(); 
			} 
		},

		//routes the app based on the hash
		eventListener:function()
		{
			//adds hashchange event listener
			window.addEventListener('hashchange',function()
			{
				console.log("identified change in hash "+location.hash);
				this.changeCurrentView(); 

			}.bind(this));
		}, 

		//routing logic
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
		},

		//sets the hash in the page url
		setHash:function(_hash)
		{
			location.hash=_hash; 
		},

	},


	ready:function(){
		console.log("main view is working"); 
		this.checkIfHashExists();
		this.hashChanges();
	}
}); 