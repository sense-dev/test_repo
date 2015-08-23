<?php /* Smarty version 2.6.27, created on 2015-07-26 10:28:25
         compiled from /var/www/html/../data/Smarty/templates/bootstrap3/user_data/mypage/pkg_notice.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/html/../data/Smarty/templates/bootstrap3/user_data/mypage/pkg_notice.tpl', 20, false),array('modifier', 'sfGetErrorColor', '/var/www/html/../data/Smarty/templates/bootstrap3/user_data/mypage/pkg_notice.tpl', 20, false),array('modifier', 'h', '/var/www/html/../data/Smarty/templates/bootstrap3/user_data/mypage/pkg_notice.tpl', 22, false),array('function', 'html_options', '/var/www/html/../data/Smarty/templates/bootstrap3/user_data/mypage/pkg_notice.tpl', 22, false),)), $this); ?>
<div id="mypagecolumn">
<h2 class="title">包裹预告</h2>
<p class="alert alert-info">
包裹的日本国内配送信息和详情明细可以让我们更加准确快速的为您提供服务，请按照您的购物订单如实填写。<br />
如果您还有其他要求，请写在本页最下方的备注栏内。
</p>
<div id="mycontents_area">
    <form name="form1" id="form1" class="form-horizontal" method="post" action="?">
        <input type="hidden" name="mode" value="complete" />
        <div>
            <h3 class="page-header"><span class="fa fa-arrow-circle-right"></span> 日本国内配送信息</h3>
            <div class="form-group">
                <?php $this->assign('key1', ($this->_tpl_vars['prefix'])."delivery_company"); ?>
                <label class="col-sm-3 col-md-2 control-label">
                    配送公司<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="form-control" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                                <option value="">请选择配送公司</option>
                                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrDeliveryComp'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp))), $this);?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?php $this->assign('key1', ($this->_tpl_vars['prefix'])."package_no"); ?>
                <label class="col-sm-3 col-md-2 control-label">
                    包裹单号<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key1']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
; ime-mode: active;" placeholder="请输入配送单号" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h3 class="page-header"><span class="fa fa-arrow-circle-right"></span> 包裹详情明细</h3>
            <div class="row">
                <div class="col-sm-1 col-md-1 text-right"><label>No.</label></div>
                <div class="col-sm-5 col-md-5"><label>商品名称</label></div>
                <div class="col-sm-2 col-md-2"><label>商品数量</label></div>
                <div class="col-sm-4 col-md-4"><label>商品单价</label></div>
            </div>
            <div class="row">
                <div class="col-sm-1 col-md-1 form-control-static text-right">
                    <label>#1</label>
                </div>
                <div class="col-sm-5 col-md-5">
                    <input type="text" class="form-control" style="width: 320px; display: inline-block;" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key1']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"/>
                </div>
                <div class="col-sm-2 col-md-2">
                    <input type="text" class="form-control" style="width: 70px; display: inline-block;" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key2']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"/>
                    <span style="margin: 0 5px;">件</span>
                </div>
                <div class="col-sm-4 col-md-4">
                    <input type="text" class="form-control" style="width: 150px; display: inline-block;" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key3'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key3']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"/>
                    <span style="margin: 0 10px;">日元</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="page-header"><span class="fa fa-arrow-circle-right"></span> 备注</h3>
            <div>
                <?php $this->assign('key', 'comment'); ?>
                <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" cols="70" rows="8" class="txtarea form-control" wrap="hard"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']]['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                <p class="attention"> (最多可以输入<?php echo ((is_array($_tmp=@LTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
个字)</p>
            </div>
        </div>

        <div class="col-sm-6">
            <button name="complete" id="complete" class="btn btn-primary btn-block xs-btn-lg sm-btn-lg">包裹信息确认</button>
        </div>
    </form>
</div>
</div>