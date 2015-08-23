<?php /* Smarty version 2.6.27, created on 2015-07-13 14:06:43
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/regist/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/regist/complete.tpl', 25, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/regist/complete.tpl', 25, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <div id="complete_area">
            <p class="message alert alert-info margin-bottom-xl">感谢您注册成为本站会员！</p>
            <div class="col-sm-12 margin-bottom-lg">
                <?php $this->assign('key1', ($this->_tpl_vars['prefix'])."c_id"); ?>
                <p>您的会员ID是 <span class="attention"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span></p>
                <br />
                <p>此会员ID是您进行包裹以及速递查询的必要条件，请妥善保管。</p>

            </div>

            <div class="btn_area row">
                <div class="col-sm-12 col-md-6">
                    <a href="<?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="btn btn-default btn-block">回到首页</a>
                </div>
            </div>
        </div>
    </div>
</div>