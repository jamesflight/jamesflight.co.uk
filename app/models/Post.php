<?php

class Post
{
	public $file;

	public function __construct($file)
	{
		$this->file = $file;
	}

	public function getTitle()
	{
		$title = basename($this->file);
		$title = substr($title, 11);
		$title = substr($title, 0, -3);
		$title = str_replace('-', ' ', $title);
		return $title;
	}

	public function getTitleRaw()
	{
		$title = basename($this->file);
		$title = substr($title, 11);
		$title = substr($title, 0, -3);
		return $title;
	}

	public function getDate()
	{
		$date = basename($this->file);
		$date = substr($date, 0, 10);
		$date = new DateTime($date);
		return $date->format('jS M Y');
	}

	public function getHtml()
	{
		return Markdown::parse(File::get($this->file));
	}
}