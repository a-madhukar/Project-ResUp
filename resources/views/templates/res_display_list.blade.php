<template id="resDisplayList">
	<div class="container-fluid" id="displayList">
		@{{title}} 
		<hr>
		<ul>
			<!--Display when it's experience--> 
			<li 
			v-for="item in items" 
			v-show="this.currentView=='res-experience'">
				<p>@{{item.role}}</p>
				<p>@{{item.company_name}}</p>
			</li>

			<!--Display when it's projects--> 
			<li 
			v-for="item in items" 
			v-show="this.currentView=='res-projects'">
				@{{item.title}}
			</li>

			<!--Display when it's qualification--> 
			<li 
			v-for="item in items" 
			v-show="this.currentView=='res-education'">
				@{{item.name}}
			</li>

			<!--Display when it's skills--> 
			<li 
			v-for="item in items" 
			v-show="this.currentView=='res-skills'">
				@{{item}}
			</li>

			
		</ul>
	</div>
</template>