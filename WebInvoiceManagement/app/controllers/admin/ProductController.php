<?php

class ProductController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Product::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.product.import.index')->with(compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.product.import.create');
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
			'product_name' => 'required',
		);
		$validator = Validator::make($input,$rules);
		if($validator->fails()) {
			return Redirect::action('ProductController@create')
				->withErrors($validator);
		}else{
			if ($input['parent_id'] == '') {
        		$input['parent_id'] = null;
        	}
			CommonProduct::insertProduct($input);
			return Redirect::action('ProductController@index');
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
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = Product::find($id);
		return View::make('admin.product.import.edit')->with(compact('data'));
		
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
		$inputProduct = Product::find($id);
		$inputProduct ->update([
				'product_name'=> $input['product_name'],
				'product_code' => $input['product_code'],
				'type' => $input['type_id'],
				'cost' => $input['cost'],
				'wholesale_price' => $input['wholesale_price'],
				'retail_price' => $input['retail_price'],
				'number' => $input['number'],
				'date_import' => $input['date_import'],
			]);
		return Redirect::action('ProductController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Product::find($id)->delete();
		return Redirect::action('ProductController@index') ;
	}


}
