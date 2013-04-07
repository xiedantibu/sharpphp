<?php
class IndexController extends Controller {
	public function indexAction($view) {
		$model = new Model('user', 'uid');
		
		$users = $model->select(array('uid > ?'=>3))->page(1, 10)->fetch_all('uid');
		
		$view->users = $users;
		
		$view->display();
	}
}