<?php

class Project
{
    private string $projectName;
    private string $projectImg;
    private string $projectDescription;
    private string $projectURL;

    public function __construct(string $projectName, string $projectImg, string $projectDescription, string $projectURL)
    {
        $this->projectName = $projectName;
        $this->projectImg = $projectImg;
        $this->projectDescription = $projectDescription;
        $this->projectURL = $projectURL;
    }

    // GETTERS

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @return string
     */
    public function getProjectImg(): string
    {
        return $this->projectImg;
    }

    /**
     * @return string
     */
    public function getProjectDescription(): string
    {
        return $this->projectDescription;
    }

    /**
     * @return string
     */
    public function getProjectURL(): string
    {
        return $this->projectURL;
    }

    // SETTERS

    /**
     * @param string $projectName
     */
    public function setProjectName(string $projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @param string $projectImg
     */
    public function setProjectImg(string $projectImg): void
    {
        $this->projectImg = $projectImg;
    }

    /**
     * @param string $projectDescription
     */
    public function setProjectDescription(string $projectDescription): void
    {
        $this->projectDescription = $projectDescription;
    }

    /**
     * @param string $projectURL
     */
    public function setProjectURL(string $projectURL): void
    {
        $this->projectURL = $projectURL;
    }
}