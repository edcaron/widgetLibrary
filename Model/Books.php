<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Books
 *
 * @author eduardo
 */
class Books {

    private $id;
    private $title;
    private $ibsn;
    private $pages;
    private $publisher;
    private $year;
    private $language;
    private $barcode;
    private $cover;
    private $purchase_date;
    private $author;
    private $edition;

    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getIbsn() {
        return $this->ibsn;
    }

    function getPages() {
        return $this->pages;
    }

    function getPublisher() {
        return $this->publisher;
    }

    function getYear() {
        return $this->year;
    }

    function getLanguage() {
        return $this->language;
    }

    function getBarcode() {
        return $this->barcode;
    }

    function getCover() {
        return $this->cover;
    }

    function getPurchase_date() {
        return $this->purchase_date;
    }

    function getAuthor() {
        return $this->author;
    }

    function getEdition() {
        return $this->edition;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setIbsn($ibsn) {
        $this->ibsn = $ibsn;
    }

    function setPages($pages) {
        $this->pages = $pages;
    }

    function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    function setYear($year) {
        $this->year = $year;
    }

    function setLanguage($language) {
        $this->language = $language;
    }

    function setBarcode($barcode) {
        $this->barcode = $barcode;
    }

    function setCover($cover) {
        $this->cover = $cover;
    }

    function setPurchase_date($purchase_date) {
        $this->purchase_date = $purchase_date;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setEdition($edition) {
        $this->edition = $edition;
    }

}
