<div id="mypagecolumn">
    <h2 class="title">速递查询</h2>
    <!--{if $tpl_navi != ""}-->
        <!--{include file=$tpl_navi}-->
    <!--{else}-->
        <!--{include file=`$smarty.const.TEMPLATE_REALDIR`mypage/navi.tpl}-->
    <!--{/if}-->
    <div id="mycontents_area">
        <br />
        <p>入力後、一番下の「確認ページへ」ボタンをクリックしてください。</p>
        <form role="search" name="search_form" id="header_search_form" method="get" action="<!--{$smarty.const.ROOT_URLPATH}-->products/list.php">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="search" />
            <div class="input-group">
                <input type="text" id="header-search" class="form-control" name="name" maxlength="50" value="<!--{$smarty.get.name|h}-->" placeholder="キーワードを入力">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default hidden-xs hidden-sm">検索</button>
                    </span>
            </div>
        </form>
    </div>
</div>