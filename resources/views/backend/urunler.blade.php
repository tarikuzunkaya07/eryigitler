@extends('backend.default')
@section('title')
<p>ÜRÜNLER</p>
@endsection
@section('content')
	<form  action="{{ action('FileUploadController@store') }}" method="POST" enctype="multipart/form-data">
		<div class="col-md-8">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="productName">Ürün Adı</label>
				<input type="text" name="name" id="productName" class="form-control" placeholder="Ürün Adı" required>
			</div>
			<div class="form-group">
				<label for="productDesc">Ürün Açıklaması</label>
				<textarea class="form-control" id="productDesc" rows="11" name="description" required></textarea>
			</div>
				<label for="imgInput">Ürün Resmi</label>
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
					<div class="form-control" data-trigger="fileinput">
						<i class="glyphicon glyphicon-file fileinput-exists"></i> 
						<span class="fileinput-filename"></span>
					</div>
					<span class="input-group-addon btn btn-default btn-file">
						<span class="fileinput-new">Dosya Seç</span>
						<span class="fileinput-exists">Değiştir</span>
						<input type="file" name="img" id="imgInput" required>
					</span>
					<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a>
				</div>
			<div class="">
				<button class="btn btn-primary" id="btnSubmit" type="submit">Kaydet</button>
			</div>
		</div>
	</form>
@endsection