//jscript failed


<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/select2/dist/js/select2.min.js"></script>

<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>

<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>

<!-- Select2 -->
<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

<script>

     // csrf token
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

     $(function() {

         var clients =  {!! json_encode($user->toArray()) !!};

         $("#jsGrid").jsGrid({

            height: "90%",
            width: "100%",

            filtering: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,

            pageSize: 15,
            pageButtonCount: 5,

            deleteConfirm: "Do you really want to delete the client?",

            controller: {


                   insertItem: function(item) {
                          return $.ajax({
                                 type: "POST",
                                 url: "/insert",
                                 data: item,
                                 success: function (data) {
                                        alert("Added Successfully");
                                 },
                                 error: function(data){
                                        alert("Error");
                                 }
                          });
                   },

                   updateItem: function(item) {
                          var id = item.id;
                          return $.ajax({
                                 type: "PUT",
                                 url: "/update"+"/"+id,
                                 data: item
                          });
                   },

                   deleteItem: function(item) {
                          var id = item.id;
                          return $.ajax({
                                 type: "DELETE",
                                 url: "/delete"+"/"+id,
                                 data: item
                          });
                   },

            },

            data: clients,

            fields: [
                   { name: "User ID", type: "text", width: 150 },
                   { name: "User Name", type: "number", width: 50 },
                   { name: "Email", type: "text", width: 200 },
                   { name: "Role", type: "select", items: db.roles, valueField: "Id", textField: "Name" },
                   { type: "control", modeSwitchButton: false, editButton: false }
            ]
            });


     $(".config-panel input[type=checkbox]").on("click", function() {
            var $cb = $(this);
            $("#jsGrid").jsGrid("option", $cb.attr("id"), $cb.is(":checked"));
     });

     });
</script>
