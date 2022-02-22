<script>
        $(document).ready(function(){
            $(".dropdown_header").click(function(){
            $(this).find(".dropdown_menu_header").slideToggle("fast");
             });
        });

        $(document).ready(function(){
                $(".dropdown-header-cart").mouseenter(function(){
                $(this).find(".noti_cart_number").slideToggle('fast');
                });
        });
</script>