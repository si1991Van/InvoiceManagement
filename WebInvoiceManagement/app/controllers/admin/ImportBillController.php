<?php

class ImportBillController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = ImportBill::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.product.bill.index')->with(compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$list = ImportBill::lists('name_id');
		$data = Product::whereNotIn('id', $list)->lists('product_name');
		return View::make('admin.product.bill.create')->with(compact('data'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create bill(code, type) and get id; $billId (import-->type = 1, export-->type =2)
		//history_import: bill_id, product_id, quantity, price, date_import

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function assignImportBill()
	{
		$importBillKey = Input::get('importBillKey');
		// dd($importBillKey);
		return View::make('admin.product.bill.assign_bill')->with(compact('abc'));
	}

}
