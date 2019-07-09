<?php 

  class Task extends CI_Controller
  {
    public function index()
    {
      $this->load->library('form_validation');
      // $this->load->helper('interval_helper');
      $this->load->library('interval_lib');

      if ($this->input->post()){
          $this->form_validation->set_rules('task', 'タスク', 'required|min_length[5]|max_length[20]');

          if ($this->form_validation->run()){
            $this->task_model->creates($this->input->post('task'));
            $data['create'] = true;
          }else{
            $data['create'] = false;
          }
      }

      $data['task_list'] = $this->task_model->lists();
      $this->load->view('tutorial/task', $data);
    }
  }