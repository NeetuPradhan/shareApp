<style>
  .company-symbol {
    margin-left: 10px;
    width: 300px !important;
  }

  .comdpany-symbol {
    margin-left: 20px;
  }
</style>

<div class="container">
  <div class="page-alert" id="page-alert"></div>
  <div id="processing"></div>

  
  <div>

    <div id="ctl00_ContentPlaceHolder1_divAddShare">
      <div id="ctl00_ContentPlaceHolder1_updPnl">

        <div class="row">
          <div class="col-lg-12">
            <h4 class="page-header">
              <span id="ctl00_ContentPlaceHolder1_pageTitle">Add New/Purchased Shares</span>
            </h4>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul class="pager">
              <li><a title="Go Back" class="pull-left" href="javascript:history.go(-1)"><i class="icon-long-arrow-left"></i> Go Back</a></li>
            </ul>
          </div>
        </div>

        <div class="row panel-addshare" id="pnlAddShare">

          <div class="col-lg-12">
            <div id="divError"></div>  
            <div class="date-label">                                                      
              <small class="text-muted">(Fields marked with * are required)</small> 
              <?=validation_errors();?>    
            </div>                       
            <div class="panel panel-default">
              <div class="panel-body">
                <form action="<?=getMemberUrl().'portfolio/add-stock'?>" method="POST">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label title="Share Type" class="control-label col-sm-3 col-md-3 col-lg-2 ">Stock Type *</label>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                      <div class="form-controls">
                        <select name="stock_type_id" class="form-control select2 mycontrols" style="width: 100%;">
                          <option value="" <?php if(!set_value('stock_type_id')) { ?> selected="selected" <?php } ?>>Select Stock Type</option>
                          <?php foreach ($stock_types as $type) {
                          ?>
                          <option <?php if(set_value('stock_type_id') == $type['id']) echo "selected='selected'" ?> title="<?=$type['type']?>"  value="<?=$type['id']?>"><?=$type['type']?></option>
                          <?php } ?>
                        </select>
                        <?=form_error('stock_type_id')?>
                      </div>
                   </div>
                 </div>                          


                 <div class="form-group">
                  <label title="Transaction Date" class="control-label col-sm-3 col-md-3 col-lg-2">Transaction Date *</label>
                  <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="input-group">
                      <input name="transaction_date" type="text" value="<?=set_value('transaction_date')?>" placeholder="YYYY-MM-DD" class="form-control datepicker" title="Transaction Date in AD" tabindex="2" id="txtTransactionDateAD" maxlength="10">
                      <span class="input-group-addon">AD</span>
                      <?=form_error('transaction_date')?>
                    </div>
                  </div>

                </div>
              </div>
              <hr>
              <div class="form-horizontal">
                <div>
                  <div class="form-group header-row hidden-xs hidden-sm" id="divHeaderRow">
                    <div class="transaction-number"><span title="Transaction Number">Transaction No.</span></div>
                    <div class="symbol my-controls company-symbol"><span title="Stock Symbol">Company Symbol *</span></div>
                    <div class="quantity my-controls" style=""><span title="Quantity">Quantity *</span></div>
                    <div class="rate my-controls"><span title="Rate *">Rate *</span></div>
                    <div class="broker my-controls"><span title="Stock Broker No.">Broker</span></div>
                  </div>
                  <div id="divContent">
                    <div class="form-group content-row" id="divContentRow">
                      <div class="transaction-number">
                        <input type="text" name="transaction_no" title="Transaction Number" value="<?=set_value('transaction_no')?>" maxlength="50" placeholder="Transaction No." class="form-control input-sm" id="">
                        <?=form_error('transaction_no')?>
                      </div>
                      <div class="form-controls company-symbol" style="">
                        <select name="company_id" class="form-control select2">
                          <option vlaue="" <?php if(!set_value('company_id')) { ?> selected="selected" <?php } ?>>Select Company</option>
                          <?php foreach ($companies as $company) {
                          ?>
                          <option <?php if(set_value('company_id') == $company['id']) echo "selected='selected'" ?> title="<?=$company['stock_name']?>" value="<?=$company['id']?>"><?=$company['stock_symbol']?> - <?=$company['stock_name']?></option>
                          <?php } ?>
                        </select>
                        <?=form_error('company_id')?>
                      </div>
                      <div class="quantity my-controls" style="">
                        <input name="quantity" value="<?=set_value('quantity')?>" type="text" onChange="calculateTotal()" title="Quantity" placeholder="Quantity *" class="form-control input-sm text-right" id="quantity">
                        <?=form_error('quantity')?>
                      </div>
                      <div class="rate my-controls"> 
                        <input name="rate" type="text" value="<?=set_value('rate')?>" title="Rate" onChange="calculateTotal()" placeholder="Rate *" class="form-control input-sm text-right" id="rate">
                        <?=form_error('rate')?>
                      </div>
                      <div class="broker my-controls">                                                                                    
                        <div class="form-controls">
                          <select name="broker_id" class="form-control select2 mycontrols" style="min-width: 200px;">
                            <option <?php if(!set_value('broker_id')) { ?> selected="selected" <?php } ?>>Select Broker</option>
                            <?php foreach ($brokers as $broker) {
                              ?>
                              <option <?php if(set_value('broker_id') == $broker['id']) echo "selected='selected'" ?> title="<?=$broker['name']?>" value="<?=$broker['id']?>"><?=$broker['code']?> - <?=$broker['name']?></option>
                              <?php } ?>
                            </select>
                            <?=form_error('broker_id')?>
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
                <dt>Total Cost</dt>                                        
                <dd class="clearfix"><span id="amt">0.00</span></dd>
              </dl>
              <hr>  
              <div class="text-center">                         
                <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
                <a title="Cancel" class="btn btn-default" href="<?=getMemberUrl().'portfolio'?>">Cancel</a>
              </div>
            </div>
            </form>
          </div>  
        </div>
        
      </div>
      
    </div>
  </div>
</div>           

</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker({
      dateFormat: 'yy-mm-dd',
      changeYear: true,
      yearRange: "1950:" + new Date('y')
    });
    $(".select2").select2();
  })

  function calculateTotal() {
    var rate = $('#rate').val();
    var qty = $('#quantity').val();

    if(validateNumeric(rate) && validateNumeric(qty)) {
      amt = rate*qty;
      $("#amt").html(amt);
      $("#totalQuantity").html(qty)
      $("#avgRate").html(rate);
    }
  }

  function validateNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }
</script>