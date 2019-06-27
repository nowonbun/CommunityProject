<?php
/* Smarty version 3.1.33, created on 2019-06-27 20:49:56
  from '/home/nowonbun/git/CommunityProject/View/Home/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d14ad64e0a963_17435018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce0cae7b305b0b0a5bab773e2ec7ffbe086074f' => 
    array (
      0 => '/home/nowonbun/git/CommunityProject/View/Home/index.tpl',
      1 => 1557291546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d14ad64e0a963_17435018 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>Framework</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value->getData(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div id="scriptTest"></div>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/common.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
