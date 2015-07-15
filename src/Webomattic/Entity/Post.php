<?php

namespace Webomattic\Entity;

/**
 * @Entity
 * @Table(name='posts')
 */
class Post {
    
    /**
     *@Id
     * @Column(type='integer')
     * @GeneratedValue
     */
    private $id;
    
    /**
     * @Column(name='title', type='string', nullable=false)
     */
    private $title;
    
    /**
     * @Column(name='content', type='text', nullable=false)
     */
    private $content;
    
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }
    
}

