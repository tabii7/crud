<?php

namespace App\Http\Controllers;
use App\APImodel;
use Illuminate\Http\Request;

class APIController extends Controller
{
   public function index(Request $request){
    
    $student=APImodel::all();
    return response()->json($student);

   }

   public function create(Request $request){

    $student = new APImodel();
    $student->fname = $request->input('fname');
    $student->email = $request->input('email');
    $student->address = $request->input('address');
    $student->save();
    return response()->json($student);
   }

   public function update(Request $request , $id){

    $student = APImodel::findOrFail($id);
    $student->fname = $request->input('fname');
    $student->email = $request->input('email');
    $student->address = $request->input('address');
    $student->save();
    return response()->json($student);
   }
   public function show($id){

    $student = APImodel::findOrFail($id);
    
    return response()->json($student);
   }
   public function destroy($id){

    $student = APImodel::findOrFail($id);
if($student->delete()){
    return response()->json($student);
   }}

}
