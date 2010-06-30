<?php

	class Lastfmtest extends Controller {
		
		function __construct()
		{
			parent::Controller();
			
			$this->load->add_package_path(APPPATH.'third_party/haughin/codeigniter-facebook/');
		}
		
		function index()
		{
			$this->load->library('lastfm');
			
			$results['similar'] = $this->lastfm->call('artist.getSimilar', array('artist' => 'Smashing Pumpkins', 'limit' => 5));
			$results['events'] = $this->lastfm->call('artist.getEvents', array('artist' => 'Bon Jovi'));
			$results['info'] = $this->lastfm->call('artist.getInfo', array('artist' => 'Madonna'));
			$results['recent'] = $this->lastfm->call('user.getRecentTracks', array('username' => 'elliothaughin', 'limit' => 5, 'page' => 1));
			
			var_dump($results);
		}
	}