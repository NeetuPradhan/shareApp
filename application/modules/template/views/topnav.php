<body>
	<div>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="date-topbar pull-left hidden-sm hidden-xs"><?=date("D, M j, Y");?></span>
                        <ul class="list-inline list-topbar pull-right">
                            <li><i class="icon-envelope"></i> <?=$this->config->item('email')?></li>
                            <li><i class="icon-phone"></i> <?=$this->config->item('phone')?></li>
                            <li>
                                <a href="<?php echo getHomeUrl()?>contact_us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logobar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="<?php echo getHomeUrl();?>"><img class="img-responsive" src="<?=base_url()?>/assets/front/Content/images/merolagani.png"></a>
                    </div>
                    <div id="ctl00_A1_divAdvertisement">
                        <div class="col-xs-8" id="ctl00_A1_divA1">
                            <a target="_blank" href="http://www.globalimecapital.com/">
                                <img class="img-responsive" src="<?=base_url()?>/assets/front/content/adverts/c9a2947a-8fa9-41b9-ab02-e4a1c8f8545f.gif">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand visible-xs">
                        <div class="dropdown search-form">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-search"></i>
                                Search
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_lbtnSearchHeader')" class="form-inline">
                                        <autosuggest>
                                            <input type="hidden" value="0" id="ctl00_AutoSuggest1_hdnAutoSuggest" name="ctl00$AutoSuggest1$hdnAutoSuggest">
                                            <input type="text" onkeyup="AutoSuggest.clearValue(event,this);" onkeypress="AutoSuggest.getAutoSuggestDataByElement(&quot;Company&quot;,this);" placeholder="Company name or symbol" onblur="" data-bound="0" autocomplete="off" class="form-control form-control-inline" title="Type company name or stock symbol" tabindex="-1" id="ctl00_AutoSuggest1_txtAutoSuggest" maxlength="255" name="ctl00$AutoSuggest1$txtAutoSuggest">
                                        </autosuggest>
                                        <a href="javascript:__doPostBack('ctl00$lbtnSearchHeader','')" data-trigger="company-detail" class="btn btn-primary" title="Search Company Detail" tabindex="-1" id="ctl00_lbtnSearchHeader" onclick="return false;"><span class="icon-search"></span> Search</a>                                                              
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="<?php echo getHomeUrl();?>">
                                <span style="line-height:20px" class="icon-home icon-2x"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a title="Market" data-toggle="dropdown" class="dropdown-toggle" href="#">Market <b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="/LatestMarket.aspx">Live Trading</a>
                                </li>
                                <li class="">
                                    <a href="/StockQuote.aspx">Todays Shareprice</a>
                                </li>
                                <li class="">
                                    <a href="/Floorsheet.aspx">Floorsheet</a>
                                </li>                                
                                <li class="">
                                    <a href="/Indices.aspx">Indices</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Market Summary</li>
                                <li class="">
                                    <a href="/MarketSummary.aspx?type=gainers">Top Gainers</a>
                                </li> 
                                <li class="">
                                    <a href="/MarketSummary.aspx?type=losers">Top Losers</a>
                                </li> 
                                <li class="">
                                    <a href="/MarketSummary.aspx?type=turnovers">Top Turnovers</a>
                                </li> 
                                <li class="">
                                    <a href="/MarketSummary.aspx?type=sectors">Top Sectors</a>
                                </li>    
                            </ul>
                        </li>
                        <li class="">
                            <a href="<?php echo getNewsUrl();?>">News</a>
                        </li>
                        <li class="">
                            <a href="<?php echo getAnnouncementUrl();?>">Announcements</a>
                        </li>
                        <li class="dropdown">
                            <a title="Market" data-toggle="dropdown" class="dropdown-toggle" href="#">Reports <b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="/CompanyReports.aspx?type=ANNUAL">Annual Report</a>
                                </li>
                                <li class="">
                                    <a href="/CompanyReports.aspx?type=QUARTERLY">Quarterly Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a title="Market" data-toggle="dropdown" class="dropdown-toggle" href="#">Listings <b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="/BrokerList.aspx">Brokers</a>
                                </li>
                                <li class="">
                                    <a href="/CompanyList.aspx">Companies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Portfolio <b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">                                    
                                <li class="">
                                    <a href="/MyPortfolio.aspx">My Portfolio</a>
                                </li>
                                <li class="">
                                    <a href="/MyWatchlist.aspx">My Watchlist</a>
                                </li>
                                <li class="">
                                    <a href="/ProfitLossReport.aspx">P/L Report</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Shares</li>
                                <li class="">
                                    <a href="/Purchase.aspx">Purchase</a>
                                </li>
                                <li class="">
                                    <a href="/Sales.aspx">Sales</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Settings</li>
                                <li class="">
                                    <a href="/Portfolio.aspx">Portfolio</a>
                                </li>
                                <li class="">
                                    <a href="/Shareholder.aspx">Shareholder</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">IPO <b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">        
                                <li class="">
                                    <a href="/IpoResult.aspx">IPO Results</a>
                                </li>
                                <li class="">
                                    <a href="/Ipo.aspx?type=upcoming">Upcoming IPO</a>
                                </li>
                                <li class="">
                                    <a href="/Ipo.aspx?type=past">Past IPO</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown search-form">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
                                <i class="icon-search"></i>
                                <span class="hidden-sm">Search</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_lbtnSearch')" class="form-inline">
                                        <autosuggest>
                                            <input type="hidden" value="0" id="ctl00_ASCompany_hdnAutoSuggest" name="ctl00$ASCompany$hdnAutoSuggest">
                                            <input type="text" onkeyup="AutoSuggest.clearValue(event,this);" onkeypress="AutoSuggest.getAutoSuggestDataByElement(&quot;Company&quot;,this);" placeholder="Company name or symbol" onblur="" data-bound="1" autocomplete="off" class="form-control form-control-inline ui-autocomplete-input" title="Type company name or stock symbol" tabindex="-1" id="ctl00_ASCompany_txtAutoSuggest" maxlength="255" name="ctl00$ASCompany$txtAutoSuggest">
                                        </autosuggest>
                                        <a href="javascript:__doPostBack('ctl00$lbtnSearch','')" data-trigger="company-detail" class="btn btn-primary" title="Search Company Detail" tabindex="-1" id="ctl00_lbtnSearch" onclick="return false;"><span class="icon-search"></span> Search</a>                                                              
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php if($this->helper_model->validate_user_session() || $this->helper_model->validate_company_session()){?>
                        <li class="dropdown" id="ctl00_liUser">                                
                            <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">                                    
                                <span class="icon-user"></span>
                                <span class="hidden-md" id="ctl00_lblUsername">Welcome, <?=$this->session->userdata('name');?></span>&nbsp;<i class="icon-angle-down"></i>                                   
                            </a>
                            <?php 
                                $url = getCompanyUrl();
                                $is_user = $this->helper_model->validate_user_session();
                                if($is_user)
                                    $url = getMemberUrl();
                                ?>                          
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $url.'update_info'?>">Edit Account</a>
                                </li>
                                <li>
                                    <a href="<?php echo $url.'change_password'?>">Change Password</a>
                                </li>
                                <?php if(!$is_user){ ?>
                                <li>
                                    <a href="<?php echo $url.'announcement'?>">Announcement</a>
                                </li>
                                <?php }?>
                                <li class="divider"></li>
                                <li><a href="<?php echo $url.'login/logout'?>">Log Out</a></li>
                            </ul>
                        </li>
                        <?php } else {?>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Login<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo getMemberUrl().'login'?>">Login as user</a>
                                </li>
                                <li>
                                    <a href="<?php echo getCompanyUrl().'login'?>">Login as company</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Register<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo getMemberUrl().'register'?>">Register as user</a>
                                </li>
                                <li>
                                    <a href="<?php echo getCompanyUrl().'register'?>">Register as company</a>
                                </li>
                            </ul>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>