<?php
class CommonCustomer {

	public static function insertGroup($input){
		$inputGroup = [
				'name'=> $input['name'],
				'code' => $input['code'],
				'price_policy' => $input['price_policy'],
			];
			GroupCustomer::create($inputGroup);
	}
	public static function insertCustomer($input){
		$inputGroup = [
				'name'=> $input['name'],
				'code' => $input['code'],
				'phone' => $input['phone'],
				'group' => $input['group_id'],
			];
			Customer::create($inputGroup);
	}
	public static function getPricePolicyText($type_extend)
	{
		$array = self::getPricePolicy();
		return $array[$type_extend];
	}
	public static function getPricePolicy()
	{
		return array(
			PRICE_POLICY_1 => 'Giá sỉ',
			PRICE_POLICY_2 => 'Giá lẻ',
		);
	}
	public static function getNameGroup($id){
		$data = GroupCustomer::find($id)->name;
		return $data;
	}
}