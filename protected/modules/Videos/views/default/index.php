<?php
    /*$content = "TA OLALA AAAhttp://www.php.net/stristr tong cong tien tong cong tienhttp://www.youtube.com/watch?v=A6rK38B1APctong cong 
    minh nguyen tien http://www.youtube.com/watch?v=hN2c7ztQlkI nguyen minh tien tong tien";
    $link = parserContent($content);
    foreach($link as $key1=>$value){
        foreach($value as $key2=>$row){
            $check = get_youtube_id_from_url($row);
            if($check){
                echo $check."<br/>";
            }
        }
    }
    echo formatInputContent($content);*/
?>

<section id="main" class="prl-span-9"> 
   <article id="article-single"> 
	   
	   <div class="prl-grid">	
    		<div class="prl-span-9 prl-span-flip" id="content_tube" style="border-left: 1px solid #ddd">
                <div class="prl-span-12">		
    			<div class="prl-form-row space-bot">
    				<label class="prl-form-label" for="form-s-t">Chia sẻ videos về CLB của bạn</label>
    				<div class="prl-form-controls">
    					<textarea id="videos_youtube" cols="30" rows="8" placeholder="Chia sẻ videos youtube về CLB của bạn" class="prl-width-1-1"></textarea>
    				    <button onclick="send_videos();">Button</button>
                    </div>
    			</div>
    		</div>
    	   <hr class="prl-grid-divider">
            <div class="content">
                <div class="user">
                    <div class="user_avatar" style="float: left; margin-right: 10px;">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/_small/1.jpg"/ style="width: 60px;">
                    </div>
                    <div class="user_name" style="float: left;">
                        <a style="font-weight: bold">Tiến Minh</a><br />
                        <a style="color: #bbb; font-weight: normal ">Fan: Chelsea FC</a>
                        <p style="color: #bbb; font-weight: normal ">Cập nhật 1h trước</p>
                    </div>
                </div>	
                <div class="clearfix"></div>
    			<div class="prl-entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus</p>
    				<div class="space-bot">
    				    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                            <iframe src="//www.youtube.com/embed/scuxovLtYuA" id="fitvid290741"></iframe>
                        </div>
    				</div>
    			   <h2><a href="">Lorem ipsum dolor sit amet</a></h2>
    			</div>
                <hr class="prl-grid-divider">
            </div>
            
            <div class="content">
                <div class="user">
                <div class="user_avatar" style="float: left; margin-right: 10px;">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/_small/1.jpg"/ style="width: 60px;">
                </div>
                <div class="user_name" style="float: left;">
                    <a style="font-weight: bold">Tiến Minh</a><br />
                    <a style="color: #bbb; font-weight: normal ">Fan: Chelsea FC</a>
                    <p style="color: #bbb; font-weight: normal ">Cập nhật 1h trước</p>
                </div>
                </div>	
                <div class="clearfix"></div>
    			<div class="prl-entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus</p>
    				<div class="space-bot">
    				    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                            <iframe src="//www.youtube.com/embed/scuxovLtYuA" id="fitvid290741"></iframe>
                        </div>
    				</div>
    			   <h2><a href="">Lorem ipsum dolor sit amet</a></h2>
    			</div>
                <hr class="prl-grid-divider">
            </div>
            
		</div>	
		<?php $this->widget('Videos.components.Left_Sidebar');?>
	   </div>
   </article>    		   		  
</section>

<script>
$('#videos_youtube').on('paste', function () {
  var element = this;
  setTimeout(function () {
    var text = $(element).val();
    console.log("end..."+text);
    // do something with text
  }, 100);
});

function send_videos(){
    var text = $("#videos_youtube").val();
    if(text != null){
        jQuery.ajax({
            type: 'POST',
    		url: '<?php echo Yii::app()->createUrl('/Videos/services/getLink');?>',
            dataType: 'json',
            data: { link_youtube : text},
            success: function (json) {
                
                var videos = '';
                $.each(json.tube, function( index, value ){
                    videos = videos +
                    '<div class="space-bot">'+
    				    '<div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">'+
                            '<iframe src="//www.youtube.com/embed/'+value.id+'" id="fitvid290741"></iframe>'+
                        '</div>'+
    				'</div>'+
    			   '<h2><a href="'+value.link+'" target="_blank">'+value.title+'</a></h2>';
                    
                });
                var content =
                '<div class="prl-entry-content">'+
                    '<p>'+json.content+'</p>'+
    				videos +
    			'</div>';
                
                $("#content_tube").prepend(content);
            },
            complete : function(){
                
            },
            error: function () {
            }
    
        });
    }
}

</script>

