function render(data){
    var html='<div class="commentBox"><div class="rightPanel"></div><span>'+data.name+'</span><div class="date">'+data.date+'</div><p> '+data.body+'</p><div class="clear"></div></div>';
    $("#container").append(html);
}



$(document).ready(function(){
    var comment= [
        
        
     ];
     for(var i=0;i<comment.length;i++){
        
        render(comment[i]);
         
     }
     $("#addComment").click(function(){
     var addobj={
        "name":$("#name").val(),
        "date":$("#date").val(),
        "body":$("#bodyText").val()
    };
    console.log(addobj);
    comment.push(addobj);
    render(addobj);
    $("#name").val("");
$("#date").val("dd/mm/yyyy");
$("#bodyText").val("");
});
});
