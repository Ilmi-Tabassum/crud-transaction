
//
//namespace App\Http\Controllers;
//
//use App\Models\State;
//use Illuminate\Http\Request;
//use DB;
//class JelaController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//
//    public function getStateList()
//    {
//        $states = DB::select(DB::raw("
//            SELECT *
//            FROM thana"));
//
//      return view('thana')->with(["states" => $thana]);
//    }
//}
//
