<?php

class AppController
{
    /**
     * @return void
     */
    public function home(): void
    {
        require "../src/Views/home.php";
    }

    /**
     * @return void
     */
    public function about(): void
    {
        require "../src/Views/about.php";
    }

    /**
     * @return void
     */
    public function achievements(): void
    {
        require "../src/Views/projects.php";
    }

    /**
     * @return void
     */
    public function contacts(): void
    {
        require "../src/Views/contacts.php";
    }

    /**
     * @return void
     */
    public function pageNotFound()
    {
        require "../src/Views/page-not-found.php";
    }
}