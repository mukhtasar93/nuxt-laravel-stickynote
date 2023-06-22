<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        if($notes->count() > 0){
        return response()->json([
            'status' => 200,
            'notes' => $notes
        ], 200);
    } else {
        return response()->json([
            'status' => 404,
            'notes' => 'No Records Found.'
        ], 404);

    }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $note = Note::create([
            'title' => $request ->title,
            'content' => $request ->content
        ]);

        if($note){
            return response()->json([
                'status' => 200,
                'message' => "Note Created Successfully."
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Something Went Wrong."
            ], 500);
        }

    }

    public function show($id)
    {
        $note = Note::find($id);
        if($note){
            return response()->json([
                'status' => 200,
                'student' => $note
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No Sucuh Note Found."
            ], 404);
        }

    }

    public function edit($id)
    {
        $note = Note::find($id);
        if($note){
            return response()->json([
                'status' => 200,
                'note' => $note
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No Sucuh Note Found."
            ], 404);
        }

    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        
        $note = Note::find($id);
        
        if($note){
            $note->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
            return response()->json([
                'status' => 200,
                'message' => "Note Updated Successfully."
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "No Sucuh Note Found."
            ], 500);
        }

    }

    public function destroy($id)
    {
        $note = Note::find($id);
        if($note){
            $note->delete();
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No Sucuh Note Found."
            ], 404);
        }
        
        return new NoteResource($note);
    }
}