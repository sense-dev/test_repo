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
                <!--{assign var=key1 value="`$prefix`delivery_company"}-->
                <label class="col-sm-3 col-md-2 control-label">
                    配送公司<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select id="<!--{$key1}-->" class="form-control" name="<!--{$key1}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->">
                                <option value="">请选择配送公司</option>
                                <!--{html_options options=$arrDeliveryComp selected=$arrForm[$key1].value|h}-->
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!--{assign var=key1 value="`$prefix`package_no"}-->
                <label class="col-sm-3 col-md-2 control-label">
                    包裹单号<span class="attention">※</span>
                </label>
                <div class="col-sm-9">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: active;" placeholder="请输入配送单号" />
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
                    <input type="text" class="form-control" style="width: 320px; display: inline-block;" name="<!--{$key1}-->" value="<!--{$arrForm[$key1].value|h}-->"/>
                </div>
                <div class="col-sm-2 col-md-2">
                    <input type="text" class="form-control" style="width: 70px; display: inline-block;" name="<!--{$key2}-->" value="<!--{$arrForm[$key2].value|h}-->"/>
                    <span style="margin: 0 5px;">件</span>
                </div>
                <div class="col-sm-4 col-md-4">
                    <input type="text" class="form-control" style="width: 150px; display: inline-block;" name="<!--{$key3}-->" value="<!--{$arrForm[$key3].value|h}-->"/>
                    <span style="margin: 0 10px;">日元</span>
                </div>
            </div>
        </div>

        <div>
            <h3 class="page-header"><span class="fa fa-arrow-circle-right"></span> 备注</h3>
            <div>
                <!--{assign var=key value="comment"}-->
                <span class="attention"><!--{$arrErr[$key]}--></span>
                <textarea name="<!--{$key}-->" style="<!--{$arrErr[$key]|sfGetErrorColor}-->" cols="70" rows="8" class="txtarea form-control" wrap="hard"><!--{"\n"}--><!--{$arrForm[$key].value|h}--></textarea>
                <p class="attention"> (最多可以输入<!--{$smarty.const.LTEXT_LEN}-->个字)</p>
            </div>
        </div>

        <div class="col-sm-6">
            <button name="complete" id="complete" class="btn btn-primary btn-block xs-btn-lg sm-btn-lg">包裹信息确认</button>
        </div>
    </form>
</div>
</div>
