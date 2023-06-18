<?php

class Video
{
    private string $title;
    private string $type;
    private float $duration;
    private bool $published;
    private bool $playStatus;

    /**
     * @param string $title
     * @param string $type
     * @param float $duration
     * @param bool $published
     */
    public function __construct(string $title = 'NA', string $type = 'mp4', float $duration = 0.0, bool $published = false)
    {
        $this->title = $title;
        $this->type = $type;
        $this->duration = $duration;
        $this->published = $published;
    }

    // TODO: Implement __destruct() method.

    public function __destruct()
    {
        var_dump("Destroying instance of " . get_class() . " class");
    }

    /**
     * @return string
     */
    public function Play(): string
    {
        if ($this->isPublished()) {
            $this->playStatus = true;
            return 'Video is playing now';
        }
        return 'The video is not published yet';
    }

    /**
     * @return string
     */
    public function Pause(): string
    {
        return $this->published ? 'Video is paused' : '';
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     */
    public function setDuration(float $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     */
    public function setPublished(bool $published): void
    {
        $this->published = $published;
    }

}

$intro = new Video("Intro to OOP", "mp4", 10.30, 1);
$video2 = new Video("Intro to DSA", "mkv", 25.30, 1);
$v = new Video();

// $intro->published = true; # cannot access as it i private now

$intro->author = 'Ahmed Arafat'; // Bad practicing

echo $intro->Play() . PHP_EOL . $intro->Pause() . PHP_EOL;

var_dump($intro);