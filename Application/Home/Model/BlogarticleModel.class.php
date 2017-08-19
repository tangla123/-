<?php 
namespace Home\Model;
use Think\Model;
class BlogarticleModel extends Model{
	// 添加
	public function insert($data){
		return M('blogarticle')->add($data);
	}
	// 查询个人模板
	public function del($id,$data){
		$obj = M('blogarticle');
		return $obj->where($id)->save($data);
		//echo $obj->_sql();die;
	}
	// 查询
	public function show($num){
		return M('blogarticle')->order('art_id desc')->limit($num)->select();
	}	
	public function show1($num){
		return M('blogarticle')->where('is_recommend')->order('art_id desc')->limit($num)->select();
	}
	public function show2(){
		return M('blogarticle')->select();
	}
	
	
	public function showtwo($n){
		return M('blogarticle')->where($n)->join(array('inner join category On blogarticle.cat_idi=category.cat_id'))->select();
	}
	public function showtwo1($n,$num){
		return M('blogarticle')->where($n)->join(array('inner join category On blogarticle.cat_idi=category.cat_id'))->limit($num)->select();
	}
	public function showtwo2($num){
		return M('blogarticle')->join(array('inner join category On blogarticle.cat_idi=category.cat_id'))->order('read_num desc')->limit($num)->select();
	}

	// 查询单条
	public function look($id,$name){
		return M('blogarticle')->where($id AND $name)->join(array('inner join category On blogarticle.cat_idi=category.cat_id'))->find();
	}

	public function look1($id){
	return M('blogarticle')->where($id)->join('inner join category On blogarticle.cat_idi=category.cat_id')->join('inner join adminlog On adminlog.admin_id=blogarticle.author')->find();
	}
	
	// 修改
	public function update($id,$data){
		$obj = M('blogarticle');
		return $obj->where($id)->save($data);
		//echo $obj->_sql();die;
	}

	
public function page(){
		$data = array();
		$User = M('blogarticle')->join(array('inner join category On blogarticle.cat_idi=category.cat_id')); 
		// 实例化User对象
		$count      = $User->where('is_delete=1')->order('aord desc')->count();
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
		$data['list'] = $User->where('is_delete=1')->order('aord desc')->join(array('inner join category On blogarticle.cat_idi=category.cat_id'))->limit($Page->firstRow.','.$Page->listRows)->select();
		//通过顶一个空数组。将当前两个参数放到数组中
		return $data;
	}
}

 ?>