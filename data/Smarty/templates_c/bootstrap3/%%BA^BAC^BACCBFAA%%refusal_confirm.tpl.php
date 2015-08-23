<?php /* Smarty version 2.6.27, created on 2015-07-12 17:32:08
         compiled from mypage/refusal_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mypage/refusal_confirm.tpl', 26, false),array('modifier', 'h', 'mypage/refusal_confirm.tpl', 26, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="refusal_transactionid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['refusal_transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="complete" />

        <div id="mycontents_area">
            <h3><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>
            <div id="complete_area">
                <div class="message">退会手続きを実行してもよろしいでしょうか？</div>
                <div class="message_area">
                    <p class="alert alert-danger">
                        <span class="fa fa-warning"></span>
                        退会手続きが完了した時点で、現在保存されている購入履歴やお届け先等の情報は全てなくなりますのでご注意ください。
                    </p>
                    <div class="btn_area row">
                        <div class="col-sm-7 padding-right-none hidden-xs">
                            <a href="./refusal.php" class="btn btn-default btn-block">いいえ、退会しません</a>
                        </div>
                        <div class="col-sm-5">
                            <button name="send_button" name="refuse_do" id="refuse_do" class="btn btn-danger btn-block">はい、退会します</button>
                        </div>
                        <div class="col-xs-12 visible-xs margin-top-sm">
                            <a href="./refusal.php" class="btn btn-default btn-lg btn-block">いいえ、退会しません</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>