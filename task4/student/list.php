<?php
$dom = new DOMDocument();
$dom->load('files/data.xml');
// lấy thẻ products
$students = $dom->getElementsByTagName('students')->item(0);
?>

<div class="container-fuild">
    <div class="card">
        <div style = "background: #111111" class="card-header">
            <h2 style = "color: #EEEEEE; text-align:center">List Students</h2>
        </div>
        <div style = "margin-top: 50px " class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Group</th>
                    <th>Gender</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
                $student=$students->getElementsByTagName('student');
                while (is_object($student->item($i++))){
                    ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $student->item($i-1)->getElementsByTagName('name')->item(0)->nodeValue?></td>
                    <td><?php echo $student->item($i-1)->getElementsByTagName('group')->item(0)->nodeValue?></td>
                    <td><?php echo $student->item($i-1)->getElementsByTagName('gender')->item(0)->nodeValue?></td>
                    <td>
                        <a  
                            href="index.php?layout=update&id=<?php echo  $student->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>"> 
                                Edit 
                            <!-- <?php echo  $student->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?> -->
                        </a>
                    </td>
                    <td>
                        <a 
                        onclick="return Del('<?php echo $student->item($i-1)->getElementsByTagName('name')->item(0)->nodeValue;?>\\')" 
                        href= "index.php?layout=delete&id=<?php echo  $student->item($i-1)->getElementsByTagName('id')->item(0)->nodeValue; ?>" >Delete</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            <div style = "padding-left: 875px">
            
            <a  class="btn btn-primary" href="index.php?layout=create">Add</a> 
             
            </div>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("are you sure to delete: "+name+" ?");
    }
</script>