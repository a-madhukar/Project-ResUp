<div class="col-md-8">
	<div class="form-group">
		<label for="title"> 
			Give Your Project A <b>Title.</b> 
		</label>
		<input 
		type="text" 
		class="form-control" 
		id="title"
		name="title"
		placeholder="Building a Windows Phone App."
		v-model="project.title"
		>
	</div>

	<div class="form-group">
		<label for="description">
			Now Describe What <b>You Did.</b>
		</label>
		<textarea 
		name="description" 
		id="description" 
		cols="60" 
		rows="10" 
		class="form-control" 
		placeholder="For my final project I built a windows phone application that was supposed to help students with their monthly budgeting practices..."
		v-model="project.description"></textarea>
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary form-control" @click="addProject"> Save To Projects List </button>
	</div>
</div>