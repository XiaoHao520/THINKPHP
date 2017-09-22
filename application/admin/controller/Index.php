<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\admin\model\Admin;
use think\View;

class Index extends Controller
{
    /*    protected $beforeActionList = [
            'first',
            'second' => ['except' => 'hello'],

            'three' => ['only' => 'hello'],
        ];*/

    //except 表示这些方法不是用前置方法，
    //only 表示只有这些方法使用前置方法

    public function index()
    {


        $rs = Db::query('select *	from admin where admin_id=?', [1]);
        //这样查出来就要使用$rs[0]['admin_name'];


        $rs = Db::table('admin')->where('admin_id', 1)->find();
        //$rs['admin_name'];即可

        $rs = Db::table('admin')->where('admin_id', 1)->value('admin_name');
        //查询某个列的值

        echo $rs . "<br>";

        //插入数据
        $data = ['admin_name' => 'xiaohao', 'admin_password' => '123456'];
        //$rs=Db::table("admin")->insertGetId($data);

        // echo $rs."<br>";


        //通过模去查询
        $admin = Admin::get(1);
        echo $admin->admin_password;


        //新增加一条记录

        $admin = new Admin;
        $admin->admin_name = "heshixin";
        $admin->admin_password = "hahahh";
        //$admin->save();

        Admin::destroy(["admin_name" => "heshixin"]);


        $rs = Db::table('admin')->select();
        //$rs['admin_name'];即可
        for ($i = 0; $i < count($rs); $i++) {

            echo $rs[$i]['admin_name'];
            echo "<br>";
        }


        echo "<br>查询";
        echo "<br>";
        $this->assign("list", $rs);
        echo "<br>";
        echo $this->fetch('index');
    }


}
