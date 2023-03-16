<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Retrieves a list of users from the database and passes it to a view for display.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve a list of users with their respective user types.
        $ds_khach_hang = DB::table('ss_thanh_vien')
            ->select(DB::raw('ss_thanh_vien.*,ss_thanh_vien.id,ss_loai_thanh_vien.ten_loai_user'))
            ->join('ss_loai_thanh_vien', 'ss_thanh_vien.id_loai_user', '=', 'ss_loai_thanh_vien.id')
            ->where('id_loai_user', '<', 5)
            ->get();

        // Render the view, passing in the list of users.
        return view('page_admin.trang_ds_user')->with('ds_khach_hang', $ds_khach_hang);
    }

    function nhan_vien()
    {
        $ds_nhan_vien = DB::table('ss_thanh_vien')
            ->select(DB::raw('ss_thanh_vien.*,ss_thanh_vien.id,ss_loai_thanh_vien.ten_loai_user'))
            ->join('ss_loai_thanh_vien', 'ss_thanh_vien.id_loai_user', '=', 'ss_loai_thanh_vien.id')
            ->where('id_loai_user', '>', 5)
            ->get();
        return view('page_admin.trang_ds_nhan_vien')->with('ds_nhan_vien', $ds_nhan_vien);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ds_user = DB::table('ss_thanh_vien')->where("ID", $id)->get();
        $loai_tv = DB::table('ss_loai_thanh_vien')->get();


        return view('page_admin.trang_edit_user')
            ->with('ds_user', $ds_user)
            ->with('loai_tv', $loai_tv);
    }
    public function edit_nhan_vien($id)
    {
        $ds_nhan_vien = DB::table('ss_thanh_vien')->where("ID", $id)->get();
        $loai_tv = DB::table('ss_loai_thanh_vien')->get();


        return view('page_admin.trang_edit_nhan_vien')
            ->with('ds_nhan_vien', $ds_nhan_vien)
            ->with('loai_tv', $loai_tv);
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
        $mat_khau = $request->get('mat_khau');
        $email = $request->get('email');
        $dien_thoai = $request->get('dien_thoai');

        $result = DB::table('ss_thanh_vien')
            ->where('ID', $id)
            ->update([
                'mat_khau' => md5($mat_khau),
                'email' => $email,
                'dien_thoai' => $dien_thoai,
            ]);

        return redirect('/admin/ql-khach-hang')->with('NoticeSuccess', 'Cập nhật thông tin thành công');
    }

    public function update_nhan_vien(Request $request, $id)
    {
        // Get the updated values from the request object
        $mat_khau = $request->get('mat_khau');
        $email = $request->get('email');
        $dien_thoai = $request->get('dien_thoai');

        // Update the database record with the new values
        $result = DB::table('ss_thanh_vien')
            ->where('ID', $id)
            ->update([
                'mat_khau' => md5($mat_khau),
                'email' => $email,
                'dien_thoai' => $dien_thoai,
            ]);
        // Redirect the user back to the employee management page with a success message
        return redirect('/admin/ql-nhan-vien')->with('NoticeSuccess', 'Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        try {
            DB::table('ss_thanh_vien')->where('ID', $id)->delete();
            // This returns a redirect response to the previous page with a success message.
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            // If an exception is caught during the deletion process, a redirect response is returned to the previous page with an error message.
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }
    public function destroy_nhan_vien(Request $request, $id)
    {
        try {
            // The delete method of the DB class is used to delete the nhan_vien record that matches the given $id.
            DB::table('ss_thanh_vien')->where('ID', $id)->delete();


            // A redirect response is returned to the previous page with a success message.
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Xoá thành công ', 'NoticeDelete');
        } catch (Exception $e) {
            // If an exception is caught during the deletion process, a redirect response is returned to the previous page with an error message.
            return redirect($_SERVER['HTTP_REFERER'])->withErrors('Bị lỗi trong quá trình xóa vui lòng thử lại: ' . $e, 'NoticeDelete');
        }
    }
}
