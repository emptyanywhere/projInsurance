/* syntax javascript, jquery รวมกัน function แรกเป็น syntax ของ jquery*/

$(document).ready(function(){
    $('.deleteFormContact').click(function(evt){
        
        var contactname=$(this).data("contactname");
        var form=$(this).closest("form");
        evt.preventDefault();

        swal({
            title: "แน่ใจหรือไม่",
            text: `ต้องการลบข้อมูลของ ${contactname} ?`,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
              swal(`ข้อมูลของ ${contactname} ถูกลบแล้ว`, {
                icon: "success",
              });
            } else {
              swal("ข้อมูลยังไม่ได้ถูกลบ");
            }
          });

    });
});

$(document).ready(function(){
  $('.deleteFormInsplan').click(function(evt){
      
      var planname=$(this).data("planname");
      var form=$(this).closest("form");
      evt.preventDefault();

      swal({
          title: "แน่ใจหรือไม่",
          text: `ต้องการลบข้อมูลแผนประกัน ${planname} ?`,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
            swal(`ข้อมูลของ ${planname} ถูกลบแล้ว`, {
              icon: "success",
            });
          } else {
            swal("ข้อมูลยังไม่ได้ถูกลบ");
          }
        });

  });
});

$(document).ready(function(){
  $('.deleteForm').click(function(evt){
      
      var article_name=$(this).data("article_name");
      var author=$(this).data("author"); 
      var form=$(this).closest("form");
      evt.preventDefault();

      swal({
          title: "แน่ใจหรือไม่",
          text: `ต้องการลบบทความ "${article_name}" เขียนโดย "${author}" ?`,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
            swal(`ข้อมูลของ ${author} ถูกลบแล้ว`, {
              icon: "success",
            });
          } else {
            swal("ข้อมูลยังไม่ได้ถูกลบ");
          }
        });

  });
});


/*function target_popup(form) {
  window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
  form.target = 'formpopup';
}*/

$(document).ready(function(){
  $('.CalculatePopup').click(function(evt){
      
      var article_name=$(this).data("article_name");
      var author=$(this).data("author"); 
      var field1=document.getElementById("fund").value;
      var field2=document.getElementById("rate").value;

      var result=parseFloat(field1) + parseFloat(field2);

      evt.preventDefault();

      if(!isNaN(result))
      {
        //
      }

      swal({
        text: "เบี้ยประกันที่ต้องจ่ายต่อปี คือ" + result,
        icon: "success",
        closebuttons: true,
      })

  });
});

/*function CalculatePopup(){

    var field1=document.getElementById("fund").value;
    var field2=document.getElementById("rate").value;

    var result=parseFloat(field1) + parseFloat(field2);

    if(!isNaN(result))
    {
      document.getElementById("answer").innerHTML="The answer is" + result;
    }

};*/