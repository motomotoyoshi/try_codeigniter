<?php

  class Task_model extends CI_Model
  {
    public function __construct()
      {
        parent::__construct();
        $this->load->database();
      }

      public function lists()
      {
        $this->load->config('per');
        // 1ページあたりの表示数
        $per_page = $this->config->item('per_page');
        $query = $this->db->get('task', $per_page);
        if ($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return [];
        }
      }

      public function creates($task)
      {
        $data = ['task_name' => $task];
        $this->db->insert('task', $data);
      }
  }