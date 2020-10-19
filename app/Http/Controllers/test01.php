<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class test01 extends Controller
{
    public function showdata(){
        $sql="select * from mytb1";
        $sql = DB::select($sql);
        return view('showdata',['sql'=>$sql]);
    }
    public function insert(Request $request){
        $name=$request->input('name');
        $lastname=$request->input('lastname');
        $age=$request->input('age');
        $sql="insert into mytb1(name,lastname,age) values('".$name."','".$lastname."','".$age."');";
        DB::insert($sql);
        return redirect()->action('App\Http\Controllers\test01@showdata');
    }
    public function edit($id){/* รับแบบget */ 
        $data = DB::table('mytb1')->where('id',$id)->first();
        return view('edit',['data'=>$data]);
    }
    public function chang(Request $ids){/* รับแบบ postมีRequest  */
        $id = $ids->input('id');
        $data = DB::table('mytb1')->where('id',$id)->first();
        return view('edit',['data'=>$data]);
    }
    public function update(Request $request,$id) {
        $name=$request->input('name');
        $lastname=$request->input('lastname');
        $age=$request->input('age');
        DB::update("update mytb1 set name='".$name."', lastname='".$lastname."', age='".$age."' where id='".$id."'");
        return redirect()->action('App\Http\Controllers\test01@showdata');
    }
    public function delete($id){/* รับแบบget */
        $sql=DB::delete("delete from mytb1 where id='".$id."'");
        return redirect()->action('App\Http\Controllers\test01@showdata');
    }
}
