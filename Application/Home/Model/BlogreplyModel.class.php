<?php 
namespace Home\Model;
use Think\Model;
class BlogreplyModel extends Model{
	// 添加
	public function insert($data){
		return M('blogreply')->add($data);
	}
	// 查询
	public function show($id,$num){
		return M('blogreply')->where($id)->join('inner join login On login.id=blogreply.user_id')->join('inner join blogcomment On blogcomment.comment_id=blogreply.comm_id')->order('reply_id desc')->limit($num)->select();
	}
	// 查询单条
	public function look($id){
		return M('blogreply')->where($id)->find();
	}
	
public function page(){
		$data = array();
		$User = M('blogreply'); 
		// 实例化User对象
		$count      = $User->count();
		// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->lastSuffix = false;
		$Page->setConfig('last','尾页');
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$data['show']       = $Page->show();
		// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$data['list'] = $User->limit($Page->firstRow.','.$Page->listRows)->select();
		//通过顶一个空数组。将当前两个参数放到数组中
		return $data;
	}
}

 ?>