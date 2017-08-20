<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System extends CI_Controller {

	/**
	 * 角色列表
	 *
	 */
	public function role_list()
	{
		$this-> load ->view('system/role_list');
	}

    /**
     * 新增角色
     *
     */
    public function add_role()
    {
        $this-> load ->view('system/add_role');
    }

    /**
     * 栏目列表
     *
     */
    public function menu_list()
    {
        $this-> load ->view('system/menu_list');
    }

    /**
     * 新增栏目
     *
     */
    public function add_menu()
    {
        $this-> load ->view('system/add_menu');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */