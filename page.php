<?php

class Page
{
    private $page_title;
    private $page_content;

    public function __construct($page_title, $page_content)
    {
        $this->page_title = $page_title;
        $this->page_content = $page_content;
    }

    public function renderPage()
    {
        echo "<h1>{$this->page_title}</h1>";
        echo "<div class='photo-container'>
                <img src='images/gerby.png' alt='Profile Picture' class='profile-pic'>
              </div>";
        echo "<div class='content'>{$this->page_content}</div>";
    }
}
