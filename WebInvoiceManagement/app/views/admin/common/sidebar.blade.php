<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="treeview">
				<a href="#"><i class="fa fa-list"></i> <span>Quản lý sản phẩm</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="{{ action('ProductController@index') }}"><i class="fa fa-circle-o"></i> <span>Nhập hàng</span></a></li>
					<li><a href="{{ action('SellController@index') }}"><i class="fa fa-circle-o"></i> <span>Bán hàng</span></a></li>
					<li><a href="{{ action('TypeController@index') }}"><i class="fa fa-circle-o"></i> <span>Loại sản phẩm</span></a></li>
					<li><a href="{{ action('ImportBillController@index') }}"><i class="fa fa-circle-o"></i> <span>Nhập phiếu</span></a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-list"></i> <span>Quản lý khách hàng</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="{{ action('CustomerController@index') }}"><i class="fa fa-circle-o"></i> <span>Khách hàng</span></a></li>
					<li><a href="{{ action('GroupCustomerController@index') }}"><i class="fa fa-circle-o"></i> <span>Nhóm khách hàng</span></a></li>
				</ul>
			</li>
			
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>