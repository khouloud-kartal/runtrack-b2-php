<?php 

function find_all_students_grades() : array {

    try {
        $conn = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $req = $conn->prepare("SELECT email, fullname, name FROM student INNER JOIN grade ON student.grade_id = grade.id");

    $req->execute();

    $data = $req->fetchAll(\PDO::FETCH_ASSOC);

    return $data;

}


$infos = find_all_students_grades();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Emails</th>
                <th>Fullname</th>
                <th>Grade name</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach ($infos as $key => $value) {
                    ?>
                <tr>
                    <td><?= $value['email']; ?></td>
                    <td><?= $value['fullname']; ?></td>
                    <td><?= $value['name']; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>