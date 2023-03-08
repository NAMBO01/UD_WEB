<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('page_admin.trang_dashboard');
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
    public function store(Request $request)
    {
        //
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
    public function login_admin()
    {
        if (Session::has('user_admin')) {
            $user_info = Session::get('user_admin');

            if ($user_info->id_loai_user >= 5) {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }

        return view('page_admin.trang_login_admin');
    }
    function du_lieu_dashboard()
    {
        $doanh_thu = DB::table('ss_don_hang')
            ->select(DB::raw('SUM(tong_tien) as tong_doanh_thu'))
            ->join('ss_thanh_vien', 'ss_thanh_vien.ID', '=', 'ss_don_hang.id_nguoi_dung')
            ->where('id_loai_user', '<', '5')
            ->get();
        $khach_hang = DB::table('ss_thanh_vien')
            ->select(DB::raw('COUNT(*) as so_luong_khach_hang'))
            ->where('id_loai_user', '<', '5')
            ->get();
        $tong_so_luong = DB::table('ss_don_hang')
            ->select(DB::raw('COUNT(*) as tong_so_luong'))

            ->get();
        return view('page_admin.trang_dashboard')
            ->with('tong_so_luong', $tong_so_luong)
            ->with('doanh_thu', $doanh_thu)
            ->with('khach_hang', $khach_hang);
    }
    function logout_admin(Request $request)
    {
        Session::forget('user_admin');

        return redirect($request->server('HTTP_REFERER'), 302);
    }
}
