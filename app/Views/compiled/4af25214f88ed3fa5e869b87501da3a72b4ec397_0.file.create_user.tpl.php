<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 00:58:50
  from 'C:\OSPanel\domains\test\app\Views\admin\dashboard\create_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dacd89aeb0069_21294527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4af25214f88ed3fa5e869b87501da3a72b4ec397' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\app\\Views\\admin\\dashboard\\create_user.tpl',
      1 => 1571608554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dacd89aeb0069_21294527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
          <option><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Добавить</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
