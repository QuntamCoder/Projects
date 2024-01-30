<?php 
$con = mysqli_connect("localhost","root","");
$sql = "CREATE DATABASE IF NOT EXISTS EduGate_mahesh";
mysqli_query($con, $sql);
?>
<?php 
$con = mysqli_connect("localhost","root","","EduGate_mahesh");
$sql="CREATE TABLE IF NOT EXISTS`login`(`ID` int(11) NOT NULL,`user_id` varchar(30) NOT NULL,`Password` varchar(30) NOT NULL,`Role` varchar(10) NOT NULL,`account` varchar(20) NOT NULL)"; 
	mysqli_query($con, $sql);
	// $sql="INSERT INTO `login` (`ID`, `user_id`, `Password`, `Role`, `account`) VALUES
	// (2, 'maheshpandhare734@gmail.com', 'student123', 'Student', 'Activated')";
	// mysqli_query($con, $sql);
	// -- (1, 'mpandhare526@gmail.com', 'mahesh123', 'Admin', 'Activated')";
	$sql="CREATE TABLE IF NOT EXISTS`time_table` (
		`id` int(11) NOT NULL,
		`course_code` varchar(10) NOT NULL,
		`semester` int(11) NOT NULL,
		`timing_from` varchar(10) NOT NULL,
		`timing_to` varchar(10) NOT NULL,
		`day` varchar(20) NOT NULL,
		`subject_code` varchar(20) NOT NULL,
		`room_no` int(11) NOT NULL
	  )";
	mysqli_query($con, $sql);
	$sql="CREATE TABLE IF NOT EXISTS`weekdays` (
		`day_id` int(11) NOT NULL,
		`day_name` varchar(15) NOT NULL
	  )";
	mysqli_query($con, $sql);
// 	mysqli_query($con, $sql);
// $sql="INSERT INTO`weekdays` (`day_id`, `day_name`) VALUES(1, 'Monday'),(2, 'Tuesday'),(3, 'Wednesday'),(4, 'Thursday'),(5, 'Friday'),(6, 'Saturday'),(7, 'Sunday')";
mysqli_query($con, $sql);
$sql="CREATE TABLE IF NOT EXISTS`courses` (
	`course_code` varchar(10) NOT NULL,
	`course_name` varchar(50) NOT NULL,
	`semester_or_year` varchar(10) NOT NULL,
	`no_of_year` int(10) NOT NULL
  ) ";
mysqli_query($con, $sql);
// $sql="INSERT INTO `courses`(`course_code`,`course_name`,`semester_or_year`,`no_of_year`)VALUES('BA','Bachalor of Arts','Semester',4),
// ('B.Arch','Bachalor in Architecture','Semester',5),
// ('BCA','Bachelor of Computer Application','Semester',4),
// ('BBA','Bachalor in Business Administration','Semester',2),
// ('BE','Bachalor of Engineering','Semester',2),
// ('ME','Master of Engineering','Semester',4),
// ('MA','Masters of Arts', 'Semester',2),
// ('M.Com','Master in Commerce','Semester',2),
// ('MCS','Master in Computer Science','Semester',2),
// ('MCA','Master in Computer Application','Semester',2)";
// mysqli_query($con, $sql);
$sql="CREATE TABLE IF NOT EXISTS`course_subjects` (
	`subject_code` varchar(10) NOT NULL,
	`subject_name` varchar(50) NOT NULL,
	`course_code` varchar(10) NOT NULL,
	`semester` int(10) NOT NULL,
	`credit_hours` int(5) NOT NULL
  )";
  mysqli_query($con, $sql);

// $sql="INSERT INTO `course_subjects` (`subject_code`, `subject_name`, `course_code`, `semester`, `credit_hours`) VALUES
// ('CSPD', 'Communication Skills and Personality Development', 'MCS', 1, 3),
// ('DBMS', 'Database Management System', 'MCS', 2, 4),
// ('DLD', 'Data Logic and Design', 'MCS', 2, 3),
// ('Ds', 'Discrete Structure', 'MCS', 1, 3),
// ('I2C', 'Introduction to Computer Science', 'MCS', 1, 4),
// ('ITP', 'IT Project Management System', 'MIT', 2, 3),
// ('MBAD', 'Mobile Application Development', 'MIT', 2, 4),
// ('OOP', 'Object Oriented Programming', 'MCS', 2, 4),
// ('PF', 'Programming Fundamental', 'BSAI', 1, 4),
// ('SE', 'Software Engineering', 'MCS', 2, 3),
// ('WEB', 'Web Development', 'MCS', 2, 3)";
// mysqli_query($con, $sql);

$sql="CREATE TABLE IF NOT EXISTS`teacher_info` (
	`teacher_id` int(11) NOT NULL,
	`first_name` varchar(30) NOT NULL,
	`middle_name` varchar(30) NOT NULL,
	`last_name` varchar(30) NOT NULL,
	`father_name` varchar(50) NOT NULL,
	`email` varchar(30) NOT NULL,
	`phone_no` varchar(11) NOT NULL,
	`profile_image` blob NOT NULL,
	`teacher_status` varchar(10) NOT NULL,
	`application_status` varchar(10) NOT NULL,
	`cnic` varchar(15) NOT NULL,
	`dob` varchar(15) NOT NULL,
	`other_phone` int(11) NOT NULL,
	`gender` varchar(10) NOT NULL,
	`permanent_address` varchar(100) NOT NULL,
	`current_address` varchar(100) NOT NULL,
	`place_of_birth` varchar(50) NOT NULL,
	`matric_complition_date` varchar(10) NOT NULL,
	`matric_awarded_date` varchar(10) NOT NULL,
	
	`fa_complition_date` varchar(10) NOT NULL,
	`fa_awarded_date` varchar(10) NOT NULL,	
	`ba_complition_date` varchar(10) NOT NULL,
	`ba_awarded_date` varchar(10) NOT NULL,
	
	`ma_complition_date` varchar(10) NOT NULL,
	`ma_awarded_date` varchar(100) NOT NULL,
	
	`last_qualification` varchar(20) NOT NULL,
	`state` varchar(20) NOT NULL,
	`hire_date` varchar(10) NOT NULL
  )";
  mysqli_query($con,$sql);
// $sql="INSERT INTO `teacher_info` (`teacher_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `email`, `phone_no`, `profile_image`, `teacher_status`, `application_status`, `cnic`, `dob`, `other_phone`, `gender`, `permanent_address`, `current_address`, `place_of_birth`, `matric_complition_date`, `matric_awarded_date`, `matric_certificate`, `fa_complition_date`, `fa_awarded_date`, `fa_certificate`, `ba_complition_date`, `ba_awarded_date`, `ba_certificate`, `ma_complition_date`, `ma_awarded_date`, `ma_certificate`, `last_qualification`, `state`, `hire_date`) VALUES
// (2, 'Teacher', '1', '1', '', 'staff1@gmail.com', '9807367624', 0x696d616765732e706e67, 'Permanent', 'Yes', '8793', '1987-01-17', 0, 'Male', 'abc', 'def', 'ghij', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '18-06-21')";
// mysqli_query($con, $sql);
$sql="CREATE TABLE IF NOT EXISTS`student_courses` (
	`student_course_id` int(11) NOT NULL,
	`course_code` varchar(10) NOT NULL,
	`semester` int(11) NOT NULL,
	`roll_no` varchar(10) NOT NULL,
	`subject_code` varchar(10) NOT NULL,
	`session` varchar(10) NOT NULL,
	`assign_date` varchar(10) NOT NULL
  )";
  mysqli_query($con, $sql);

$sql="CREATE TABLE IF NOT EXISTS `student_info` (
	`roll_no` varchar(20) NOT NULL,
	`first_name` varchar(30) NOT NULL,
	`middle_name` varchar(30) NOT NULL,
	`last_name` varchar(30) NOT NULL,
	`father_name` varchar(30) NOT NULL,
	`email` varchar(30) NOT NULL,
	`mobile_no` varchar(11) NOT NULL,
	`course_code` varchar(11) NOT NULL,
	`session` varchar(10) NOT NULL,
	`profile_image` varchar(100) NOT NULL,
	`prospectus_issued` varchar(10) NOT NULL,
	`prospectus_amount` varchar(10) NOT NULL,
	`form_b` varchar(20) NOT NULL,
	`applicant_status` varchar(20) NOT NULL,
	`application_status` varchar(20) NOT NULL,
	`cnic` varchar(15) NOT NULL,
	`dob` varchar(10) NOT NULL,
	`other_phone` varchar(11) NOT NULL,
	`gender` varchar(10) NOT NULL,
	`permanent_address` varchar(150) NOT NULL,
	`current_address` varchar(150) NOT NULL,
	`place_of_birth` varchar(150) NOT NULL,
	`matric_complition_date` varchar(10) NOT NULL,
	`matric_awarded_date` varchar(10) NOT NULL,
	`fa_complition_date` varchar(10) NOT NULL,
	`fa_awarded_date` varchar(10) NOT NULL,
	`ba_complition_date` varchar(10) NOT NULL,
	`ba_awarded_date` varchar(10) NOT NULL,
	`semester` int(11) NOT NULL,
	`total_marks` int(11) NOT NULL,
	`obtain_marks` int(11) NOT NULL,
	`state` varchar(20) NOT NULL,
	`admission_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
  )";
  mysqli_query($con, $sql);
  $sql="CREATE TABLE IF NOT EXISTS`student_attendance` (
	`attendance_id` int(11) NOT NULL,
	`course_code` varchar(10) NOT NULL,
	`subject_code` varchar(10) NOT NULL,
	`semester` int(11) NOT NULL,
	`student_id` varchar(20) NOT NULL,
	`attendance` int(11) NOT NULL,
	`attendance_date` varchar(11) NOT NULL
  ) ";
  mysqli_query($con, $sql);
  $sql="CREATE TABLE IF NOT EXISTS`student_fee` (
	`fee_voucher` int(11) NOT NULL,
	`roll_no` varchar(30) NOT NULL,
	`amount` int(11) NOT NULL,
	`posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	`status` varchar(10) NOT NULL
  )";
  mysqli_query($con, $sql);
  $sql="CREATE TABLE IF NOT EXISTS`sessions` (
	`session_id` int(11) NOT NULL,
	`session` varchar(30) NOT NULL,
	`created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
  )";
mysqli_query($con, $sql);
$sql="CREATE TABLE IF NOT EXISTS`teacher_salary_allowances` (
	`teacher_id` int(11) NOT NULL,
	`basic_salary` int(11) NOT NULL,
	`medical_allowance` int(11) NOT NULL,
	`hr_allowance` int(11) NOT NULL,
	`scale` int(11) NOT NULL
  )";
	mysqli_query($con, $sql);
	$sql="CREATE TABLE IF NOT EXISTS`teacher_salary_report` (
		`salary_id` int(11) NOT NULL,
		`teacher_id` int(11) NOT NULL,
		`total_amount` int(11) NOT NULL,
		`status` varchar(11) NOT NULL,
		`paid_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
	  )";
mysqli_query($con, $sql);
$sql="CREATE TABLE IF NOT EXISTS`teacher_attendance` (
	`attendance_id` int(11) NOT NULL,
	`teacher_id` varchar(30) NOT NULL,
	`attendance` int(11) NOT NULL,
	`attendance_date` varchar(11) NOT NULL
  )";
  mysqli_query($con, $sql);
  $sql="CREATE TABLE IF NOT EXISTS`teacher_courses` (
	`teacher_courses_id` int(11) NOT NULL,
	`course_code` varchar(10) NOT NULL,
	`semester` int(11) NOT NULL,
	`teacher_id` varchar(10) NOT NULL,
	`subject_code` varchar(10) NOT NULL,
	`assign_date` varchar(10) NOT NULL,
	`total_classes` int(11) NOT NULL
  )";
  mysqli_query($con, $sql);
  $sql="CREATE TABLE IF NOT EXISTS`class_result` (
	`class_result_id` int(11) NOT NULL,
	`roll_no` varchar(30) NOT NULL,
	`course_code` varchar(30) NOT NULL,
	`subject_code` varchar(10) NOT NULL,
	`semester` varchar(11) NOT NULL,
	`total_marks` varchar(11) NOT NULL,
	`obtain_marks` varchar(11) NOT NULL,
	`result_date` varchar(10) NOT NULL
  )";
mysqli_query($con, $sql);
?>

