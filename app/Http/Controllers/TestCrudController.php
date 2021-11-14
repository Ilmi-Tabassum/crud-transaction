<?php

namespace App\Http\Controllers;

use App\Models\TestCrud;
use Illuminate\Http\Request;
use DB;
class TestCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = DB::select(DB::raw("
            SELECT *
            FROM test"));

        return view('dashboard')->with(["test" => $test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

//           $name = $req->input('name');
//           $pass = $req->input('pass');
//
//           $emp = $req->input('emp');
//           $data=array('name'=>$name,"pass"=>$pass,"emp"=>$emp);
//           DB::table('test')->insert($data);
//           echo "Record inserted successfully.<br/>";
//           echo '<a href = "/dashboard">Click Here</a> to go back.';
//       }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'emp' => 'required',
            'designation' => 'required'

        ]);
        DB::table('test')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'emp' => $request->input('emp'),
            'designation' => $request->input('designation')
        ]);
        return redirect('/dashboard')->with('status', 'data inserted successfully');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\TestCrud $testCrud
     * @return \Illuminate\Http\Response
     */
    public function show(TestCrud $testCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\TestCrud $testCrud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('test')->find($id);
        return view('edit', ["data" => $data]);
    }

//    {
//        DB::table('test')->where('id', $id)->edit();
//
//        return back();
//    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TestCrud $testCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $sql = "update test set name = '$req->name' where id = '$req->id'";
        DB::statement($sql);
        session()->flash("success", "Session [" . $req->name . "] is updated successfully!");
        //return redirect()->back()->with('status','Student Updated Successfully');


        $sql = "update test set email = '$req->email' where id = '$req->id'";
        DB::statement($sql);


        $sql = "update test set designation = '$req->designation' where id = '$req->id'";
        DB::statement($sql);
        return redirect('dashboard');
    }
//        {
//            $data= DB::table('test')->find($req->id);
//
//            $data->name=$req->name;
//            //$data->pass=$req->pass;
//            $data->employee=$req->employee;
//
//            $data->save();
//            return redirect()->back()->with('status','Student Updated Successfully');
//        return $req->input();
//        }


    public function delete($id)
    {
        DB::table('test')->where('id', $id)->delete();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\TestCrud $testCrud
     * @return \Illuminate\Http\Response
     */

//    public function indexing()
//    {
//
//        $countries= countries::select('id','title')->get();
//        return $countries;
//        $countries = DB::select(DB::raw("
//            SELECT *
//            FROM countries"));
//            return $countries;
//        return view('dashboard',compact('countries'));
//
//    }
//    public function getStateList(Request $request)
//    {
//        $states = State::where("country_id",$request->country_id)->get();
//
//        return response()->json($states);
//    }
//


}


