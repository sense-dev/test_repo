<?php /* Smarty version 2.6.27, created on 2015-07-12 11:07:12
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/mypage/navi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/navi.tpl', 28, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/navi.tpl', 47, false),array('modifier', 'number_format', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/navi.tpl', 49, false),array('modifier', 'default', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/navi.tpl', 49, false),)), $this); ?>

<div id="mynavi_area">
    <?php echo '<div class="mynavi_list btn-group btn-group-justified margin-bottom-lg"><a href="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo './'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '" class="btn btn-default'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' active'; ?><?php endif; ?><?php echo '" role="button">購入履歴</a><a href="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo 'favorite.php'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '" class="btn btn-default'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' active'; ?><?php endif; ?><?php echo '" role="button">お気に入り</a><div class="btn-group"><a href="#" class="btn btn-default dropdown-toggle'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change' || ((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delivery' || ((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'refusal'): ?><?php echo ' active'; ?><?php endif; ?><?php echo '" data-toggle="dropdown"><span class="fa fa-cog"></span> 設定 <span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right" role="menu"><li><a href="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo 'change.php'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '"><span class="fa fa-wrench"></span> 会員登録内容変更</a></li><li><a href="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo 'delivery.php'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '"><span class="fa fa-truck"></span> お届け先追加・変更</a></li><li class="divider"></li><li><a href="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo 'refusal.php'; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '"><span class="fa fa-ban"></span> 退会手続き</a></li></ul></div></div><!--▼現在のポイント-->'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['point_disp'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '<div class="point_announce alert alert-warning"><p>ようこそ&nbsp;／&nbsp;<span class="user_name">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '様</span>'; ?><?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '&nbsp;現在の所持ポイントは&nbsp;<span class="point st">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerPoint'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo 'pt</span>&nbsp;です。'; ?><?php endif; ?><?php echo '</p></div>'; ?><?php endif; ?><?php echo '<!--▲現在のポイント-->'; ?>


</div>
<!--▲NAVI-->