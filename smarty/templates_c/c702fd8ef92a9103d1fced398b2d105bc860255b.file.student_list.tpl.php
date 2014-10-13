<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 12:34:38
         compiled from "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6\smarty\templates\student_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199295437b31e27a962-11803186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c702fd8ef92a9103d1fced398b2d105bc860255b' => 
    array (
      0 => 'c:\\wamp\\www\\dat310-signup\\RonnyWathne-assignment-6\\smarty\\templates\\student_list.tpl',
      1 => 1412937273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199295437b31e27a962-11803186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437b31e33a012_90637206',
  'variables' => 
  array (
    'students' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437b31e33a012_90637206')) {function content_5437b31e33a012_90637206($_smarty_tpl) {?><div class="alert alert-warning" role="alert">
    
</div>

<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Student number</th>
            <th>Email</th>
            <th>Unix username</th>
            <th>Codecademy username</th>
            <th>Github username</th>            
        </tr>
    </thead>
    <tbody>
	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['student_no'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['user_unix'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['user_codecademy'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['user_github'];?>
</td>            
        </tr>
    <?php } ?>   
    </tbody>
</table>

<a href="index.php?action=logout">logout</a>
<?php }} ?>
