<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 00:57:48
  from 'C:\OSPanel\domains\test\app\Views\admin\dashboard\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dacd85cc48922_05426074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b9944bceed2d34371968509cebef5bd0f88b8c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\test\\app\\Views\\admin\\dashboard\\users.tpl',
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
function content_5dacd85cc48922_05426074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p class="h2"><?php echo $_smarty_tpl->tpl_vars['users']->value[0]['role']['name'];?>
</p>
<br/>

<a style="width: 150px; "
   class="btn btn-primary btn-sm" href="/admin/dashboard/users/create" role="button">Добавить +</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr>
    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</th>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
    <td>
        <a  class="btn btn-warning btn-sm " href="/admin/dashboard/users/update/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" >Редактировать</a>
        <a  class="btn btn-danger btn-sm " href='/admin/dashboard/users/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
' >Удалить</a>
    </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
