<?php
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    include 'schools.php';

    // Khoi tao truong
    {
        $school = new Shools ();
        $school->id = 1;
        $school->name = 'Chuyên Lê Quý Đôn';
    }

    // Khoi tao lop
    {
        $a1 = new Classes ();
        $a1->id = 1;
        $a1->name = 'A1';
        $school->add_class($a1);

        $a2 = new Classes ();
        $a2->id = 2;
        $a2->name = 'A2';
        $school->add_class($a2);

        $a3 = new Classes ();
        $a3->id = 3;
        $a3->name = 'A3';
        $school->add_class($a3);

        $b1 = new Classes ();
        $b1->id = 4;
        $b1->name = 'B1';

        $b2 = new Classes ();
        $b2->id = 5;
        $b2->name = 'B2';

        $c1 = new Classes ();
        $c1->id = 6;
        $c1->name = 'C1';

        $arr = array(
            $b1,
            $b2,
            $c1
        );
        $school->add_classes($arr);
    }

    // Khoi tao hoc sinh
    {
        $sv1 = new Students ();
        $sv1->id = 1;
        $sv1->student_name = "Nguyễn Văn A";

        $sv2 = new Students ();
        $sv2->id = 2;
        $sv2->student_name = "Nguyễn Văn B";

        $sv3 = new Students ();
        $sv3->id = 3;
        $sv3->student_name = "Nguyễn Văn C";

        $sv4 = new Students ();
        $sv4->id = 4;
        $sv4->student_name = "Nguyễn Văn D";

        $sv5 = new Students ();
        $sv5->id = 5;
        $sv5->student_name = "Nguyễn Văn E";

        $sv6 = new Students ();
        $sv6->id = 6;
        $sv6->student_name = "Nguyễn Văn F";

        $sv7 = new Students ();
        $sv7->id = 7;
        $sv7->student_name = "Nguyễn Văn G";

        $sv8 = new Students ();
        $sv8->id = 8;
        $sv8->student_name = "Nguyễn Văn H";
    }

    // Dang Ky Lop Cho Hoc Sinh
    {
        $school->find_class_by_name("A1")->add_student($sv1);
        $school->find_class_by_name("C1")->add_student($sv8);

        $school->find_class_by_name("A1")->add_students(array($sv4, $sv2, $sv3));
        $school->find_class_by_name("C2")->add_students(array($sv5, $sv6, $sv7));

        $school->find_class_by_name("A1")->remove_student($sv3);
    }

    header('Content-Type: text/html; charset=utf-8');

    echo '<pre>';
    print_r($school);
    echo '</pre>';
}