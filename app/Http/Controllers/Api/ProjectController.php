<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$projects = Project::all();
		return response()->json([
			'success' => true,
			'data' => $projects
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'body' => 'required',
			'numz' => 'required'
		]);
	
		Project::create($request->all());

		return response()->json([
			'success' => true,
			// 'data' => $post->toArray()
		]);

		// $this->validate($request, [
		//     'title' => 'required',
		//     'description' => 'required'
		// ]);

		// $post = new Post();
		// $post->title = $request->title;
		// $post->description = $request->description;

		// if (auth()->user()->posts()->save($post))
		//     return response()->json([
		//         'success' => true,
		//         'data' => $post->toArray()
		//     ]);
		// else
		//     return response()->json([
		//         'success' => false,
		//         'message' => 'Post not added'
		//     ], 500);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
		$request->validate([
			'name' => 'required',
			'body' => 'required',
			'numz' => 'required'
		]);
		$rez =  Project::where('id', $id)->update($request->all());
		return response()->json([
			'success' => true,
			'method' => 'update',
			'id' => $id,
			'rez'=>$rez
			// 'data' => $post->toArray()
		]);
		// $project->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
