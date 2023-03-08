<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_info = Session::get('user_info');

        $don_hang = DB::table('ss_don_hang')
            ->select(DB::raw('ss_don_hang.ID,ma_don_hang,ten_trang_thai,trang_thai_moi,tong_tien'))
            ->join('ss_thanh_vien', 'ss_thanh_vien.ID', '=', 'ss_don_hang.id_nguoi_dung')
            ->join('ss_trang_thai', 'ss_trang_thai.id_don_hang', '=', 'ss_don_hang.ID')
            ->join('loai_trang_thai', 'loai_trang_thai.id', '=', 'ss_trang_thai.trang_thai_moi')
            ->where('id_nguoi_dung', $user_info->ID)
            ->distinct()
            ->get();

        return view('lich_su_dh')
            ->with('user_info', $user_info)
            ->with('don_hang', $don_hang);
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
    }
    function chi_tiet_don_hang($id_dh)
    {
        $user_info = Session::get('user_info');
       /* A query to get the order details. */
        $ct_don_hang = DB::table('ss_don_hang')
            ->select(DB::raw('ma_don_hang,ten_trang_thai,trang_thai_moi,tong_tien'))
            ->join('ss_ct_don_hang', 'ss_ct_don_hang.ID_don_hang', 'ss_don_hang.ID')
            ->join('ss_trang_thai', 'ss_trang_thai.id_don_hang', '=', 'ss_don_hang.ID')
            ->join('loai_trang_thai', 'loai_trang_thai.id', '=', 'ss_trang_thai.trang_thai_moi')
            ->where('ss_don_hang.ID', $id_dh)
            ->get();

        return view('chi_tiet_don_hang')
            ->with('user_info', $user_info)
            ->with('ct_don_hang', $ct_don_hang);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
}
