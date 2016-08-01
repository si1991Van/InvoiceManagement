<?php
class CommonImportBill {
	
	public static function getNameBill()
	{
		$data = Product::lists('product_name', 'id');
		return $data;
	}

	

}