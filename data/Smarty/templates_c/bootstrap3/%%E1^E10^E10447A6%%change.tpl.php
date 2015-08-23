<?php /* Smarty version 2.6.27, created on 2015-07-12 17:17:53
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/mypage/change.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/change.tpl', 31, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/mypage/change.tpl', 33, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title">编辑会员信息</h2>
    <div id="mycontents_area">
        <p class="alert alert-info"><strong>必須項目</strong>「<span class="attention">※</span>」印は入力必須項目です。</p>
        <br />
        <form name="form1" id="form1" class="form-horizontal" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="confirm" />
            <input type="hidden" name="customer_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['customer_id']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."frontparts/form_personal_input.tpl", 'smarty_include_vars' => array('flgFields' => 3,'emailMobile' => true,'prefix' => "")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <div class="btn_area form-group">
                <div class="col-sm-12 col-md-4 col-md-push-2">
                    <button name="refusal" id="refusal" class="btn btn-primary btn-block xs-btn-lg sm-btn-lg">確認ページヘ</button>
                </div>
            </div>
        </form>
    </div>
</div>