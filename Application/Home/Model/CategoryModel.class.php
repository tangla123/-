<?php 
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
	// 添加
	public function insert($data){
		return M('category')->add($data);
	}
	// 查询
	public function show($n){
		return M('category')->where($n)->select();
	}
	public function show1($n,$num){
		return M('category')->where($n)->limit($num)->select();
	}
	

	public function showtwo($n){
		return M('category')->where($n)->order('art_id desc')->join(array('inner join blogarticle On blogarticle.cat_idi=category.cat_id'))->select();
	}
	// 
	// 查询单条
	public function look($id){
		return M('category')->where($id)->find();
	}
	// 删除
	// public function del($id){
	// 	return M('category')->delete($id);
	// }
	public function del($id,$data){
		$obj = M('category');
		return $obj->where($id)->save($data);
		//echo $obj->_sql();die;
	}
	// 修改
	public function update($id,$data){
		$obj = M('category');
		return $obj->where($id)->save($data);
		//echo $obj->_sql();die;
	}

// 	 // 文件上传
//     public function upload($myfile){
//     $upload = new \Think\Upload();// 实例化上传类
//     $upload->maxSize   =     3145728 ;// 设置附件上传大小
//     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//     $upload->savePath  =     './Publick/Upload/'; // 设置附件上传根目录
//     $upload->rootPath  =     './'; // 设置附件上传（子）目录
//     // 上传文件 
//     $info   =   $upload->uploadOne($myfile);
//     if(!$info){
//         return $upload->getError();
//     }else{// 上传成功
//         return $info['savepath'].$info['savename'];
//     }
// }
public function page(){
		$data = array();
		$User = M('category'); 
		// 实例化User对象
		$count      = $User->where('c_id=1')->order('ord desc')->count();
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
		$data['list'] = $User->where('c_id=1')->order('ord desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//通过顶一个空数组。将当前两个参数放到数组中
		return $data;
	}
}

 ?>