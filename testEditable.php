<?php






?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
for ($i = 0; $i < 10 ; $i++) {
    echo '<p>
    <input value="cabeza de..." readonly>Titulo:</input>
    <span id = '.$i.' onclick="change(this.id)" class="content-editable">Edit</span>
    </p>';
}
?>    
<p id="1">
<span>Titulo:</span>
<span class="content-editable">Extra</span>
</p>

<script>

function change(id){
var obj = document.getElementById(id);
console.log("id is"+id);
console.log(obj.previousElementSibling.hasAttribute("readonly"));
var hasit = obj.previousElementSibling.hasAttribute("readonly");
if(hasit){
// obj.previousElementSibling.contentEditable = true;
obj.previousElementSibling.removeAttribute("readonly");
obj.previousElementSibling.setAttribute("Style","border: 1px red solid;");
obj.setAttribute("Style","background: green; color:white;");
obj.innerText = "Save";
}else{
    // obj.previousElementSibling.contentEditable = false;
    obj.previousElementSibling.setAttribute("readonly","");
    obj.previousElementSibling.setAttribute("Style","border: 0px gray solid;");
    obj.setAttribute("Style","background: red; color: black;");
    obj.innerText = "Edit";
}
console.log("entro a cambiar");

}

/*  This is to change an element to editable.. it mus follow this form: 
<tag>
<span>Titulo:</span>
<span id = "1">Extra</span>
</tag>
*/
function customizedContentEditable(id){
var obj = document.getElementById(id);
console.log("id is"+id);
console.log(obj.previousElementSibling.isContentEditable);
var isit = obj.previousElementSibling.isContentEditable;
if(!isit){
obj.previousElementSibling.contentEditable = true;
// obj.previousElementSibling.setRemove("readonly");
obj.previousElementSibling.setAttribute("Style","border: 1px red solid;");
obj.setAttribute("Style","background: green; color:white;");
obj.innerText = "Save";
}else{
    obj.previousElementSibling.contentEditable = false;
    // obj.previousElementSibling.setAttribute("readonly","");
    obj.previousElementSibling.setAttribute("Style","border: 0px gray solid;");
    obj.setAttribute("Style","background: red; color: black;");
    obj.innerText = "Edit";
}
console.log("entro a cambiar");

}

$('[data-onclick]').each(function(){
    eval($(this).data('onclick'));
})



</script>
</body>
</html>