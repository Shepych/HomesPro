<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Personal_Project;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function create(Request $request){

        $validate=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
        ]);

        $address=[$request['country'],$request['city'],$request['street'],$request['house']];
        $name=$request['name'];
        $surname=$request['surname'];
        $en_name=str::ascii($name,'en');
        $en_surname=str::ascii($surname, 'en');
        $login=$en_name.'_'.$en_surname;
        $address_json=json_encode($address);
        if(isset($request->image)){
            $path = $request->file('image')->store('uploads','public');
        }else{
            $path = '';
        }
        if($validate) {
            User::create([
                'name' => $request['name'],
                'surname' => $request['surname'],
                'patronymic' => $request['patronymic'],
                'post' => $request['post'],
                'telephone_number' => $request['telephone_number'],
                'login' => $login,
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'status' => $request['status'],
                'photo_url' => asset('/storage/'.$path),
                'address' => $address_json
            ]);
        }
        return redirect(route('user.cabinet_profile'));
    }
    public function change_major_info(Request $request){
        $User=Auth::User();
        $previous_name=Auth::User()->name;
        $previous_surname=Auth::User()->surname;
        $previous_patronymic=Auth::User()->patronymic;
        $previous_address=json_decode(Auth::User()->address);
        $initials_array=explode(' ', $request->n_s_p);
        $address_array=explode(',', $request->c_c);
        $flag=false;
        if($previous_name!=$initials_array['1']){
            $flag=true;
            $User->name=$initials_array['1'];
        }
        if($previous_surname!=$initials_array['0']){
            $flag=true;
            $User->surname=$initials_array['0'];
        }
        if($previous_patronymic!=$initials_array['2']){
            $flag=true;
            $User->patronymic=$initials_array['2'];
        }
        if($previous_address[0]!=$address_array[0]){
            $flag=true;
            $previous_address[0]=$address_array[0];
        }
        if($previous_address[1]!=$address_array[1]){
            $flag=true;
            $previous_address[1]=$address_array[1];
        }
        $finish_address=json_encode($previous_address);
        $User->address=$finish_address;
        if($flag){
            $User->save();
        }
        return redirect(route('user.cabinet_profile'));
    }
    public function change_contact_info(Request $request){
        $User=Auth::User();
        $previous_phone=Auth::User()->telephone_number;
        $previous_email=Auth::User()->email;
        $previous_address=json_decode(Auth::User()->address);
        $address_array=explode('д.', $request->c_s_h);
        $flag=false;
        if($previous_email!=$request->email){
            $flag=true;
            $User->email=$request->email;
        }
        if($previous_phone!=$request->phone){
            $flag=true;
            $User->telephone_number=$request->phone;
        }
        if($previous_address[2]!=$address_array[0]){
            $flag=true;
            $previous_address[2]=$address_array[0];
        }
        if($previous_address[3]!=$address_array[1]){
            $flag=true;
            $previous_address[3]=$address_array[1];
        }
        $finish_address=json_encode($previous_address);
        $User->address=$finish_address;
        if($flag){
            $User->save();
        }

        return redirect(route('user.cabinet_profile'));
    }
    public function change_guard_info(Request $request){
        $User=Auth::User();
        $previos_password=Auth::User()->password;
        $password=$request->password;
        if($previos_password!=Hash::make($password)){
            $User->password=Hash::make($password);
            $User->save();
        }
        return redirect(route('user.cabinet_profile'));
    }
    public function change_access(Request $request){
        $accesses=Access::all()->where('id', $request['id']);
        foreach($accesses as $access){
            $access->access_type=$request['access_type'];
            $access->save();
        }
        return redirect(route('user.cabinet_users_list'));
    }
    public function add_access(Request $request){
        $users=User::all()->where('login', $request['login']);
        foreach($users as $user){
            $user_id=$user['id'];
        }
        $personal_projects=Personal_Project::all()->where('name', $request['personal_project_name']);
        foreach($personal_projects as $personal_project){
            $personal_project_id=$personal_project['id'];
        }
        $access_type=$request['access_type'];
        $accesses_id=Access::create([
            'user_id' => $user_id,
            'personal_project_id' => $personal_project_id,
            'access_type' => $access_type
        ])->get();

        foreach($users as $user){
            $accesses=json_decode($user['accesses']);
            foreach ($accesses_id as $access){
                $access_id=$access['id'];
            }

            array_push($accesses, $access_id);
            $user['accesses']=json_encode($accesses);
            $user->save();
        }

        return redirect(route('user.cabinet_users_list'));
    }
    public function delete(Request $request){
        $users=User::all()->where('login', $request['login']);
        foreach($users as $user){
            $user->delete();
        }
        return redirect(route('user.cabinet_users_list'));
    }
}

