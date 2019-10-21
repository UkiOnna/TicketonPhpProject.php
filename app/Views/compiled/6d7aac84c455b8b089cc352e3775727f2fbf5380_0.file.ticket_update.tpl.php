<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 17:12:46
  from 'C:\OSPanel\domains\TicketonPhpProject.php\app\Views\admin\dashboard\ticket_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dadbcde83a7c4_04790662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d7aac84c455b8b089cc352e3775727f2fbf5380' => 
    array (
      0 => 'C:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\admin\\dashboard\\ticket_update.tpl',
      1 => 1571665098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dadbcde83a7c4_04790662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="/admin/dashboard/tickets/update" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" style="visibility:hidden; width:0px"
        name="id" value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
">
      <label >Title</label>
      <input type="text" class="form-control" placeholder="Name"
      name="title" value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>
">
    </div>
    <div class="form-group shadow-textarea">
  <label for="exampleFormControlTextarea6">Description</label>
  <textarea class="form-control z-depth-1" name="description"
  id="exampleFormControlTextarea6" rows="3" placeholder="Write something here...">
  <?php echo $_smarty_tpl->tpl_vars['ticket']->value['description'];?>

</textarea>
</div>
  </div>

  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>


<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
