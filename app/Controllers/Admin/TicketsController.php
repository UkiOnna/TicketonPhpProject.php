<?php
//created by Yernar

namespace Controllers\Admin;

use Models/Tables;

class TicketsController extends Controller
{
  private $table;

public function __construct(){
  $this->$table = new Tickets();
}

  function show(){
      $tickets = $this->table->select();
      $tickets = $this->table->map($tickets);

      return $this->render("admin/dashboard/tickets",["tickets"=> $tickets]);//dashboard.tpl
  }

  function form($ticket_id){
    $ticket = $this->table->select("*",["id"=>$ticket_id])[0];
    return $this->render("admin/dashboard/ticket_edit",["ticket"=>$ticket]);
  }

  function delete($ticket_id){
    $this->table->delete(["id"=>$ticket_id]);
  }
}
