<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entity\User;
use App\DAO\UserDAO;
use App\Http\Controllers\Controller;



class UserController extends Controller {
    /**
     * ユーザー登録画面表示処理。
     */
    public function go_user_register(Request $request) {
        $templatePath = "user_register";
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }
        $db = DB::connection()->getPdo();
        $assign = [];
        $assign["user"] = new User();
        $assign["db"] = $db;
        $assign["session"] = $session;
        return view($templatePath, $assign);
    }
    /**
     * ユーザー登録処理。
     */
    public function user_register(Request $request) {
        $templatePath = "user_comp";
        $isRedirect = false;
        $assign = [];
        if($request->session()){
            $session = 1;
        }else{
            $session = 0;
        }

        $user_id = $request->input("user_id");
        $job = $request->input("job");
        $screen_name = $request->input("screen_name");
        $password = $request->input("password");
        $last_name = $request->input("last_name");
        $last_name_kana = $request->input("last_name_kana");
        $first_name = $request->input("first_name");
        $first_name_kana = $request->input("first_name_kana");
        $phone_number = $request->input("phone_number");
        $email = $request->input("email");
        $prefectures = $request->input("prefectures");
        $city = $request->input("city");
        $block = $request->input("block");
        $building = $request->input("building");
        $company_name = $request->input("company_name");
        $gender = $request->input("gender");
        

        $user = new User();
        $user->setUserId($user_id);
        $user->setJob($job);
        $user->setScreenName($screen_name);
        $user->setPassword($password);
        $user->setLastName($last_name);
        $user->setLastNameKana($last_name_kana);
        $user->setFirstName($first_name);
        $user->setFirstNameKana($first_name_kana);
        $user->setPhoneNumber($phone_number);
        $user->setEmail($email);
        $user->setPrefectures($prefectures);
        $user->setCity($city);
        $user->setBlock($block);
        $user->setBuilding($building);
        $user->setCompanyName($company_name);
        $user->setGender($gender);

                
        $db = DB::connection()->getPdo();
        $userDAO = new UserDAO($db);

        $assign["user"] = $user;
        $assign["user_id"] = $user_id;
        $assign["job"] = $job;
        $assign["screen_name"] = $screen_name;
        $assign["password"] = $password;
        $assign["last_name"] = $last_name;
        $assign["last_name_kana"] = $last_name_kana;
        $assign["first_name"] = $first_name;
        $assign["first_name_kana"] = $first_name_kana;
        $assign["phone_number"] = $phone_number;
        $assign["email"] = $email;
        $assign["prefectures"] = $prefectures;
        $assign["city"] = $city;
        $assign["block"] = $block;
        $assign["building"] = $building;
        $assign["company_name"] = $company_name;
        $assign["gender"] = $gender;
        $assign["session"] = $session;
        

        $userDAO->insert($user);

        $response = view($templatePath, $assign);

        // if($isRedirect) {
        //     $response = redirect("/conp");
        // }
        // else {
        //     $response = view($templatePath, $assign);
        // }

        return $response;
    }
}


