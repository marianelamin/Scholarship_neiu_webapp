

$('#myModal').on('shown.bs.modal', function(e) {
  $("#destination-box .box-body").html($("#source-box .box-body").html());
  $('#destination-box table').on('click', 'tr', function(event) {
    $(this).addClass('bg-info').siblings().removeClass('bg-info');
    setRowClickToForm(this);
    console.log(this);
  });
});

function cloneTableDestToSource(){
  $("#destination-box .bg-info").removeClass('bg-info');
  $("#source-box .box-body").html($("#destination-box  .box-body").html());
}
function addrow(){
  var tr = generateTableRow();
  $('table > tbody').append(tr);
  cleartaskform();
}

function deleterow(){
  $('table > tbody > tr.bg-info').remove();  
  cleartaskform();
}

function updateRow(){
  var tr = $('table > tbody > tr.bg-info');
  tr.find("#taskNo_span").text($("#taskNo").val());
  tr.find("#taskName_span").text($("#taskName").val());
  tr.find("#progess_span").text($("#progess").val());
  tr.find("#progess_div").css("width",$("#progess").val());
  
  
}
function setRowClickToForm(el){
    $("#taskNo").val($(el).find("#taskNo_span").text());
  $("#taskName").val($(el).find("#taskName_span").text());
  $("#progess").val($(el).find("#progess_span").text());
}

function cleartaskform(){
  $("#taskNo").val("");
  $("#taskName").val("");
  $("#progess").val("");
}

function generateTableRow(){
    var tr = '<tr>'
+'  <td><span id="taskNo_span">'+$("#taskNo").val()+'</span></td>'
+'  <td><span id="taskName_span">'+$("#taskName").val()+'</span></td>'
+'  <td>'
+'    <div class="progress progress-xs progress-striped active">'
+'      <div class="progress-bar progress-bar-success" id="progess_div" style="width: '+$("#progess").val()+'"></div>'
+'    </div>'
+'  </td>'
+'  <td><span class="badge bg-green" id="progess_span">'+$("#progess").val()+'</span></td>'
+'</tr>';
  return tr;
}
