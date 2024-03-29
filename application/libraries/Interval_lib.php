<?php 
class Interval_lib
{
  function calc($created_at)
  {
    $today = new DateTime();
    $created_day = new DateTime($created_at);
    $interval = $today->diff($created_day);
    return $interval->format('%a日前');
  }
}
