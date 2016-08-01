@extends('admin.layout.default')
@section('title')
{{ $title='Sửa thông tin đối tác' }}
@stop

@section('content')

<div class="row margin-bottom">
  <div class="col-xs-12">
    <a href="{{ action('ProductController@index') }}" class="btn btn-success">Danh sách</a>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
        <!-- form start -->
        {{ Form::open(array('action' => array('ProductController@update', $data->id), 'method' => 'PUT')) }}
          <div class="box-body">
            <div class="form-group">
              <label for="username">Tên</label>
              <div class="row">
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="product_name" value="{{ $data->product_name }}" name="product_name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Mã sản phẩm</label>
              <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" value="{{ $data->product_code }}" name="product_code">
                </div>
              </div>
            </div>
             <div class="form-group">
              <label>Loại</label>
               <div class="row">
                    <div class="col-sm-6">
                        {{ Form::select('type_id', Type::lists('name', 'id'), $data->type, array('class' => 'form-control')) }}
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Giá gốc</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cost" value="{{ $data->cost }}" name="cost">
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Giá sỉ</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="wholesale_price" value="{{ $data->wholesale_price }}" name="wholesale_price">
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Giá lẻ</label>
               <div class="row">
                    <div class="col-sm-6">
                       <input type="text" class="form-control" id="retail_price" value="{{ $data->retail_price }}" name="retail_price">
                    </div>
               </div>
            </div>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Lưu lại" />
            <input type="reset" class="btn btn-default" value="Nhập lại" />
          </div>
        {{ Form::close() }}
      </div>
      <!-- /.box -->
	</div>
</div>

@stop
