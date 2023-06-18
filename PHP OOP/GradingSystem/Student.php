<?php

namespace GradingSystem;

/**
 *
 */
class Student
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    /**
     * @var string
     */
    /**
     * @var string
     */
    private string $result, $remark, $grade;
    /**
     * @var int
     */
    /**
     * @var int
     */
    /**
     * @var int
     */
    private int $id, $total, $avg;
    /**
     * @var array
     */
    private array $coursesMarks;
    /**
     * @var int
     */
    private int $numOfCoruses;

    /**
     * @param string $name
     * @param int $id
     * @param int $numOfCoruses
     */
    public function __construct(string $name, int $id, int $numOfCoruses)
    {
        $this->name = $name;
        $this->id = $id;
        $this->numOfCoruses = $numOfCoruses;
    }


    /**
     * @param $att
     * @return void
     */
    public function __get($att)
    {
        if (property_exists($this, $att)) return $this->$att;
    }

    /**
     * @param array $courses
     * @return void
     */
    public function setCoursesMarks(array $courses): void
    {
        foreach ($courses as $item)
            $this->coursesMarks[] = $item;
    }

    /**
     * @param int $idx
     * @return float
     */
    public function sum(int $idx): float
    {
        if ($idx == $this->numOfCoruses) return $this->result;
        $this->total += $this->coursesMarks[$idx];
        $this->sum($idx + 1);
        return $this->result;
    }

    /**
     * @return float
     */
    public function totalScore(): float
    {
        return $this->total = $this->sum(0);
    }

    /**
     * @return float
     */
    public function averageScore(): float
    {
        return $this->avg = $this->total / $this->numOfCoruses;
    }

    /**
     * @return string
     */
    public function grade(): string
    {
        if ($this->avg > 70 && $this->avg <= 100) return $this->grade = 'A';
        if ($this->avg > 60 && $this->avg <= 69.9) return $this->grade = 'B';
        if ($this->avg > 50 && $this->avg <= 59.9) return $this->grade = 'C';
        if ($this->avg > 40 && $this->avg <= 49.9) return $this->grade = 'D';
        if ($this->avg > 30 && $this->avg <= 39.9) return $this->grade = 'F';
        return $this->grade = 'Unknown';
    }

    /**
     * @return string
     */
    public function remark(): string
    {
        switch ($this->grade) {
            case 'A':
                $this->remark = 'Excellent';
                break;
            case 'B':
                $this->remark = 'Very Good';
                break;
            case 'C':
                $this->remark = 'Good';
                break;
            case 'D':
                $this->remark = 'Fair';
                break;
            case 'F':
                $this->remark = 'Failed';
                break;
        }
        return $this->remark;
    }

    /**
     * @return string
     */
    public function finalResult(): string
    {
        $flag = 1;
        foreach ($this->coursesMarks as $course) {
            if ($course < 40) {
                $this->result = 'Fail';
                $flag = 0;
            }
        }
        if ($flag) $this->result = 'Pass';
        return $this->result;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Name: " . $this->name . PHP_EOL . "ID: " . $this->id . PHP_EOL;
    }

}