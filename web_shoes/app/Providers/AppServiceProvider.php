<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $list_loai_sp = DB::table('ss_loai_san_pham')
            ->where('id_loai_cha', 0)
            ->get();

        $list_loai_sp = json_decode(json_encode($list_loai_sp));

        foreach ($list_loai_sp as $key => $loai_sp_cha) {
            // echo $loai_sp_cha->ID_loai_sp. " ";
            $list_ds_loai_con = DB::table('ss_loai_san_pham')
                ->where('id_loai_cha', $loai_sp_cha->ID_loai_sp)
                ->get();

            $list_ds_loai_con = json_decode(json_encode($list_ds_loai_con));

            // echo '<pre>',print_r($list_ds_loai_con) ,'</pre>';

            $list_loai_sp[$key]->ds_loai_con = $list_ds_loai_con;
        }

        View::share('ds_loai_sp', $list_loai_sp);

        Blade::directive('VND_monney', function ($money) {
            return "<?php echo number_format($money); ?>";
        });
    }
}
