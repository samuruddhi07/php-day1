<html>
    <body>
        <?php
        //file handling operations

        //create new file
        $file=fopen("student.txt","w");
        //fclose($file);
        echo"file has been created";

        //write in new file
        fwrite($file,"hello student file!!\n this is test file");
        echo"<br> text has been inserted";
        fclose($file);

        //read the file
        $file_read=fopen("student.txt","r");
        while(!feof($file_read)){
            echo fgets($file_read)."<br>";
        }
        fclose($file_read);
        

        //deleting a file
        if(file_exists("student.txt")){
            unlink("student.txt");
            echo"<br><br> file has been deleted!!";
        }
        else{
            echo"<br><br> file not found";
        }

        

        ?>
        </body>
    </html>