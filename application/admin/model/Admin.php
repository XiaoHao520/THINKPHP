<?php
/**
 * Created by PhpStorm.
 * User: xiaohao
 * Date: 17-9-22
 * Time: 下午2:57
 */
namespace app\admin\model;
use think\Model;
class Admin extends Model{
    protected	$table	=	'admin';

     protected $pk='admin_id';

    //	设置当前模型的数据库连接
    protected	$connection	=	[
        //	数据库类型
        'type'								=>	'mysql',
        //	服务器地址
        'hostname'				=>	'127.0.0.1',
        //	数据库名
        'database'				=>	'eten',
        //	数据库用户名
        'username'				=>	'root',
        //	数据库密码
        'password'				=>	'root',
        //	数据库编码默认采用utf8
        'charset'					=>	'utf8',
        //	数据库表前缀
        'prefix'						=>	'',
        //	数据库调试模式
        'debug'							=>	false,
    ];


}