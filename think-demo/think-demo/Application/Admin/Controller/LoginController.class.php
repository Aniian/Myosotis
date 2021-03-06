<?php
/*
 * 后台登录控制器
 */
 namespace Admin\Controller;
 use Think\controller;
 class LoginController extends Controller{
	 /*登录页视图*/
	 public function index(){
		 $this->display();
	 }

	 /*登录处理*/
	 public function login(){
		 if(!IS_POST) $this->error('访问页面不存在');

		 //if(!isset($_POST['submit'])) return false;

		 $name = I('username');
		 $pwd = md5(I('password'));
		 $db = M('admin');
		 $admin = $db->where(array('username'=>$name))->find();

		 if(!$admin || $admin['password'] != $pwd){
			 $this->error('账号或密码错误');
		 }

		 session('uid',$user['id']);
		 session('username',$user['username']);

		 $this->success('登录成功', __APP__);
	 }
 }