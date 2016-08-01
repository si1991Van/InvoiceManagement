@extends('admin.layout.default')
@section('title')
{{ $title='Thêm mới sản phẩm' }}
@stop

@section('content')
@include('admin.product.bill.script')
<div class="row margin-bottom">
  <div class="col-xs-12">
    <a href="{{ action('ImportBillController@index') }}" class="btn btn-success">Danh sách</a>
  </div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
        <!-- form start -->
        {{ Form::open(array('action' => 'ImportBillController@store', 'files'=> true)) }}
          <div class="box-body">
            <div class="form-group">
              <label for="username">Ma phieu </label>
              <div class="row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="product_name" placeholder="Ma phieu" name="code">
                </div>
              </div>
            </div>
            <table class="table table-hover" id = "table" >
              <tr>
                
                <th>Tên SP</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Action</th>
              </tr>
              @include('admin.product.bill.assign_bill')
            </table>
          <!-- /.box-body -->
          <div class="box-footer" style="padding-right: 104px; text-align: right;">
            <a onclick="ImportBill()" class="assignBtn">Thêm san pham</a>
          </div>
          <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Nhập hàng" />
            <a href="{{ action('ImportBillController@index') }}" class="btn btn-primary">Bỏ qua</a>
          </div>
        {{ Form::close() }}
      </div>
      <!-- /.box -->
	</div>
</div>

@stop
