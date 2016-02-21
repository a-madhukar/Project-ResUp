<div class="col-md-8">
	<div class="form-group">
		<label for="name"> 
			Enter A <b>Skill</b> You Possess? 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="name"
		name="name"
		placeholder="Coding"
		v-model="skill"
		>
	</div>

	<div class="form-group">
		<button class="btn btn-primary form-control" @click="addSkill">
			Save To Skills List
		</button>
	</div>
</div>