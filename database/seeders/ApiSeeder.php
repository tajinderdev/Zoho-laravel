<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Storage;

class ApiSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        $token = Storage::disk('local')->get('token.txt');
        if(!$token){
            $token = 0;
        }
        
        $redirect_uri = env('ZOHO_REDIRECT_URI');
        $clientId = env('ZOHO_CLIENT_ID');
        $clientSecret = env('ZOHO_CLIENT_SECRET');
        $refresh_token = env('ZOHO_REFRESH');

        $refresh_param = "refresh_token=".$refresh_token."&client_id=".$clientId."&client_secret=".$clientSecret."&grant_type=refresh_token";

        $main_url = "https://accounts.zoho.com/oauth/v2/token?";

        $xeroData = array(
            array('type'=>"refresh_token",  'method'=>'POST', 'url'=> $main_url,'param'=>$refresh_param),
        );
        DB::table('apis')->insert($xeroData);
    }
}
