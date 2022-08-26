<?php

class Common_model extends CI_model {

        public function data($image)
        {
                $return = '';
                $config['upload_path']          = './data/';
                $config['allowed_types']        = 'gif|jpg|png|jfif|jpeg|webp';
                $config['max_size']             = 100000000;
                $config['max_width']            = 100000000;
                $config['max_height']           = 100000000;
                $config['file_name']           = rand();

                $this->load->library('upload', $config);
                $this->upload->do_upload($image);

                $data = $this->upload->data();
                // echo '<pre>'; print_r($data); die;
                if ($data) {
                        return $return = $data['file_name'];
                }
                            
        }
}