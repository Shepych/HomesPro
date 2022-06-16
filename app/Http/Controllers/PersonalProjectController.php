<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Personal_Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PersonalProjectController extends Controller
{
    public function generate(Request $request){
        $personal_projects=Personal_Project::all()->where('id',$request['id']);
        foreach ($personal_projects as $personal_project){
            $steps_array=json_decode($personal_project['steps']);
            $dates_array=[];
            $today=date('d').".".date('m').".".date("Y");
            $start=explode("-", $personal_project['start']);
            $end=explode('-', $personal_project['end']);
            $control=explode('-', $personal_project['control']);
            array_push($dates_array, ($start[2].".".$start[1].".".$start[0]));
            array_push($dates_array, ($control[2].".".$control[1].".".$control[0    ]));
            array_push($dates_array, ($end[2].".".$end[1].".".$end[0]));
            if($steps_array) {
                foreach ($steps_array as $step) {
                    array_push($dates_array, $step->start);
                    array_push($dates_array, $step->end);
                    foreach ($step->comments as $comment) {
                        array_push($dates_array, $comment->day);
                    }
                }
            }
        }
        $dates_sorted=[];
        foreach ($dates_array as $date){
            $date_to_date=strtotime($date);
            array_push($dates_sorted, date('Y-m-d',$date_to_date));
        }
        sort($dates_sorted);
        $dates_array=array_unique($dates_array);
        $user_accesses_json=Auth::User()->accesses;
        $user_accesses_array=json_decode($user_accesses_json);
        foreach ($user_accesses_array as $user_access){
            $database_accesses=Access::all()->where('id', $user_access);
            foreach ($database_accesses as $database_access) {
                if($database_access['personal_project_id']==$request['id']){
                    $access_type=$database_access['access_type'];
                }
            }
        }
        $employee_name='';
        foreach($personal_projects as $personal_project){
            $architector_id=$personal_project['architector_id'];
            $employees=User::all()->where('id', $architector_id);
            foreach($employees as $employee){
                $architector_login=$employee['login'];
            }
        }

        if((Auth::User()->status=='admin')||($access_type=='redact')){
            return view('cabinet.personal_project_redact', [
                'personal_projects' => $personal_projects,
                'steps_array' => $steps_array,
                'dates_array' => $dates_sorted,
                'architector_login' => $architector_login
            ]);
        }

        if($access_type=='watch'){
            return view('cabinet.personal_project_watch', [
                'personal_projects' => $personal_projects,
                'architector_login' => $architector_login,
                'steps' => $steps_array,
                'dates_array' => $dates_sorted,
            ]);
        }
    }
    public function create(Request $request){
        $employees=User::all()->where('login', $request['employee_login']);
        $customers=User::all()->where('login', $request['customer_login']);
        foreach($employees as $employee){
            $employee_id=$employee['id'];
        }

        foreach($customers as $customer){
            $customer_id=$customer['id'];
        }

        $pp_creating_result=Personal_Project::create([
            'name' => $request['name'],
            'architector_id' => $employee_id,
            'birth_day' => date('Y-m-d')
        ])->id;

        $personal_project_id=$pp_creating_result;

        $access_creating_result=Access::create([
            'user_id' => $customer_id,
            'personal_project_id' => $personal_project_id,
            'access_type' => 'watch'
        ]);

        $access_creating_result=Access::create([
            'user_id' => $employee_id,
            'personal_project_id' => $personal_project_id,
            'access_type' => 'redact'
        ]);

    }
    public function add_stage(Request $request){
        $personal_projects=Personal_Project::all()->where('id', $request['id']);
        foreach($personal_projects as $personal_project){
        }
    }

    public function change_stage(Request $request){

    }

    public function add_stage_comment(Request $request){

    }
    public function change_main_info(Request $request){
        $personal_projects=Personal_Project::all()->where('id', $request['id']);
        $architectors=User::all()->where('login', $request['employee']);
        foreach($personal_projects as $personal_project){
            if($personal_project->name!=$request['name']){
                $personal_project->name=$request['name'];
            }
            if($personal_project->contract_number!=$request['contract_number']){
                $personal_project->contract_number=$request['contract_number'];
            }
            if($personal_project->square!=$request['square']){
                $personal_project->square=$request['square'];
            }
            if($personal_project->price!=$request['price']){
                $personal_project->price=$request['price'];
            }
            if($personal_project->start!=$request['start']){
                $personal_project->start=$request['start'];
            }
            if($personal_project->control!=$request['control']){
                $personal_project->control=$request['control'];
            }
            if($personal_project->end!=$request['end']){
                $personal_project->end=$request['end'];
            }
            foreach($architectors as $architector){
                if($personal_project->architector_id!=$architector['id']){
                    $personal_project->architector_id=$architector['id'];
                }
            }
            $personal_project->save();
        }
        return redirect('/cabinet/personal_project?id='.$request['id']);
    }
}
