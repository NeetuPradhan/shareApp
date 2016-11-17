<div class="container">
            <div class="page-alert" id="page-alert"></div>
            <div id="processing"></div>

            
    <div>
        
        <div style="display:none;" id="ctl00_ContentPlaceHolder1_divPortfolioRenew">
            <input type="hidden" value="AddShare.aspx" id="ctl00_ContentPlaceHolder1_Upgrade1_hdnRedirectPage" name="ctl00$ContentPlaceHolder1$Upgrade1$hdnRedirectPage">
<input type="hidden" id="ctl00_ContentPlaceHolder1_Upgrade1_hdnPortfolioAmountPerMonth" name="ctl00$ContentPlaceHolder1$Upgrade1$hdnPortfolioAmountPerMonth">



<div class="panel panel-default" id="ctl00_ContentPlaceHolder1_Upgrade1_divPortfolio">
    <div class="panel-heading"><h3 class="panel-title">Renew Portfolio Tracker</h3></div>
    <div class="panel-body">
        <div id="ctl00_ContentPlaceHolder1_Upgrade1_divErrorPortfolio"></div>
        <ul class="pager">
            <li><a title="Go Back" class="pull-left" href="http://merolagani.com/AddShare.aspx"><i class="icon-long-arrow-left"></i> Go Back</a></li>
        </ul>
        <div class="date-label">
            <small class="text-muted">(Fields marked with * are required)</small>   
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2">Portfolio Period</label>
                        <div class="col-sm-4 col-md-3">
                            <select onchange="Upgrade.getPortfolioAmount();" class="form-control" title="Portfolio Period" id="ctl00_ContentPlaceHolder1_Upgrade1_ddlPortfolioPeriod" name="ctl00$ContentPlaceHolder1$Upgrade1$ddlPortfolioPeriod">
	<option value="" selected="selected">Portfolio Period *</option>
	<option value="1000.0000">12 Months (1 year)</option>

</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3 col-md-2">Billing Amount</label>
                        <div class="col-sm-9 col-md-10">
                            <span id="ctl00_ContentPlaceHolder1_Upgrade1_lblPortfolioAmount">0</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                            <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$Upgrade1$lbtnSubmitPortfolio','')" class="btn btn-primary" title="Renew Now" id="ctl00_ContentPlaceHolder1_Upgrade1_lbtnSubmitPortfolio" onclick="return Upgrade.validatePortfolioRenew(this);"><i class="icon-adjust"></i> Renew Now</a>
                            <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$Upgrade1$lbtnPortfolioReneMail','')" class="btn btn-primary" title="Send Renew Mail Request" id="ctl00_ContentPlaceHolder1_Upgrade1_lbtnPortfolioReneMail" onclick="return Upgrade.validatePortfolioRenew(this);"><i class="icon-envelope-alt"></i> Send Email</a>
                            <a title="Cancel" class="btn btn-default" href="http://merolagani.com/AddShare.aspx">Cancel</a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="panel-footer">
        



<div id="ctl00_ContentPlaceHolder1_Upgrade1_PaymentMode2_divPortfolio">
    <h4>Mode of Payment</h4>
    <p>
        You can make payment via bank. Once payment is made you need to 
submit the deposit voucher to Mero Lagani office or email a scanned copy
 of the deposit voucher to support@asteriskt.com.. Upon voucher 
submission, your portfolio tracker expiry date will be extended. 
        Account no. of banks where you can make payments are listed 
below:                
    </p>
    <ul>
        
                <li>Laxmi Bank Ltd., <strong>A/C Number:</strong> 00511147694, <strong>Account Holder:</strong> Asterisk Technology Pvt. Ltd.</li>
            
                <li>Nepal Investment Bank Ltd., <strong>A/C Number:</strong> 00701020254540, <strong>Account Holder:</strong> Asterisk Technology Pvt. Ltd.</li>
            
                <li>Bank of Kathmandu, <strong>A/C Number:</strong> 010000062805524, <strong>Account Holder:</strong> Asterisk Technology Pvt. Ltd.</li>
            
                <li>Global IME Bank Ltd, <strong>A/C Number:</strong> 7501010000719, <strong>Account Holder:</strong> Asterisk Technology Pvt. Ltd.</li>
            
    </ul>
</div>
    </div>
</div>


             

        </div>
        <div id="ctl00_ContentPlaceHolder1_divAddShare">
            <div id="ctl00_ContentPlaceHolder1_updPnl">
	
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="page-header">
                                <span id="ctl00_ContentPlaceHolder1_pageTitle">Add Purchased Shares</span>
                            </h4>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pager">
                                <li><a title="Go Back" onclick="showProcessing();" class="pull-left" href="http://merolagani.com/MyPortfolio.aspx"><i class="icon-long-arrow-left"></i> Go Back</a></li>
                            </ul>
                        </div>
                    </div>

                    <input type="hidden" value="MyPortfolio.aspx" id="hdnRedirectUrl" name="ctl00$ContentPlaceHolder1$hdnRedirectUrl">
                    <input type="hidden" value="0" id="hdnUserTransactionID" name="ctl00$ContentPlaceHolder1$hdnUserTransactionID">
                    <input type="hidden" id="hdnTransactionDetail" name="ctl00$ContentPlaceHolder1$hdnTransactionDetail">
                    <div onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_ContentPlaceHolder1_lbtnSave')" class="row panel-addshare" id="pnlAddShare">
		
                        <div class="col-lg-12">
                            <div id="divError"></div>  
                            <div class="date-label">                                                      
                                <small class="text-muted">(Fields marked with * are required)</small>     
                            </div>                       
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label title="Share Type" class="control-label col-sm-3 col-md-3 col-lg-2 ">Share Type *</label>
                                            <div class="col-sm-4 col-md-3 col-lg-2">
                                                <select onchange="AddShare.checkShareType();AddShare.calculateAllAmount();AddShare.showTotal();" class="form-control" title="Share Type" tabindex="1" id="ddlShareType" name="ctl00$ContentPlaceHolder1$ddlShareType">
			<option value="0" selected="selected">Share Type *</option>
			<option value="1">Secondary</option>
			<option value="2">IPO</option>
			<option value="3">Right</option>
			<option value="4">Bonus</option>

		</select>
                                            </div>
                                        </div>                          
                                                                        
                                       
                                        <div class="form-group">
                                            <label title="Transaction Date" class="control-label col-sm-3 col-md-3 col-lg-2">Transaction Date *</label>
                                            <div class="col-sm-4 col-md-3 col-lg-2">
                                                <div class="input-group">
                                                    <input type="text" onblur="AddShare.getCommissionSetting();" onchange="AddShare.getMiti();" placeholder="MM/DD/YYYY" class="form-control hasDatepicker" title="Transaction Date in AD" tabindex="2" id="txtTransactionDateAD" maxlength="10" name="ctl00$ContentPlaceHolder1$txtTransactionDateAD">
                                                    <span class="input-group-addon">AD</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-3 col-lg-2">
                                                <div class="input-group">
                                                    <input type="text" onblur="AddShare.getCommissionSetting();" onchange="AddShare.getDate();" placeholder="YYYY/MM/DD" class="form-control" title="Transactoin Date in BS" tabindex="3" id="txtTransactionDateBS" maxlength="10" name="ctl00$ContentPlaceHolder1$txtTransactionDateBS">
                                                    <span class="input-group-addon">BS</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-horizontal">
                                        <div>
                                            <div class="form-group header-row hidden-xs hidden-sm" id="divHeaderRow">
                                                <div class="serial-number">#</div>
                                                <div class="transaction-number"><span title="Transaction Number">Transaction No.</span></div>
                                                <div class="symbol"><span title="Stock Symbol">Symbol *</span></div>
                                                <div class="quantity"><span title="Quantity">Quantity *</span></div>
                                                <div class="rate"><span title="Rate *">Rate *</span></div>
                                                <div class="broker"><span title="Stock Broker No.">Broker</span></div>
                                                <div class="delete" id="ctl00_ContentPlaceHolder1_divDeleteHeader"><span class="icon-trash"></span></div>
                                            </div>
                                            <div id="divContent">
                                                <div class="form-group content-row" id="divContentRow">
                                                    <div class="serial-number">
                                                        <span id="serialNumber">1.</span>
                                                    </div>
                                                    <div class="transaction-number">
                                                        <input type="text" title="Transaction Number" maxlength="50" placeholder="Transaction No." class="form-control input-sm" id="txtTransactionNumber">
                                                    </div>
                                                    <div class="symbol">
                                                        

<autosuggest>
    <input type="hidden" value="0" id="ctl00_ContentPlaceHolder1_ASSymbol_hdnAutoSuggest" name="ctl00$ContentPlaceHolder1$ASSymbol$hdnAutoSuggest">
    <input type="text" onkeyup="AutoSuggest.clearValue(event,this);" onkeypress="AutoSuggest.getAutoSuggestDataByElement(&quot;Company&quot;,this);" placeholder="Symbol *" onblur="AutoSuggest.checkValue(this);" data-bound="0" autocomplete="off" class="form-control input-sm" title="Stock Symbol or Company Name" id="ctl00_ContentPlaceHolder1_ASSymbol_txtAutoSuggest" name="ctl00$ContentPlaceHolder1$ASSymbol$txtAutoSuggest">
</autosuggest>
 
                                                    </div>
                                                    <div class="quantity">
                                                        <input type="text" onblur="AddShare.calculateAmount(this);AddShare.showTotal();" title="Quantity" placeholder="Quantity *" onkeypress="return isNumberKeyQuantity(event);" class="form-control input-sm text-right" id="txtQuantity">
                                                    </div>
                                                    <div class="rate"> 
                                                        <input type="text" onblur="AddShare.calculateAmount(this);AddShare.showTotal();" title="Rate" placeholder="Rate *" onkeypress="return isNumberKeyAmount(event);" class="form-control input-sm text-right" id="txtRate">
                                                    </div>
                                                    <div class="broker">                                                                                    
                                                        <select class="form-control input-sm" title="Stock Broker No." id="ddlBroker" name="ctl00$ContentPlaceHolder1$ddlBroker">
			<option value="0" selected="selected">Broker</option>
			<option value="1">1</option>
			<option value="2">1_RWS</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">6_RWS</option>
			<option value="8">7</option>
			<option value="9">7_RWS</option>
			<option value="10">8</option>
			<option value="11">10</option>
			<option value="12">10_RWS</option>
			<option value="13">11</option>
			<option value="14">13</option>
			<option value="15">13_RWS</option>
			<option value="16">14</option>
			<option value="17">14_RWS</option>
			<option value="18">16</option>
			<option value="19">17</option>
			<option value="20">18</option>
			<option value="21">19</option>
			<option value="22">19_RWS</option>
			<option value="23">20</option>
			<option value="24">21</option>
			<option value="25">22</option>
			<option value="26">22_RWS</option>
			<option value="27">25</option>
			<option value="28">26</option>
			<option value="29">28</option>
			<option value="30">29</option>
			<option value="31">29_RWS</option>
			<option value="32">32</option>
			<option value="33">32_RWS</option>
			<option value="34">33</option>
			<option value="35">34</option>
			<option value="36">35</option>
			<option value="37">36</option>
			<option value="38">37</option>
			<option value="39">38</option>
			<option value="40">39</option>
			<option value="41">40</option>
			<option value="42">41</option>
			<option value="43">42</option>
			<option value="44">43</option>
			<option value="45">44</option>
			<option value="46">45</option>
			<option value="47">46</option>
			<option value="48">47</option>
			<option value="49">48</option>
			<option value="50">49</option>
			<option value="51">50</option>
			<option value="52">51</option>
			<option value="53">52</option>
			<option value="54">56</option>
			<option value="55">53</option>
			<option value="56">54</option>
			<option value="57">55</option>
			<option value="58">57</option>
			<option value="59">58</option>
			<option value="60">59</option>

		</select>
                                                    </div>
                                                    
                                                                                  
                                                    <div class="delete" id="ctl00_ContentPlaceHolder1_divDeleteContent">
                                                        <a title="Remove Transaction" onclick="AddShare.deletePurchaseTransaction(this);AddShare.showTotal();" href="javascript:void(0);">
                                                            <span class="icon-trash text-black"></span></a>
                                                    </div>
                                                    <input type="hidden" value="0" id="hdnAmount">
                                                    <input type="hidden" value="0" id="hdnBrokerCommission">
                                                    <input type="hidden" value="0" id="hdnSeboCommission">
                                                    <input type="hidden" value="0" id="hdnPurchaseCost">
                                                </div>
                                            </div>
                                            <div class="form-group footer-row" id="ctl00_ContentPlaceHolder1_divFooter">
                                                <div class="pull-left">
                                                    <div>
                                                        <a title="Add Transaction" onclick="AddShare.addPurchaseTransaction();return false;" href="javascript:void(0);">
                                                            <i class="icon-plus"></i>&nbsp;Add Transaction</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="panel-footer"> 
                                    <dl class="dl-horizontal">
                                        <dt>Total Quantity</dt>
                                        <dd class="clearfix"><span id="totalQuantity">0</span></dd>
                                        <dt>Average Rate</dt>
                                        <dd class="clearfix"><span id="avgRate">0.00</span></dd>
                                        <dt>Broker Commission</dt>
                                        <dd class="clearfix"><span id="brokerCommission">0.00</span></dd>
                                        <dt>SEBO Commission</dt>
                                        <dd class="clearfix"><span id="seboCommission">0.00</span></dd>
                                        <dt>Purchase Cost</dt>                                        
                                        <dd class="clearfix"><span id="purchaseCost">0.00</span></dd>
                                    </dl>
                                    <hr>  
                                    <div class="text-center">                         
                                        <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lbtnSave','')" class="btn btn-primary" title="Save" id="ctl00_ContentPlaceHolder1_lbtnSave" onclick="hideMessage();return AddShare.validateAddShare(this);"><i class="icon-save"></i> Save</a>
                                        <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lbtnSaveAddNew','')" class="btn btn-primary" title="Save" id="ctl00_ContentPlaceHolder1_lbtnSaveAddNew" onclick="hideMessage();return AddShare.validateAddShare(this);"><i class="icon-save"></i> Save &amp; New</a>                                
                                        <a title="Cancel" onclick="showProcessing();" class="btn btn-default" href="http://merolagani.com/MyPortfolio.aspx">Cancel</a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    
	</div>
                
</div>
        </div>
    </div>           

        </div>