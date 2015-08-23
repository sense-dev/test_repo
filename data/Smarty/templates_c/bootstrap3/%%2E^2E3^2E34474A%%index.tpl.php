<?php /* Smarty version 2.6.27, created on 2015-07-13 00:57:51
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/index.tpl', 26, false),)), $this); ?>

<?php echo '<div id="main_image"><a href="mypage/index.php"><img class="hover_change_image img-responsive" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/banner/bnr_top_main.jpg" alt="詳細はこちら"  width="100%" /></a></div>'; ?>
