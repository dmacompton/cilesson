<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

    public function index()
    {
        $prefs = array(
                'start_day' => 'monday',
                'mounth_type' => 'long',
                'day_type' => 'short',
                'show_next_prev' => true,
                'next_prev_url'   => 'http://ci.gov/index.php/calendar/index/',
                'template' => '{table_open}<table border="1" cellpadding="10" cellspacing="0">{/table_open}

                               {heading_row_start}<tr>{/heading_row_start}

                               {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
                               {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
                               {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

                               {heading_row_end}</tr>{/heading_row_end}

                               {week_row_start}<tr>{/week_row_start}
                               {week_day_cell}<td>{week_day}</td>{/week_day_cell}
                               {week_row_end}</tr>{/week_row_end}

                               {cal_row_start}<tr>{/cal_row_start}
                               {cal_cell_start}<td>{/cal_cell_start}

                               {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
                               {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

                               {cal_cell_no_content}{day}{/cal_cell_no_content}
                               {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

                               {cal_cell_blank}&nbsp;{/cal_cell_blank}

                               {cal_cell_end}</td>{/cal_cell_end}
                               {cal_row_end}</tr>{/cal_row_end}

                               {table_close}</table>{/table_close}'
            );
        $this->load->library('calendar', $prefs);
        $data['links'] = array(
                            3 => 'http://a.com',
                            13 => 'http://a.com',
                            23 => 'http://a.com',
                            26 => 'http://a.com',
                            28 => 'http://a.com'
                            );
        $this->load->view('calendar_view', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */