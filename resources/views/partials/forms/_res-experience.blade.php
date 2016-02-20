<div class="col-md-8">
	<div class="form-group">
		<label for="company_name"> 
			Which <b>Company</b> Did You Work For? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="company_name"
		name="company_name"
		placeholder="Facebook"
		v-model="experience.company_name"
		>
	</div>

	<div class="form-group">
		<label for="company_location">
			<b>Where</b> Was <span v-show="!experience.company_name">The Company</span>@{{experience.company_name}} Located? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="company_location"
		name="company_location"
		placeholder="Palto Alto"
		v-model="experience.company_location"
		>
	</div>

	<div class="form-group">
		<label for="duration">
			<b>How Long</b> Were You With <span v-show="!experience.company_name">The Company</span>@{{experience.company_name}}? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="duration"
		name="duration"
		placeholder="January 2013 - Feb 2016"
		v-model="experience.duration"
		>
	</div>

	<div class="form-group">
		<label for="role">
			What Was Your <b>Role</b> At <span v-show="!experience.company_name">The Company</span>@{{experience.company_name}}?  
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="role"
		name="role"
		placeholder="Head Of Product"
		v-model="experience.role"
		>
	</div>

	<div class="form-group">
		<label for="responsibilities">
			Describe <b>What You Did</b> While You Were At <span v-show="!experience.company_name">The Company</span>@{{experience.company_name}}?
		</label>
		<textarea 
		name="responsibilities" 
		id="responsibilities" 
		cols="60" 
		rows="10" 
		class="form-control" 
		placeholder="I was in charge of coming up with cool iterations to the existing products. It was also my responsibility to think of new and revolutionary productl ines."
		v-model="experience.responsibilities"></textarea>
	</div>

	<div class="form-group">
		<button class="btn btn-primary form-control" @click="addExperience">
			Save To Experience List
		</button>
	</div>
</div>