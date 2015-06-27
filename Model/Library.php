<?php
	/**
	* 
	*/
	class Library
	{
		private $id, $title, $ibsn, $pages, $publisher, $year, $language, $barcode, $cover, $purchase_date;

		function __construct($id, $title, $ibsn, $pages, $publisher, $year, $language, $barcode, $cover, $purchase_date)
		{
			$this->id = $id;
			$this->title = $title;
			$this->ibsn = $ibsn;
			$this->pages = $pages;
			$this->publisher = $publisher;
			$this->year = $year;
			$this->language = $language;
			$this->barcode = $barcode;
			$this->cover = $cover;
			$this->purchase_date = $purchase_date;			
		}

		public function getId()
		{
			return $this->id;
		}

		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function getTitle()
		{
			return $this->title;
		}

		public function setTitle($title)
		{
			$this->title = $title;
		}

		public function getIbsn()
		{
			return $this->ibsn;
		}		

		public function setIbsn($ibsn)
		{
			$this->ibsn = $ibsn;
		}

		public function getPages()
		{
			return $this->pages;
		}

		public function setPages($pages)
		{
			$this->pages = $pages;
		}
		public function getPublisher()
		{
			return $this->publisher;
		}

		public function setPublisher($publisher)
		{
			return $this->publisher;	
		}

		public function getYear()
		{
			return $this->year;
		}

		public function setYear($year)
		{
			$this->year = $year;
		}

		public function getLanguage()
		{
			return $this->language;
		}

		public function setLanguage($language)
		{
			$this->language = $language;
		}

		public function getBarcode()
		{
			return $this->barcode;
		}

		public function setBarcode($barcode)
		{
			$this->barcode = $barcode;
		}

		public function getCover()
		{
			return $this->barcode;
		}

		public function setCover($cover)
		{
			$this->cover = $cover;
		}

		public function getPurchase_date()
		{
			return $this->purchase_date;
		}

		public function setPurchase_date($purchase_date)
		{
			$this->purchase_date = $purchase_date;
		}
	}
?>