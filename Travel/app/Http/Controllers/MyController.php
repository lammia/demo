<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use View;
use Illuminate\Support\MessageBag;
class MyController extends Controller
{
  public function getForm(){
  	return view('login');
	}
}
?>