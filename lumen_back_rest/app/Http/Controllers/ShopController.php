<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thib
 * Date: 08/11/2017
 * Time: 22:52
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;


class ShopController extends Controller
{


    public function getShopData()
    {
        $shopData = Shop::all();
        return response()->json($shopData);
    }

    public function showShopData($id)
    {

        $shopData = Shop::where('id', $id)->get();
        if(!empty($shopData)){
            return response()->json($shopData);
        }
        else{
            return response()->json(['status' => 'fail']);
        }
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'created_at' => 'required'
        ]);

        $shopData = new Shop();
        $shopData->name = $request->name;
        $shopData->price = $request->price;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $shopData->published_on = $dd;
        $shopData->save();
        return response()->json(['status' => 'success']);

    }
    public function updateShopData(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'created_at' => 'required'
        ]);

        $shopData = new Shop();
        $shopData->name = $request->name;
        $shopData->price = $request->price;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $shopData->published_on = $dd;
        $shopData->save();
        return response()->json(['status' => 'success']);

    }

    public function destroy($id)
    {
        //
        if(Shop::destroy($id)){
            return response()->json(['status' => 'success']);
        }
    }

}