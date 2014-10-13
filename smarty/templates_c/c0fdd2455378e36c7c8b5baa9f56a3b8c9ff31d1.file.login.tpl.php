<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 11:25:19
         compiled from "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6\smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246065437846a341ba6-88754268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0fdd2455378e36c7c8b5baa9f56a3b8c9ff31d1' => 
    array (
      0 => 'c:\\wamp\\www\\dat310-signup\\RonnyWathne-assignment-6\\smarty\\templates\\login.tpl',
      1 => 1412933116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246065437846a341ba6-88754268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437846a3515a7_38242528',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437846a3515a7_38242528')) {function content_5437846a3515a7_38242528($_smarty_tpl) {?><form action="index.php" method="POST" class="form-inline" role="form">
    <div class="form-group">
        <label class="sr-only" for="student_no">Student number</label>
        <input type="text" class="form-control" id="student_no" name="student_no" placeholder="Student number">
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">@</div>
            <input class="form-control" type="text" name="email" placeholder="Email">
        </div>
    </div>
    <button type="submit" class="btn btn-default">Login</button>
    <input type="hidden" name="action" value="login" />
</form>

<a href="index.php?action=signup">Sign up if you haven't registered yet</a>
<?php }} ?>
