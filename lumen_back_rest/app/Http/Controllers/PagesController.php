<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thib
 * Date: 08/11/2017
 * Time: 22:52
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;


class PagesController extends Controller
{


    public function getPagesData()
    {
        $pagesData = Pages::all();
        return response()->json($pagesData);
    }

    public function showPagesData($id)
    {

        $pagesData = Pages::where('id', $id)->get();
        if(!empty($pagesData)){
            return response()->json($pagesData);
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

        $pagesData = new Pages();
        $pagesData->name = $request->name;
        $pagesData->price = $request->price;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $pagesData->published_on = $dd;
        $pagesData->save();
        return response()->json(['status' => 'success']);

    }

    public function updatePagesData(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'created_at' => 'required'
        ]);

        $pagesData = new Pages();
        $pagesData->name = $request->name;
        $pagesData->price = $request->price;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $pagesData->published_on = $dd;
        $pagesData->save();
        return response()->json(['status' => 'success']);

    }


}