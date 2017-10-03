<?php
/**
 * Created by PhpStorm.
 * User: 章旭
 * Date: 2017/10/3
 * Time: 23:51
 */

namespace App\Http\Controllers;

use App\Relapse;
use App\PatientInfo;
use Illuminate\Http\Request;
class RelapseController extends Controller
{   //房颤复发情况控制器

    public function index(Request $request){
        $id = $request->input("uid",0);     //获取链接中的id,病人id
        $patient_info = PatientInfo::find($id);         //根据id查询病人基础信息
        $form =  Relapse::where("pid",$id)->first();  //根据id查询病人冠心病

        if($form == null){
            $form = new Relapse();
            $form["pid"] = $id;
        }

        return view("Relapse.index",[
            "patient_info"=>$patient_info,
            "form"=>$form
        ]);
    }

    public function create(Request $request){
        if($request->isMethod("POST")){
            $form = $request->input("Form");
            $pid = $form["pid"];
            $id_card = $form["id_card"];
            $form["relapse_date"] = strtotime($form["relapse_date"]);       //入组时间

            if(Relapse::where("id_card",$id_card)->count()){
                if(Relapse::where("id_card",$id_card)->update($form)){
                    return redirect("/Relapse?uid=".$pid."&id_card=".$id_card)->with("result",["code"=>1,"message"=>"修改成功!"]);
                }else{
                    return redirect()->back()->with("result",["code"=>0,"message"=>"修改失败!"]);
                }
            }

            if(Relapse::create($form)){
                return redirect("/Relapse?uid=".$pid."&id_card=".$id_card)->with("result",["code"=>1,"message"=>"创建成功!"]);
            }else{
                return redirect()->back()->with("result",["code"=>0,"message"=>"创建失败!"]);
            }
        }
    }

    public function option($name,$key = -1){
        $option = (new Relapse())->option($key,$name);
        $data = [];
        foreach ($option as $key => $value) {
            array_push($data,["id"=>$key,"text"=>$value]);
        }

        return $data;
    }


}