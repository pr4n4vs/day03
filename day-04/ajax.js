$(document).ready(function () {

    //Insert
    $('#btn-submit').on('click',function () { 
        // $('#btn-submit').attr("disabled","disabled");
        var name=$('#name').val();
        var age=$('#age').val();
        if(name!='' && age!=''){
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    type:1,
                    name:name,
                    age:age
                },
                caches:false,
                success: function (response) {
                    var result=JSON.parse(response);
                    if(result.status==200){
                        $('#form')[0].reset();//form reset 
                        //$('#btn-submit').removeAttr("disabled");
                        alertify.success("Data Inserted");
                        view();
                    }
                    else{
                        alertify.error('not inserted');
                    }
                }
            });
        }
        else{
            alertify.error('All fileds are required.....!!');
            
        }
       // $('#btn-submit').removeAttr("disabled");
    });



    //view
    function view() {
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {
                type:2
            },
            
            success: function (response) {
               $('#data').html(response);
            }
        });
      }
});


//update


//jquery doc.ready function => jqdoc -> auto call function like constructor
// we have alery an form then we defined id for alll the elements in the form including submit and form tag
// disable the sbmit button on click 
//ajax ->jqajax 
//

// $.ajax({
//     type: "method",
//     url: "url",
//     data: "data",
    
//     success: function (response) {
        
//     }
// });

//variable store response->if loop to check status 200 -> form reset -> msg

//in framework terminilogy logic named as models
//ajax.php named as controller 
//mvc --> M->model, V->view, c->controller

//jqdoc, var temp->jqvalget, jqajax{ success -> $('atr')[0].reset(), msg (alerity.success())}

