<!DOCTYPE html>
<html>
  <head>
    <style>
        .btn {
            text-align: center;
        }
        .btn input[type="submit"] {
            border-width: 0;
            background-color: rgb(57, 202, 101);
            width: 75px;
            height: 25px;
            border-radius: 10px;
        }
    </style>
  </head>
  <body>
     <form action="bibparse.php" enctype="multipart/form-data" method="POST"> 
          <fieldset>
              <legend><h3>Upload your File</h3></legend>
              <input type="file" name="bibfile" id="bibfile">
          </fieldset><br>
          <div class="btn">
              <input type="submit" name="upload" >
          </div>
     </form>
  </body>
</html>