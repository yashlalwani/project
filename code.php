<?php
require_once('connection.php');
?>

<?php
session_start();

if (isset($_POST['code_commit'])) {

$code = mysqli_real_escape_string($conn, $_POST['code_pane']);

$file_access = fopen("..yashlalwani/coderverse.php", "x+") or die('File Not Found');

$code_write = fwrite($file_access, $code);

if ($code_write == TRUE) {
    echo "<script> alert('File Saved Successfully'); </script>";
}
}
?>

<!DOCTYPE HTML>
<html lang="en-us">
    <head>
         <title> Code - Codeverse </title> 
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>   
         <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">   
         <link rel="stylesheet" href="design_framework.css">
        </head>
             <style type="text/css">
               .nav-wrapper {
                background: #000;
                padding: 1em 2em;
               }
               .nav-wrapper logo {
                color: #fff;
                font-family: Consolas,sans-serif;
                font-size: 30px;
                font-weight: normal;
                letter-spacing: 1px;
               }
               .editor-sec {
                text-align: -webkit-center;
                margin: 2em auto;            
               }
               .editor-sec .editor-start {
                background: transparent;
                border: 1px solid #ddd;
                width: 980px;
                border-radius: 3px;
               }
               .editor-sec .editor-head {
                text-align: left;
                padding: 1em;
                border-bottom: 1px solid #e1e4e8;
                font-family: "SFMono-Regular", Consolas, "Liberation Mono", Menlo, Courier, monospace;
                letter-spacing: -0.2px;
                background: #fafbfc;
                font-size: 14px;
                color: #666;
                overflow: hidden;
               }
               .editor-sec .editor-space {
                resize: none;
                width: 100%;
                border-radius: 0px;
                border: none;
                font-family: "SFMono-Regular", Consolas, "Liberation Mono", Menlo, Courier, monospace;
                font-size: 15px;
                padding: 1em 1.5em;
                line-height: 28px;
                outline: none;
                overflow: hidden;
                height: 60vh;
               }
               .editor-sec .edit-tag {
                display: block;
                font-weight: bold;
                font-size: 14px;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                float: left;
                padding: 0.98em 2em;
                border-radius: 3px 3px 0px 0px;
                border: 1px solid #ddd;
                border-top: none;
                border-left: none;
                border-bottom: none;
               }
               .editor-sec .button-pane {
                width: 100%;
                background: #f5f8f9;
                padding: 0.7em 2em;
                text-align: right;
                border-top: 1px solid #e0e0e0
               }
               .button-pane button {
                padding: 0.7em 1.75em;
                font-family: inherit;
                font-weight: 500;
                background: #0069ff;
                border: none;
                color: #fff;
                outline: 0;
                border-radius: 3px;
               }
               </style>
              <body>
                   <nav class="nav-wrapper">
                         <logo> Codeverse </logo>
            </nav>
                     <div class="editor-sec">
                        <div class="editor-start">
                            <div class="edit-tag"> Edit File </div>
                            <div class="editor-head">Coderverse.php | 40 Bytes | 30 Lines</div>
                               <textarea class="editor-space" name="code_pane" placeholder="Begin Coding in the Disrupting Codeverse Coding Ecosystem..."></textarea>
                               <div class="button-pane"> <button type="submit" name="code_commit"> Save Changes </button> </div>
                    </div>
                    </div>
                       </body>
</html>
</html>
