<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customclass{

    protected $CI;

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->library("pagination");
    }

    public function pagenavi($url, $total_cnt, $per_page, $num_links, $nowpage){
        //$PAGINATION
        //게시물 전체 수
        $config['total_rows'] = $total_cnt;


        //패아장 설정
        $config['base_url'] = $url; // 페이징 연결 주소
        $config['per_page'] = $per_page;                            // 페이지당 표시 게시물 수
        $config['num_links'] = $num_links;
        // 페이지 표시 수
        if ($nowpage==""){
            $startRow =0;
        }else{
            $startRow = $config['per_page']*($nowpage-1);
        }
        $config['display_pages'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['full_tag_open'] = "<ul class=\"pagination\" style=\"margin:0 !important\">";
        $config['full_tag_close'] = "</ul>";
    //  $config['first_link'] = "<img src='/_images/_sub/_ui/btn_front.gif' width='27' height='26' alt='처음페이지' />";
    //  $config['first_tag_open'] = "";
    //  $config['first_tag_close'] = "";
    //  $config['last_link'] = "<img src='/_images/_sub/_ui/btn_end.gif' width='27' height='26' alt='마지막페이지' />";
    //  $config['last_tag_open'] = "";
    //  $config['last_tag_close'] = "";
        $config['next_link'] = "Next";
        $config['next_tag_open'] = "<li class=\"next\">";
        $config['next_tag_close'] = "</li>";
        $config['prev_link'] = "Previous";
        $config['prev_tag_open'] = "<li class=\"prev\">";
        $config['prev_tag_close'] = "</li>";
        $config['cur_tag_open'] = "<li class=\"active\"><a href=\"#\">";
        $config['cur_tag_close'] = "</a></li>";
        $config['num_tag_open'] = "<li>";
        $config['num_tag_close'] = "</li>";
        $this->CI->pagination->initialize($config);
        

        return $this->CI->pagination->create_links();
    }
    public function front_pagenavi($url, $total_cnt, $per_page, $num_links, $nowpage){
        //$PAGINATION
        //게시물 전체 수
        $config['total_rows'] = $total_cnt;

        //패아장 설정
        $config['base_url'] = $url; // 페이징 연결 주소
        $config['per_page'] = $per_page;                            // 페이지당 표시 게시물 수
        $config['num_links'] = $num_links;
        // 페이지 표시 수
        if ($nowpage==""){
            $startRow =0;
        }else{
            $startRow = $config['per_page']*($nowpage-1);
        }
        $config['display_pages'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['full_tag_open'] = "<div class=\"pagination\">";
        $config['full_tag_close'] = "</div>";
        // $config['first_link'] = "<img src='/_images/_sub/_ui/btn_front.gif' width='27' height='26' alt='처음페이지' />";
        // $config['first_tag_open'] = "<span>맨처음";
        // $config['first_tag_close'] = "</span>";
        // $config['last_link'] = "<img src='/_images/_sub/_ui/btn_end.gif' width='27' height='26' alt='마지막페이지' />";
        // $config['last_tag_open'] = "<span>맨마지막";
        // $config['last_tag_close'] = "</span>";
        //$config['next_link'] = "<img class=\"btn_img\" src=\"/static/front/html/static/img/btn_next.png\">";
        $config['next_link'] = ">>";
        // $config['next_tag_open'] = "<div class=\"btn_next\">";
        // $config['next_tag_close'] = "</div>";
        $config['prev_link'] = "<<";
        // $config['prev_tag_open'] = "<div>";
        // $config['prev_tag_close'] = "</div>";
        $config['cur_tag_open'] = "<span>";
        $config['cur_tag_close'] = "</span>";
        // $config['num_tag_open'] = "<li>";
        // $config['num_tag_close'] = "</li>";
        $this->CI->pagination->initialize($config);
        
        return $this->CI->pagination->create_links();
    }

    public function adminSessionCheck(){
        if ($this->CI->session->userdata("ADMIN_ID") == ""){
            header("location: /admin");
        }
    }
    /**
     * files        @Object     file Object
     * filePath     @String     저장할 폴더
     * fileType     @Array      허용된 File 형식
     * fileMaxSize  @Integer    File 사이즈
     */

    public function fileUpload($files, $filePath, $fileType, $fileMaxSize){
        // fileMaxSize
        // 1024             = 1kb
        // 1024*1024        = 1mb
        // 1024*1024*1024   = 1gb

        if($files["file"]["error"]){
            $result = array(
                "uploaded" => "failed",
                "reason" => $files["file"]["error"]
            );
            return $result;
        }

        $types = [];
        foreach($fileType as $val) {
            $type = explode("/", $val);    
            array_push($types, $type[1]);
        }
        $types = implode(", ", $types);

		if(!in_array($files["file"]["type"], $fileType)){
            $result = array(
                "uploaded" => "failed",
                "reason" => "허용된 파일 형식이 아닙니다. $types 형식만 업로드 가능합니다."
            );
            return $result;
		} 

        if($files["file"]["size"] > $fileMaxSize * 1024 * 1024){
            $result = array(
                "uploaded" => "failed",
                "reason" => $fileMaxSize . "mb보다 큰 파일은 올릴 수 없습니다."
            );
            return $result;
        }
        
        $dir = "upload/" . $filePath . "/" . date("Ymd");
        if (!is_dir($dir)){
			mkdir($dir, 0777, true);
        }

        $filename = explode(".", $files["file"]["name"]);
        $filename = time() . "." .$filename[1];
        $filepath = $dir . "/" . $filename;
        $fileUpload = move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
        if(!$fileUpload){
            $result = array(
                "uploaded" => "failed",
                "reason" => $fileUpload
            );
            return $result;
        }

        $result = array(
            "uploaded" => "success",
            "result" => array(
                "originalName" => $files["file"]["name"],
                "uploadedName" => $filename,
                "uploadedPath" => "/" . $filepath
            )
        );

        return $result;
	}   

}
