<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{

	public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public static function index() {
    	$tags = Tag::all();
		return response()->json($tags);
	}

	public function show($id) {
        $tag = Tag::find($id);

        if(!$tag) {
            return response()->json([
                'message'   => 'Tag not found',
            ], 404);
        }

        return response()->json($tag);
    }

    public function store(Request $request) {
        $tag = new Tag();
        $tag->fill($request->all());
        $tag->save();

        return response()->json($tag, 201);
    }

    public function update(Request $request, $id) {
        $tag = Tag::find($id);

        if(!$tag) {
            return response()->json([
                'message'   => 'Tag with id='.$id.' not found',
            ], 404);
        }

        $tag->fill($request->all());
        $tag->save();

        return response()->json($tag);
    }

    public function destroy($id) {
        $tag = Tag::find($id);

        if(!$tag) {
            return response()->json([
                'message'   => 'Tag with id='.$id.' not found',
            ], 404);
        }

        $tag->delete();
    }

}
