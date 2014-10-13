<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:03:38
         compiled from "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6\smarty\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3788543784ca57a158-72099581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098845edc18024314a3345366143b126e18c2b04' => 
    array (
      0 => 'c:\\wamp\\www\\dat310-signup\\RonnyWathne-assignment-6\\smarty\\templates\\profile.tpl',
      1 => 1412593516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3788543784ca57a158-72099581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'student_no' => 0,
    'email' => 0,
    'user_unix' => 0,
    'user_codecademy' => 0,
    'user_github' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543784ca6f8eb4_30180609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543784ca6f8eb4_30180609')) {function content_543784ca6f8eb4_30180609($_smarty_tpl) {?><table class="table">
    <tr>
        <td><strong>Name</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Student number</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['student_no']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Unix username</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['user_unix']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Codecademy username</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['user_codecademy']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Github username</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['user_github']->value;?>
</td>
    </tr>    
</table>
    
<a href="index.php?action=logout">logout</a>
<?php }} ?>
