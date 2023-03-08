<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class SPTonKhoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_sp_ton_kho = DB::table('ss_san_pham')
            ->select(DB::raw('ss_san_pham.*,ss_san_pham.id,ten_loai_sp,ss_ton_kho.size,ss_ton_kho.so_luong'))
            ->join('ss_loai_san_pham', 'ss_san_pham.id_loai_sp', '=', 'ss_loai_san_pham.ID_loai_sp')
            ->join('ss_ton_kho', 'ss_san_pham.id', '=', 'ss_ton_kho.id_sp')
            ->get();
        // echo '<pre>', print_r($ds_san_pham), '</pre>';
        return view('page_admin.trang_sp_ton_kho')->with('ds_sp_ton_kho', $ds_sp_ton_kho);
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
        try {
            DB::table('ss_tin_tuc')->where('ID', $id)->delete();
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }
}
