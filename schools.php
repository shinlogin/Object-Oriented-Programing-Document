<?php
{
	class Shools {
		public $id;
		public $name;
		public $time_create_at;
		public $classes;
		
		function Shools(){
			$this->time_create_at = date("Y-m-d H:i:s");			
		}
		
		function add_class($class) {
			$this->classes [] = $class;
		}
		
		function add_classes($array) {
			foreach ( $array as $class ) {
				$this->classes [] = $class;
			}
		}
		
		function find_class($name) {
			foreach ( $this->classes as $class ) {
				if ($class->name == $name) {
					return $class;
				}
			}
			return new Classes();
		}
	}
	
	class Classes {
		public $id;
		public $name;
		public $time_create_at;
		public $students;
		
		function Classes(){
			$this->time_create_at = date("Y-m-d H:i:s");
		}
		
		function add_student($student) {
			$student->time_join_at = date("Y-m-d H:i:s");
			$this->students[] = $student;
		}
		
		function add_students($students) {
			foreach ($students as $student){
				$student->time_join_at = date("Y-m-d H:i:s");
				$this->students[] = $student;
			}
		}

        function find_student($student_name) {
            foreach ( $this->students as $student ) {
                if ($student->$student_name == $student_name) {
                    return $student;
                }
            }
            return new Students();
        }
	}
	
	class Students {
		public $id;
		public $student_name;
		public $time_join_at;
		
		function Students(){
			
		}
	}
}