<?php /* Smarty version Smarty-3.1.19, created on 2014-10-10 09:02:01
         compiled from "c:\wamp\www\dat310-signup\RonnyWathne-assignment-6\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:725754378469a07fa6-00029336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7e5468068122866ed9c6f4494e1bcf7fe83cc0' => 
    array (
      0 => 'c:\\wamp\\www\\dat310-signup\\RonnyWathne-assignment-6\\smarty\\templates\\index.tpl',
      1 => 1412593516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725754378469a07fa6-00029336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'course_code' => 0,
    'course_name' => 0,
    'page_title' => 0,
    'page_info' => 0,
    'page_errors' => 0,
    'error' => 0,
    'logged_in' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5437846a2b5187_82622767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437846a2b5187_82622767')) {function content_5437846a2b5187_82622767($_smarty_tpl) {?><html>
    <head>
        <title>[<?php echo $_smarty_tpl->tpl_vars['course_code']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['course_name']->value;?>
 | Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="header">
            <h1>[<?php echo $_smarty_tpl->tpl_vars['course_code']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['course_name']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</small></h1>
        </div>        

        <div class="col-md-8">
            
            <?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>
                <div class="alert alert-info" role="alert">
                    <p><?php echo $_smarty_tpl->tpl_vars['page_info']->value;?>
</p>
                </div>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['page_errors']->value) {?>
                <div class="alert alert-danger" role="alert">
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    <?php } ?>
                </div>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value=="signup") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("signup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php }?>
        </div>
    </body>
</html><?php }} ?>
