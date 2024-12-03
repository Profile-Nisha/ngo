<?php

// app/Http/Controllers/DonationDetailsController.php
namespace App\Http\Controllers;

use App\Models\DonationDetail;
use Illuminate\Http\Request;

class DonationDetailsController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'lastDonationAmount' => 'required|numeric',
        'name' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|email',
        'pan_number' => 'nullable|string|max:20',
        'image_upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'allow_photo' => 'nullable|boolean',
        'message' => 'nullable|string|max:1000',
    ]);

    // Handle image upload
    if ($request->hasFile('image_upload')) {
        $file = $request->file('image_upload');
        $filename = time() . '-' . $file->getClientOriginalName();
        $destinationPath = public_path('/uploads/donations');
        $file->move($destinationPath, $filename);
        $imagePath = 'uploads/donations/' . $filename;
    }

    // Create the donation details record
    $donationDetail = DonationDetail::create([
        'last_donation_amount' => $request->input('lastDonationAmount'),
        'name' => $request->input('name'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
        'pan_number' => $request->input('pan_number'),
        'image' => $imagePath ?? null,
        'allow_photo' => $request->input('allow_photo', 0),  // Default to 0 if not set
        'message' => $request->input('message'),
    ]);
    
    if($donationDetail) {
        $name = $request->input('name') ?? null;
$mobile = $request->input('phone') ?? null;
$email = $request->input('email') ?? null;
$payable = $request->input('lastDonationAmount') ?? null;


$merchantId = 'M22RR3FVTUUHK'; // sandbox or test merchantId
$apiKey = "6374c03f-ba14-43ea-bb33-3c3d9fb51ef2"; // sandbox or test APIKEY
$redirectUrl = "https://ashtakfoundation.in/payment-success?name=$name&amount=$payable&description=your-description&email=$email&mobile=$mobile"; //redirect url in get form

// Set transaction details
$order_id = uniqid();
$email = $email;
$mobile = $mobile;
$amount = $payable; // amount in INR
$description = 'Payment for Donation';

$paymentData = array(
    'merchantId' => $merchantId,
    'merchantTransactionId' => "Order" . rand(00000, 99999), // test transactionID
    'merchantUserId' => "M22RR3FVTUUHK",
    'amount' => $payable * 100,  // multiply with hundred it takes in paisa form
    'redirectUrl' => $redirectUrl,
    'redirectMode' => "POST",
    'callbackUrl' => $redirectUrl,
    'merchantOrderId' => $order_id,
    'mobileNumber' => $mobile,
    'message' => $description,
    'email' => $email,
    'shortName' => $name,
    'paymentInstrument' => array(
        'type' => 'PAY_PAGE',
    )
);

$jsonencode = json_encode($paymentData);
$payloadMain = base64_encode($jsonencode);
$salt_index = 1; // key index 1
$payload = $payloadMain . "/pg/v1/pay" . $apiKey;
$sha256 = hash("sha256", $payload);
$final_x_header = $sha256 . '###' . $salt_index;
$request = json_encode(array('request' => $payloadMain));

$curl = curl_init();
curl_setopt_array($curl, [
    // CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
    CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $request,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-VERIFY: " . $final_x_header,
        "accept: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response);

    if (isset($res->success) && $res->success == '1') {
        $payUrl = $res->data->instrumentResponse->redirectInfo->url;
        echo "<script>window.location.href='$payUrl';</script>";
    } else {
        echo "Payment initiation failed: " . $res->message;
    }
}
    }else{
        
    return redirect()->back()->with('error', 'Failed! Try Again!');
    }

}

public function paymentSuccess(Request $request)
{
    $data = [
        'name' => $request->name,
        'email' => $request->email, 
        'mobile' => $request->mobile, 
        'amount' => $request->amount
        ];
    
    // return $data;
    // return redirect()->route('payment-success')->with('paymentData', $data);
    return redirect()->route('home');
}
}
