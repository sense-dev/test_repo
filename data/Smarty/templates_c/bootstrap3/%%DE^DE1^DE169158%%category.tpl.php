<?php /* Smarty version 2.6.27, created on 2015-07-12 11:24:03
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/frontparts/bloc/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/frontparts/bloc/category.tpl', 38, false),)), $this); ?>

<script type="text/javascript">//<![CDATA[
    $(function(){
        $('#category_area li.level1:last').css('border-bottom', 'none');
    });
//]]></script>

<?php echo '<div class="block_outer"><div id="category_area" class="panel panel-default"><div class="panel-heading"><h2 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> 商品カテゴリ</h2></div><div class="block_body panel-body">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/bloc/category_tree_fork.tpl", 'smarty_include_vars' => array('children' => ((is_array($_tmp=$this->_tpl_vars['arrTree'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'treeID' => "",'display' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '</div></div></div>'; ?>
