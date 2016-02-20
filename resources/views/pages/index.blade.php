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

	<component :is="currentView"></component> 
@stop