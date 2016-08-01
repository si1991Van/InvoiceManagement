<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class GroupCustomer extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'group_customer';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'code', 'price_policy');
    protected $dates = ['deleted_at'];

   
}
