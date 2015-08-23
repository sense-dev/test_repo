<!--{*
/*
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
 */
*}-->

<!--{strip}-->
            <!--{assign var=key1 value="`$prefix`c_id"}-->
            <!--{if strlen($arrForm[$key1].value)}-->
            <div class="form-group">
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    会员ID
                </label>
                <div class="col-sm-3 col-md-2 form-control-static">
                    <span class="attention"><!--{$arrForm[$key1].value|h}--></span>
                </div>
            </div>
            <!--{/if}-->
            <!--{assign var=errCnt value=0}-->
            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`name01"}-->
                <!--{assign var=key2 value="`$prefix`name02"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    姓名<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-6<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <input id="<!--{$key1}-->" type="text" class="box120 form-control" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" maxlength="<!--{$arrForm[$key1].length}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: active;" placeholder="姓" />
                            <span class="attention"><!--{$arrErr[$key1]}--></span>
                        </div>
                        <div class="col-xs-6<!--{if $arrErr[$key2]}--> has-error<!--{/if}-->">
                            <input type="text" class="box120 form-control" name="<!--{$key2}-->" value="<!--{$arrForm[$key2].value|h}-->" maxlength="<!--{$arrForm[$key2].length}-->" style="<!--{$arrErr[$key2]|sfGetErrorColor}-->; ime-mode: active;" placeholder="名" />
                            <span class="attention"><!--{$arrErr[$key2]}--></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`sex"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    性別
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <div style="<!--{$arrErr[$key1]|sfGetErrorColor}-->">
                                <!--{html_radios name=$key1 options=$arrSex selected=$arrForm[$key1].value assign=sex}-->
                                <!--{foreach from=$sex item=radio}-->
                                    <div class="radio">
                                        <label>
                                            <!--{$radio}-->
                                        </label>
                                    </div>
                                <!--{/foreach}-->
                            </div>
                            <span class="attention"><!--{$arrErr[$key1]}--></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`year"}-->
                <!--{assign var=key2 value="`$prefix`month"}-->
                <!--{assign var=key3 value="`$prefix`day"}-->
                <!--{assign var=errBirth value="`$arrErr.$key1``$arrErr.$key2``$arrErr.$key3`"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    生日
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <div class="form-group">
                                <div class="col-xs-4 col-sm-4 padding-right-xs<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                                    <select id="<!--{$key1}-->" class="form-control" name="<!--{$key1}-->" style="<!--{$errBirth|sfGetErrorColor}-->">
                                    <!--{html_options options=$arrYear selected=$arrForm[$key1].value|default:''}-->
                                    </select>
                                </div>
                                <label class="control-label col-xs-1 padding-none">年</label>
                                <div class="col-xs-3 col-sm-3 padding-right-xs<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                                    <select class="form-control" name="<!--{$key2}-->" style="<!--{$errBirth|sfGetErrorColor}-->">
                                    <!--{html_options options=$arrMonth selected=$arrForm[$key2].value|default:''}-->
                                    </select>
                                </div>
                                <label class="control-label col-xs-1 padding-none margin-none">月</label>
                                <div class="col-xs-3 col-sm-3 padding-right-xs<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                                    <select class="form-control" name="<!--{$key3}-->" style="<!--{$errBirth|sfGetErrorColor}-->">
                                    <!--{html_options options=$arrDay selected=$arrForm[$key3].value|default:''}-->
                                    </select>
                                </div>
                                <label class="control-label col-xs-1 padding-none">日</label>
                            </div>
                            <span class="attention"><!--{$errBirth}--></span>
                        </div>
                    </div>
                </div>
            </div>

            <!--{assign var=key1 value="`$prefix`zipcode"}-->
            <!--{assign var=key3 value="`$prefix`pref"}-->
            <!--{assign var=key4 value="`$prefix`addr01"}-->
            <!--{assign var=key5 value="`$prefix`addr02"}-->
            <div class="form-group">
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    邮政编码<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-xs-7 col-md-4<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <input type="text" class="box120 form-control" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" maxlength="<!--{$arrForm[$key1].length}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: disabled;" />
                            <span class="attention"><!--{$arrErr[$key1]}--></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="<!--{$key3}-->" class="col-sm-3 col-md-2 control-label">
                    住所<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-xs-7 col-md-4<!--{if $arrErr[$key3]}--> has-error<!--{/if}-->">
                            <select id="<!--{$key3}-->" class="form-control" name="<!--{$key3}-->" style="<!--{$arrErr[$key3]|sfGetErrorColor}-->">
                                <option value="">省/自治区/直辖市</option>
                                <!--{html_options options=$arrPref selected=$arrForm[$key3].value|h}-->
                            </select>
                        <span class="attention"><!--{$arrErr[$key3]}--></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12<!--{if $arrErr[$key4]}--> has-error<!--{/if}-->">
                            <input type="text" class="box380 form-control" name="<!--{$key4}-->" value="<!--{$arrForm[$key4].value|h}-->" style="<!--{$arrErr[$key4]|sfGetErrorColor}-->; ime-mode: active;" placeholder="市/区  例：海淀区" />
                            <span class="attention"><!--{$arrErr[$key4]}--></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12<!--{if $arrErr[$key5]}--> has-error<!--{/if}-->">
                            <input type="text" class="box380 form-control" name="<!--{$key5}-->" value="<!--{$arrForm[$key5].value|h}-->" style="<!--{$arrErr[$key5]|sfGetErrorColor}-->; ime-mode: active;" placeholder="详细住址  例：复兴路51号" />
                            <span class="attention"><!--{$arrErr[$key5]}--></span>
                            <p class="mini help-block"><span class="attention">此住所将被用作默认的送货地址，请尽量填写详细。</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`tel01"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    电话号码<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <input type="tel" id="<!--{$key1}-->" class="box60 form-control padding-xs" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: disabled;" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`email"}-->
                <!--{assign var=key2 value="`$prefix`email02"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    电子邮箱<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <input type="email" id="<!--{$key1}-->" class="box380 top form-control" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: disabled;" placeholder="user@domain.com" />
                            <span class="attention"><!--{$arrErr[$key1]}--></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key2]}--> has-error<!--{/if}-->">
                            <input type="email" class="box380 form-control" name="<!--{$key2}-->" value="<!--{$arrForm[$key2].value|h}-->" style="<!--{$arrErr[$key1]|cat:$arrErr[$key2]|sfGetErrorColor}-->; ime-mode: disabled;" placeholder="电子邮箱确认" />
                            <span class="attention"><!--{$arrErr[$key2]}--></span>
                            <p class="mini help-block"><span class="attention">此邮箱将作为您登录本站时的账号使用。</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`password"}-->
                <!--{assign var=key2 value="`$prefix`password02"}-->
                <label for="<!--{$key1}-->" class="col-sm-3 col-md-2 control-label">
                    密码<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key1]}--> has-error<!--{/if}-->">
                            <input type="password" id="<!--{$key1}-->" class="box380 top form-control" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" maxlength="<!--{$arrForm[$key1].length}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->" placeholder="<!--{$smarty.const.PASSWORD_MIN_LEN}-->～<!--{$smarty.const.PASSWORD_MAX_LEN}-->位半角字母或数字" />
                            <span class="attention"><!--{$arrErr[$key1]}--></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-7<!--{if $arrErr[$key2]}--> has-error<!--{/if}-->">
                            <input type="password" class="box380 form-control" name="<!--{$key2}-->" value="<!--{$arrForm[$key2].value|h}-->" maxlength="<!--{$arrForm[$key2].length}-->" style="<!--{$arrErr[$key1]|cat:$arrErr[$key2]|sfGetErrorColor}-->" placeholder="密码确认" />
                            <span class="attention"><!--{$arrErr[$key2]}--></span>
                        </div>
                    </div>
                </div>
            </div>
<!--{/strip}-->
