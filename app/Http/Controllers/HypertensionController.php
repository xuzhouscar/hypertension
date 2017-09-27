<?php
/**
 * Created by PhpStorm.
 * User: 章旭
 * Date: 2017/9/26
 * Time: 23:04
 */

namespace App\Http\Controllers;


use App\Hypertension;
use App\PatientInfo;
use Illuminate\Http\Request;

class HypertensionController extends Controller
{   //高血压控制器

    public function index(Request $request){
        $id = $request->input("uid",0);     //获取链接中的id,病人id
        $patient_info = PatientInfo::find($id);         //根据id查询病人基础信息
        $form = Hypertension::where("pid",$id)->first();  //根据id查询病人家庭史

        if($form == null){
            $form = new Hypertension();
            $form["pid"] = $id;
        }

        return view("hypertension.index",[
            "patient_info"=>$patient_info,
            "form"=>$form
        ]);
    }

    public function create(Request $request){
        if($request->isMethod("POST")){
            $form = $request->input("Form");
            $pid = $form["pid"];
            $id_card = $form["id_card"];

            if(Hypertension::where("id_card",$id_card)->count()){
                if(Hypertension::where("id_card",$id_card)->update($form)){
                    return redirect("/hypertension?uid=".$pid."&id_card=".$id_card)->with("result",["code"=>1,"message"=>"修改成功!"]);
                }else{
                    return redirect()->back()->with("result",["code"=>0,"message"=>"修改失败!"]);
                }
            }

            if(Hypertension::create($form)){
                return redirect("/hypertension?uid=".$pid."&id_card=".$id_card)->with("result",["code"=>1,"message"=>"创建成功!"]);
            }else{
                return redirect()->back()->with("result",["code"=>0,"message"=>"创建失败!"]);
            }
        }
    }

    public function option($name,$key = -1){
        $option = (new Hypertension())->option($key,$name);
        $data = [];
        foreach ($option as $key => $value) {
            array_push($data,["id"=>$key,"text"=>$value]);
        }

        return $data;
    }
}