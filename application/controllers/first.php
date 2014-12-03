<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {


    public function index()
    {
        $this->load->view('hello_view');
    }

    public function about() {
        $data['name'] = "Дмитрий";
        $data['surname'] = "Михайлов";
        $data['age'] = 24;

        $this->load->view('about_view', $data);

    }

    function articles() {
        $config['base_url'] = base_url().'index.php/first/articles/';
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = '2';
        $config['full_tag_open'] = "<p style='text-align:center;color:red;'>";
        $config['full_tag_close'] = '</p>';

        $this->pagination->initialize($config);

        $this->load->model('articles_model');
        $data['articles'] = $this->articles_model->get_articles($config['per_page'], $this->uri->segment(3));
        $this->load->view('articles_view', $data);
    }

    function upload_photo() {
        if(isset($_POST['download'])) {
            $config['upload_path'] = './img/photos';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
            $config['encrypt_name']	= TRUE;
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);

            $this->upload->do_upload();

            $image_data = $this->upload->data();

            $config = array(
                'image_library' => 'gd2',
                'source_image' => $image_data['full_path'],
                'new_image' => APPPATH.'../img/photos/thumbs',
                'create_thumb' => TRUE,
                'maintain_ratio' => TRUE,
                'width' => 80,
                'height' => 80
            );

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
// Watermark
            $config['source_image']	= $image_data['full_path'];
            $config['new_image'] = APPPATH.'../img/photos/wm';
            $config['wm_text'] = 'Copyright 2014 - Dmacompton';
            $config['wm_type'] = 'text';
            $config['wm_font_path'] = './system/fonts/texb.ttf';
            $config['wm_font_size']	= '16';
            $config['wm_font_color'] = '000000';
            $config['wm_vrt_alignment'] = 'top';
            $config['wm_hor_alignment'] = 'center';
            $config['wm_padding'] = '20';

            $this->image_lib->initialize($config);

            $this->image_lib->watermark();
// END Watermark
            $add['img'] = $image_data['file_name'];

            $this->db->insert('photos', $add);

            echo "Файл успешно загружен!";
        } else {
            $this->load->view('upload_view');
        }
    }

    function add_article () {
        $data['title'] = "Пятая статья";
        $data['text'] = "Модификации, например, юмористические вставки или слова, которыедаже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзногопроекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.Также все другие известные генераторы Lorem Ipsum используют один и тот же текст,который они просто повторяют, пока не достигнут нужный объём.";
        $data['date'] = "2011-12-23";
        $this->load->model('articles_model');
        $this->articles_model->add_article($data);
    }

    function edit_article () {
        $data['title'] = 'Новое название пятой статьи';
        $data['text'] = 'Текст';
        $data['date'] = '2012-12-31';
        $this->load->model('articles_model');
        $this->articles_model->edit_article($data);
    }

    function del_article($id) {
        $this->load->model('articles_model');
        $this->articles_model->del_article($id);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */