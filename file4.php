<?php

namespace Person\type;

use Person\Worker;

class Student extends Worker
{
    //this student class inherits everything of the worker class
    public string $school
    
    public function setSchool($school)
    {
        $this->school = $school;
    }

    public function getSchool()
    {
        return $this->school;

    }
}