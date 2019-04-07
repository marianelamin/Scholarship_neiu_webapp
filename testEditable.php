<?php  include("includes/header.inc.php"); ?>

<!-- ############################  START OF THE BODY CONTENT ############################ -->
<main>
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
</main>
<!-- ############################  END OF THE BODY CONTENT ############################ -->
<?php include("includes/footer.inc.php"); ?>
