<?php
$id=$_GET['id'];
//echo $id;
$dom = new DOMDocument();
$dom->load('files/data.xml');
$students = $dom->getElementsByTagName('students')->item(0);
$student=$students->getElementsByTagName('student');
$i=0;
$my_student=$student->item(1);
while (is_object($student->item($i++))){
    $prd=$student->item($i-1)->getElementsByTagName('id')->item(0);
    $prd_id= $prd->nodeValue;
    if( $prd_id== $id){
        $my_student = $student->item($i-1);
        break;
    }
}
if(isset($_POST['sbm'])){
    $prd_name = $_POST['prd_name'];
    $group = $_POST['group'];
    $gender = $_POST['gender'];
    $new_prd = $dom->createElement('student');

    $node_id = $dom->createElement('id',$id);
    $new_prd->appendChild($node_id);

    $node_name = $dom->createElement('name',$prd_name);
    $new_prd->appendChild($node_name);

    $node_group = $dom->createElement('group',$group);
    $new_prd->appendChild($node_group);

    $node_gender = $dom->createElement('gender',$gender);
    $new_prd->appendChild($node_gender);
    $i=0;
    while (is_object($student->item($i++))){
        $prd=$student->item($i-1)->getElementsByTagName('id')->item(0);
        $prd_id= $prd->nodeValue;
        if( $prd_id== $id){
            $students->replaceChild($new_prd,$student->item($i-1));
            break;
        }
    }

    $dom->formatOutput = true;
    $dom->save('files/data.xml')or die('Error');
    header('location: index.php?layout=list');
}
?>

<div class="container-fuild">
    <div class="card">
        <div class="card-header">
            <h2>Edit students</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Student's Name</label>
                    <input type="text" name="prd_name" class="form-control" required value = "<?php echo $my_student->getElementsByTagName('name')->item(0)->nodeValue ?>"/>
                </div>
                <div class="form-group">
                    <label for="">Student's group</label>
                    <input type="number" name="group" class="form-control" required  value = "<?php echo $my_student->getElementsByTagName('group')->item(0)->nodeValue ?>">
                </div>
                <div class="form-group">
                    <label for="">Student's gender</label>
                    <input type="text" name="gender" class="form-control" required  value = "<?php echo $my_student->getElementsByTagName('gender')->item(0)->nodeValue ?>">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>