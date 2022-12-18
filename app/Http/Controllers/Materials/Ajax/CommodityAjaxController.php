<?php

namespace App\Http\Controllers\Commodities\Ajax;

use App\Commodity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommodityAjaxController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commodities = new Commodity();
        $commodities->school_operational_assistance_id = $request->school_operational_assistance_id;
        $commodities->commodity_location_id = $request->commodity_location_id;
        $commodities->item_code = $request->item_code;
        $commodities->name = $request->name;
        $commodities->brand = $request->brand;
        $commodities->condition = $request->condition;
        $commodities->quantity = $request->quantity;
        $commodities->unit = $request->unit;
        $commodities->vendor = $request->vendor;
        $commodities->note = $request->note;
        $commodities->save();

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $commodities], 200);
    }

    public function show($id)
    {
        $commodity = Commodity::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $commodity->school_operational_assistance->name,
            'commodity_location_id' => $commodity->commodity_location->name,
            'item_code' => $commodity->item_code,
            'name' => $commodity->name,
            'brand' => $commodity->brand,
            'condition' => $commodity->condition,
            'quantity' => $commodity->quantity,
            'unit' => $commodity->unit,
            'vendor' => $commodity->vendor,
            'note' => $commodity->note,
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function edit($id)
    {
        $commodity = Commodity::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $commodity->school_operational_assistance_id,
            'commodity_location_id' => $commodity->commodity_location_id,
            'item_code' => $commodity->item_code,
            'name' => $commodity->name,
            'brand' => $commodity->brand,
            'condition' => $commodity->condition,
            'quantity' => $commodity->quantity,
            'unit' => $commodity->unit,
            'vendor' => $commodity->vendor,
            'note' => $commodity->note,
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $commodities = Commodity::findOrFail($id);

        $commodities->school_operational_assistance_id = $request->school_operational_assistance_id;
        $commodities->commodity_location_id = $request->commodity_location_id;
        $commodities->item_code = $request->item_code;
        $commodities->name = $request->name;
        $commodities->brand = $request->brand;
        $commodities->condition = $request->condition;
        $commodities->quantity = $request->quantity;
        $commodities->unit = $request->unit;
        $commodities->vendor = $request->vendor;
        $commodities->note = $request->note;
        $commodities->save();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }

    public function destroy($id)
    {
        Commodity::findOrFail($id)->delete();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }
}
