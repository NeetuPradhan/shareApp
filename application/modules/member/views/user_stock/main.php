<div class="container">
            <div class="page-alert" id="page-alert"></div>
            <div id="processing" style="display: none;"></div>

                
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">
                <span><?=$title?></span>
            </h4>
        </div>
    </div>

    <div id="ctl00_ContentPlaceHolder1_updPnl">
	   
            <div id="ctl00_ContentPlaceHolder1_divPortfolio">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-7 col-md-8">
                                <div class="date-label">
                                    <span class="label label-default" id="ctl00_ContentPlaceHolder1_marketDate">As of 2016/11/03 03:00:00</span>
                                </div>
                            </div>
                            <div class="col-sm-5 col-md-4">
                                <div class="pull-right" id="ctl00_ContentPlaceHolder1_divExpiryDate">
                                    <small class="text-black">
                                        <strong>Portfolio Tracker Expires on <span id="ctl00_ContentPlaceHolder1_lblExpiryDate">2016/11/26</span></strong> 
                                        <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lbtnRenew','')" class="btn btn-primary btn-xs" title="Renew Portfolio Tracker" tabindex="4" id="ctl00_ContentPlaceHolder1_lbtnRenew" onclick="showProcessing();">Renew</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="well well-sm well-primary text-center">
                                    <h4>Networth</h4>
                                    <span id="ctl00_ContentPlaceHolder1_lblNetworthFiltered">6,410.33</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well well-sm well-success text-center" id="ctl00_ContentPlaceHolder1_pnlOverall">
                                    <h4>Overall Gain</h4>
                                    <span id="ctl00_ContentPlaceHolder1_lblOverallGainFiltered">5,360.18 (510.42%)</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well well-sm well-success text-center" id="ctl00_ContentPlaceHolder1_pnlDay">
                                     <h4>Days Gain</h4>
                                    <span id="ctl00_ContentPlaceHolder1_lblDaysGainFiltered">70.00 (6.67%)</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well well-sm well-primary text-center">
                                    <h4>Investment</h4>
                                    <span id="ctl00_ContentPlaceHolder1_lblInvestmentFiltered">1,050.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <div onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_ContentPlaceHolder1_lbtnSearch')" class="well well-sm">
		
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">Symbol</label>
                                    

<autosuggest>
    <input type="hidden" value="0" id="ctl00_ContentPlaceHolder1_ASSymbolFilter_hdnAutoSuggest" name="ctl00$ContentPlaceHolder1$ASSymbolFilter$hdnAutoSuggest">
    <input type="text" onkeyup="AutoSuggest.clearValue(event,this);" onkeypress="AutoSuggest.getAutoSuggestDataByElement(&quot;Company&quot;,this);" placeholder="Stock Symbol" onblur="AutoSuggest.checkValue(this);" data-bound="0" autocomplete="off" class="form-control" title="Stock Symbol or Company Name" id="ctl00_ContentPlaceHolder1_ASSymbolFilter_txtAutoSuggest" maxlength="255" name="ctl00$ContentPlaceHolder1$ASSymbolFilter$txtAutoSuggest">
</autosuggest>

                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">Sector</label>
                                    <select class="form-control" title="Sector" id="ctl00_ContentPlaceHolder1_ddlSectorFilter" name="ctl00$ContentPlaceHolder1$ddlSectorFilter">
			<option value="0" selected="selected">All</option>
			<option value="1">Commercial Banks</option>
			<option value="2">Corporate Debenture</option>
			<option value="3">Development Bank Limited</option>
			<option value="4">Finance</option>
			<option value="5">Government Bond</option>
			<option value="6">Hotels</option>
			<option value="7">Hydro Power</option>
			<option value="8">Insurance</option>
			<option value="9">Manufacturing And Processing</option>
			<option value="10">Mutual Fund</option>
			<option value="11">Others</option>
			<option value="12">Preferred Stock</option>
			<option value="13">Promotor Share</option>
			<option value="14">Tradings</option>

		</select>
                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">Portfolio</label>
                                    <select class="form-control" title="Portfolio" id="ctl00_ContentPlaceHolder1_ddlPortfolioFilter" name="ctl00$ContentPlaceHolder1$ddlPortfolioFilter">
			<option value="0" selected="selected">All</option>
			<option value="46999">My Portfolio</option>

		</select>
                                </div>
                                <div class="col-sm-3">
                                    <label class="control-label">Shareholder</label>
                                    <select class="form-control" title="Shareholder" id="ctl00_ContentPlaceHolder1_ddlShareholderFilter" name="ctl00$ContentPlaceHolder1$ddlShareholderFilter">
			<option value="0" selected="selected">All</option>
			<option value="45112">Rajan Acharya (SH1)</option>

		</select>
                                </div>
                            </div>
                            <br>
                            <div class="text-left">
                                <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lbtnSearch','')" class="btn btn-primary" title="Search" id="ctl00_ContentPlaceHolder1_lbtnSearch" onclick="hideMessage();showProcessing();"><i class="icon-search"></i>&nbsp;Search</a>                                            
                                <a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lbtnClearFilter','')" class="btn btn-default" title="Clear Filter" id="ctl00_ContentPlaceHolder1_lbtnClearFilter" onclick="hideMessage();showProcessing();"><i class="icon-eraser"></i> Clear</a>
                            </div>
                        
	</div>
                    </div>
                </div>

                <div class="btn-toolbar">
                        <a title="Add Purchased Shares" class="btn btn-default" href="<?=getMemberUrl().'portfolio/add-stock'?>" id="lnkAddShare" tabindex="2">
                            <span class="icon-plus"></span> Add Stock</a>
                        <a title="Sell Shares" class="btn btn-default" href="http://merolagani.com/SellShare.aspx?redirect=MyPortfolio.aspx" id="lnkSellShare" tabindex="3">
                            <span class="icon-usd"></span> Sell Share</a>
                </div>
                <br>

                <div class="row" id="ctl00_ContentPlaceHolder1_divMain">
                    <div class="col-lg-12">
                        
                        <div id="ctl00_ContentPlaceHolder1_divData">                                                                            
                            <div class="table-responsive">
                                <table data-live="user-portfolio" class="table table-striped table-bordered table-hover" id="tblPortfolio"> 
                                    
                                                    <tbody><tr>                                                    
                                                        <th><span title="Stock Symbol">Symbol</span></th>
                                                        <th><span title="Balance Quantity">Qty.</span></th>
                                                        <th><span title="Purchase Rate">Rate</span></th>
                                                        <th><span title="Investment">Investment</span></th>
                                                        <th><span title="Market Price">Price</span></th>
                                                        <th><span title="Change in Price">Change</span></th>    
                                                        <th><span title="52 Weeks High-Low">52 Wk Range</span></th>                                                    
                                                        <th><span title="Overall gain and days gain">Gain/Loss</span></th>                                                      
                                                        <th><span title="Market Value">Market Value</span></th>                                            
                                                        <th class="text-center"><span title="View Detail" class="icon-list"></span></th>
                                                    </tr>                                                
                                                
                                                    <tr>                                                        
                                                        <td class="text-center">  
                                                            <a css="" id="symbol" data-company-display="portfolio" data-href="/CompanyDetail.aspx?symbol=ADBL" data-symbol="ADBL" data-placement="bottom" data-trigger="manual" data-type="company" data-html="true" data-content="Loading ... &lt;button class=&quot;btn btn-danger btn-xs btn-block&quot; title=&quot;Close&quot; type=&quot;button&quot; onclick=&quot;Popover.dismissPopover(this);&quot;&gt;Close&lt;/button&gt;" data-toggle="popover" title="" tab-index="0" target="_blank" href="javascript:void(0);" data-original-title="Company Detail">ADBL</a>                                                           
                                                            
                                                        </td>
                                                        <td class="text-right">
                                                            <span id="balanceQty">
                                                                10
                                                            </span>
                                                        </td>
                                                        <td class="text-right">
                                                            105.01
                                                        </td>
                                                        <td class="text-right">
                                                            <span id="balanceCost">
                                                                1,050.15
                                                            </span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span id="ltp">645.00</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="text-increase" id="priceChange">7.00</span>
                                                            <span class="text-increase" id="percentChange">(1.1%)</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span id="fiftyTwoWeekHigh">1,082</span> - 
                                                            <span id="fiftyTwoWeekLow">420</span>
                                                        </td>
                                                        <td>    
                                                            <span title="Days Gain"><strong>Day: </strong><span>
                                                            <span class="text-increase" id="ltpGainContainer">                                                                
                                                                <span id="ltpGain">70.00</span>
                                                                <span id="percentLtpGain">(6.67%)</span>
                                                            </span>
                                                            <br>
                                                            <span title="Overall Gain"><strong>Overall: </strong><span>
                                                            <span class="text-increase" id="overallGainContainer">
                                                                <span id="overallGain">5,360.18</span>
                                                                <span id="percentOverllGain">
                                                                     (510.42%)
                                                                </span>
                                                            </span>
                                                        </span></span></span></span></td>
                                                        <td class="text-right">
                                                            <span id="portfolioValue">6,410.33</span>
                                                        </td>
                                                        <td class="text-center td-icon">
                                                            <a onclick="MyPortfolio.showDetail(&quot;1|1&quot;)" title="View Detail" id="ctl00_ContentPlaceHolder1_rptShares_ctl01_lnkDetail" href="javascript:void(0);">
                                                                <span class="icon-list"></span></a>                                                            
                                                        </td>
                                                    </tr>
                                                
                                        </tbody></table>
                                    </div>
                        </div>                          
                    </div>
                    <input type="submit" class="hidden" id="ctl00_ContentPlaceHolder1_btnShowDetail" onclick="showProcessing();" value="" name="ctl00$ContentPlaceHolder1$btnShowDetail">
                </div>

                <div class="clearfix">
                    <h4 class="zero-top-margin">
                        
                    </h4>                
                </div> 
                
                
            </div>           

            <div style="display:none;" id="ctl00_ContentPlaceHolder1_divPortfolioRenew">
                <input type="hidden" value="MyPortfolio.aspx" id="ctl00_ContentPlaceHolder1_Upgrade1_hdnRedirectPage" name="ctl00$ContentPlaceHolder1$Upgrade1$hdnRedirectPage">
<input type="hidden" id="ctl00_ContentPlaceHolder1_Upgrade1_hdnPortfolioAmountPerMonth" name="ctl00$ContentPlaceHolder1$Upgrade1$hdnPortfolioAmountPerMonth">



<div class="panel panel-default" id="ctl00_ContentPlaceHolder1_Upgrade1_divPortfolio">
    <div class="panel-heading"><h3 class="panel-title">Renew Portfolio Tracker</h3></div>
    <div class="panel-body">
        <div id="ctl00_ContentPlaceHolder1_Upgrade1_divErrorPortfolio"></div>
        <ul class="pager">
            <li><a title="Go Back" class="pull-left" href="http://merolagani.com/MyPortfolio.aspx"><i class="icon-long-arrow-left"></i> Go Back</a></li>
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
                            <a title="Cancel" class="btn btn-default" href="http://merolagani.com/MyPortfolio.aspx">Cancel</a>
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
            
            

<div id="divGetStarted" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Take a Tour</h4>
            </div>
            <div class="modal-body">
                <p>Welcome to merolagani.com Portfolio Tracker, your gateway to the Nepali sharemarket</p>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Skip</button>
                <a href="http://merolagani.com/Portfolio.aspx?tcode=ADD_PORTFOLIO" class="btn btn-primary">Start Tour</a>
            </div>
        </div>
    </div>
</div>



        
</div>   

        </div>