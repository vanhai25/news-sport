<body>
<script>
        jQuery(document).ready(function() {
        var offset = 550;
        var duration = 500;
        jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
        jQuery('.back-to-top').fadeIn(duration);} else {
        jQuery('.back-to-top').fadeOut(duration);}});
        jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 1}, duration);
        return false;})});</script>
        <style>
        div#page {
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;}
        .back-to-top {
        position: fixed;
        bottom: 2em;
        right: 0px;
        text-decoration: none;
       
        font-size: 12px;
        padding: 1em;
        display: none;}
        .back-to-top:hover {
        text-decoration: none;}</style>
        <a href="#" class="back-to-top"><img src="img/icon/backtop.png" alt="Back to Top"  style="width: 50px;height: 50px" /></a>
        <!--Back to Top Button End-www.thenaynhe.com-->
        </script>
</body>