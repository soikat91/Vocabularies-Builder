
  ;(function($){
    
    $(document).ready(function(){
        // alert("hi");
        // $("#login").on("click",function(){
           
        // })

        $("#login").on("click",function(){
            $("#form h4 ").html("Login");
            $("#action").val("login");
         })
 
         $("#register").on("click",function(){
           $("#form h4").html("Register");
           $("#action").val("register");
         })

        $(".menu-item").on("click",function(){
            $(".helement").hide();
            var target="#"+$(this).data("target");
            $(target).show();
        })
        $("#alpha").on("change",function(){
            var char=$(this).val().toLowerCase();
            // alert(char);
            $("#words tr:gt(0)").hide();//:gt(0) mane ekene gater than 0 bujhano hoyece ..

            if('all'==char){
                $("#words tr").show();
                return true;
            }
            $("#words td").filter(function(){

                return $(this).text().indexOf(char)==0;  //indexof array function eti diye array er index find kora hy index 0 theke suru hoy tai 0 diye condition daoya hoyece 0 index er shate mile gele ta print korbe 
            }).parent().show();//parent holo tr ...tr ta show korbe karon age parent tr hide kora hoyece
        })
    
    })
    

})(jQuery);