<html>
    <body>
        <?php
        //directory handling operations

        //crate a directory
        if(!is_dir("phpday3_directory")){
            mkdir("phpday3_directory");
            echo"directory created";
        }
        else{
            echo "directory already exists";
        }
        echo"<br>";

        //check if the directory exists
        if(is_dir("phpday3_directory")){
            echo"directory exists";
        }
        else{
            echo"directory does not exists!";
        }

        ////list the files inside thr folder
        $files=scandir("phpday3_directory");
        foreach($files as $file){
            echo $file."<br>";
        }
        echo"<br>";
        //change the directory
        echo"current directory:".getcwd();
        chdir("phpday3_directory");
        echo"<br> new current directory:",getcwd();
        echo"<br>";

        //delete the files inside the directory
        $delete_files=scandir(".");
        foreach($delete_files as $file){
            if($file!=="." && $file!==".."){
                unlink($file);
            }
            echo"files deleted!";
        }

        echo"<br>";
        //delete directory

        chdir("..");

        echo"<br> current directory:".getcwd();
        if(is_dir("phpday3_directory")){
            rmdir("phpday3_directory");
            echo"directory removed";
        }
        else{
            echo"directory does not exists!";
        }

        ?>
        </body>
</html>