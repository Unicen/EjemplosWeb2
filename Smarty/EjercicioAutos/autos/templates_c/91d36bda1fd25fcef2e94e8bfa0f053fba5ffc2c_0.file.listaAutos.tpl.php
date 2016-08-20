<?php
/* Smarty version 3.1.30, created on 2016-08-11 00:56:18
  from "/Applications/XAMPP/xamppfiles/htdocs/autos/templates/listaAutos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57abb112b23eb7_45654416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d36bda1fd25fcef2e94e8bfa0f053fba5ffc2c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/autos/templates/listaAutos.tpl',
      1 => 1470869740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57abb112b23eb7_45654416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
?>
    <ul>
      <li>Marca: <?php echo $_smarty_tpl->tpl_vars['car']->value->marca;?>
</li>
      <li>Modelo: <?php echo $_smarty_tpl->tpl_vars['car']->value->modelo;?>
</li>
      <li>Puertas: <?php echo $_smarty_tpl->tpl_vars['car']->value->puertas;?>
</li>
      <li>Motor: <?php echo $_smarty_tpl->tpl_vars['car']->value->motor;?>
</li>
      <li>Origen: <?php echo $_smarty_tpl->tpl_vars['car']->value->origen;?>
</li>
      <li>Color: <?php echo $_smarty_tpl->tpl_vars['car']->value->color;?>
</li>
    </ul>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
