<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('product_code', 'product_name', 'type', 'cost', 'wholesale_price', 'retail_price', 'status', 'file', 'parent_id');
    protected $dates = ['deleted_at'];

   
}
