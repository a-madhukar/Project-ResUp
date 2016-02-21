<template id="resEducation">
	<form 
	action="#" 
	method="POST" 
	class="col-md-8 col-md-offset-2 res-form"
	@submit.prevent>
		<div class="col-md-4">
			<res-display-list title="Your Qualifications" :items.sync="testing"></res-display-list>
		</div>

		@include('partials.forms._res-education')
	</form>
</template>