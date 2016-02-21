@extends('layout')

@section('content')
	<div class="jumbotron" v-show="!currentView">
		Hello World
	</div>

	<!-- <basic-info></basic-info>
	<res-summary></res-summary>
	<res-experience></res-experience>
	<res-projects></res-projects>
	<res-education></res-education>
	<res-skills></res-skills> -->
	
	<component v-if="currentView == 'res-generate'" :is="currentView" :app_data="$data"></component> 
	<component v-else :is="currentView"></component> 
@stop