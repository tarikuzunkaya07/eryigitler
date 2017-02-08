@extends('backend.default')
@section('title')
<p>ÜRÜNLER</p>
@endsection
@section('content')
	<form  action="{{ action('FileUploadController@store') }}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="productName">Ürün Adı</label>
			<input type="text" name="name" id="productName" class="form-control" >
		</div>
		<div class="row col-md-6">
			<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				<div class="form-control" data-trigger="fileinput">
					<i class="glyphicon glyphicon-file fileinput-exists"></i> 
					<span class="fileinput-filename"></span>
				</div>
				<span class="input-group-addon btn btn-default btn-file">
				<span class="fileinput-new">Dosya Seç</span>
				<span class="fileinput-exists">Değiştir</span>
				<input type="file" name="img"></span>
				<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a>
			</div>
		</div>
		<div class="row col-md-12">
			<button class="btn btn-primary" id="btnSubmit" type="submit">Kaydet</button>
		</div>
	</form>
@endsection