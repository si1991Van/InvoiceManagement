<?php
class CommonProduct {
	public static function insertProduct($input){
		$inputProduct = [
				'parent_id' => $input['parent_id'],
				'product_name'=> $input['product_name'],
				'product_code' => $input['product_code'],
				'type' => $input['type_id'],
				'cost' => $input['cost'],
				'wholesale_price' => $input['wholesale_price'],
				'retail_price' => $input['retail_price'],
			];
			Product::create($inputProduct);
	}
	public static function getNameType($id){
		return Type::find($id)->name;
	}

	public static function getNameOption($model, $value)
	{
		$parent_id = $model::find($value->id)->parent_id;
		if ($parent_id) {
			return $model::find($parent_id)->product_name;
		}
		return null;
	}

}