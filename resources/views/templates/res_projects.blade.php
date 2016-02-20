<template id="resProjects">
	<form 
	action="#" 
	method="POST" 
	class="col-md-8 col-md-offset-2 res-form"
	@submit.prevent>
		@{{$data|json}}
		<div class="col-md-4">
			
		</div>

		@include('partials.forms._res-projects')
	</form>
</template>