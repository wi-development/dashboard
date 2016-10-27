<?php
namespace WI\Dashboard;
use App\Http\Controllers\Controller;
use Exception;
use WI\User\User;

class DashboardController extends Controller {


  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
	//  return redirect()->route('admin::chart.all.index');
  	$users = User::all();
    return view('dashboard::index',compact('users'));
  }
}