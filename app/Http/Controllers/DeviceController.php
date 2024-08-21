<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    //
    public function list($id=null){
        $devices = Device::find($id);
        return $id?$devices:Device::all();
    }

    public function create(Request $request){
        $request->validate([
            "name" =>["string", "required"],
            "type" =>["string", "required"],
            "manufacturer" =>["string", "required"],
            "description" =>["string", "required"]
        ]);
        Device::create([
            "name"=>$request->name,
            "type"=>$request->type,
            "manufacturer"=>$request->manufacturer,
            "description"=>$request->description
        ]);
    }

    public function update(Request $request, $id){
        $device = Device::find($id);
        if($device){
            $device->update([
                "name"=>$request->name
            ]);
            return $device;
        }
        return response()->json(['message'=>'Device not found'], 404);
    }
    public function search($name){
        return Device::where('name', 'LIKE', '%'.$name.'%')->get();

    }
}
