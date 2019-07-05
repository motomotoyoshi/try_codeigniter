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

  public function url()
  {
    $this->load->helper('url');
    echo auto_link('googleのurlは、https://google.comです');
    echo '<br>';
    echo site_url();
  }
}