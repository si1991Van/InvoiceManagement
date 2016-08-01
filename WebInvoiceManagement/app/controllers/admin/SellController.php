<?php

class SellController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Sell::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.product.sell.index')->with(compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.product.sell.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $input = Input::except('_token');
		// $rules = array(
		// 	'name' => 'required',
		// );
		// $validator = Validator::make($input,$rules);
		// if($validator->fails()) {
		// 	return Redirect::action('CustomerController@create')
		// 		->withErrors($validator);
		// }else{
		// 	$inputGroup = [
		// 		'pro'=> $input['pro'],
		// 		'code' => $input['code'],
		// 		'price_policy' => $input['price_policy'],
		// 	];
		// 	GroupCustomer::create($inputGroup);
		// 	return Redirect::action('CustomerController@index');
		}
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


}
