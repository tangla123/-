<?php 
namespace Admin\Model;
use Think\Model;
class AdminlogModel extends Model{
	
	// 查询
	public function show(){
		return M('adminlog')->select();
	
}
// 添加
	public function insert($data){
		return M('adminlog')->add($data);
	}


 // 文件上传
    public function upload($myfile){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->savePath  =     './Publick/Upload/'; // 设置附件上传根目录
    $upload->rootPath  =     './'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->uploadOne($myfile);
    if(!$info){
        return $upload->getError();
    }else{// 上传成功
        return $info['savepath'].$info['savename'];
    }
}
}

 ?>