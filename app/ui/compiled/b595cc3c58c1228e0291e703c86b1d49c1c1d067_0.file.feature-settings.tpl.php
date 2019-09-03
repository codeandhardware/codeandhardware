<?php
/* Smarty version 3.1.33, created on 2019-08-26 09:15:09
  from '/var/www/html/app/ui/theme/ibilling/feature-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d63e96dbf5b24_37667543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b595cc3c58c1228e0291e703c86b1d49c1c1d067' => 
    array (
      0 => '/var/www/html/app/ui/theme/ibilling/feature-settings.tpl',
      1 => 1566415645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d63e96dbf5b24_37667543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2855585295d63e96dbe8832_43004025', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_2855585295d63e96dbe8832_43004025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2855585295d63e96dbe8832_43004025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">






            <div class="ibox float-e-margins" id="ui_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</h5>


                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <td width="80%"><label for="config_accounting"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('accounting') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_accounting"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_invoicing"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('invoicing') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoicing"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_quotes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('quotes') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_quotes"></td>
                        </tr>

                                                                                                
                        </tbody>
                    </table>



                </div>
            </div>


        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
