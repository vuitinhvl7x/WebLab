<?php $id = $_GET['id'];
$dom = new DOMDocument();
$dom->load('files/data.xml');
$students = $dom->getElementsByTagName('students')->item(0);
$student=$students->getElementsByTagName('student');

$i=0;
while (is_object($student->item($i++))){
    $prd=$student->item($i-1)->getElementsByTagName('id')->item(0);
        $prd_id= $prd->nodeValue;
    if( $prd_id== $id){
        $students->removeChild($student->item($i-1));
        break;
    }
}

$dom->formatOutput=true;
$dom->save('files/data.xml')or die('Error');
    header('location: index.php?layout=list');
?>