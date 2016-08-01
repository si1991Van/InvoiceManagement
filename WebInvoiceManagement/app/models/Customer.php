<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Customer extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customers';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'code', 'phone', 'group', 'total_number');
    protected $dates = ['deleted_at'];

   
}
