
        </div>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script> 
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script> 
        <script>
            $(function() {
              $( "#tabs, #tabs2" ).tabs();
              });
        </script> 
        <script>
            (function($) {  

               $('.lol').click(function() {         
                   $('.fichetechnique').animate({ "left": "-450px" }); 
                            $('.presentation').animate({ "left": "-450px" });          

                   e.preventDefault();    
               });  
              })(jQuery);  
        </script>
    </body>
</html>