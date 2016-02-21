<template id="resProjects">
	<form 
	action="#" 
	method="POST" 
	class="col-md-8 col-md-offset-2 res-form"
	@submit.prevent>

		<div class="col-md-4">
			<res-display-list title="Your Projects"></res-display-list>
		</div>

		@include('partials.forms._res-projects')
	</form>
</template>