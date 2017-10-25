<?php
// require_once('/codes/connection.php');
?>

<?php
session_start();

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
                padding: 1em;
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
               </style>
              <body>
                   <nav class="nav-wrapper">
                         <logo> Codeverse </logo>
            </nav>
                     <div class="editor-sec">
                        <div class="editor-start">
                            <div class="edit-tag"> Edit File </div>
                            <div class="editor-head">Coderverse.php | 40 Bytes | 30 Lines</div>
                               <textarea class="editor-space" placeholder="Write Some Code here.."> </textarea>
                    </div>
                    </div>
                       </body>
</html>