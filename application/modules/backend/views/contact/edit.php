<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><?=$title?></h3>
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/common/alert')?>
    <form role="form" id="frm" method="post" name="frm" action="<?=ADMIN_PATH.'contact/edit/'.$contact['id'];?>">
    <?php if(validation_errors()) echo "<p style='color:red'>Please fill all the required fields correctly."; ?>
      <p style="color:grey">Fields marked with <i class="fa fa-asterisk"></i> are required.</p>
      <div class="col-lg-6">
        <div class="form-group <?php if(form_error('title')) echo 'has-error' ?>">
          <label>Contact Title <i class="fa fa-asterisk"></i></label>
          <input name="title" placeholder="Enter title for this contact address such as Kathmandu Address" value="<?=set_value('title', $contact['title']);?>" class="form-control">
          <?=form_error('title')?>
        </div>
        <div class="form-group <?php if(form_error('phone')) echo 'has-error' ?>">
          <label>Phone <i class="fa fa-asterisk"></i></label>
          <textarea name="phone" placeholder="Separate multiple numbers by comma" rows="2" class="form-control"><?=set_value('phone', $contact['phone']);?></textarea>
          <?=form_error('phone')?>
        </div>
        <div class="form-group <?php if(form_error('fax')) echo 'has-error' ?>">
          <label>Fax</label>
          <input name="fax" placeholder="Enter fax number" value="<?=set_value('fax', $contact['fax']);?>" class="form-control">
          <?=form_error('fax')?>
        </div>
        <div class="form-group <?php if(form_error('email')) echo 'has-error' ?>">
          <label>Email</label>
          <textarea name="email" placeholder="Separate multiple emails by comma" rows="2" class="form-control"><?=set_value('email', $contact['email']);?></textarea>
          <?=form_error('email')?>
        </div>
        <div class="form-group <?php if(form_error('week_start_day')) echo 'has-error' ?>" id="startDay">
              <label>Week Starts On</label>
              <div class="radio">
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws1" value="1" <?php if(set_value('week_start_day', $contact['week_start_day'])=='1') echo "checked";?>>Sun
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws2" value="2" <?php if(set_value('week_start_day', $contact['week_start_day'])=='2') echo "checked";?>>Mon
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws3" value="3" <?php if(set_value('week_start_day', $contact['week_start_day'])=='3') echo "checked";?>>Tue
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws4" value="4" <?php if(set_value('week_start_day', $contact['week_start_day'])=='4') echo "checked";?>>Wed
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws5" value="5" <?php if(set_value('week_start_day', $contact['week_start_day'])=='5') echo "checked";?>>Thu
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws6" value="6" <?php if(set_value('week_start_day', $contact['week_start_day'])=='6') echo "checked";?>>Fri
                </label>
                <label class="radio-inline weekStart">
                  <input type="radio" name="week_start_day" id="ws7" value="7" <?php if(set_value('week_start_day', $contact['week_start_day'])=='7') echo "checked";?>>Sat
                </label>
              </div>
              <?=form_error('week_start_day')?>
          </div>

          <div class="form-group <?php if(form_error('week_end_day')) echo 'has-error' ?>" id="endDay">
              <label>Week Ends On</label>
              <div class="radio">
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we1" value="1" <?php if(set_value('week_end_day', $contact['week_end_day'])=='1') echo "checked";?>>Sun
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we2" value="2" <?php if(set_value('week_end_day', $contact['week_end_day'])=='2') echo "checked";?>>Mon
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we3" value="3" <?php if(set_value('week_end_day', $contact['week_end_day'])=='3') echo "checked";?>>Tue
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we4" value="4" <?php if(set_value('week_end_day', $contact['week_end_day'])=='4') echo "checked";?>>Wed
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we5" value="5" <?php if(set_value('week_end_day', $contact['week_end_day'])=='5') echo "checked";?>>Thu
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we6" value="6" <?php if(set_value('week_end_day', $contact['week_end_day'])=='6') echo "checked";?>>Fri
                </label>
                <label class="radio-inline weekEnd">
                    <input type="radio" name="week_end_day" id="we7" value="7" <?php if(set_value('week_end_day', $contact['week_end_day'])=='7') echo "checked";?>>Sat
                </label>
              </div>
              <?=form_error('week_end_day')?>
          </div>
          <div class="form-group <?php if(form_error('weekday_start_time') || form_error('weekday_end_time')) echo 'has-error' ?>">
            <label>Opening Hours(Weekdays)</label>
            <?php 
              if(form_error('weekday_start_time') || form_error('weekday_end_time') ) {
                echo "<p style='color:red'>Please enter store opening hours for weekdays correctly</p>";
              }
            ?>
            <p style="color:#00F">Please Use 24Hr Time Format</p>
            <div class='controls'>
              <input name="weekday_start_time" type='text' placeholder="hrs:mins" value="<?=set_value('weekday_start_time', $contact['weekday_start_time']);?>"> &nbsp;-&nbsp; <input type="text" name="weekday_end_time" placeholder="hrs:mins" value="<?=set_value('weekday_end_time', $contact['weekday_end_time']);?>" >
            </div>
          </div>

          <div class="form-group <?php if(form_error('weekend_start_time') || form_error('weekend_end_time')) echo 'has-error' ?>" id="weekend_time">
            <label>Opening Hours(Weekends)</label><br>
            <?php 
              if(form_error('weekend_start_time') || form_error('weekend_end_time')) {
                echo "<p style='color:red'>Please enter store opening hours for weekends correctly</p>";
              }
            ?>
            <p style="color:#00F">Please leave blank if your business remains closed on Weekends</p>
            <input type="text" name="weekend_start_time" placeholder="hrs:mins" value="<?=set_value('weekend_start_time', $contact['weekend_start_time']);?>" > &nbsp;-&nbsp; <input type="text" name="weekend_end_time" placeholder="hrs:mins" value="<?=set_value('weekend_end_time', $contact['weekend_end_time']);?>" >
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group <?php if(form_error('map_iframe')) echo 'has-error' ?>" id="iframe">
          <label>Map IFrame</label>
          <textarea id="map_iframe" class="form-control" placeholder="Paste your Map IFrame tag here." name="map_iframe" rows="7"><?=set_value('map_iframe', stripslashes($contact['map_iframe']));?></textarea>
          <?=form_error('map_iframe')?>
          <?php 
            $string = stripslashes($this->config->item('map_iframe'));
            $pattern = "/height=\"[0-9]*\"/";
            $string = preg_replace($pattern, "height=\"320\"", $string);
            $pattern = "/width=\"[0-9]*\"/";
            $string = preg_replace($pattern, "width=\"100%\"", $string);
            $pattern = "/height='[0-9]*'/";
            $string = preg_replace($pattern, "height=\"320\"", $string);
            $pattern = "/width='[0-9]*'/";
            $string = preg_replace($pattern, "width=\"100%\"", $string);
            $string =  str_replace("iframe", "iframe id='map_live' ", $string);
            echo $string;
           ?>
        </div>
        <div class="form-group <?php if(form_error('address')) echo 'has-error' ?>">
          <label>Address <i class="fa fa-asterisk"></i></label>
          <textarea class="form-control" placeholder="Enter your full address here" id="address" name="address" rows="4"><?=set_value('address', $contact['address']);?></textarea>
          <?=form_error('address')?>
        </div>
      </div>
      <div class="box-footer col-lg-12">
        <div class="pull-right">
          <button class="btn btn-success" type="submit">Submit</button>
          <button class="btn btn-warning" type="reset">Reset</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var start = $('input[name="week_start_day"]:checked').val();
    var end = $('input[name="week_end_day"]:checked').val();
    var diff = end - start;
    if(diff==6 || diff==-1){
      $("#weekend_time").css("display","none");
    } else {
      $("#weekend_time").css("display","block");
    }
  })

  $('#startDay input').on('change', function() {
     start = $('input[name=week_start_day]:checked', '#startDay').val();
     $("#we" + start).prop('checked',false);
     $("#we" + start).parent().hide();
     for(i=1; i<=7; i++){
      if(i != start) {
        $("#we" + i).parent().show();
      }
     }
  });

  $('#endDay input').on('change', function() {
    end = $('input[name=week_end_day]:checked', '#endDay').val();
    $("#ws" + end).prop('checked', false);
    $("#ws" + end).parent().hide();
    for(i=1; i<=7; i++){
      if(i != end) {
        $("#ws" + i).parent().show();
      }
    }
    var start = $('input[name="week_start_day"]:checked').val();
    var end = $('input[name="week_end_day"]:checked').val();
    var diff = end - start;
    if(diff==6 || diff==-1){
      $("#weekend_time").css("display","none");
    } else {
      $("#weekend_time").css("display","block");
    }
  });

  $("#map_iframe").focusout(function() {
    var iframe = $("#map_iframe").val();
    iframe2 = iframe.replace(/"/g, "'");
    var myRegexp = /src='([^"]+)'/;
    match = myRegexp.exec(iframe2);
    if(!match) {
      // return 0;
      $("#map_live").attr('src', '');
      $("#map_live").attr('height', 0);
    }
    match[1] = match[1].split("'")[0];
    prev = $("#map_live").attr('src');
    prev = $("#map_live").attr('src');
    if(match[1] != prev) {
      $("#map_live").attr('src', match[1]);
      $("#map_live").attr('height', 320);
    }  
  });

  $("#map_iframe").focusout(function() {
    var iframe = $("#map_iframe").val();
    iframe2 = iframe.replace(/"/g, "'");
    var myRegexp = /src='([^"]+)'/;
    match = myRegexp.exec(iframe2);
    if(!match) {
      // return 0;
      $("#map_live").attr('src', '');
      $("#map_live").attr('height', 0);
    }
    match[1] = match[1].split("'")[0];
    prev = $("#map_live").attr('src');
    prev = $("#map_live").attr('src');
    if(match[1] != prev) {
      $("#map_live").attr('src', match[1]);
      $("#map_live").attr('height', 320);
    }  
  });
</script>