<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index() {
      // return view('tasks.index', ['tasks', Task::all()]);
    //	$tasks = Task::table('tasks')->get();
    //return view('tasks.index')->with('news', News::all());
    //	return view('tasks.index', ['news' => News::all()]);
    	$tasks = DB::table('tasks')->get();
       // $tasks = DB::select('select * from tasks');
    	//$tasks = Task::where('id', 1)->get();
    return view('tasks.index', ['tasks' => $tasks]);
      
    }

    public function show(Task $id) {
      
   return view('tasks.show', ['tasks' => Task::findOrFail($id)]);

    }
   public function save(Request $request) {
   // $tasks = new Task();
 // $tasks->body = $request->input('body');
  //  return redirect('tasks');

    if($request->isMethod('POST')){
        $tasks = DB::table('tasks')->insert(['body' => $request->post('name')]);
    };
    
    return redirect('/');
   // return view('tasks.index', ['tasks' => $tasks]);

   // $tasks = DB::insert('insert into tasks (body) value (?)', ['']);
    //$tasks = DB::table('tasks')->insert(['body' => $tasks]);
   // return view('tasks.index', ['tasks' => $tasks]);
     return view('tasks.index', ['tasks' => Task::all()]);
   }

   public function destroy($id) {
    //$tasks = DB::table('tasks')->delete();
    Task::find($id)->delete();
    return redirect('/');
    return view('tasks.index', ['id' => $tasks]);
   }

}