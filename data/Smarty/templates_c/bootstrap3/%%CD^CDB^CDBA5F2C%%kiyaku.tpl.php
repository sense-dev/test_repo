<?php /* Smarty version 2.6.27, created on 2015-07-12 11:24:03
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/entry/kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/entry/kiyaku.tpl', 25, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/entry/kiyaku.tpl', 25, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <div class="col-sm-12 margin-bottom-lg">
            <p class="message alert alert-warning">【重要】 会員登録をされる前に、下記ご利用規約をよくお読みください。</p>
            <p class="margin-bottom-xl">規約には、本サービスを使用するに当たってのあなたの権利と義務が規定されております。<br />
                「同意して会員登録へ」ボタンをクリックすると、あなたが本規約の全ての条件に同意したことになります。
            </p>
            <pre class="padding-md">
                <?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </pre>
        </div>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <div class="btn_area padding-md">
                <div class="jumbotron padding-md col-sm-12">
                    <div class="col-sm-6 margin-bottom-sm">
                        <a href="<?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn btn-default btn-block">同意しない</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="<?php echo ((is_array($_tmp=@ENTRY_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn btn-success btn-block xs-btn-lg sm-btn-lg">同意して会員登録へ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>