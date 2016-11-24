<?php
	// 本类是系统默认控制器，仅供参考
	namespace Home\Controller;
	use Think\Controller;
	use Home\Controller\BaseController as Base;
	class WelcomeController extends Base{
		public function __construct(){
			parent::__construct();
			$this->assign("User", $_SESSION);
		}	

		//控制器默认方法，可在Home/Common/Conf/config.php中修改
		public function index(){
			if($_COOKIE['UserCookie']){
				$UserCookie = json_decode($_COOKIE['UserCookie'], true);
				$_SESSION['username'] = $UserCookie['username'];
				$_SESSION['superadmin'] = $UserCookie['superadmin'];
				$_SESSION['creattime'] = $UserCookie['creattime'];
				header("location:/welcome/admin_index");exit;	
			}
			$this->display("Welcome/sign_in");
		}

		public function check_login(){
			$model = D("Admin");
			$check_result = $model->check_admin($_POST);
			if(!$check_result){
				echo "<script>alert('登陆失败');location.href='/welcome/index'</script>";
			}else{
				$_SESSION['id'] = $check_result['id'];
				$_SESSION['username'] = $check_result['username'];
				$_SESSION['superadmin'] = $check_result['superadmin'];
				$_SESSION['creattime'] = $check_result['creattime'];
				if($_POST['remember']){
					setcookie("UserCookie", json_encode($check_result), time()+3600*24*7, "/");
				}
				header("location:/welcome/admin_index");

			}
		}

		//index.html
		public function admin_index(){
			$this->display("Index/index");
		}

		//messages.html
		public function messages(){
			$this->display("Index/messages");
		}

		//tasks.html
		public function tasks(){
			$this->display("Index/tasks");
		}

		//ui.html
		public function ui(){
			$this->display("Index/ui");
		}

		//widgets.html
		public function widgets(){
			$this->display("Index/widgets");
		}

		//submenu.html
		public function submenu(){
			$this->display("Index/submenu");
		}

		//submenu2.html
		public function submenu2(){
			$this->display("Index/submenu2");
		}

		//submenu3.html
		public function submenu3(){
			$this->display("Index/submenu3");
		}

		//form.html
		public function form(){
			$this->display("Index/form");
		}

		//chart.html
		public function chart(){
			$this->display("Index/chart");
		}

		//typography.html
		public function typography(){
			$this->display("Index/typography");
		}

		//gallery.html
		public function gallery(){
			$this->display("Index/gallery");
		}

		//table.html
		public function table(){
			$this->display("Index/table");
		}

		//calendar.html
		public function calendar(){
			$this->display("Index/calendar");
		}

		//file-manager.html
		public function file_manager(){
			$this->display("Index/file-manager");
		}

		//icon.html
		public function icon(){
			$this->display("Index/icon");
		}

		//login.html
		public function login(){
			$this->display("Index/login");
		}

		public function logout(){
			session('[destroy]');
			setcookie("UserCookie");
			header("location:/welcome/index");
		}

	}
?>