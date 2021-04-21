<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index() {

    	$tasks = DB::table('tasks')->get();

    return view('tasks.index', ['tasks' => $tasks]);

    }

    public function show(Task $id) {

   return view('tasks.show', ['tasks' => Task::findOrFail($id)]);

    }
   public function save(Request $request) {


    if($request->isMethod('POST')){
        $tasks = DB::table('tasks')->insert(['body' => $request->post('name')]);
    };

    return redirect('/');

     return view('tasks.index', ['tasks' => Task::all()]);
   }

   public function destroy($id) {
    //$tasks = DB::table('tasks')->delete();
    Task::find($id)->delete();
    return redirect('/');
    return view('tasks.index', ['id' => $tasks]);
   }

}
