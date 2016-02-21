<template id="resGenerate">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 pdf-display">
			<h3 class="pdf-title" v-if="!app_data.basic_info.full_name==''">
				@{{app_data.basic_info.full_name}}
			</h3>
			<hr>

			<div class="pdf-content">

				<div class="pdf-row" v-if="!app_data.summary==''">
					<span class="pdf-subheading">Professional Summary</span>
					<p class="summary-txt">@{{app_data.summary}}</p>
				</div>

				<div class="pdf-row" v-if="!app_data.experiences.length==0">
					<span class="pdf-subheading">Experience</span>
					<ul>
						<li 
						v-for="experience in app_data.experiences">
						<p>@{{experience.role}}

							<br/>@{{experience.company_name}}, 

							<span>@{{experience.duration}}</span>
							
							<br/>@{{experience.responsibilities}}</p>
						</li>
					</ul>
				</div>

				<div class="pdf-row" v-if="!app_data.projects.length==0">
					<span class="pdf-subheading">Projects</span>
					<ul>
						<li
						v-for="project in app_data.projects"
						>
						<p v-show="!project.title==''">	
							@{{project.title}}
							<br/>
							<small>
								 @{{project.description}}</small>
							</p>
						</li>
					</ul>
				</div>

				<div class="pdf-row" v-if="!app_data.qualifications.length==0">
					<span class="pdf-subheading">
						Education
					</span>
					<ul>
						<li
						v-for="qualification in app_data.qualifications"
						>
						<p>@{{qualification.name}}</p>
						<small>
							<span>
								@{{qualification.institution_name}} * 
							</span>
							<span>
								@{{qualification.institution_location}} *
							</span>
							<span> 
								@{{qualification.graduation_date}} *
							</span>

							<span>
								@{{qualification.cgpa}}
							</span>
						</small>
					</li>
				</ul>
			</div>

			<div class="pdf-row" v-if="!app_data.skills.length==0">
				<span class="pdf-subheading">
					Skills
				</span>
				<ul>
					<li
					v-for="skill in app_data.skills" class="skill-list"
					>
					@{{skill}}
				</li>
			</ul>
		</div>

		<div class="pdf-row">
			<span class="pdf-subheading">
				Contact
			</span>

			<ul>
				<li v-show="!app_data.basic_info.email_address==''">
					@{{app_data.basic_info.email_address}}
				</li>

				<li v-show="!app_data.basic_info.phone_number==''">
					@{{app_data.basic_info.phone_number}}
				</li>

				<li v-show="!app_data.basic_info.linkedin_url=='' ">
					@{{app_data.basic_info.linkedin_url}}
				</li>

				<li v-show="!app_data.basic_info.twitter_handle==''">
					@{{app_data.basic_info.twitter_handle}}
				</li>

				<li v-show="!app_data.basic_info.skype_username==''">
					@{{app_data.basic_info.skype_username}}
				</li>

				<li v-show="!app_data.basic_info.personal_website==''">
					@{{app_data.basic_info.personal_website}}
				</li>
			</ul>
		</div>

	</div>
</div>
</div>
</template>