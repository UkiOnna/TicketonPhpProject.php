<?php
/* Smarty version 3.1.34-dev-7, created on 2019-10-21 17:02:29
  from 'C:\OSPanel\domains\TicketonPhpProject.php\app\Views\manager\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dadba7585e193_04976910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0544ded51ddfee7f48f1532c6a3162e02a12de94' => 
    array (
      0 => 'C:\\OSPanel\\domains\\TicketonPhpProject.php\\app\\Views\\manager\\dashboard.tpl',
      1 => 1571666548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:manager/blocks/head.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5dadba7585e193_04976910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:manager/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>

        <div class="card card-body md-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                    <span class="badge badge-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['status']['name'];?>

                    </span>

                    <div class="card-header">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>

                    </div>
                    <div class="card-body">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['description'];?>

                    </div>

                </div>

                <small class="text-muted">
                    <a href="/manager/users/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['customer']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['customer']['name'];?>
</a>
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <form action="/manager/tickets/appoint_order/re">
                    <select name="employee_id" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eployees']->value, 'employee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value['name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
" type="text" hidden/>
                    <button type="submit" class="btn btn-primary">Назначить</button>
                </form>


                <a href="/manager/tickets/cancel_order/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
" class="btn btn-danger">
                    Отклонить
                </a>

            </div>

        </div>

    <?php
}
} else {
?>

        <div class="m-5 alert alert-secondary">
            Tickets not found
        </div>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee_tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>

        <div class="card card-body md-3 d-flex flex-row align-content-start justify-content-start">

            <div>

                <div class="mb-1">

                    <span class="badge badge-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['status']['name'];?>

                    </span>

                    <div class="card-header">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>

                    </div>
                    <div class="card-body">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['description'];?>

                    </div>

                </div>

                <small class="text-muted">
                    <a href="/manager/users/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['customer']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['customer']['name'];?>
</a>
                </small>

            </div>

            <div class="btn-group btn-group-sm ml-auto mb-auto">

                <a href="/manager/tickets/complete/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
" class="btn btn-primary">
                    Завершить
                </a>

                <a href="/manager/tickets/cancel_work/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
" class="btn btn-danger">
                    Отклонить
                </a>

            </div>

        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
