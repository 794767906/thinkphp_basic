<?php
	//管理员操作模型
	namespace Home\Model;
	use Think\Model;
	class AdminModel extends Model{

		//检查登陆信息
		public function check_admin($data){
			$model = M("admin");
			$info = $model->where(array("username"=>$data['username'], "password"=>md5($data['password'])))->find();
			return $info;
		}

		//新增管理员
		public function add_admin($data){
			$model = M("admin");
			$data['password'] = md5($data['password']);
			$data['creattime'] = time();
			return $model->add($data);
		} 


	}	
?>