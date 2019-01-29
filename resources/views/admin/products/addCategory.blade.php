@extends('admin.index')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"> The Loai</h3>
	</div>
	<div class="panel-body">			  			    
    	<form class = "form-horizontal" action="" method="POST" role="form">
    		<div class="form-group">
		    <label for="" class="col-sm-2  control-label">Category</label>
		    <div class="col-sm-4">
		    	<input type="hidden" class="form-control" id = "id" name="id" value="">
		      	<input type="text" class="form-control" id="catName" name ="catName" value="" placeholder="Category name">
		    </div>
		    <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name = "submit" class="btn btn-primary" style="margin: 10px">Insert</button>
		    </div>
		</div>
    	</form>
	</div>
</div>
@stop