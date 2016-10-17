<div class="footer-area" style="padding-top: 50px; margin-top: 50px;">
    <div class="container">
        <div class="col-md-3 footer-box">
            <h4>Quick Links</h4>
            
                <p>Home</p>
                <p>Contact Us</p>
                <p>Browse Category</p>
                <p>Browse Location</p>
                <p>Term of Use</p>
                <p>Terms of privacy</p>
            
        </div>
        <div class="col-md-3 footer-box">
            <h4>Quick Links</h4>
            
                <p>Home</p>
                <p>Contact Us</p>
                <p>Browse Category</p>
                <p>Browse Location</p>
                <p>Term of Use</p>
                <p>Terms of privacy</p>
        </div>
        <div class="col-md-3 footer-box">
            <h4>Quick Links</h4>
            
                <p>Home</p>
                <p>Contact Us</p>
                <p>Browse Category</p>
                <p>Browse Location</p>
                <p>Term of Use</p>
                <p>Terms of privacy</p>
        </div>
        <div class="col-md-3 footer-box">
            <h4>Quick Links</h4>
            
                <p>Home</p>
                <p>Contact Us</p>
                <p>Browse Category</p>
                <p>Browse Location</p>
                <p>Term of Use</p>
                <p>Terms of privacy</p>
        </div>
    </div>
</div>

<script src="/guests/js/jquery.min.js">
</script> 
<script src="/guests/js/jquery-ui.min.js">
</script> <!--Bootstrap Js v3.3.4-->
 
<script src="/guests/js/bootstrap.min.js">
</script> <!-- Nb2Sb - Navbar to Sidebar -->
 
<script src="/guests/js/jquery.nb2sb.js">
</script> 
<script>
$(document).ready(function() {
  $('#nb2sb-nav').nb2sb({
    selectors: {
      opener: '#nb2sb-btn',
      content: '#nb2sb-content',
      closingLinks: '.close-sb'
    },
    settings: {
      animation: {
        easing: 'easeOutQuint'
      }
    }
  });
});
</script> 
<script src="/guests/js/classie.js">
</script> 
<script src="/guests/js/gnmenu.js">
</script> 
<script>
new gnMenu(document.getElementById('gn-menu'));
</script>
<script type="text/javascript" src="/js/listing-tab.js"></script>
<script>
  new CBPFWTabs( document.getElementById( 'tabs' ) );
</script> 
<script type="text/javascript">
$('.carousel').carousel({
  interval: 150000
})
</script> 
<script type="text/javascript">
  $(document).ready(function() {
    //Set the carousel options
    $('#quote-carousel').carousel({
      pause: true,
      interval: 4000,
    });
  });      
</script>

<script type="text/javascript">
$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
    var title = $(this).parent('a').attr("title");
    $('.modal-title').html(title);
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#myModal').modal({show:true});
});
});    
</script>    