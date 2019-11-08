<?php
Class Upload_library
{
    var $CI = ''; 
    function __construct()
    {
        $this->CI = & get_instance();
    }
    
    /*
     * Upload file
     * @$upload_path : Duong dan luu file
     * @$file_name : ten the input upload file
     */
    function upload($upload_path = '', $file_name = '')
    {
        $config = $this->config($upload_path);
        $this->CI->load->library('upload', $config);
        //thuc hien upload
        if($this->CI->upload->do_upload($file_name))
        {
            $data = $this->CI->upload->data();
        }else{
            //khong upload thanh cong
            $data = $this->CI->upload->display_errors();
        }
        return $data;
    }
    
    /*
     * Upload nhieu file
     * @$upload_path : Duong dan luu file
     * @$file_name : ten the input upload file
     */
    function upload_file($upload_path = '', $file_name = '')
    {
        //lay thong tin cau hinh upload
        $config = $this->config($upload_path);

        //lÆ°u biáº¿n mÃ´i trÆ°á»�ng khi thá»±c hiá»‡n upload
        $file  = $_FILES['image_list'];
        $count = count($file['name']);//láº¥y tá»•ng sá»‘ file Ä‘Æ°á»£c upload
        
        $image_list = array(); //luu ten cac file anh upload thanh cong
        for($i=0; $i<=$count-1; $i++) {
        
            $_FILES['userfile']['name']     = $file['name'][$i];  //khai bÃ¡o tÃªn cá»§a file thá»© i
            $_FILES['userfile']['type']     = $file['type'][$i]; //khai bÃ¡o kiá»ƒu cá»§a file thá»© i
            $_FILES['userfile']['tmp_name'] = $file['tmp_name'][$i]; //khai bÃ¡o Ä‘Æ°á»�ng dáº«n táº¡m cá»§a file thá»© i
            $_FILES['userfile']['error']    = $file['error'][$i]; //khai bÃ¡o lá»—i cá»§a file thá»© i
            $_FILES['userfile']['size']     = $file['size'][$i]; //khai bÃ¡o kÃ­ch cá»¡ cá»§a file thá»© i
            //load thÆ° viá»‡n upload vÃ  cáº¥u hÃ¬nh
            $this->CI->load->library('upload', $config);
            //thá»±c hiá»‡n upload tá»«ng file
            if($this->CI->upload->do_upload())
            {
                //náº¿u upload thÃ nh cÃ´ng thÃ¬ lÆ°u toÃ n bá»™ dá»¯ liá»‡u
                $data = $this->CI->upload->data();
                //in cáº¥u trÃºc dá»¯ liá»‡u cá»§a cÃ¡c file
                
                $image_list[] = $data['file_name'];
               
            }
        }
        return $image_list;
    }
    
    /*
     * Cau hinh upload file
     */
    function config($upload_path = '')
    {
        //Khai bao bien cau hinh
        $config = array();
        //thuc má»¥c chá»©a file
        $config['upload_path']   = $upload_path;
        //Ä�á»‹nh dáº¡ng file Ä‘Æ°á»£c phÃ©p táº£i
        $config['allowed_types'] = 'jpg|png|gif';
        //Dung lÆ°á»£ng tá»‘i Ä‘a
        $config['max_size']      = '1200';
        //Chiá»�u rá»™ng tá»‘i Ä‘a
        $config['max_width']     = '1028';
        //Chiá»�u cao tá»‘i Ä‘a
        $config['max_height']    = '1028';
        
        return $config;
    }
}