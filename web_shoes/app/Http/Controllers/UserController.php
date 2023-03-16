<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\Crete;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use stdClass;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:ss_thanh_vien,tai_khoan',
            'email' => 'required|email|unique:ss_thanh_vien,email',
            'password' => 'required|min:6',
            'name' => 'required',
            'date_of_birth' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $name = $request->input('name');
        $date_of_birth = $request->input('date_of_birth');
        $user_new = (object)[];
        $user_new->username = $username;
        $user_new->password = $password;
        $user_new->email = $email;
        $user_new->ten = $name;
        $user_new->date_of_birth = $date_of_birth;

        DB::transaction(function () use ($username, $password, $email, $date_of_birth, $name) {
            DB::table('ss_thanh_vien')
                ->insert(
                    [
                        "ten" => $name,
                        "tai_khoan" => $username,
                        "mat_khau" => md5($password),
                        "email" => $email,
                        "ngay_dang_ky" => $date_of_birth,
                        "id_loai_user" => 1
                    ]
                );
            usleep(10000);
        });




        $data_string_user = file_get_contents(resource_path('data_temp/users.json'));
        $list_user = json_decode($data_string_user);
        $list_user[] = $user_new;
        file_put_contents(resource_path('data_temp/users.json'), json_encode($list_user));

        Session::put('user_info', $user_new);

        return view('redirect_page')
            ->with('message_notice', "Đăng ký thành công!!")
            ->with('type_notice', 'success')
            ->with('url_redirect', '/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function createNewAccount()
    {

        return view('register_acc');
    }

    function login()
    {
        return view('login_page');
    }

    function logout(Request $request)
    {
        Session::forget('user_info');

        return redirect($request->server('HTTP_REFERER'), 302);
    }

    function login_Account(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('ss_thanh_vien')
            ->where('email', $email)
            ->where('mat_khau', md5($password))
            ->first();

        if (isset($user->email)) {
            $user->mat_khau = '';
            Session::put('user_info', $user);
            return redirect('/');
        } else {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Tài khoản hoặc mật khẩu không chính xác'], 'loginErrors');
        }

        // echo '<pre>', print_r($user), '</pre>';

        return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Server Internal Error'], 'loginErrors');
    }
    function login_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ten_dang_nhap' => 'required',
            'mat_khau' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors($validator, 'loginErrors');
        }

        $username = $request->input('ten_dang_nhap');
        $password = $request->input('mat_khau');


        $user = DB::table('ss_thanh_vien')
            ->where('tai_khoan', $username)
            ->where('mat_khau', md5($password))
            ->first();

        if (isset($user->tai_khoan)) {
            $user->mat_khau = '';
            Session::put('user_admin', $user);
            return redirect($_SERVER['HTTP_REFERER']);
        } else {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Tài khoản hoặc mật khẩu không chính xác'], 'loginErrors');
        }

        //echo '<pre>',print_r($user),'</pre>';

        return redirect($_SERVER['HTTP_REFERER'])->withErrors(['Server Internal Error'], 'loginErrors');
    }
}
