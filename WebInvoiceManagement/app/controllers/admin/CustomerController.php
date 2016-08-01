<?php

class CustomerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Customer::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.customer.index')->with(compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.customer.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('_token');
		$rules = array(
			'name' => 'required',
		);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('CustomerController@create')
				->withErrors($validator);
		}else{
			CommonCustomer::insertCustomer($input);
			return Redirect::action('CustomerController@index');
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
		$data = Customer::find($id);
		return View::make('admin.customer.edit')->with(compact('data'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::except('_token');
		$inputProduct = Customer::find($id);
		$inputProduct ->update([
				'name'=> $input['name'],
				'code' => $input['code'],
				'phone' => $input['phone'],
				'group' => $input['group_id'],
			]);
		return Redirect::action('CustomerController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customer::find($id)->delete();
		return Redirect::action('CustomerController@index') ;
	}


}
