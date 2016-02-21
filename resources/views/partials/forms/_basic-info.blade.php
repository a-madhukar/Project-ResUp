<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="full_name"> 
				<b>Full Name</b> 
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="full_name"
			placeholder="John Doe"
			v-model="basic_info.full_name"
			>
		</div>

		<div class="form-group">
			<label for="phone_number">
				<b>Phone Number</b>
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="phone_number"
			placeholder="010 421 2311"
			v-model="basic_info.phone_number"
			>
		</div>

		<div class="form-group">
			<label for="twitter_handle">
				<b>Twitter</b> Handle
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="twitter_handle"
			placeholder="@john_doe"
			v-model="basic_info.twitter_handle"
			>
		</div>

		<div class="form-group">
			<label for="personal_website">
				<b>Personal Website</b> Or Other Relevant Link
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="personal_website"
			placeholder="http://john.doe/"
			v-model="basic_info.personal_website"
			>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="email_address">
				<b>Email</b> 
			</label>
			<input 
			type="email" 
			class="form-control" 
			id="email_address"
			placeholder="johnny@doe.com"
			v-model="basic_info.email_address"
			>
		</div>

		<div class="form-group">
			<label for="linkedin_url">
				<b>Linkedin</b> Url 
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="linkedin_url"
			placeholder="linkedin.com/in/mitchas"
			v-model="basic_info.linkedin_url"
			>
		</div>

		<div class="form-group">
			<label for="skype_username">
				<b>Skype</b> Username
			</label>
			<input 
			type="text" 
			class="form-control" 
			id="skype_username"
			placeholder="John-doe"
			v-model="basic_info.skype_username"
			>
		</div>

		<div class="col-md-12 btn-group">
			<button class="btn btn-primary form-control" @click="storeBasicInfo">
				Save Basic Info
			</button>
		</div>
	</div>
</div>
