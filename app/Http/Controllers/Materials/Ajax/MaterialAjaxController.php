<?php

namespace App\Http\Controllers\Materials\Ajax;

use App\Http\Controllers\Controller;
use App\Material;
use Illuminate\Http\Request;

class MaterialAjaxController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = new Material();
        $materials->school_operational_assistance_id = $request->school_operational_assistance_id;
        $materials->commodity_location_id = $request->commodity_location_id;
        $materials->item_code = $request->item_code;
        $materials->name = $request->name;
        $materials->brand = $request->brand;
        $materials->condition = $request->condition;
        $materials->quantity = $request->quantity;
        $materials->unit = $request->unit;
        $materials->vendor = $request->vendor;
        $materials->note = $request->note;
        $materials->save();

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $materials], 200);
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $material->school_operational_assistance->name,
            'commodity_location_id' => $material->commodity_location->name,
            'item_code' => $material->item_code,
            'name' => $material->name,
            'brand' => $material->brand,
            'condition' => $material->condition,
            'quantity' => $material->quantity,
            'unit' => $material->unit,
            'vendor' => $material->vendor,
            'note' => $material->note,
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);

        $data = [
            'school_operational_assistance_id' => $material->school_operational_assistance_id,
            'commodity_location_id' => $material->commodity_location_id,
            'item_code' => $material->item_code,
            'name' => $material->name,
            'brand' => $material->brand,
            'condition' => $material->condition,
            'quantity' => $material->quantity,
            'unit' => $material->unit,
            'vendor' => $material->vendor,
            'note' => $material->note,
        ];

        return response()->json(['status' => 200, 'message' => 'Success', 'data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $materials = Material::findOrFail($id);

        $materials->school_operational_assistance_id = $request->school_operational_assistance_id;
        $materials->commodity_location_id = $request->commodity_location_id;
        $materials->item_code = $request->item_code;
        $materials->name = $request->name;
        $materials->brand = $request->brand;
        $materials->condition = $request->condition;
        $materials->quantity = $request->quantity;
        $materials->unit = $request->unit;
        $materials->vendor = $request->vendor;
        $materials->note = $request->note;
        $materials->save();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }

    public function destroy($id)
    {
        Material::findOrFail($id)->delete();

        return response()->json(['status' => 200, 'message' => 'Success'], 200);
    }
}
