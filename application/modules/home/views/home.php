<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div>
                <?php $this->load->view('news/index',$news);?>
            </div>
            <?php //$this->load->view('home/_layouts/stock_market');?>
            <?php //$this->load->view('home/_layouts/option_and_analysis');?>
            <?php //$this->load->view('home/_layouts/economy');?>
            <?php //$this->load->view('home/_layouts/hydropower');?>
            <?php //$this->load->view('home/_layouts/latest_news');?>
            <?php //$this->load->view('home/_layouts/popular_news');?>
            <?php $this->load->view('announcement/index',$announcement);?>
            <?php //$this->load->view('home/_layouts/agm_divident_right');?>
            <?php $this->load->view('home/_layouts/market_watch');?>
            <div class="col-sm-12 col-md-4">
                <!--Advertisement div here -->

                <!-- <div id="ctl00_ContentPlaceHolder1_Advertisement6_divAdvertisement">
                    <div class="row" id="ctl00_ContentPlaceHolder1_Advertisement6_divGeneral">
                        <div class="col-lg-12">
                            <div class="advert">
                                <a onclick="addAdvHitCounter.UpdateAdvHitCounter('72')" target="_blank" href="http://nepallife.com.np/">
                                    <img class="img-responsive" src="/content/adverts/b30b6c15-976b-43cb-a970-87801a605e0b.gif">
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div> -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advert">
                            <a href="/LatestMarket.aspx">
                                <img class="img-responsive" src="/Content/adverts/advert-live-market.jpg">
                            </a>
                        </div>
                        <br>
                    </div>
                </div>

                <?php $this->load->view('home/_layouts/indices');?>
                <?php $this->load->view('home/_layouts/market_summary');?>
                <?php $this->load->view('home/_layouts/gainers/gainers_list',$gainers);?>
                <?php $this->load->view('home/_layouts/losers/losers_list',$losers);?>
                <?php $this->load->view('home/_layouts/top_turnovers');?>
                <?php $this->load->view('home/_layouts/top_sectors');?>
            </div>
        </div>
    </div>
</div>