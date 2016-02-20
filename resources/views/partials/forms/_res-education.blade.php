<div class="col-md-8">
	<div class="form-group">
		<label for="name"> 
			What Is Your <b>Degree</b> Or Other <b>Qualification</b>? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="name"
		name="name"
		placeholder="BSc(Hons). In Software Engineering."
		v-model="qualification.name"
		>
	</div>

	<div class="form-group">
		<label for="instituion_name">
			<b>Where</b> Did You Earn Your <span v-show="!qualification.name">Degree/Qualification</span>@{{qualification.name}}?
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="instituion_name"
		name="instituion_name"
		placeholder="Asia Pacific University"
		v-model="qualification.institution_name"
		>
	</div>

	<div class="form-group">
		<label for="institution_location">
			<b>Where</b> Is <span v-show="!qualification.institution_name">The Institution</span>@{{qualification.institution_name}} Located? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="institution_location"
		name="institution_location"
		placeholder="Malaysia"
		v-model="qualification.institution_location"
		>
	</div>

	<div class="form-group">
		<label for="graduation_date">
			<b>When</b> Did You Earn Your <span v-show="!qualification.name">Degree/Qualification</span>@{{qualification.name}}?  
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="graduation_date"
		name="graduation_date"
		placeholder="2015"
		v-model="qualification.graduation_date"
		>
	</div>

	<div class="form-group">
		<label for="cgpa">
			<b>GPA</b> (If Applicable)
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="cgpa"
		name="cgpa"
		placeholder="3.33"
		v-model="qualification.cgpa"
		>
	</div>

	<div class="form-group">
		<button class="btn btn-primary form-control" @click="addQualification">
			Save To Qualifications List
		</button>
	</div>

</div>