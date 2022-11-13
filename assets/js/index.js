$(window, document, undefined).ready(function() {

    $('input').blur(function() {
      var $this = $(this);
      if ($this.val())
        $this.addClass('used');
      else
        $this.removeClass('used');
    });
    
    var $ripples = $('.ripples');
    
    $ripples.on('click.Ripples', function(e) {
    
      var $this = $(this);
      var $offset = $this.parent().offset();
      var $circle = $this.find('.ripplesCircle');
    
      var x = e.pageX - $offset.left;
      var y = e.pageY - $offset.top;
    
      $circle.css({
        top: y + 'px',
        left: x + 'px'
      });
    
      $this.addClass('is-active');
    
    });
    
    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
      $(this).removeClass('is-active');
    });
    
    });

    $('.search-input').focus(function(){
      $(this).parent().addClass('focus');
    }).blur(function(){
      $(this).parent().removeClass('focus');
    });

    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });