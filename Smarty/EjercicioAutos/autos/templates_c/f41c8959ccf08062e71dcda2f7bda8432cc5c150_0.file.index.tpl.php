<?php
/* Smarty version 3.1.30, created on 2016-08-11 00:52:43
  from "/Applications/XAMPP/xamppfiles/htdocs/autos/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57abb03b9a8896_81356283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41c8959ccf08062e71dcda2f7bda8432cc5c150' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/autos/templates/index.tpl',
      1 => 1470869538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:listaAutos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57abb03b9a8896_81356283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:listaAutos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
