<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:46
         compiled from "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6\smarty\templates\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16639543784961f7b20-96493753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b4dd0cb1f7040c77b924b1f492ab162c437128' => 
    array (
      0 => 'c:\\wamp\\www\\dat310-signup\\RonnyWathne-assignment-6\\smarty\\templates\\signup.tpl',
      1 => 1412593516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16639543784961f7b20-96493753',
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
  'unifunc' => 'content_5437849637a6f5_53864640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437849637a6f5_53864640')) {function content_5437849637a6f5_53864640($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="student_no" class="col-sm-3 control-label">Student number</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="student_no" name="student_no" placeholder="Enter student number" value="<?php echo $_smarty_tpl->tpl_vars['student_no']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your uis.no email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="user_unix" class="col-sm-3 control-label">Unix username</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="user_unix" name="user_unix" placeholder="Enter your ux.uis username" value="<?php echo $_smarty_tpl->tpl_vars['user_unix']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="user_codeacademy" class="col-sm-3 control-label">Codecademy username</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="user_codecademy" name="user_codecademy" placeholder="Enter your Codecademy username" value="<?php echo $_smarty_tpl->tpl_vars['user_codecademy']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="user_github" class="col-sm-3 control-label">Github username</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="user_github" name="user_github" placeholder="Enter your Github username" value="<?php echo $_smarty_tpl->tpl_vars['user_github']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="signup" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Sign up</button>
</form>

<a href="index.php">Back to login page</a>
<?php }} ?>
