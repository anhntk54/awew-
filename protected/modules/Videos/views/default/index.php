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
        					<textarea id="videos_youtube" placeholder="Chia sẻ videos youtube về CLB của bạn" class="prl-width-1-1"></textarea>
                        </div>
                        <div class="select_upload">
                            <div class="select_left">
                                <div class="icon-up">
                                    <i class="fa fa-camera fa-2 test"></i>
                                </div>
                                <span></span>
                                <div class="icon-up">
                                    <i class="fa fa-youtube-play fa-2"></i>
                                </div>
                                <div class="icon-up">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <div class="select_right">
                                <button onclick="send_videos();">Button</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
        			</div>
        		</div>
                <style>
                .test{
                    font-size: 20px;
                }
                .select_left .icon-up:last-child{
                    border-right: none;
                }
                .icon-up{
                    padding: 3px 2px 0px;
                    float: left;
                    margin: 5px 2px 5px 0px;
                    border-right: 1px solid rgba(0,0,0,0.2);
                }
                .select_upload{
                    overflow: hidden; /****/
                    background: rgba(0,0,0,0.1);
                }
                .select_left{
                   float: left;
                }
                
                .select_right{
                    float: right;    
                }
                
                
                </style>
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

/*$('#videos_youtube').bind('paste', function(e){
    
    console.log("paste");
    
    var text = $(this).html();
    console.log("Fuck:"+text);
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
    }*/
    
    

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

