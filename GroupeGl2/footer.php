  
        <script type="text/javascript">
            const htmlbtn = document.getElementById("butt");
            setTimeout(function(){
                htmlbtn.disabled = true;
            },1000);
            //----------------------------------------
            var $btt = $("#butt");
            setTimeout(function(){
                $btt.addClass('btn-disable');
            },1000);
        </script>
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>
        <script>
                $(document).ready(function(){
                       $("#myBtn").click(function(){
                        $("#myModal").modal({backdrop: true});
                       });  
                                $("#myBtn3").click(function(){
                                    $("#myModal3").modal({backdrop: "static"});
                                });
                                $("#myBtn2").click(function(){
                                    $("#myModal2").modal({backdrop: false});
                                });
                });
        </script>


      <script src="bootstrap5/js/app.js"></script>
      <script src="webfonts/js/all.js" crossorigin="anonymous"></script>
<!--      <script src="bootstrap5/js/jquery_3_3_1_min.js"></script>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="bootstrap5/js/poppper.min.js"></script>
      <script src="bootstrap5/js/bootstrap.min.js"></script>
  </div>
</body>
</html>