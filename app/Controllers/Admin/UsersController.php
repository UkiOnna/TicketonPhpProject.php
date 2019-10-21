<?php
//created by Yernar

namespace Controllers\Admin;


use Core\Abstracts\Controller;
use Models\Tables\Admin\Blocks;
use Models\Tables\Admin\Roles;
use Models\Tables\Users;

class UsersController extends Controller
{
    private $table;
    public function __construct()
    {
        $this->table = new Users();
    }

    function show($rolename){

        $roles = new Roles();
        $role_id = $roles->select("id",["name"=>$rolename]);
        $users = $this->table->select("*",["role_id"=> $role_id]);
        $users = $this->table->map($users);
        return $this->render("admin/dashboard/users",["users"=> $users]);//dashboard.tpl
    }

    function createForm(){
        $rtable = new Roles();
        $roles= $rtable->select();
        return $this->render("admin/dashboard/create_user",["roles"=>$roles]);
    }

    function createUser(&$user){
        $rtable = new Roles();
        $role_id = $rtable->select("id", ["name"=>$user["role_id"]]);
        $user["role_id"] = $role_id[0];
        $this->table->insert($user);
    }

    function deleteUser($id){
        $this->table->delete(["id"=>$id]);
    }

    function updateUser($data, $id){
        $this->table->update($data, ["id"=>$id]);
    }
}