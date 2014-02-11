<div class="clear" style="width: 100%; clear: both;"></div>
<div class="submit-rating" style="width: 100%;">
    <span class="text-rating">RATING HERE</span>
    <p class="click-rating" id="stating"></p>
</div>
<div class="clear" style="width: 100%; clear: both;"></div>
<script >
var ready = true;
<?php /*?>
if (<?php echo Comments::model()->checkRules(); ?> == 1) {
  ready = false;
};
<?php */?>

$('#stating').raty({
   precision: true,
   score: <?php echo Rating::model()->getRate($model); ?>,
   //readOnly: ready,
  click: function(score, evt) {
  	rid ="#stating input[type=hidden]";
    //if (check == 1) {
    	 $.ajax({
              type: "POST",
              url: "<?php echo Yii::app()->createUrl('/Home/default/rating');?>",
              data: {rate:$(rid).val(),gid:<?php echo $model->id; ?>},
              // cache: false,
              success: function(data){

              },
            });
    //};
  }
});
</script>