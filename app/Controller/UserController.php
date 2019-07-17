<?php
class UserController extends AppController{
  var $uses = array('User');
    public $name = "Users"; // tên của Controller User
    function index(){
      $data = $this->User->find("all");
      $this->paginate = array(
                                'limit' => 4,
                                'order' => array('title' => 'desc'),
                             );
       $data = $this->paginate("User");
      $this->set("data",$data);
    }

    function add(){
      if ($this->request->is('post')){
        if ($this->User->save($this->request->data)){
          $this->Session->setFlash('Thêm mới thành công');
          $this->redirect(array('action' => 'index'));

        }else{
          $this->Session->setFlash('Thêm mới thất bại');

        }
      }
    }
    function edit() {
   
      $id = $this->request->params['pass'][0];
      $this->User->id = $id;

      if( $this->User->exists() ){

        if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
          if( $this->User->save( $this->request->data ) ){

            $this->Session->setFlash('Sửa thành công');

            $this->redirect(array('action' => 'index'));

          }else{
            $this->Session->setFlash('Sửa thất bại');
          }

        }else{
          $this->request->data = $this->User->read();
        }

      }else{
  
        $this->Session->setFlash('The user you are trying to edit does not exist.');
        $this->redirect(array('action' => 'index'));
      }


    }

    function delete() {
      $id = $this->request->params['pass'][0];
      if( $this->request->is('get') ){

        $this->Session->setFlash('Không được phép xóa.');
        $this->redirect(array('action' => 'index'));
      }else{

        if( !$id ) {
          $this->Session->setFlash('Id không hợp lệ');
          $this->redirect(array('action'=>'index'));

        }else{
          if( $this->User->delete( $id ) ){
            $this->Session->setFlash('Xóa thành công');
            $this->redirect(array('action'=>'index'));

          }else{  
            $this->Session->setFlash('Xóa thất bại');
            $this->redirect(array('action' => 'index'));
          }
        }
      }
    }



  }
  ?>
