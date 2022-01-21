<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DAO\LoginDAO;
use App\Http\Controllers\Controller;

/**
 * ログイン・ログアウトに関するコントローラクラス。
 */
class LoginController extends Controller
{
    /**
     * ログイン画面表示処理。
     */
    public function go_Login()
    {
        return view("login");
    }

    /**
     * ログイン処理。
     */
    public function login(Request $request)
    {
        $isRedirect = false;
        $templatePath = "login";
        $assign = [];

        $loginId = $request->input("loginId");
        $loginPw = $request->input("loginPw");

        $validationMsgs = [];
        if (empty($validationMsgs)) {
            $db = DB::connection()->getPdo();
            $loginDAO = new LoginDAO($db);

            $login = $loginDAO->findByLoginid($loginId);
            if ($login == null) {
                $validationMsgs[] = "存在しないIDです。正しいIDを入力してください。";
            } else {
                $loginPassword = $login->getPassword();
                if ($loginPw == $loginPassword) {
                    $id = $login->getId();
                    $lastName = $login->getLastName();
                    $firstName = $login->getFirstName();

                    $session = $request->session();
                    $session->put("loginFlg", true);
                    $session->put("id", $id);
                    $session->put("name", $lastName . " " . $firstName);
                    $session->put("auth", 1);
                    $isRedirect = true;
                    echo "yyyyyyy";
                } else {
                    $validationMsgs[] =  "パスワードが違います。正しいパスワードを入力してください。";
                    echo "sssssss";
                }
            }
        }
        if ($isRedirect) {
            $response = redirect("login_comp");
        } else {
            if (!empty($validationMsgs)) {
                $assign["validationMsgs"] = $validationMsgs;
                $assign["loginId"] = $loginId;
            }
            $response = view("login", $assign);
        }
        return $response;
    }
    /**
     * ログアウト処理。
     */
    // public function logout(Request $request)
    // {
    //     $session = $request->session();
    //     $session->flush();
    //     $session->regenerate();
    //     return redirect("/");
    // }
}
