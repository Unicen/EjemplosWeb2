<?php
/* Smarty version 3.1.30, created on 2016-08-11 01:12:30
  from "/Applications/XAMPP/xamppfiles/htdocs/autos/templates/tablaAutos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57abb4de2ba525_67474598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed3d0a2d6eed4a645439178a457492188fda34c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/autos/templates/tablaAutos.tpl',
      1 => 1470870748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57abb4de2ba525_67474598 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_currency')) require_once '/Applications/XAMPP/xamppfiles/htdocs/autos/libs/plugins/modifier.currency.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Puertas</th>
      <th>Motor</th>
      <th>Origen</th>
      <th>Color</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->marca;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->modelo;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->puertas;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->motor;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->origen;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['car']->value->color;?>
</td>
      <td><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['car']->value->precio,"ARS");?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
