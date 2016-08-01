<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ImportBill extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'import_bills';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'code', 'date_import');
    protected $dates = ['deleted_at'];

   
}
