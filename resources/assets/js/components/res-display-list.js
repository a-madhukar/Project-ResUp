Vue.component('res-display-list',{
	
	template:'#resDisplayList',

	props:['title'],

	data:function()
	{
		return {
			items:[],

			currentView:''
		}; 
	},

	events:{
		/*
		* Gets all the data from the parent
		*/

		'display-skills':function(_skills)
		{
			console.log("receiving from parent"); 
			this.items=_skills;
			console.log(this.items); 
		}, 

		'display-experiences':function(_experiences)
		{
			this.items=_experiences; 
		},

		'display-projects':function(_projects)
		{
			this.items=_projects; 
		},

		'display-qualifications':function(_qualifications)
		{
			this.items=_qualifications; 
		}
	},

	methods:{

		//checks to see if there's data
		//in the parent when routing
		//if yes, it displays it. 
		generateExistingList:function()
		{
			var hash= location.hash; 

			if(hash==="#res-experience")
			{
				this.checkData(vm.experiences); 

			}else if(hash==="#res-projects")
			{
				this.checkData(vm.projects); 
			}else if(hash==="#res-education")
			{
				this.checkData(vm.qualifications); 
			}else if(hash==="#res-skills")
			{
				this.checkData(vm.skills); 
			}
		}, 

		checkData:function(data)
		{
			if (data.length) 
			{
				this.items=data; 
			}
		},

		getHash:function()
		{
			return location.hash; 
		}
	},

	ready:function()
	{
		console.log("res display list is active");
		this.generateExistingList(); 
		this.currentView=vm.currentView; 
	}
});