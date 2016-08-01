<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Sell extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sells';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('product_code', 'product_name', 'type', 'cost', 'wholesale_price', 'retail_price', 'status', 'file', 'number', 'date_import');
    protected $dates = ['deleted_at'];

   
}
