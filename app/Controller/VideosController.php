<?php

class VideosController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('videos', $this->Video->find('all'));
    }

    public function nba(){
    	$this->set('videos', $this->Video->find('all'));
    }

    public function NFL(){
    	$this->set('videos', $this->Video->find('all'));
    }

    public function NHL(){
    	$this->set('videos', $this->Video->find('all'));
    }
}

?>