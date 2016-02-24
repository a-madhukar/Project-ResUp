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
Vue.component('res-experience',{
	template:'#resExperience',

	data:function()
	{
		return {

			experience:{
				
				company_name:'',

				company_location:'',

				duration:'',

				role:'',

				responsibilities:''
			},
		}; 
	}, 

	methods:{
		addExperience:function()
		{
			console.log("pushing experience to parent"); 
			this.$dispatch('new-experience',this.experience); 
			this.experience={}; 
		}
	},

	ready:function()
	{
		console.log("res experience component is working"); 
	}
});
Vue.component('res-generate',{

	template:'#resGenerate', 

	props:['app_data'],

	methods:{

		checkBasicInfo:function()
		{
			console.log(Object.keys(this.app_data.basic_info).length==0); 

			return Object.keys(this.app_data.basic_info).length==0 ? true : false; 
		}

	},

	ready:function()
	{
		console.log("res generate component is ready"); 
		console.log(this.app_data); 
	}
}); 
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
var vm = new Vue({
	el:'body',

	data:{

		// basic_info:{

		// 	full_name:'ajay madhukar',

		// 	phone_number: '0103679302',

		// 	twitter_handle: '@aj_da_geek',

		// 	personal_website:'ajay.com',

		// 	email_address:'a.madhukar@yahoo.com', 

		// 	linkedin_url:'linkedin.com/ajay', 

		// 	skype_username:'ajay madhukar'
		// },

		// summary: "I'm a young developer.", 

		// experiences:[

		// 	{
		// 		company_name: 'Fotobox', 

		// 		company_location:'Malaysia', 

		// 		duration:'1 month', 

		// 		role:'Coder', 

		// 		responsibilities: 'programming'
		// 	}
		// ], 

		// projects: [

		// 	{
		// 		title:'windows phone app',

		// 		description:'budgeting app'
		// 	}
		// ], 

		// qualifications:[

		// 	{
		// 		name: 'Bsc(Hons). In Software Engineering', 

		// 		institution_name: 'Asia Pacific University', 

		// 		institution_location:'Malaysia', 

		// 		graduation_date:'2015',

		// 		cgpa: '3.33'
		// 	}
		// ],

		//  skills: ['html5', 'css3', 'sass'], 

		basic_info:{},

		summary:'',

		experiences:[], 

		projects:[], 

		qualifications:[], 

		skills:[],

		currentView:'',

		testing:'hello world'
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
			this.broadcastData('display-experiences',this.experiences);
		},

		'new-project':function(project)
		{
			console.log("receiving the project. adding it"); 
			this.projects.push(project); 
			this.broadcastData('display-projects',this.projects);
		},

		'new-qualification':function(qualification)
		{
			console.log("receiving the qualification. adding it"); 
			this.qualifications.push(qualification); 
			this.broadcastData('display-qualifications',this.qualifications);
		},

		'new-skill':function(skill)
		{
			console.log("receiving the skill. adding it"); 
			this.skills.push(skill); 	
			this.broadcastData('display-skills',this.skills); 
		},
	},

	methods:{

		broadcastData:function(channel,data)
		{
			this.$broadcast(channel,data); 
		},

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
//# sourceMappingURL=all.js.map
