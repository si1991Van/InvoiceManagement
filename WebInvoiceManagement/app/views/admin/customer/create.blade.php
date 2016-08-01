@extends('admin.layout.default')
@section('title')
{{ $title='Thêm mới khách hàng' }}
@stop

@section('content')

<div class="row margin-bottom">
  <div class="col-xs-12">
    <a href="{{ action('CustomerController@index') }}" class="btn btn-success">Danh sách</a>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
        <!-- form start -->
        {{ Form::open(array('action' => 'CustomerController@store', 'files'=> true)) }}
          <div class="box-body">
            <div class="form-group">
              <label for="username">Tên KH</label>
              <div class="row">
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="name" placeholder="Tên" name="name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Mã KH</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="code" placeholder="Mã" name="code">
                    </div>
               </div>
            </div>
            <div class="form-group">
              <label>Nhóm khách hàng</label>
               <div class="row">
                    <div class="col-sm-6">
                        {{ Form::select('group_id', GroupCustomer::lists('name', 'id'), null, array('class' => 'form-control')) }}
                    </div>
               </div>
            </div>
            <div class="form-group">
              <label>Số điện thoại</label>
               <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
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
