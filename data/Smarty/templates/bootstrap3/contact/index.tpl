<!--{*
 * EC-CUBE on Bootstrap3. This file is part of EC-CUBE
 *
 * Copyright(c) 2014 clicktx. All Rights Reserved.
 *
 * http://perl.no-tubo.net/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->

<div id="undercolumn">
    <h2 class="title"><!--{$tpl_title|h}--></h2>

    <div id="undercolumn_contact">

        <div class="alert alert-warning">我们会尽快回复您的问题，请耐心等候，多谢！</div>
        <div class="alert alert-info fade in">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          「<span class="attention">※</span>」是必填项目。
        </div>

        <form name="form1" id="form1" class="form-horizontal" method="post" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="confirm" />
            <div class="form-group">
                <label for="name01" class="col-sm-3 col-md-2 control-label">
                    姓名<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-6<!--{if $arrErr.name01}--> has-error<!--{/if}-->">
                            <input id="name01" type="text" class="box120 form-control" name="name01" value="<!--{$arrForm.name01.value|default:$arrData.name01|h}-->" maxlength="<!--{$smarty.const.STEXT_LEN}-->" style="<!--{$arrErr.name01|sfGetErrorColor}-->; ime-mode: active;" placeholder="姓" />
                            <span class="attention"><!--{$arrErr.name01}--></span>
                        </div>
                        <div class="col-xs-6<!--{if $arrErr.name02}--> has-error<!--{/if}-->">
                            <input type="text" class="box120 form-control" name="name02" value="<!--{$arrForm.name02.value|default:$arrData.name02|h}-->" maxlength="<!--{$smarty.const.STEXT_LEN}-->" style="<!--{$arrErr.name02|sfGetErrorColor}-->; ime-mode: active;" placeholder="名" />
                            <span class="attention"><!--{$arrErr.name02}--></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="tel01" class="col-sm-3 col-md-2 control-label">
                    电话号码
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-xs-3<!--{if $arrErr.tel01}--> has-error<!--{/if}-->">
                            <input type="tel" id="tel01" class="box60 form-control padding-xs" name="tel01" value="<!--{$arrForm.tel01.value|default:$arrData.tel01|h}-->" style="<!--{$arrErr.tel01|sfGetErrorColor}-->; ime-mode: disabled;" />
                        </div>
                    </div>
                    <span class="attention"><!--{$arrErr.tel01}--></span>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 col-md-2 control-label">
                    电子邮箱<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <!--{* ログインしていれば入力済みにする *}-->
                        <!--{if $smarty.server.REQUEST_METHOD != 'POST' && $smarty.session.customer}-->
                        <!--{assign var=email02 value=$arrData.email}-->
                        <!--{/if}-->
                        <div class="col-md-7<!--{if $arrErr.email}--> has-error<!--{/if}-->">
                            <input type="email" id="email" class="box380 top form-control" name="email" value="<!--{$arrForm.email.value|default:$arrData.email|h}-->" style="<!--{$arrErr.email|sfGetErrorColor}-->; ime-mode: disabled;" placeholder="user@domain.com" />
                            <span class="attention"><!--{$arrErr.email}--></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr.email02}--> has-error<!--{/if}-->">
                            <input type="email" class="box380 form-control" name="email02" value="<!--{$arrForm.email02.value|default:$email02|h}-->" style="<!--{$arrErr.email02|sfGetErrorColor}-->; ime-mode: disabled;" placeholder="电子邮箱确认" />
                            <span class="attention"><!--{$arrErr.email02}--></span>
                            <p class="mini help-block"><span class="attention">请输入两遍电子邮箱以做确认。</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="contents" class="col-sm-3 col-md-2 control-label">
                    咨询内容<span class="attention">※</span>
                </label>
                <div class="col-sm-9<!--{if $arrErr.contents}--> has-error<!--{/if}-->">
                            <textarea name="contents" id="contents" class="box380 form-control" rows="10" style="<!--{$arrErr.contents|h|sfGetErrorColor}-->; ime-mode: active;" placeholder="请填入咨询内容（<!--{$smarty.const.MLTEXT_LEN}-->字以下）"><!--{"\n"}--><!--{$arrForm.contents.value|h}--></textarea>
                            <span class="attention"><!--{$arrErr.contents}--></span>
                </div>
            </div>
            <div class="btn_area form-group">
                <div class="col-sm-9 col-sm-push-3 col-md-4 col-md-push-2">
                    <button class="btn btn-primary btn-block xs-btn-lg sm-btn-lg">咨询内容确认</button>
                </div>
            </div>

        </form>
    </div>
</div>
