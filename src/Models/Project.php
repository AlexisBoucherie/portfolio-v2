<?php

class Project
{
    private string $projectName;
    private string $projectImg;
    private string $projectDescription;

    public function __construct(string $projectName, string $projectImg, string $projectDescription)
    {
        $this->projectName = $projectName;
        $this->projectImg = $projectImg;
        $this->projectDescription = $projectDescription;
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
}