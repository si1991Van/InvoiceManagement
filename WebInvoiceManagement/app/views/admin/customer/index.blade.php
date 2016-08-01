@extends('admin.layout.default')

@section('title')
{{ $title='Quản lý Khách hàng' }}
@stop

@section('content')
<div class="row margin-bottom">
	<div class="col-xs-12">
	<a href="{{ action('CustomerController@create') }}" class="btn btn-primary">Thêm mới</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách Khách hàng</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tr>
						<th>ID</th>
						<th>Mã KH</th>	
						<th>Tên KH</th>
						<th>Số điện thoại</th>
						<th>Nhóm khách hàng</th>
						<th>Action</th>
					</tr>
					@foreach($data as $key => $value)
					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->code }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->phone }}</td>
						<td>{{ CommonCustomer::getNameGroup($value->group) }}</td>
						<td>
							<a href="{{ action('CustomerController@edit', $value->id) }}" class="btn btn-primary">Sửa</a>
							{{ Form::open(array('method'=>'DELETE', 'action' => array('CustomerController@destroy', $value->id), 'style' => 'display: inline-block;')) }}
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

