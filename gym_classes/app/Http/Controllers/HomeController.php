<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User as User;
use Illuminate\Http\Request;
use App\Current_classes;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        if (Auth::user()->admin == 0) {
          $curent_classes = Current_classes::all();
          return view('home', array('curent_classes' => $curent_classes ));
        }
        else if (Auth::user()->admin == 1) {
          return view('admin');
        }
      }
      else{
        return ('/');
      }
    }

    public function create_date(Request $request){

      $this->validate($request, array(
        'current_classes_monday_date' => 'required|max:250'
      ));

      $current_classes = new Current_classes;

      $current_classes->id = 10  ;
      $current_classes->current_classes_date = $request->current_classes_monday_date;
      $current_classes->current_classes_hours = $request->current_classes_monday_hours;
      $current_classes->save();

      return view("admin");

    }


    //FUNÇÕES PARA ATUALIZAR AS DATAS E AS HORAS A APRESENTAR NA HOME PAGE DOS CLIENTES
    public function update_date_monday(Request $request){

      $id_date = Current_classes::find(0); //id da segunda feira
      $id_date->current_classes_date = $request->current_classes_monday_date;
      $id_date->current_classes_hours = $request->current_classes_monday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_tuesday(Request $request){

      $id_date = Current_classes::find(1);
      $id_date->current_classes_date = $request->current_classes_tuesday_date;
      $id_date->current_classes_hours = $request->current_classes_tuesday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_wednesday(Request $request){

      $id_date = Current_classes::find(2);
      $id_date->current_classes_date = $request->current_classes_wednesday_date;
      $id_date->current_classes_hours = $request->current_classes_wednesday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_thursday(Request $request){

      $id_date = Current_classes::find(3);
      $id_date->current_classes_date = $request->current_classes_thursday_date;
      $id_date->current_classes_hours = $request->current_classes_thursday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_friday(Request $request){

      $id_date = Current_classes::find(4);
      $id_date->current_classes_date = $request->current_classes_friday_date;
      $id_date->current_classes_hours = $request->current_classes_friday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_saturday(Request $request){

      $id_date = Current_classes::find(5);
      $id_date->current_classes_date = $request->current_classes_saturday_date;
      $id_date->current_classes_hours = $request->current_classes_saturday_hours;
      $id_date->save();

      return view("admin");
    }

    public function update_date_sunday(Request $request){

      $id_date = Current_classes::find(6);
      $id_date->current_classes_date = $request->current_classes_sunday_date;
      $id_date->current_classes_hours = $request->current_classes_sunday_hours;
      $id_date->save();

      return view("admin");
    }








    public function search_user(Request $request){
      $id = $request->id_person_change;
      $persons = User::find($id);
      return view('admin', array('persons' => $persons));
    }


    public function delete_user(Request $request){
      $id = $request->id_person_change;
      $persons = User::find($id)->delete();
      $persons->delete();
      return view('admin');




    }

}
