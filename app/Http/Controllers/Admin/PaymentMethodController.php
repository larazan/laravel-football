<?php

namespace App\Http\Controllers\Admin;

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    //
    public function payment_index()
    {
        return view('admin.business-settings.payment-index');
    }

    public function payment_update(Request $request, $name)
    {
        if (env('APP_MODE') == 'demo') {
            $notifikasi = array(
                'alert' => 'info',
                'pesan' => 'update option is disable for demo',
            );
            return back()->with($notifikasi);
        }
        if ($name == 'cash_on_delivery') {
            $payment = BusinessSetting::where('key', 'cash_on_delivery')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'cash_on_delivery',
                    'value'      => json_encode([
                        'status' => $request['status'],
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'cash_on_delivery'])->update([
                    'key'        => 'cash_on_delivery',
                    'value'      => json_encode([
                        'status' => $request['status'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'digital_payment') {
            $payment = BusinessSetting::where('key', 'digital_payment')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'digital_payment',
                    'value'      => json_encode([
                        'status' => $request['status'],
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'digital_payment'])->update([
                    'key'        => 'digital_payment',
                    'value'      => json_encode([
                        'status' => $request['status'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'razor_pay') {
            $payment = BusinessSetting::where('key', 'razor_pay')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'razor_pay',
                    'value'      => json_encode([
                        'status'       => 1,
                        'razor_key'    => '',
                        'razor_secret' => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'razor_pay'])->update([
                    'key'        => 'razor_pay',
                    'value'      => json_encode([
                        'status'       => $request['status'],
                        'razor_key'    => $request['razor_key'],
                        'razor_secret' => $request['razor_secret'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'paypal') {
            $payment = BusinessSetting::where('key', 'paypal')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'paypal',
                    'value'      => json_encode([
                        'status'           => 1,
                        'paypal_client_id' => '',
                        'paypal_secret'    => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'paypal'])->update([
                    'key'        => 'paypal',
                    'value'      => json_encode([
                        'status'           => $request['status'],
                        'paypal_client_id' => $request['paypal_client_id'],
                        'paypal_secret'    => $request['paypal_secret'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'stripe') {
            $payment = BusinessSetting::where('key', 'stripe')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'stripe',
                    'value'      => json_encode([
                        'status'        => 1,
                        'api_key'       => '',
                        'published_key' => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'stripe'])->update([
                    'key'        => 'stripe',
                    'value'      => json_encode([
                        'status'        => $request['status'],
                        'api_key'       => $request['api_key'],
                        'published_key' => $request['published_key'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'senang_pay') {
            $payment = BusinessSetting::where('key', 'senang_pay')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([

                    'key'        => 'senang_pay',
                    'value'      => json_encode([
                        'status'        => 1,
                        'secret_key'    => '',
                        'published_key' => '',
                        'merchant_id' => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'senang_pay'])->update([
                    'key'        => 'senang_pay',
                    'value'      => json_encode([
                        'status'        => $request['status'],
                        'secret_key'    => $request['secret_key'],
                        'published_key' => $request['publish_key'],
                        'merchant_id' => $request['merchant_id'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'paystack') {
            $payment = BusinessSetting::where('key', 'paystack')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'paystack',
                    'value'      => json_encode([
                        'status'        => 1,
                        'publicKey'     => '',
                        'secretKey'     => '',
                        'paymentUrl'    => '',
                        'merchantEmail' => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'paystack'])->update([
                    'key'        => 'paystack',
                    'value'      => json_encode([
                        'status'        => $request['status'],
                        'publicKey'     => $request['publicKey'],
                        'secretKey'     => $request['secretKey'],
                        'paymentUrl'    => $request['paymentUrl'],
                        'merchantEmail' => $request['merchantEmail'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($name == 'flutterwave') {
            $payment = BusinessSetting::where('key', 'flutterwave')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'key'        => 'flutterwave',
                    'value'      => json_encode([
                        'status'        => 1,
                        'public_key'     => '',
                        'secret_key'     => '',
                        'hash'    => '',
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                DB::table('business_settings')->where(['key' => 'flutterwave'])->update([
                    'key'        => 'flutterwave',
                    'value'      => json_encode([
                        'status'        => $request['status'],
                        'public_key'     => $request['public_key'],
                        'secret_key'     => $request['secret_key'],
                        'hash'    => $request['hash'],
                    ]),
                    'updated_at' => now(),
                ]);
            }
        }

        $notifikasi = array(
            'alert' => 'success',
            'pesan' => 'payment settings updated',
        );
        return back()->with($notifikasi);
    }
}
