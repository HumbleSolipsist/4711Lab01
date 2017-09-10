<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        // Will contain 3 students to be displayed.
        $students = array();
        
        // First student added to $students.  Named "John Doe."
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Second student added to $students.  Named "Alber Einstein."
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // Third student added to $students.  Named "Andrew Busto."
        $andrew = new Student();
        $andrew->surname = "Busto";
        $andrew->first_name = "Andrew";
        $andrew->add_email('only', 'andrew@andrew.andrew');
        $andrew->add_grade(25);
        $andrew->add_grade(90);
        $andrew->add_grade(80);
        $students['a234'] = $andrew;

        ksort($students);
        
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
