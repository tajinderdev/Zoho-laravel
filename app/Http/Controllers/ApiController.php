<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller as Controller;

use Storage;
use Helper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Api;
use App\Models\Tasks;
use App\Models\Connection;
use App\Models\User;
use App\Models\Time;
use App\Models\Invoice;
use App\Models\PurchaseOrder;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Account;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

set_time_limit(0);

class ApiController extends Controller
{
    public function GetToken()
    {
        $expired_at  = Token::where('type', "access_token")->value('expired_at');
        if($expired_at < Carbon::now()) {
            $resp = json_decode(Helper::getToken("refresh_token"));
            Token::where('type', "access_token")->update([
                    'access_token' => $resp->access_token,
                    'type' => 'access_token',
                    'expired_at'=> Carbon::now()->addSeconds($resp->expires_in)
            ]);
            return $resp->access_token;
        } else {
            return Token::where('type', "access_token")->value('access_token');
        }
    }

    public function zoho(Request $request)
    {
        $token = $this->GetToken();
        echo $token;die;
    }

}
