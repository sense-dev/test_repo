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

<!--{strip}-->
    <div class="block_outer">
        <div id="login_area" class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <span class="fa fa-lock fa-lg"></span> 会员登录
                </h2>
            </div>
            <form name="login_form" id="login_form" method="post" action="<!--{$smarty.const.HTTPS_URL}-->frontparts/login_check.php"<!--{if $tpl_login}--> onsubmit="return eccube.checkLoginFormInputted('login_form')"<!--{/if}-->>
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <input type="hidden" name="mode" value="login" />
                <input type="hidden" name="url" value="<!--{$smarty.server.REQUEST_URI|h}-->" />
                <div class="block_body panel-body">
                    <!--{if $tpl_login}-->
                        <p class="margin-bottom-lg">欢迎您，尊敬的
                            <span class="user_name"><!--{$tpl_name1|h}--> <!--{$tpl_name2|h}--> </span><br />
                            <!--{if $smarty.const.USE_POINT !== false}-->
                                您的当前积分：<span class="point"> <!--{$tpl_user_point|number_format|default:0}--> pt</span>
                            <!--{/if}-->
                        </p>
                        <!--{if !$tpl_disable_logout}-->
                            <button class="btn btn-block btn-default" onclick="eccube.fnFormModeSubmit('login_form', 'logout', '', ''); return false;">退出账号</button>
                        <!--{/if}-->
                    <!--{else}-->
                        <div class="formlist input-group margin-bottom-sm">
                            <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="login_email" class="box140 form-control" value="<!--{$tpl_login_email|h}-->" style="ime-mode: disabled;" placeholder="请输入注册邮箱" />
                        </div>
                        <div class="mini margin-bottom-lg">
                            <input type="checkbox" name="login_memory" id="login_memory" value="1" <!--{$tpl_login_memory|sfGetChecked:1}--> />
                            <label for="login_memory"><span>&nbsp;记住账号</span></label>
                        </div>
                        <div class="formlist input-group margin-bottom-sm">
                                <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                <input type="password" name="login_pass" class="box140 form-control" placeholder="请输入密码" />
                        </div>
                        <div class="font-size-sm">
                            <a href="<!--{$smarty.const.HTTPS_URL}-->forgot/<!--{$smarty.const.DIR_INDEX_PATH}-->" onclick="eccube.openWindow('<!--{$smarty.const.HTTPS_URL}-->forgot/<!--{$smarty.const.DIR_INDEX_PATH}-->','forget','600','400',{scrollbars:'no',resizable:'no'}); return false;" target="_blank">
                                <span class="fa fa-question-circle"></span>
                                忘记密码了？
                            </a>
                        </div>
                        <br />
                        <button class="btn btn-block btn-primary">登录</button>
                        <br />
                        <div class="font-size-sm">
                            <a href="<!--{$smarty.const.ROOT_URLPATH}-->entry/kiyaku.php">还不是会员？立刻免费注册！</a>
                        </div>
                    <!--{/if}-->
                </div>
            </form>
        </div>
    </div>
<!--{/strip}-->
