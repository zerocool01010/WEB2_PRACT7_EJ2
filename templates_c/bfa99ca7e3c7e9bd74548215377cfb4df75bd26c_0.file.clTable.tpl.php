<?php
/* Smarty version 3.1.39, created on 2021-11-01 10:09:41
  from 'C:\xampp\htdocs\web2\2021 Tandil (mi cursada)\Unidad 7\Practico\EJ2\clTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617faed5f24d23_89608083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfa99ca7e3c7e9bd74548215377cfb4df75bd26c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\2021 Tandil (mi cursada)\\Unidad 7\\Practico\\EJ2\\clTable.tpl',
      1 => 1635757580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617faed5f24d23_89608083 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cleaning']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<ul><?php }
}
