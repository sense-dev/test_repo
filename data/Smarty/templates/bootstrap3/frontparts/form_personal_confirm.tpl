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
    <tr>
        <th>姓名</th>
        <td>
            <!--{assign var=key1 value="`$prefix`name01"}-->
            <!--{assign var=key2 value="`$prefix`name02"}-->
            <!--{$arrForm[$key1].value|h}-->&nbsp;
            <!--{$arrForm[$key2].value|h}-->
        </td>
    </tr>
    <tr>
        <th>性別</th>
        <td>
            <!--{assign var=key1 value="`$prefix`sex"}-->
            <!--{if strlen($arrForm[$key1].value) > 0}-->
            <!--{assign var="sex_id" value=$arrForm[$key1].value}-->
            <!--{$arrSex[$sex_id]|h}-->
            <!--{else}-->
            未登录
            <!--{/if}-->
        </td>
    </tr>
    <tr>
        <th>生日</th>
        <td>
            <!--{assign var=key1 value="`$prefix`year"}-->
            <!--{assign var=key2 value="`$prefix`month"}-->
            <!--{assign var=key3 value="`$prefix`day"}-->
            <!--{if strlen($arrForm[$key1].value) > 0 && strlen($arrForm[$key2].value) > 0 && strlen($arrForm[$key3].value) > 0}-->
            <!--{$arrForm[$key1].value|h}-->年<!--{$arrForm[$key2].value|h}-->月<!--{$arrForm[$key3].value|h}-->日
            <!--{else}-->
            未登录
            <!--{/if}-->
        </td>
    </tr>
    <tr>
        <th>邮政编码</th>
        <td>
            <!--{assign var=key1 value="`$prefix`zipcode"}-->
            <!--{$arrForm[$key1].value|h}-->
        </td>
    </tr>
    <tr>
        <th>住所</th>
        <td>
            <!--{assign var=key1 value="`$prefix`pref"}-->
            <!--{assign var=key2 value="`$prefix`addr01"}-->
            <!--{assign var=key3 value="`$prefix`addr02"}-->
            <!--{assign var="pref_id" value=$arrForm[$key1].value}-->
            <!--{$arrPref[$pref_id]|h}--><!--{$arrForm[$key2].value|h}--><!--{$arrForm[$key3].value|h}-->
        </td>
    </tr>
    <tr>
        <th>电话号码</th>
        <td>
            <!--{assign var=key1 value="`$prefix`tel01"}-->
            <!--{$arrForm[$key1].value|h}-->
        </td>
    </tr>
    <tr>
        <th>电子邮箱</th>
        <td>
            <!--{assign var=key1 value="`$prefix`email"}-->
            <a href="mailto:<!--{$arrForm[$key1].value|escape:'hex'}-->"><!--{$arrForm[$key1].value|escape:'hexentity'}--></a>
        </td>
    </tr>
    <tr>
        <th>密码</th>
        <td><!--{$passlen}--></td>
    </tr>
<!--{/strip}-->
