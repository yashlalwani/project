<?php
require_once('connection.php');
?>

<?php
session_start();
if (isset($_POST['code_commit'])) {
$code = mysqli_real_escape_string($conn, $_POST['code_pane']);
$code_slashed = str_replace(array('\n', '\r'), ' ', $code);
$code_slashed = str_replace(array("\'", '\"'), "'", $code_slashed);
$file_access = fopen("codelines/codeverse.txt", "w+") or die('File Not Found');
$code_write = fwrite($file_access, htmlspecialchars($code_slashed));

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
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                font-size: 22px;
                font-weight: normal;
                letter-spacing: 1px;
               }
               .editor-sec {
                text-align: -webkit-center;
                margin: 2em auto;            
               }
               .editor-sec .editor-start {
                background: transparent;
                border: 1px solid #e0e0e0;
                width: 980px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
                border-radius: 5px;
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
                line-height: 20px;
                outline: none;
                overflow: auto;
                height: 60vh;
               }
               .editor-sec .edit-tag {
                display: block;
                font-weight: bold;
                font-size: 14px;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                float: left;
                padding: 0.92em 2em;
                border-radius: 3px 4px 0px 0px;
                border: 1px solid #ddd;
                border-top: none;
                border-left: none;
                border-bottom: none;
               }
               .editor-sec .button-pane {
                width: 100%;
                background: #fff;
                padding: 0.7em 2em;
                text-align: right;
                border-radius: 0px 0px 5px 5px;
                border-top: 1px solid #e0e0e0
               }
               .button-pane button {
                padding: 0.7em 1.75em;
                font-family: inherit;
                font-weight: 600;
                background: #1db954;
                border: none;
                color: #fff;
                outline: 0;
                border-radius: 3px;
               }
               .close-window {
                color: #cb2431;
                padding: 4.6px 30px;
                background-color: #fafbfc;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                font-weight: 500;
                border-radius: 3px;
                background-image: linear-gradient(-180deg, #fafbfc 0%, #eff3f6 90%);
                line-height: 23px;
                position: relative;
                top: 2px;
                margin: 0px 10px;
                display: inline-block;
                cursor: pointer;
                border: 1px solid rgba(27,31,35,0.2);
               }
               .close-window:hover {
                background-image: linear-gradient(-180deg, #de4450 0%, #cb2431 90%);
                border-color: rgba(27,31,35,0.5);
                color: #fff;
               }
               </style>
              <body>
                   <nav class="nav-wrapper">
                         <logo> Codeverse </logo>
            </nav>
                     <div class="editor-sec">
                        <div class="editor-start">
                            <div class="edit-tag"><svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14" style="
    position: relative;
    top: 3px;
    left: -4px;
"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
                             Edit File </div>
                            <div class="editor-head">Coderverse.php | 40 Bytes | 30 Lines</div>
                              <form method="post"> <textarea class="editor-space" name="code_pane" placeholder="Begin Coding in the Disrupting Codeverse Coding Ecosystem..."><?php
                          if (isset($_POST['code_commit'])) {
                                      
                                      echo $code_slashed;
                          }
                       ?></textarea>
                               <div class="button-pane"><div onclick="javascript:close_window();" class="close-window"> Close File </div>
                                <button type="submit" name="code_commit"> Commit Changes </button> </form> 
                                </div>
                    </div>
                    </div>
                       </body>
<script type="text/javascript">
function close_window() {
    window.open('','_self').close();
}
            </script>
                       </html>
