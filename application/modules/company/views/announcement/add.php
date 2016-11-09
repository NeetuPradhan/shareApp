<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><span><?php echo $title;?></span></h4>
        </div>
    </div>
    <div>
        <form role="form"  method="post" action="<?=getCompanyUrl().'announcement_add'?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>Announcement Detail</span>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="date-label">
                        <small class="text-muted">(Fields marked with * are required)</small>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">  
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-lg-2">Title *</label>
                                    <div class="col-sm-4 col-md-3 col-lg-3">
                                        <input name="title" type="text" value="<?= set_value('title') ?>" title="Title" placeholder="Title" class="form-control" />                
                                        <?= form_error('title') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3 col-md-3 col-lg-2">Detail *</label>
                                    <div class="col-sm-4 col-md-3 col-lg-3">
                                    <textarea name="detail" placeholder="Detail" rows="4S" cols="20" class="form-control"><?= set_value('detail') ?></textarea>
                                        <?= form_error('detail') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Save" id="btnSave" class="btn btn-primary" />
                <a href="<?php echo getHomeUrl();?>"  class="btn btn-default" title="Cancel">Cancel</a>
            </div>
        </form>            
    </div>  
</div>