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

<div class="btn-toolbar">
                        <a title="Add Purchased Shares" class="btn btn-default" href="<?=getMemberUrl().'portfolio/add-stock'?>" id="lnkAddShare" tabindex="2">
                            <span class="icon-plus"></span> Add Stock</a>
                        <a title="Sell Shares" class="btn btn-default" href="http://merolagani.com/SellShare.aspx?redirect=MyPortfolio.aspx" id="lnkSellShare" tabindex="3">
                            <span class="icon-usd"></span> Sell Share</a>
                </div>
                <br>
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Investment</th>
                    <th>Purchased Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(count($stocks)>0){
                    foreach($stocks as $stock){
                        ?>
                        <tr id="<?php echo $stock['stock_symbol'];?>">
                            <td><?php echo $stock['quantity']?></td>
                            <td><?php echo $stock['rate']?></td>
                            <td><?php echo $stock['rate']*$stock['quantity'];?></td>
                            <td><?php echo $stock['transaction_date']?></td>
                            <td><?php echo $stock['transaction_date']?></td>
                            <td>
                                <a href="<?echo getMemberUrl().'portfolio/edit-stock-info/'.$stock['id'] ?>" class="btn btn-effect-ripple btn-xs btn-success">Edit</a>
                                <a class="btn btn-danger delete btn-xs" data-id="<?php echo $stock['id'];?>">Delete</a>
                            </td>    
                        </tr>
                    <?php

                    }
                }else
                {
                  ?>
                <tr>
                    <td colspan="6">
                      <center>
                        <font color="#FF0000">::No Records Yet.::</font>
                      </center>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                  <th>Company</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Investment</th>
                  <th>Action</th>
                </tr>
            </tfoot>
        </table>


        </div>