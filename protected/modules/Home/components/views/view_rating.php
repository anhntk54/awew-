<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/lib/raty/jquery.raty.js"></script>
<div class="rating">
    <p>REVIEW RATING</p>
    <!--<span class="star tooltip" title="Rate with 5 star!"></span>
    <span class="star tooltip" title="Rate with 4 star!"></span>
    <span class="star tooltip" title="Rate with 3 star!"></span>
    <span class="star tooltip" title="Rate with 2 star!"></span>
    <span class="star tooltip" title="Rate with 1 star!"></span>--> 
    <!--Rating-->
    <p class="rating_article" id="star"></p>
    <script>
    $.fn.raty.defaults.path = '<?php echo Yii::app()->theme->baseUrl; ?>/lib/raty/img/';
    $('#star').raty({
      precision: true,
      readOnly: true,    
       score: <?php echo $model->rate; ?>,
    });
    </script>
    <!--End rating-->   
</div>