<?php

/*
 * This file is part of the Admission package.
 *
 * (c) Gad Ocansey <gadocansey@gmail.com.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="admissions_exams_results")
 *
 * Defines the properties of the Region entity to represent the applicant region.
 * @author Gad Ocansey <gadocansey@gmail.com>
 */
class ExamResult implements \JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getApplicant()

    {
        return $this->applicant;
    }

    /**
     * @param int $applicant
     */
    public function setApplicant(string $applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(Subject $subjects): void
    {
        $this->subject = $subjects;
    }

    /**
     * @return string
     */
    public function getIndexNo()
    {
        return $this->indexNo;
    }

    /**
     * @param string $indexNo
     */
    public function setIndexNo(string $indexNo)
    {
        $this->indexNo = $indexNo;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     */
    public function setGrade(string $grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return string
     */
    public function getSubjectType()
    {
        return $this->subjectType;
    }

    /**
     * @param string $subjectType
     */
    public function setSubjectType(string $subjectType)
    {
        $this->subjectType = $subjectType;
    }

    /**
     * @return string
     */
    public function getGradeValue()
    {
        return $this->gradeValue;
    }

    /**
     * @param string $gradeValue
     */
    public function setGradeValue(string $gradeValue)
    {
        $this->gradeValue = $gradeValue;
    }

    /**
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * @param string $sitting
     */
    public function setSitting(string $sitting)
    {
        $this->sitting = $sitting;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param string $month
     */
    public function setMonth(string $month)
    {
        $this->month = $month;
    }

    /**
     * @return string
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param string $center
     */
    public function setCenter(string $center)
    {
        $this->center = $center;
    }

    /**
     * @return string
     */
    public function getExamType()
    {
        return $this->examType;
    }

    /**
     * @param string $examType
     */
    public function setExamType(string $examType)
    {
        $this->examType = $examType;
    }

    /**
     * @var int
     * @ORM\Column(type="string")
     */
    private $applicant;



    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Subject", cascade={"persist"} )
     * @ORM\JoinTable(name="admissions_exams_results")
     * @ORM\OrderBy({"name": "ASC"})
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $indexNo;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $subjectType;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     */
    private $gradeValue;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     */
    private $sitting;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $center;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $examType;



    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): string
    {
        // This entity implements JsonSerializable (http://php.net/manual/en/class.jsonserializable.php)
        // so this method is used to customize its JSON representation when json_encode()
        // is called, for example in tags|json_encode (app/Resources/views/form/fields.html.twig)

        return $this->name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
