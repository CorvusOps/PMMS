// Update the users data list using the tbody id user data
function getUsers(){
    console.log("getUsers")
    $.ajax({
        type: 'POST',
        url: '../includes/tbusersAction.inc.php',
        data: 'action_type=view',
        success:function(html){
            $('#userData').html(html);
        }
    });
}

// Send CRUD requests to the server-side script
function userAction(type, id){
    console.log("useraction is called")
    id = (typeof id == "undefined")?'':id;
    var userData = '', frmElement = '';
    if(type == 'add'){
        frmElement = $("#modalUserAdd");
        userData = frmElement.find('form').serialize()+'&action_type='+type+'&id='+id;
        console.log("User action confirmed" + type);
    }else if (type == 'edit'){
        frmElement = $("#modalUserEdit");
        userData = frmElement.find('form').serialize()+'&action_type='+type;
    }else{
        frmElement = $(".row");
        userData = 'action_type='+type+'&id='+id;
    }

    frmElement.find('.statusMsg').html('');


    $(document).ready(function() {
    $.ajax({
        url: '../includes/tbusersAction.inc.php',
        type: 'POST',
        data: userData,
        beforeSend: function(){
            frmElement.find('form').css("opacity", "0.5");
            console.log("beforeSend")
        },
        success:function(resp){
            console.log(resp)
            frmElement.find('.statusMsg').html(resp.msg);
            if(resp.status == 1){
                if(type == 'add'){
                    frmElement.find('form')[0].reset();
                }
                getUsers();
                console.log("called getUsers")
            }
            frmElement.find('form').css("opacity", "");
        }
    });
 });
}


// Fill the user's data in the edit form
function editUser(id){
    $.ajax({
        type: 'POST',
        url: '../includes/tbusersAction.inc.php',
        dataType: 'JSON',
        data: 'action_type=data&id='+id,
        success:function(data){
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
        }
    });
}

function openModal(modal) {
    /* 
     * Parameter: modal
     *            modal -> class name
     *
     * This function unhides modals once button to trigger it is clicked.
     */
    document.querySelector(modal).classList.remove('hidden');
    document.querySelector(modal).classList.add('fixed');
    //problematic part, the on do not post the data
    $("button").click(function(){
        $('#userSubmit').trigger('submittingForm');
        console.log("hotdogs sa js");
        $('#modalUserAdd').on('submittingForm', function(e){
            var type = $(e.relatedTarget).attr('data-type');
            var userFunc = "userAction('add');";
            
            if(type == 'edit'){
                userFunc = "userAction('edit');";
                var rowId = $(e.relatedTarget).attr('rowID');
                editUser(rowId);
            }   
            console.log(userFunc);  
            $('#userSubmit').attr("onclick", userFunc);
        }); 
    });
}

function closeModal(modal) {
    /* 
     * Parameter: modal
     *            modal -> class name
     *
     * This function hides modals once close button is clicked.
     */
    document.querySelector(modal).classList.add('hidden');
    document.querySelector(modal).classList.remove('fixed');
    $('#modalUserAdd').on('event.hidden', function(){
        $('#userSubmit').attr("onclick", "");
        $(this).find('form')[0].reset();
        $(this).find('.statusMsg').html('');
    });
}

// Actions on modal show and hidden events
// $(function(){
//     $('#modalUserAdd').on('show.bs.modal', function(e){
//         var type = $(e.relatedTarget).attr('data-type');
//         var userFunc = "userAction('add');";
//         if(type == 'edit'){
//             userFunc = "userAction('edit');";
//             var rowId = $(e.relatedTarget).attr('rowID');
//             editUser(rowId);
//         }
//         $('#userSubmit').attr("onclick", userFunc);
//     });
    
//     $('#modalUserAddEdit').on('hidden.bs.modal', function(){
//         $('#userSubmit').attr("onclick", "");
//         $(this).find('form')[0].reset();
//         $(this).find('.statusMsg').html('');
//     });
// });