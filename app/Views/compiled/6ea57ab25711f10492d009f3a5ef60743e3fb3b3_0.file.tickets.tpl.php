<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 17:27:23
  from 'C:\OSPanel\domains\TicketonPhpProject.php\app\Views\admin\dashboard\tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dadc04be559f5_95926640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ea57ab25711f10492d009f3a5ef60743e3fb3b3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\admin\\dashboard\\tickets.tpl',
      1 => 1571668042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dadc04be559f5_95926640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p class="h2">Tickets</p>
<br/>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Заголовок</th>
        <th scope="col">Описание</th>
        <th scope="col">Статус</th>
        <th scope="col">Исполнитель</th>
        <th scope="col">Заказчик</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>
        <?php echo print_r($_smarty_tpl->tpl_vars['ticket']->value);?>
<br/>
        <tr>
    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
</th>
    <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['description'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['status']['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['employee']['username'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['customer']['username'];?>
</td>
    <td>
        <a  class="btn btn-warning btn-sm " href="/admin/dashboard/tickets/update/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
" >Редактировать</a>
        <a  class="btn btn-danger btn-sm " href='/admin/dashboard/tickets/delete/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
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
