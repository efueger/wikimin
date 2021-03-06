<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\Program;
use App\Candidate;
class ProgramController extends Controller
{
    //
    public function index($id) {
      $programs = Candidate::find($id)->programs;
      return view('program.index',compact('programs'));
    }

    public function create($id)  {
      return view('program.create',compact('id'));
    }

    public function store(Request $request)  {
      $id = Input::get('id');
      $programs = Input::get('program');
      $sources = Input::get('source');

      for($i = 0; $i < count($programs); $i++)  {
        $program = new Program();
        $program->candidate_id = $id;
        $program->value = $programs[$i];
        $program->source = $sources[$i];
        $program->save();
      }
      return redirect("/program/$id");
    }

    public function edit($id)  {
      $program = Program::find($id);
      return view('program.edit',compact('program'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
      $program = Program::find($id);
      $program->delete();

      return back();
    }
}
