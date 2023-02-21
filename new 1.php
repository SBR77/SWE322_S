<!DOCTYPE html>
<html>
<body>

<?php
class Courses {
  // Properties
  privet $CourseName;
  privet $CourseCode;
  privet $CourseDescription;
  privet $Grade;
  // Methods
 public function setCourseCode($CourseCode) {
    $this->CourseCode = $CourseCode;
  }
  public function getCourseCode() {
    return $this->CourseCode;
  }
  public function getCourseName($CourseName) {
    $this->CourseName = $CourseName;
  }
  public function getCourseName() {
    return $this->CourseName;
	}
	public function setCourseDescription($CourseDescription) {
    $this->CourseDescription = $CourseDescription;
  }
  public function getCourseDescription() {
    return $this->CourseDescription;
  }
   public function setGrade($Grade) {
    $this->Grade = $Grade;
  }
  public function getGrade() {
    return $this->Grade;
  }
  public function isA) {
	  if($this->Grade == "A+"){
		  return true;
	  }else{
		  return false;
		  
	  public function getCourseDetails() {
		  return "Course Code: " . @this->CourseCode . "<br>Course Name: " . $this->CourseName . "<br>Course Descriptin: " . "<br>Grade: " . this->Grade
  }
	  }
	$course1 = new Course()
	$course1->setCourseCode("CIS 202");
	$course1->setCourseName("Data Structres");
	$course1->setCourseDescription("Date Structres is a way of organizing the data so that it can be uesd efficiently");
	$course1->setGrade("A+");
	$course2= new Course()
	$course2->setCourseCode("MTH 204");
	$course2->setCourseName("Calculus 2");
	$course2->setCourseDescription("Convers calculus of function one variable with applications ");
	$course2->setGrade("B ");
	$course3= new Course()
	$course3->setCourseCode("ISL 301");
	$course3->setCourseName("Work Ethics in Islam");
	$course3->setCourseDescription("Introduction to work Ethical in Islam ");
	$course3->setGrade("A");
	$courses = array($course1, $course2, $course3);
	echo "<table>";
	echo "<tr><th>CourseCode</th><th>CourseName</th><th>CourseDescription</th><th>Grade</th></tr>";
	foreach($courses as $course){
		

	
}

$apple = new Courses();
$banana = new Courses();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
 
</body>
</html>