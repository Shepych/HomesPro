<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Personal_Project;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\BreadSlicesController;

class CabinetController extends Controller
{
    public function generate_profile(Request $request){
        return view('cabinet.user_profile');
    }
    public function generate_users_list(Request $request){
        $customers=User::all()->where('status','customer');
        $employees=User::all()->where('status','employee');
        $customers_accesses=[];
        foreach ($customers as $customer){
            $accesses_of_user_full=[];
            $accesses_of_user=[];
            array_push($accesses_of_user_full, $customer['login']);
            foreach (json_decode($customer['accesses']) as $access){
                $access_link=Access::all()->where('id', $access);
                if($access_link) {
                    foreach ($access_link as $access_lim){
                        $access_id=$access_lim['id'];
                        $access_project_id=$access_lim['personal_project_id'];
                        $access_type=$access_lim['access_type'];
                    }
                    $personal_projects=Personal_Project::all()->where('id',$access_project_id);
                    foreach($personal_projects as $personal_project){
                        $project_name=$personal_project['name'];
                    }
                    $access_full=[$project_name,$access_type,$access_id];
                    array_push($accesses_of_user, $access_full);
                }
            }
            array_push($accesses_of_user_full, $accesses_of_user);
            array_push($customers_accesses,$accesses_of_user_full);
        }
        $employees_accesses=[];
        foreach ($employees as $employee) {
            $accesses_of_user_full = [];
            $accesses_of_user = [];
            array_push($accesses_of_user_full, $employee['login']);
            foreach (json_decode($employee['accesses']) as $access) {
                $access_link = Access::all()->where('id', $access);
                if ($access_link) {
                    foreach ($access_link as $access_lim) {
                        $access_id=$access_lim['id'];
                        $access_project_id = $access_lim['personal_project_id'];
                        $access_type = $access_lim['access_type'];
                    }
                    $personal_projects = Personal_Project::all()->where('id', $access_project_id);
                    foreach ($personal_projects as $personal_project) {
                        $project_name = $personal_project['name'];
                    }
                    $access_full = [$project_name, $access_type,$access_id];
                    array_push($accesses_of_user, $access_full);
                }
            }
            array_push($accesses_of_user_full, $accesses_of_user);
            array_push($employees_accesses, $accesses_of_user_full);
        }
        if((Auth::user()->status=="admin")||(Auth::user()->status=="employee")){
            return view('cabinet.users_list',[
                'customers' => $customers_accesses,
                'employees' => $employees_accesses
            ]);
        } else {
            return route('user.cabinet_profile');
        }
    }
    public function generate_personal_projects_list(Request $request){
        if(Auth::User()->status=='admin'){
            $active_projects_list = [Personal_Project::all()->where('status', 'active')];
            $overdue_projects_list = [Personal_Project::all()->where('status', 'overdue')];
            return view('cabinet.personal_projects_list', [
                'active_projects' => $active_projects_list,
                'overdue_projects' => $overdue_projects_list,
            ]);
        }
        $active_projects_list=[];
        $overdue_projects_list=[];
        foreach(json_decode(Auth::User()->accesses) as $access_key){
            $accesses=Access::all()->where('id',$access_key);
            foreach($accesses as $access){
                $project_key=$access['personal_project_id'];
            }
            $personal_projects=Personal_Project::all()->where('id', $project_key);
            foreach($personal_projects as $personal_project){
                if($personal_project['status']=='active'){
                    array_push($active_projects_list,$personal_project);
                } else {
                    array_push($overdue_projects_list,$personal_project);
                }
            }
        }
        return view('cabinet.personal_projects_list', [
            'active_projects' => $active_projects_list,
            'overdue_projects' => $overdue_projects_list
        ]);
    }
}
