@if(Session::has('success'))
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<p>
		<strong>
			<i class="ace-icon fa fa-check"></i>
			Well done!
		</strong>
		{{ Session::get('success') }}		
	</p>
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>

	<strong>
		<i class="ace-icon fa fa-times"></i>
		Ops!
	</strong>
	{{ Session::get('warning') }}
	<br>
</div>
@endif