			
			</div>
		</div>
	</div>

    <div class="footer text-center">
        <p>&copy; All rights reserved ESThER</p>
    </div>

	<script src="inc/js/jquery-2.2.4.min.js"></script>
	<script src="inc/js/bootstrap.min.js"></script>
	<script src="inc/js/bootstrap-select.min.js"></script>
	<script src="inc/js/waypoints.min.js"></script>
	<script src="inc/js/jquery.counterup.min.js"></script>
	<script src="inc/js/datatables.min.js"></script>
	<script src="inc/js/datatables.js"></script>
	<script src="inc/js/custom.js"></script>

	<script>
$(document).ready(function(){
     $('button').click(function(){
		// $("#MyModal").modal('show');
		
        id_emp = $(this).attr('id')
        // alert(id_emp)
            $.ajax({url: "selectbook.php",
            method:'post',
            data:{emp_id:id_emp},
                success: function(result){
            $(".modal-body").html(result);
                }});

                $('#MyModal').modal("show");
                
     })
})
</script>
</body>
</html>