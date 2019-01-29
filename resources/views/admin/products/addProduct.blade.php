@extends('admin.index')
@section('content')
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">San pham</h3>
	</div>
	<div class="panel-body">			  			    
    	<form class = "form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
    		<div class="form-group">
			    <label for="" class="col-sm-2  control-label">pro_name:</label>
			    <div class="col-sm-6">
			      	<input type="text" class="form-control" id="pro_name" name ="pro_name" value="<?php echo isset($data[1])?$data[1]:"" ?>" placeholder="Product name">
			    </div>	    
		    </div>
		    <div class="form-group">
			    <label for="" class="col-sm-2  control-label">Cat_id:</label>
			    <div class="col-sm-6">
			      	<select class="form-control" id="category" name="category">
			      		<option value="">-----Category id-----</option>
			      		<!-- <option value="1">1</option>
			      		<option value="2">2</option>
			      		<option value="3">3</option>
			      		<option value="4">4</option> -->
			      	</select>
			    </div>		    
		    </div>
		    <div class="form-group">
		    	<label for="" class="col-sm-2  control-label">Price:</label>
		    	<div class="col-sm-6">
			      	<input type="text" class="form-control" id="price" name ="price" value="" placeholder="price">
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="" class="col-sm-2  control-label">image:</label>
		    	<div class="col-sm-6">
		    		<img src="" alt="" width="30">
			      	<input type="file" name="avata" id="avata">
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="" class="col-sm-2  control-label">description:</label>
		    	<div class="col-sm-6">
			      	<textarea name="description" id="description" class="form-control" rows="5" cols="50"></textarea>
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="" class="col-sm-2  control-label">metakey:</label>
		    	<div class="col-sm-6">
			      	<input type="text" class="form-control" id="metakey" name ="metakey" value="" placeholder="metakey">
			    </div>
		    </div>
		    <div class="form-group">
		    	<label for="" class="col-sm-2  control-label">metadescription:</label>
		    	<div class="col-sm-6">
			      	<input type="text" class="form-control" id="metades" name ="metades" value="" placeholder="metakey">
			    </div>
		    </div>
		    <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name = "submit" class="btn btn-primary">Insert</button>
			      <button type="submit" name = "back" class="btn btn-primary">Back</button>
			    </div>
			</div>
    	</form>
	</div>
</div>
@stop