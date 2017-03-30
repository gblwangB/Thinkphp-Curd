<?php
namespace Home\Controller;
use Think\Controller;
 /**
 	* IndexController Class
 	**/
class IndexController extends Controller {

	/**
	 * [index description]
	 */
    public function index (){
		// $Data	= M('Form');// 实例化Data数据模型
		// $result	= $Data->find(1);
		// $this->assign('result',$result);
	 	//  $this->display();
	 	// $name='Donsen';
	 	// 	$this->name2=$name;
	 	// 	$date=date('Y-m-d');
	 	// 	$this->assign('name',$name)->assign('sex','man')->assign('today',$date);
	 	// 	$this->display();
	 	// $me{'name'}='Donsen';
	 	// $me{'age'}=	'29';
	 	// $me{'sex'}='max';
	 	// $this->assign('me',$me);
	 	// $this->now=time();
	 	// $this->display();
	 	// $person=array(
	 	//      1=>array('name' =>'jack','age'=>'18'),
	 	//      2=>array('name' =>'Tom','age'=>'19'),
	 	//      3=>array('name' =>'Patter','age'=>'20'),
	 	//      4=>array('name' =>'Mary','age'=>'21'),
	 	//    );
	 	// $this->assign('person',$person);
	 	// $this->display;
	 	// 
	 	$User = M('Form');
		$User->where('id=22')->field('id','title')->select();
		$this->assign('id',$id);
		$this->display;
	}
}
    