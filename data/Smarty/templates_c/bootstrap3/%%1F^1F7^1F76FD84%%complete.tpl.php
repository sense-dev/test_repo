<?php /* Smarty version 2.6.27, created on 2015-07-13 00:09:00
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/contact/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/contact/complete.tpl', 24, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/contact/complete.tpl', 24, false),array('modifier', 'escape', '/var/www/html/../data/Smarty/templates/bootstrap3/contact/complete.tpl', 35, false),)), $this); ?>

<div id="undercolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <div id="undercolumn_contact">
        <div id="complete_area">
            <p class="message alert alert-info margin-bottom-xl">您的咨询内容已经成功发送。</p>
            <div class="col-sm-12 margin-bottom-lg">
                <p>
                    若是2天之内仍未收到我们的答复，您还可以通过我们的在线客服或者直接发送邮件至我们的客服信箱进行咨询。
                </p>
                <address class="shop_information">
                    <strong class="font-size-lg"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</strong><br />
                    <p>QQ在线客服：2560744551</p><br />
                    <p>客服信箱：<a href="mailto:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hex') : smarty_modifier_escape($_tmp, 'hex')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'hexentity') : smarty_modifier_escape($_tmp, 'hexentity')); ?>
</a></p>
                </address>
            </div>

            <div class="btn_area row">
                <div class="col-sm-12 col-md-6">
                    <a href="<?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn btn-default btn-block xs-btn-lg sm-btn-lg">回到首页</a>
                </div>
            </div>
        </div>
    </div>
</div>