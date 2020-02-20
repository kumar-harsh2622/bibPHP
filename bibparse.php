<?php
    if(isset($_POST['upload'])){
        $file_name=$_FILES['bibfile']['name'];
        $file_type=$_FILES['bibfile']['type'];
        $file_loc=$_FILES['bibfile']['tmp_name'];
        $file_storage="uploads/".$file_name;
        move_uploaded_file($file_loc,$file_storage);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="bib2html.js"></script> 
    </head>
    <body>
        <textarea hidden name="bibtex_input" id="bibtex_input" cols=50 rows=20>
           <?php echo file_get_contents("uploads/".$file_name) ?>
        </textarea>
        <div id="bibtex_errors"></div> 
        <fieldset>  
            <div class="bibtex_template">
                <li>
                <a class="url"><span class="title"></span></a></br>
                <span class="author"></span></br>
                <span class="booktitle"></span>
                <span class="if publisher">
                <span class="publisher"></span>.
                </span>
                <span class="if pages">
                  p. <span class="pages"></span>.
                </span>
                <span class="if year">
                <span class="year"></span></span>
                </br>
                <a class="bibtexCodeLink">
                    [bibtex]
                </a>
                </br></br>
              </li>
            
             </div>
            
            <ol id="bibtex_display">
            </ol>      
        </fieldset>           
    </body>
</html>


