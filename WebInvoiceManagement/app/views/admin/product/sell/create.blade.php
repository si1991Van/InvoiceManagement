@extends('admin.layout.default')
@section('title')
{{ $title='Thêm mới sản phẩm' }}
@stop

@section('content')

<div class="row margin-bottom">
  <div class="col-xs-12">
    <a href="{{ action('SellController@index') }}" class="btn btn-success">Danh sách</a>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
        <!-- form start -->
        {{ Form::open(array('action' => 'SellController@store', 'files'=> true)) }}
          <div class="box-body">
            <div class="form-group">
               <label>Loại sản phẩm</label>
                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::select('type_id', Type::lists('name', 'id'), null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label for="username">Tên </label>
              <div class="row">
              	<div class="col-sm-6">
                	{{ Form::text('product_name', null, array('class' => 'form-control', 'id' => 'product_name')) }}
                </div>
              </div>
            </div>
            <!-- <div class="form-group">
              <label>Nhóm khách hàng</label>
               <div class="row">
                    <div class="col-sm-6">
                        {{ Form::text('product_name', null, array('class' => 'form-control', 'id' => 'product_name')) }}
                    </div>
               </div>
            </div> -->
            <div class="form-group">
               <label for="linkFile">Giá bán</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cost" placeholder="Giá gốc" name="cost">
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Số lượng</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="number" placeholder="Số lượng" name="number">
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Ngày bán</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="date_import" class="form-control" id="datepickerStartdate" placeholder="Ngày nhập" />
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label for="linkFile">Thành tiền</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="date_import" class="form-control" id="datepickerStartdate" placeholder="Ngày nhập" />
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
