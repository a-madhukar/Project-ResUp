<template id="resGenerate">
<!-- 	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-info" id="pdf-alert">
				<a href="#" 
				class="close" 
				data-dismiss="alert" 
				aria-label="close">
					&times;
				</a>
				
				Would you like to save this resume?

				<a 
				class="pull-right confirm-text" 
				>
					Yes I do! 
				</a>
				
			</div>
		</div>
	</div> -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 pdf-display">
			@include('partials._pdfMakeJs')
		</div>
	</div>
</template>