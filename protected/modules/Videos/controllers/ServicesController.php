<?php
class ServicesController extends Controller{
    
    public function actionGetLink(){
        if (isset($_POST['link_youtube'])) {
            $yt_url = $_POST['link_youtube'];
            
            $variable= get_youtube_id_from_url($yt_url);
            $id = $variable;
            $videoTitle = file_get_contents("http://gdata.youtube.com/feeds/api/videos/${id}?v=2&fields=title");
            preg_match("/<title>(.+?)<\/title>/is", $videoTitle, $titleOfVideo);
            $videoTitle = $titleOfVideo[1];
            
            $videos = array(
                'youtube_id' => $variable,
                'youtube_title' => $videoTitle,
            ); 
            echo json_encode($videos);
        }
     }
}
?>