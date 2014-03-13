<?php
class ServicesController extends Controller{
    
    public function actionGetLink(){
        if (isset($_POST['link_youtube'])) {
             $yt_url = $_POST['link_youtube'];
            
            
            $data = array();
            $data_tube = array();
            $arr_tube = array();
            
            $link = parserContent($yt_url);
            if($link != null){
                $i = 0;
                foreach($link as $key1=>$value){
                    foreach($value as $key2=>$row){
                        $check = get_youtube_id_from_url($row);
                        if($check){
                            
                            $id = $check;
                            $videoTitle = file_get_contents("http://gdata.youtube.com/feeds/api/videos/${id}?v=2&fields=title");
                            preg_match("/<title>(.+?)<\/title>/is", $videoTitle, $titleOfVideo);
                            $videoTitle = $titleOfVideo[1];
                            
                            $arr_tube = array(
                                'id' => $id,
                                'title' => $videoTitle,
                                'link' => $row,
                            );
                            $data_tube[$i] = $arr_tube;
                            $i++;
                            
                        }
                    }
                }
            }
            
            $content =  formatInputContent($yt_url);
            $data = array(
                'content'=>$content,
                'tube'=>$data_tube,
            );
            
            
            //echo $yt_url;
            /*$variable= get_youtube_id_from_url($yt_url);
            $id = $variable;
            $videoTitle = file_get_contents("http://gdata.youtube.com/feeds/api/videos/${id}?v=2&fields=title");
            preg_match("/<title>(.+?)<\/title>/is", $videoTitle, $titleOfVideo);
            $videoTitle = $titleOfVideo[1];
            
            $videos = array(
                'youtube_id' => $variable,
                'youtube_title' => $videoTitle,
            ); */
            echo json_encode($data);
        }
     }
}
?>