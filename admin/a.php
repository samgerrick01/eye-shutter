<html>
    <head><script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>

    </head>
    <body>
       <button id = 'btn' />
       <div id = 'ct'>
             <?php echo file_get_contents('my_ajax_stuff.php'); ?>
       </div>
    </body>
    <script>
       $('.datepicker').datepicker({dateFormat: "dd-mm-yy"});
       $('#btn').click(function() {
           $.ajax({
            type: "GET",
            url: "my_ajax_stuff.php" ,
            success: function(response) {
                $('#ct').html(response);
                /*added following line to solve this issue ..but not worked*/
                //$( ".datepicker" ).datepicker({dateFormat: "dd-mm-yy"});

            } ,
            error: function () {
                $('#ct').html("Some problem fetching data.Please try again");
            }
        });
       });
    </script>
</html>