<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for Bbsadmin group only
 */
class Bbsadmin extends MY_Controller {

    protected $access = "Bbsadmin";

	public function index()
	{
		$this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");


        $this->load->view("main-page-pfeedback");

		$this->load->view("footer");
        $this->load->view("jira-client");
	}

    public function userlist() {
        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");


        $this->load->view("main-page-userlist");


        $this->load->view("footer");
        $this->load->view("jira-client");
        $this->load->view("datatablejs");
    }

    public function projecthistory() {
        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");
        $this->load->view("main-page-projecthistory");


        $this->load->view("footer");
        $this->load->view("jira-client");
        $this->load->view("datatablejs");
    }

    public function allprojects() {
        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");

        $this->load->view("main-page-allprojects");

        $this->load->view("footer");
        $this->load->view("jira-client");
        $this->load->view("datatablejs");
    }
    public function postsettings() {
        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");

        $this->load->view("main-page-bonussettings");

        $this->load->view("footer");
        $this->load->view("jira-client");
        $this->load->view("datatablejs");
    }
    public function bcmanaging() {

        $this->load->model('bbs_model');
        $data = array(
            'result'=>  $this->bbs_model->bbs_all_users_get()
        );


        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");

        $this->load->view("main-page-bcmanaging", $data);

        $this->load->view("footer");
        $this->load->view("blockchain-js");
//        $this->load->view("datatablejs");
    }
    public function qandv() {

        $this->load->model('bbs_model');

        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");

        $this->load->view("main-page-qandv");

        $this->load->view("footer");
        $this->load->view("blockchain-js");
//        $this->load->view("datatablejs");
    }
}