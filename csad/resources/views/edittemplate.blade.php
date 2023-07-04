@extends('layouts.template')

@section('content')

<form method="POST" action="/updatetemplate">
	@csrf
	<h3>Edit Template</h3>
	<div class="form-group">
		
		<label class="form-control-label">Template Name</label>
		<input type="hidden" name="template_id" value="{{ $template->id}}">
		<input type="text" name="template_name" value="{{ $template->template_name}}">
		
	</div>
	<button class="btn btn-primary">Update Template Name</button>
</form>

@endsection