<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
    'pi_name'       => 'Json encode',
    'pi_version'        => '1.0',
    'pi_author'     => 'Christopher Olaussen',
    'pi_author_url'     => 'http://www.back.no',
    'pi_description'    => 'Calls json_encode on tag content',
    'pi_usage'      => Json_encode::usage()
);

/**
 * @author christopher@back.no
 */
class Json_encode {

        public $return_data;

        public function __construct()
        {
                $this->EE =& get_instance();
                $this->return_data = json_encode($this->EE->TMPL->tagdata);
        }

    /**
     * Usage
     *
     * This function describes how the plugin is used.
     *
     * @access  public
     * @return  string
     */
    public static function usage()
    {
        ob_start();  ?>

The json_encode Plugin simply outputs a
json encoded value of the value between its tags.

    {exp:json_encode}<h1>test\n\r {exp:json_encode}

Eg. if you want to remove line breaks when outputting json.

    <?php
        $buffer = ob_get_contents();
        ob_end_clean();

        return $buffer;
    }
    // END



}
