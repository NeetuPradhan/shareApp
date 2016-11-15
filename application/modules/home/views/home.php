<div class="container">
    <div class="page-alert" id="page-alert"></div>
    <div id="processing"></div>
    <script type="text/javascript">
        //&lt;![CDATA[
        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
        //]]&gt;
    </script>

    <input type="hidden" id="ctl00_ContentPlaceHolder1_hdnOffer" name="ctl00$ContentPlaceHolder1$hdnOffer">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php $this->load->view('home/_layouts/stock_market');?>
        </div>
        <?php //$this->load->view('home/_layouts/company_news');?>
        <?php //$this->load->view('home/_layouts/option_and_analysis');?>
        <?php //$this->load->view('home/_layouts/economy');?>
        <?php //$this->load->view('home/_layouts/hydropower');?>
        <?php //$this->load->view('home/_layouts/latest_news');?>
        <?php //$this->load->view('home/_layouts/popular_news');?>
        <?php $this->load->view('announcement/index',$announcement);?>
        <?php //$this->load->view('home/_layouts/agm_divident_right');?>
        <?php $this->load->view('home/_layouts/market_watch');?>
        <div class="col-sm-12 col-md-4">
            <div id="ctl00_ContentPlaceHolder1_Advertisement6_divAdvertisement">
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
            </div>
            <div id="ctl00_ContentPlaceHolder1_Advertisement7_divAdvertisement">
                <div class="row" id="ctl00_ContentPlaceHolder1_Advertisement7_divGeneral">
                    <div class="col-lg-12">
                        <div class="advert">
                            <a onclick="addAdvHitCounter.UpdateAdvHitCounter('32')" target="_blank" href="https://www.facebook.com/SomersbyNepal/?fref=ts">
                                <img class="img-responsive" src="/content/adverts/apple-cider-side.gif">
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div id="ctl00_ContentPlaceHolder1_Advertisement12_divAdvertisement">
                <div class="row" id="ctl00_ContentPlaceHolder1_Advertisement12_divGeneral">
                    <div class="col-lg-12">
                        <div class="advert">
                            <a onclick="addAdvHitCounter.UpdateAdvHitCounter('74')" target="_blank" href="https://www.himalayanbank.com/">
                                <img class="img-responsive" src="/content/adverts/37ae1ebe-2f80-4bd5-98e0-f2b310a05ee7.gif">
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div id="ctl00_ContentPlaceHolder1_Advertisement13_divAdvertisement">
                <div class="row" id="ctl00_ContentPlaceHolder1_Advertisement13_divGeneral">
                    <div class="col-lg-12">
                        <div class="advert">
                            <a onclick="addAdvHitCounter.UpdateAdvHitCounter('45')" target="_blank" href="http://www.icfcbank.com/">
                                <img class="img-responsive" src="/content/adverts/f7d3deda-7c94-4cd9-844e-379760501a84.gif">
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
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
            <?php $this->load->view('home/_layouts/gainers');?>
            <?php $this->load->view('home/_layouts/losers');?>
            <?php $this->load->view('home/_layouts/top_turnovers');?>
            <?php $this->load->view('home/_layouts/top_sectors');?>
        </div>
    </div>
</div>