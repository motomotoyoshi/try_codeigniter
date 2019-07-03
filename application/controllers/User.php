<?php
class User extends CI_controller
{
  public function profile($id=null)
  {
    echo $id;
  }

  public function detail()
  {
    $data = [
      'name' => '山田太郎',
      'pref' => '東京都'
    ];
    $this->load->view('tutorial/user_detail', $data);
  }
}