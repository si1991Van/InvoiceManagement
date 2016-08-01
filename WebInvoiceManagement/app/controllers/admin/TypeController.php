<?php

class TypeController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Type::orderBy('id', 'desc')->paginate(PAGINATE);
		return View::make('admin.product.type.index')->with(compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.product.type.create');

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
			return Redirect::action('TypeController@create')
				->withErrors($validator);
		}else{
			$inputType = [
				'name'=> $input['name'],
			];
			Type::create($inputType);
			return Redirect::action('TypeController@index');
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
		$data = Type::find($id);
		return View::make('admin.product.type.edit')->with(compact('data'));
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
		$inputType = Type::find($id);
		$inputType->update([
			'name'=> $input['name'],
		]);
		return Redirect::action('TypeController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Type::find($id)->delete();
		return Redirect::action('TypeController@index') ;
	}


}
