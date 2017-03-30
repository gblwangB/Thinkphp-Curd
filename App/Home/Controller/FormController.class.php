<?php 
namespace Home\Controller;
use Think\Controller;
/**
 * FormController Class
 */
class FormController extends Controller {
  	
  	/**
  	 * [insert description]
  	 */
    public function add(){
        $Form = D('Form');
        if($Form->create()){
          $result = $Form->add();
          if($result){
            $this->success('数据添加成功');
          }else{
            $this->error('数据添加错误');
          } 
        }else{
          $this->error($Form->getError());
        
        }
	}
	
	/**
	 * [read description]
	 */
    public function view(){
        $id = I('get.id');
        $Form   =  M('Form');
        $data = $Form->find($id);  
      	if($data) {
           	$this->assign('data',$data);//模版变量赋值
      	}else{
           	$this->error('数据出错');
      	}
      	$this->display();
 	}


	/**
	 * [edit description]
	 */
  	public function edit(){
      if (IS_POST) {
        $where['id'] = I('post.id');
        $post['title'] = I('post.title');
        $post['content'] = I('post.content');
        M('Form')->where($where)->setField($post);
        redirect(U('edit', 'id='.$where['id']));
      } else if (IS_GET) {
       $id = I('get.id');
       $Form =  M('Form');
       $this->assign('vo',$Form->find($id));
       echo $Form->getLastSql();
       $this->display();
      }
  	}



    public function update(){
	    $Form = D('Form');
	    if($Form->create()) {
	        $result = $Form->save();
	        if($result){
	             $this->success('添加数据成功!');
	        }else{
	             $this->error('写入错误！');
	        }    
	    }else{
	        $this->error($Form->getError());
	    }

	}
 
}
