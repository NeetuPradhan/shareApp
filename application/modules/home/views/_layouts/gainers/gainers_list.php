<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">
            <span>Gainers</span>
            <a class="pull-right" href="<?php echo getHomeUrl().'gainers_more'?>">More</a>
        </h4>
        <div class="date-label">
            <span class="label label-default" id="label-gainer-1">As of <?php echo $gainers[0]['pulled_datetime'];?></span>
        </div>
        <table data-live-label="#label-gainer-1" data-live-range="5" data-live-summary="true" data-live="gainers" class="table table-hover table-index">
            <tbody>
                <tr>
                    <th>Symbol</th>
                    <th>LTP</th>
                    <th>% Change</th>
                    <th>Qty</th>
                </tr>
                <?php foreach ($gainers as $key => $value) { ?>
                <tr>
                    <td>
                        <a title="<?php echo $value['stock_symbol'].' ('.$value["stock_name"].')';?>" href="/CompanyDetail.aspx?symbol=SFFIL" target="_blank"><?php echo $value['stock_symbol'];?></a>
                    </td>
                    <td><?php echo $value['last_trade_price'];?></td>
                    <td><?php echo $value['daily_stock_stats_percentage_change_in_price'];?></td>
                    <td><?php echo $value['daily_stock_stats_total_no_of_trades'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>