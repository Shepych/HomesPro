<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Personal_Project;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\BreadSlicesController;
use Illuminate\Support\Facades\DB;

class CabinetController extends Controller
{
    public function generate_profile(Request $request){
        return view('cabinet.user_profile');
    }

    public function generate_users_list(Request $request){
        # Определяем переменные
        $users = User::all();
        $customers = [];
        $employees = [];

        # Делаем разбиение таблицы `Users` на 2 массива: Клиентов и Сотрудников
        foreach ($users as $user) {
            if ($user->hasRole('customer')) {
                $customers[] = $user;
            }

            if ($user->hasRole('employee')) {
                $employees[] = $user;
            }
        }

        return view('cabinet.users_list',[
                'customers' => $customers,
                'employees' => $employees
            ]);
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
