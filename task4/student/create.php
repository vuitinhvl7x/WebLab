<?php
// đọc file xml
$dom = new DOMDocument();
$dom->load('files/data.xml');
// lấy thẻ products
$students = $dom->getElementsByTagName('students')->item(0);
$student=$students->getElementsByTagName('student');
// lấy id cuối cùng
$index = $student->length;
// tăng id lên 1
$id=$student[$index-1]->getElementsByTagName('id')->item(0)->nodeValue+1;

// xử lý form, sau khi nhấn button submit
if(isset($_POST['sbm'])){
    // lấy dữ liệu từ form
    $prd_name = $_POST['prd_name'];
    $group = $_POST['group'];
    $gender = $_POST['gender'];
    // tạo thẻ product
    $new_prd = $dom->createElement('student');
    // tạo thẻ con của product
    $node_id = $dom->createElement('id',$id);
    // thêm thẻ con vào thẻ product
    $new_prd->appendChild($node_id);
    // tạo thẻ con của product
    $node_name = $dom->createElement('name',$prd_name);
    // thêm thẻ con vào thẻ product
    $new_prd->appendChild($node_name);

    $node_group = $dom->createElement('group',$group);
    $new_prd->appendChild($node_group);

    $node_gender = $dom->createElement('gender',$gender);
    $new_prd->appendChild($node_gender);
    // thêm thẻ product vào thẻ products
    $students->appendChild($new_prd);

    $dom->formatOutput=true;
    // lưu file xml
    $dom->save('files/data.xml')or die('Error');
    // chuyển hướng về trang list
    header('location: index.php?layout=list');
}
?>

<div class="container-fuild">
    <div class="card">
        <div class="card-header">
            <h2>Add students</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Student's Name</label>
                    <input type="text" name="prd_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Student's group</label>
                    <input type="number" name="group" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Student's gender</label>
                    <input type="text" name="gender" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>