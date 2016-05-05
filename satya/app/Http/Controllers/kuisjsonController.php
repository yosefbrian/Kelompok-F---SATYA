<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pertanyaan;

use Response;
use Input;


class kuisjsonController extends Controller
{
    	public function getPertanyaan()
	{
		$pertanyaan=Pertanyaan::all();
		return $pertanyaan;
	}

	// public function index()
	// {
	// 	return view('todos.index');
	// }

	
	// public function create()
	// {
		
	// }

	// public function store()
	// {
	// 	$input=[
	// 		'name'=>Input::get('name'),
	// 		'status'=>0,
	// 	];
	// 	Task::create($input);
	// 	$data = ['success' => true, 'msg' => 'successfully added'];
 //        return Response::json($data, 200);
	// }

	
	// public function show($id)
	// {
		
	// }

	
	// public function edit($id)
	// {
	// 	$todo=Task::find($id);
	// 	return $todo;
	// }

	
	// public function update($id)
	// {
	// 	$input=[
	// 			'name'=>Input::get('name'),
	// 			'status'=>Input::get('status'),
	// 	];
	// 	Task::find($id)->update($input);
	// 	$data = ['success' => true, 'msg' => 'update success'];
	// 	return Response::json($data, 200);
	// }


	// public function destroy($id)
	// {
	// 	$todo=Task::find($id)->delete();
	// 	$data = ['success' => true, 'msg' => 'delete successfully'];
	// 	return Response::json($data, 200);
		
	// }
}
