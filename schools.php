<?php
{
    class Shools
    {
        public $id;
        public $name;
        public $time_create_at;
        public $classes;

        function Shools()
        {
            $this->time_create_at = date("Y-m-d H:i:s");
        }

        function add_class($class)
        {
            $this->classes [$class->id] = $class;
        }

        function add_classes($array)
        {
            foreach ($array as $class) {
                $this->classes [$class->id] = $class;
            }
        }

        function find_class_by_name($name)
        {
            foreach ($this->classes as $class) {
                if ($class->name == $name) {
                    return $class;
                }
            }
            return new Classes();
        }
    }

    class Classes
    {
        public $id;
        public $name;
        public $time_create_at;
        public $students;

        function Classes()
        {
            $this->time_create_at = date("Y-m-d H:i:s");
        }

        function add_student($student)
        {
            $student->time_join_at = date("Y-m-d H:i:s");
            $this->students[$student->id] = $student;
        }

        function add_students($students)
        {
            foreach ($students as $student) {
                $student->time_join_at = date("Y-m-d H:i:s");
                $this->students[$student->id] = $student;
            }
        }

        function find_student_by_name($student_name)
        {
            foreach ($this->students as $student) {
                if ($student->$student_name == $student_name) {
                    return $student;
                }
            }
            return new Students();
        }

        function remove_student($student)
        {
            unset($this->students[$student->id]);
        }

        function remove_students($students)
        {
            foreach ($students as $student) {
                unset($this->students[$student->id]);
            }
        }
    }

    class Students
    {
        public $id;
        public $student_name;
        public $time_join_at;

        function Students()
        {

        }
    }
}