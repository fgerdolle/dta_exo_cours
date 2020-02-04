<?php
namespace dta_exo_cours\composer\Test;

use dta_exo_cours\composer\Domain\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase {


    public function testGetFullName() {

        $student = new Student('Franck', 'Gerdolle');

        $this->assertEquals(' Franck Gerdolle',$student->getFullName());
    }
}