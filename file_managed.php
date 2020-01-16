<?php 
if(isset($_POST["Import"]))
{
    //First we need to make a connection with the database
    $host='localhost'; // Host Name.
    $db_user= 'admin_demo2'; //User Name
    $db_password= 'Hello#2002#';
    $db= 'admin_demo2'; // Database Name.
    $conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());
    mysql_select_db($db) or die (mysql_error());
    echo $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        //$sql_data = "SELECT * FROM prod_list_1 ";
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
		echo $emapData[0];
            //print_r($emapData);
            //exit();
           echo  $sql = "update file_managed set filename = '$emapData[1]' ,uri='$emapData[2]' where fid='$emapData[0]' ";
		 
            mysql_query($sql);
        } 
        fclose($file);
        echo 'CSV File has been successfully Imported';
       // header('Location: node.php');
    }
    else
        echo 'Invalid File:Please Upload CSV File';
}
?><form enctype="multipart/form-data" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file" size="150">
        <p class="help-block">Only Excel/CSV File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>