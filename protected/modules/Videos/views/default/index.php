<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/global.js"></script>
<section id="main" class="prl-span-9">
    <article id="article-single"> 
        <div class="prl-grid">
            <div class="prl-span-9 prl-span-flip">	
            	<div class="prl-entry-content">
                
                    <div class="prl-form-row space-bot">
						<label class="prl-form-label" for="subject">Videos của bạn</label>
						<div class="prl-form-controls prl-comment-url">
                            <input id="youtube_link" onkeypress="send_link_youtube();" type="text" placeholder="Đăng videos tại đây" class="prl-width-1-1">
                            <button id="post_videos" class="prl-button prl-button-primary" type="submit">Chia sẻ videos</button>
                        </div>
                        
					</div>
                    
                    
            		<div class="space-bot">
            		  <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;" id="youtube_list">
                        
                      </div>
            		</div>
            	</div> <!-- .prl-entry-content -->
            </div>
            <?php $this->widget('Videos.components.Left_Sidebar');?>
       </div> <!-- .prl-grid -->
    </article>
</section>

<script>
    function send_link_youtube(){
        
        var link = $("#youtube_link").val();
        $.ajax({
            type: 'POST',
    		url: '<?php echo Yii::app()->createUrl('Videos/services/getLink');?>',
            dataType: 'json',
            data: { link_youtube : link },
            success: function (json) {
                console.log(json.youtube_id);
                console.log(json.youtube_title);
                var youtube = 
                '<p>'+json.youtube_title+'<p><br/>'+
                '<iframe src="//www.youtube.com/embed/'+json.youtube_id+'" id="fitvid843901"></iframe>';
                 
                $("#youtube_list").html(youtube);
            },
            complete : function (){
                
            },
            error: function (xhr, ajaxOptions, thrownError){
                
            }
    
        });
    }
</script>