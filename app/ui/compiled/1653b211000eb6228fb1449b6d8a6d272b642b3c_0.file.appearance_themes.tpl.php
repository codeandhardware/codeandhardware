<?php
/* Smarty version 3.1.33, created on 2019-08-21 15:16:25
  from '/var/www/html/app/ui/theme/ibilling/appearance_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5da699833335_49176747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1653b211000eb6228fb1449b6d8a6d272b642b3c' => 
    array (
      0 => '/var/www/html/app/ui/theme/ibilling/appearance_themes.tpl',
      1 => 1566415645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5da699833335_49176747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12788178745d5da699823f80_69043590', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_12788178745d5da699823f80_69043590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12788178745d5da699823f80_69043590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes_post/">


                        <div class="form-group">
                            <label for="theme"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Theme'];?>
</label>
                            <select name="theme" id="theme" class="form-control">
                                
                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['themes']->value)===null||$tmp==='' ? array() : $tmp), 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected" <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['theme']->value);?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nstyle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Style'];?>
</label>
                            <select name="nstyle" id="nstyle" class="form-control">
                                <option value="dark" <?php if ($_smarty_tpl->tpl_vars['_c']->value['nstyle'] == 'dark') {?>selected="selected" <?php }?>>Dark</option>
                                <option value="light" <?php if ($_smarty_tpl->tpl_vars['_c']->value['nstyle'] == 'light') {?>selected="selected" <?php }?>>Light</option>
                                <option value="blue" <?php if ($_smarty_tpl->tpl_vars['_c']->value['nstyle'] == 'blue') {?>selected="selected" <?php }?>>Blue</option>
                                <option value="dark_extra" <?php if ($_smarty_tpl->tpl_vars['_c']->value['nstyle'] == 'dark_extra') {?>selected="selected" <?php }?>>Dark extra</option>
                            </select>
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>










        </div>




    </div>


<?php
}
}
/* {/block "content"} */
}
