<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                         <ul class="nav-stacked">  
                            <li><a href="/Index.aspx" tabindex="-1">Home</a></li>                    
                            <li><a href="/LatestMarket.aspx" tabindex="-1">Latest Market</a></li>
                            <li><a href="/StockQuote.aspx" tabindex="-1">Daily Stock Quotes</a></li>                    
                            <li><a href="/Floorsheet.aspx" tabindex="-1">Floorsheet</a></li>                        
                            <li><a href="/Indices.aspx" tabindex="-1">Indices</a></li>
                            <li><a href="/MarketSummary.aspx?type=brokers" tabindex="-1">Top Brokers</a></li>
                            <li><a href="/MarketSummary.aspx?type=gainers" tabindex="-1">Top Gainers</a></li>
                            <li><a href="/MarketSummary.aspx?type=losers" tabindex="-1">Top Losers</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3">
                         <ul class="nav-stacked">                        
                            <li><a href="/NewsList.aspx?popular=false" tabindex="-1">Latest News</a></li>
                            <li><a href="/NewsList.aspx?popular=true" tabindex="-1">Popular News</a></li>
                            <li><a href="/AnnouncementList.aspx" tabindex="-1">Announcements</a></li>  
                            <li><a href="/CompanyReports.aspx?type=ANNUAL" tabindex="-1">Annual Reports</a></li>  
                            <li><a href="/CompanyReports.aspx?type=QUARTERLY" tabindex="-1">Quarterly Reports</a></li>  
                            <li><a href="/CompanyList.aspx" tabindex="-1">Companies</a></li>                        
                            <li><a href="/BrokerList.aspx" tabindex="-1">Brokers</a></li>
                                                          
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <ul class="nav-stacked">                        
                            <li><a href="<?php echo getHomeUrl()?>contact_us" tabindex="-1">Contact Us</a></li>                                
                            <li><a target="_blank" href="/Uploads/Help.pdf" tabindex="-1">Help Docs</a></li>
                            <li><a target="_blank" href="/VideoTutorials.aspx" tabindex="-1">Video Tutorials</a></li>
                            <li><a href="/BankAccounts.aspx" tabindex="-1">Bank Accounts</a></li>
                            <li><a href="/AboutUs.aspx" tabindex="-1">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <hr class="visible-xs-block visible-sm-block">
                        <address>
                            <strong><?=$this->config->item('site_name')?></strong>
                            <br><?=$this->config->item('address')?>
                            <br><abbr title="Mobile">Mobile:</abbr><?=$this->config->item('phone')?>
                            <br><abbr title="Telephone">Fax:</abbr><?=$this->config->item('fax')?>
                            <br><abbr title="E-mail address">E-mail:</abbr><?=$this->config->item('email')?>
                        </address>
                        <ul class="list-inline list-social-icons">
                            <li>
                                <a href="https://www.facebook.com/Merolagani" target="_blank"><i class="icon-facebook-sign icon-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Merolagani1" target="_blank"><i class="icon-twitter-sign icon-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCwxIA2bsPXylPFmNqDTGg2w" target="_blank"><i class="icon-youtube-sign icon-3x"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a class="btn btn-default btn-lg" href="<?php echo getMemberUrl();?>">Create Free Account</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; <?=date('Y')?> - <?=$this->config->item('site_name')?>. All Rights Reserved
                    </div>
                    <div class="col-sm-6 text-right">
                        <ul class="list-inline">
                            <li><a href="<?=base_url()?>t_a_c">Disclaimer, Privacy &amp; Terms of Use</a></li>
                            <li><a href="<?=base_url()?>f_a_qs">FAQ</a></li>
                            <li><a href="<?=base_url()?>about_us">About Us</a></li>
                            <li><a href="<?php echo getHomeUrl()?>contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>