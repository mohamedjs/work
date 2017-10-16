$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
///////////////// category ////////////////////////
$('#addva').click(function(e){
      e.preventDefault();
      $.ajax({
        type:'post',
        url:'\\addva',
        data: $('.addva').serialize(),
        success : function (data){
          data = JSON.parse(data);
          alert("add successful");
           console.log(data);
        },
      });
    });
  function add(id) {
    console.log(id);
      $.ajax({
        type:'post',
        url:'\\addvacancy',
        data:{
          id:id,
          month:$('#disabledSelect').val()
        },
        success:function (data) {
          if(data!="no"){
          console.log("add sucess");
          console.log(data);
          $('#day'+id+'').css({"background-color": "yellow"});}
          else{
            alert("you can not take another vacancy days");
          }
        }
      });
  }
  function view(id) {
    console.log(id);
      $.ajax({
        type:'post',
        url:'\\view',
        data:{
          id:id,
          month:$('#disabledSelect').val()
        },
        success:function (data) {
          data=JSON.parse(data);
          console.log(data);
          console.log(data.length);
          console.log(id);
          var element = document.getElementById('d'+id+'');
          element.innerHTML=data.length;
        }
      });
    }
  $('#addday').click(function(e){
    e.preventDefault();
    $.ajax({
      type:'post',
      url:'\\addday',
      data: $('.addd').serialize(),
      success : function (data){
        data = JSON.parse(data);
        alert("add successful");
         console.log(data);
      },
    });
  });

  $('.admin').change(function(e){
    e.preventDefault();
    $.ajax({
      type:'post',
      url:'\\showmoday',
      data: {
        month:$('#disabledSelect').val(),
      },
      success : function (data){
        data = JSON.parse(data);
        $('#admin').remove();
      var tbody='<tbody id="admin">'+
                '<tr>'+
                ''+for(var i=0;i<7;i++){+''+
                ''+if(data[i])+''+
                '<td id="day'+data[i].id+'">'+data[i].day_no+''+
                '<br>'+
                '<a href="../user/'+data[i].id+'"><button type="submit" class="btn btn-primary" id="cat">view</button></a>'+
                '<button type="submit" class="btn btn-primary" id="cat" onclick="add('+data[i].id+')">add</button>'+
                '<p id="d'+data[i].id+'" style="float:right">'+data[i].users.length+'</p>'+
                '</td>'+''+}+''
                '</tr>'+
                '</tbody>';
                $('even-table').append(tbody)
         console.log(data);
      },
    });
  });
