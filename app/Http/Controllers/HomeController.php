<?php

namespace App\Http\Controllers;
  require_once(public_path()."/lib/config_paytm.php");
  require_once(public_path()."/lib/encdec_paytm.php");
use Illuminate\Http\Request;
use App\ContactDetail;
use Session;
use App\OrderPlaceDetail;
use DB;

class HomeController extends Controller
{
    //

    public function postQuery(Request $request)
    {
      // print_r($request->all());
      // die;
      $submit=$request->all();
      $data['name']=$submit['name'];
       $data['email']=$submit['email'];
       $data['website']=$submit['website'];
        $data['message']=$submit['message'];

      $saveData=DB::table('contactquery')->insert($data);
     
      return view("contact");
    }


public function AddCartItemGet(){
   $cart_item=Session::get('cart_item');
   $data['cart_items']=$cart_item;
   return view('AddCartItem',$data);
}

  
public function getpgRedirect(Request $request)
{


    $input=$request->all();

        
$checkSum = "";
$paramList = array();
$input['name']=$_POST["firstname"];
$input['mobile_no']=$_POST["MSSIDN"];
$input['address']=$_POST["Address"];
$input['status']="Initiated";
$input['fee'] = $input['TXN_AMOUNT'];
$input['order_id'] =$input['ORDER_ID'];
OrderPlaceDetail::create($input);
$dataSSS=DB::table('OrderPlaceDetail')->get();
$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$amount=str_replace(',', '', $_POST["TXN_AMOUNT"]);
$TXN_AMOUNT = round($amount,2);
$data=[];
// Create an array having all required parameters for creating checksum.
$data['paramList']["MID"] = env('YOUR_MERCHANT_ID');
$data['paramList']["ORDER_ID"] = $ORDER_ID;
$data['paramList']["CUST_ID"] = $CUST_ID;
$data['paramList']["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$data['paramList']["CHANNEL_ID"] = $CHANNEL_ID;
$data['paramList']["TXN_AMOUNT"] = $TXN_AMOUNT;
$data['paramList']["WEBSITE"] =env('YOUR_WEBSITE');
// $paramList["PAYMENT_MODE_ONLY"] = "YES";
// $paramList["AUTH_MODE"] = "3D";
// $paramList["PAYMENT_MODE_ONLY"] = "YES";
// $paramList["PAYMENT_MODE_ONLY"] = "YES";
// $paramList["PAYMENT_MODE_ONLY"] = "YES";


$data['paramList']["CALLBACK_URL"] = url('/payment/status');
$data['paramList']["MSISDN"] = $_POST['MSSIDN']; //Mobile number of customer
$data['paramList']["EMAIL"] = $_POST['EMAIL']; //Email ID of customer
$data['paramList']["VERIFIED_BY"] = "EMAIL"; //
$data['paramList']["IS_USER_VERIFIED"] = "YES"; //


//Here checksum string will return by getChecksumFromArray() function.
$data['checkSum'] = getChecksumFromArray($data['paramList'],env('YOUR_MERCHANT_KEY'));

        return view('pgRedirect',$data);
}


public function getpgResponse(Request $request)
{
      $submit=$request->all();
    $paytmChecksum = "";
    $data=[];
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;

OrderPlaceDetail::where("order_id",$_POST['ORDERID'])->update(["status"=>$_POST['STATUS'],"transaction_id"=>$_POST['TXNID']]);
$dataSSS=DB::table('OrderPlaceDetail')->get();

$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$data['isValidChecksum'] = verifychecksum_e($paramList, env('YOUR_MERCHANT_KEY'), $paytmChecksum); 

   return view('pgResponse',$data);
}


public function getCheckOut(Request $request)
{
   
     $submit = $request->all();

   return view('checkoutform',$submit);
}

    public function getProductOverview()
    {
      return view('ProductOverview');
    }

    public function SaveVistorData( ){

      $submit=$_GET;
      $insertData=DB::table('visitordata')->insert(['Visitor'=>$submit['VisitorData']]);
    
      return true;
      

    }

    public function getUnifiedPlatform(){
      return view('unifiedPlatform');
    }

    public function getHomePage(){
      $data=[];
       $selectCount=DB::table('visitordata')->get();
      $data['countSQL']=count($selectCount);
      // $contact=DB::table('contactquery')->get();
      // print_r($contact);
      // die;
      return view('home',$data);
    }

     public function GetproductDetails($id){
      $productId=$id;
      $data=[];
       $selectCount=DB::table('productdetail')->where('id',$productId)->first();
       $data['selectCount']=$selectCount;
      return view('productdetails',$data);
    }

public function AddCartItem(Request $request){
   $data=[];
   // $i=0;
    $cart_item=Session::get('cart_item');
    // if($cart_item[0]!=''){
    
      $data=$request->all();
        $data['productId']= $data['ProductId'];
      $data['productByCode'] = DB::table('productdetail')->get();
      if(!empty($data["action"])){
        switch($data["action"]) {
  case "add":
    if(!empty($data["quantity"])) {
       $data['productByCodes'] = DB::table('productdetail')->where('id',$data['ProductId'])->first();
     
       $itemArray = array(  $data['productByCodes']->id=>array('productName'=> $data['productByCodes']->productName, 'id'=>$data['productByCodes']->id, 'quantity'=>$data["quantity"], 'price'=>$data['productByCodes']->productPrice, 'image'=>$data['productByCodes']->productImage));
       // print_r($itemArray);
       // print_r($cart_item);
       // die;
      if(!empty($cart_item)) {
        if(in_array($data["ProductId"],array_keys($cart_item))) {
          foreach($cart_item as $k => $v) {
              if($data["ProductId"] == $k) {
                if(empty($cart_item[$k]["quantity"])) {
                  $cart_item[$k]["quantity"] = 0;
                }
              
               // $cart_item[$k]["quantity"] = $_POST["quantity"];
                 $data['cart_items'] = array_merge($cart_item,$itemArray);
          // print_r($data['cart_items']);
          // // print_r($itemArray);
          // die;
          Session::put('cart_item', $data['cart_items']);
        }
          }
        } else {
          
          $data['cart_items'] = array_merge($cart_item,$itemArray);
          // print_r($data['cart_items']);
          // print_r($itemArray);
          // die;
          Session::put('cart_item', $data['cart_items']);
        }
      } else {
        // print_r($cart_item);
        //   print_r($itemArray);
        //   die;
        $data['cart_items'] = $itemArray;
        Session::put('cart_item', $data['cart_items']);
      }
  }
  break;
  case "remove":
  echo"hello";
  die;
    // if(!empty($cart_item)) {
    //   foreach($cart_item as $k => $v) {
    //       if($_GET["code"] == $k)
    //         unset($cart_item[$k]);        
    //       if(empty($cart_item))
    //         unset($cart_item);
      // }
    // }
  break;

  case "empty":
    unset($cart_item);
  break;  
}

      }


   $getCart= Session::get('cart_item');    
// print_r($cart_item);
    $data['cart_items'] =$getCart;
    // Session::put('cart_item',$data['cart_items']);
// print_r($getCart);

        if(!isset($getCart) && empty($getCart)){
            $data['cart_items'] = array_merge($getCart,$cart_item);
            // print_r( $data['cart_items']);
// die;
          Session::put('cart_item',$data['cart_items']);

        }
// die;
  
      return view('addCartItem',$data);
}

public function AddCartItemEmpty($empty){
     if(isset($empty) && !empty($empty)){
     session()->flush();
      // unset($cart_item);
     return view('addCartItem');
   }
}

public function gettransactionStatus(Request $request){
      $submit=$request->all();
      print_r($submit);
      die;
   return view('transactionStatus',$submit);
}
    public function detailedCart($id){

         $data=[];
         $selectCount=DB::table('productdetail')->where('id',$id)->first();
         $data['selectCount']=$selectCount;
         $data['productId']=$id;
      $data['productByCode'] = DB::table('productdetail')->get();
     
        $cart_item=[];
        Session::put('cart_item', $cart_item);
      
         
   
      // $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
      
      // if(!empty($_SESSION["id"])) {
      //   if(in_array($productByCode["id"],array_keys($_SESSION["cart_item"]))) {
          
      //         if($productByCode["id"] == $k) {
      //           if(empty($_SESSION["cart_item"][$k]["quantity"])) {
      //             $_SESSION["cart_item"][$k]["quantity"] = 0;
      //           }
      //           $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
      //         }
          
      //   } else {
      //     $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
      //   }
      // } else {
      //   $_SESSION["cart_item"] = $itemArray;
      // }
    // }



         return view('detailedCart',$data);
    }
}
