{include file="admin/blocks/head.tpl"}
{*created by Yernar*}


<form action="/admin/dashboard/users/create" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>

    <div class="form-group col-md-4">
      <label for="inputState">Роль</label>
      <select id="inputState" class="form-control" name="role">
        <option selected>Choose...</option>
        {foreach $roles as $role}
          <option>{$role.name}</option>
          {/foreach}
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Добавить</button>
</form>


{include file="global/footer.tpl"}