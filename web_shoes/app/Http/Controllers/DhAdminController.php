<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class DhgAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Set the default value for the current page to 0
        $cur_page = 0;

        // If the page parameter is present in the query string, update the value of $cur_page
        if (isset($_GET['page'])) {
            $cur_page = $_GET['page'];
        }

        // Calculate the index for the first order to be displayed on the current page
        $index_lay_don_hang = $cur_page * 10;

        // Select all columns from the ss_don_hang table, as well as the ten_trang_thai column from the ss_trang_thai table
        $ds_don_hang = DB::table('ss_don_hang')
            ->select(DB::raw('ss_don_hang.*,ss_don_hang.ma_don_hang, ten_trang_thai'))
            // Join the ss_trang_thai table on the ID column of the ss_don_hang table
            ->join('ss_trang_thai', 'ss_don_hang.ID', '=', 'ss_trang_thai.id_don_hang')
            // Join the ss_thanh_vien table on the id_nguoi_dung column of the ss_don_hang table
            ->join('ss_thanh_vien', 'ss_thanh_vien.ID', '=', 'ss_don_hang.id_nguoi_dung')
            // Join the loai_trang_thai table on the id and trang_thai_moi columns
            ->join('loai_trang_thai', 'loai_trang_thai.id', '=', 'ss_trang_thai.trang_thai_moi')

            // Sort the orders by their ID in ascending order
            ->orderBy('ID', 'ASC')
            // Skip the first $index_lay_don_hang orders
            ->skip($index_lay_don_hang)
            // Only include orders where the id_loai_user column is less than 5
            ->where('id_loai_user', '<', '5')
            // Limit the number of orders returned to 10
            ->limit(10)
            // Execute the query and retrieve the results
            ->get();

        // Retrieve the total number of orders in the database
        $tong_so_luong = DB::table('ss_don_hang')
            ->select(DB::raw('COUNT(*) as tong_so_luong'))->first();


        //echo '<pre>',print_r($tong_so_luong),'</pre>';
        $so_trang = ceil($tong_so_luong->tong_so_luong / 10);
        return view('page_admin.trang_ds_don_hang')
            ->with('ds_don_hang', $ds_don_hang)
            ->with('so_trang', $so_trang)
            ->with('cur_page', $cur_page);
    }
    function pagination($current_page)
    {
        $index_lay_don_hang = $current_page * 10;
        $ds_don_hang = DB::table('ss_don_hang')
            ->select(DB::raw('ss_don_hang.*,ss_don_hang.ma_don_hang, ten_trang_thai'))
            ->join('ss_trang_thai', 'ss_don_hang.ID', '=', 'ss_trang_thai.id_don_hang')
            ->join('ss_thanh_vien', 'ss_thanh_vien.ID', '=', 'ss_don_hang.id_nguoi_dung')
            ->join('loai_trang_thai', 'loai_trang_thai.id', '=', 'ss_trang_thai.trang_thai_moi')
            ->orderBy('ID', 'ASC')->skip($index_lay_don_hang)->where('id_loai_user', '<', '5')
            ->limit(10)->get();
        $tong_so_luong = DB::table('ss_don_hang')
            ->select(DB::raw('COUNT(*) as tong_so_luong'))->first();

        $so_trang = ceil($tong_so_luong->tong_so_luong / 10);

        return response()->json([
            'ds_don_hang' => $ds_don_hang,
            'so_trang' => $so_trang
        ]);
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
        $array_trang_thai = [
            1 => 'Đã huỷ',
            2 => 'Giao thành công',
            3 => 'Đang chờ duyệt',
            4 => 'Đã duyệt'
        ];
        $thong_tin_don_hang = DB::table('ss_don_hang')->where('ID', $id)->first();
        return view('page_admin.trang_cap_nhat_don_hang')
            ->with('array_trang_thai', $array_trang_thai)
            ->with('thong_tin_don_hang', $thong_tin_don_hang);
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
        $array_trang_thai = [
            1 => 'Đã huỷ',
            2 => 'Giao thành công',
            3 => 'Đang chờ duyệt',
            4 => 'Đã duyệt'
        ];

        $thong_tin_don_hang_old = DB::table('ss_don_hang')->where('ID', $id)->first();

        $trang_thai = $request->get('trang_thai');


        // Start a database transaction
        DB::transaction(function () use ($array_trang_thai, $trang_thai, $thong_tin_don_hang_old, $id) {

            // Update the trang_thai column in the ss_don_hang table for the row with the ID matching the value of the $id variable
            DB::table('ss_don_hang')
                ->where('ID', $id)
                ->update([
                    'trang_thai' => $trang_thai
                ]);

            // Check if there is a row in the ss_trang_thai table with an id_don_hang matching the ID of the order being updated
            $check_notice = DB::table('ss_trang_thai')
                ->where('id_don_hang', $thong_tin_don_hang_old->ID)
                ->first();

            // If such a row exists, update the trang_thai_cu and trang_thai_moi columns to the values of the $check_notice->trang_thai_cu and $trang_thai variables, respectively
            if ($check_notice) {
                // If $check_notice is truthy, update the ss_trang_thai table
                DB::table('ss_trang_thai')
                    ->where('id_don_hang', $thong_tin_don_hang_old->ID)
                    ->update([
                        'trang_thai_cu' => $check_notice->trang_thai_cu, // Set trang_thai_cu to the value of $check_notice->trang_thai_cu
                        'trang_thai_moi' => $trang_thai // Set trang_thai_moi to the value of $trang_thai
                    ]);
            } else {
                // If $check_notice is falsy, insert a new row into the ss_trang_thai table
                DB::table('ss_trang_thai')
                    ->insert([
                        'id_don_hang' => $thong_tin_don_hang_old->id, // Set id_don_hang to the value of $thong_tin_don_hang_old->id
                        'trang_thai_cu' => $thong_tin_don_hang_old->trang_thai, // Set trang_thai_cu to the value of $thong_tin_don_hang_old->trang_thai
                        'trang_thai_moi' => $trang_thai, // Set trang_thai_moi to the value of $trang_thai
                        'email' => $thong_tin_don_hang_old->email_nguoi_nhan // Set email to the value of $thong_tin_don_hang_old->email_nguoi_nhan
                    ]);
            }
        });

        $thong_tin_don_hang = DB::table('ss_don_hang')->where('ID', $id)->first();

        return view('page_admin.trang_cap_nhat_don_hang')
            ->with('array_trang_thai', $array_trang_thai)
            ->with('thong_tin_don_hang', $thong_tin_don_hang)
            ->with('NoticeSuccess', 'Cập nhật đơn hàng thành công');
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
            DB::table('ss_trang_thai')->where('id_don_hang', $id)->delete();
            DB::table('ss_don_hang')->where('ID', $id)->delete();
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }
    public function chi_tiet_don_hang($id)
    {
        $chi_tiet_don_hang_2 = DB::table('ss_don_hang')
            ->where('ID', $id)->get();

        $tt_don_hang = DB::table('ss_ct_don_hang')
            ->select(DB::raw('hinh,ss_ct_don_hang.ID,ss_san_pham.ID,ten_san_pham,ss_san_pham.don_gia,gia_giam, so_luong,thanh_tien,tong_tien'))
            ->join('ss_san_pham', 'ss_san_pham.ID', '=', 'ss_ct_don_hang.id_sp')
            ->join('ss_don_hang', 'ss_don_hang.ID', '=', 'ss_ct_don_hang.ID_don_hang')
            ->where('ID_don_hang', $id)
            ->get();


        return view('page_admin.trang_chi_tiet_dh')
            ->with('chi_tiet_don_hang_2', $chi_tiet_don_hang_2)
            ->with('tt_don_hang', $tt_don_hang);
    }
}
