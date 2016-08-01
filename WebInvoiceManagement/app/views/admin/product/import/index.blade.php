@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý sản phẩm' }}
@stop

@section('content')
<div class="row margin-bottom">
	<div class="col-xs-12">
	<a href="{{ action('ProductController@create') }}" class="btn btn-primary">Thêm mới</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách sản phẩm</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tr>
						<th>ID</th>
						<th>Mã SP</th>	
						<th>Tên SP</th>
						<th>Parent</th>
						<th>Loại</th>
						<th>Giá gốc</th>
						<th>Giá sỉ</th>
						<th>Giá lẻ</th>
						<th>Action</th>
					</tr>
					@foreach($data as $key => $value)
					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->product_code }}</td>
						<td>{{ $value->product_name }}</td>
						<td>{{ CommonProduct::getNameOption('Product', $value) }}</td>
						<td>{{ CommonProduct::getNameType($value->type) }}</td>
						<td>{{ $value->cost }}</td>
						<td>{{ $value->wholesale_price }}</td>
						<td>{{ $value->retail_price }}</td>
						<td>
							<a href="{{ action('ProductController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
							{{ Form::open(array('method'=>'DELETE', 'action' => array('ProductController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
							<button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<ul class="pagination">
			<!-- phan trang -->
			{{ $data->appends(Request::except('page'))->links() }}
		</ul>
	</div>
</div>

@stop

