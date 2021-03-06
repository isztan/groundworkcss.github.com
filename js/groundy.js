(function() {

  $(document).ready(function() {
    if (!Modernizr.svg) {
      $("img[src$='.svg']").each(function() {
        return $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
      });
    }
    $('#browser-support .browser, #browser-support a').on({
      click: function(e) {
        $('#browser-support').toggleClass('open');
        $('#browser-support').find('#browser-support-grid').fadeToggle();
        e.preventDefault();
        return false;
      }
    });
    $('.demo > .row > .whole, \
     .demo > .row > .wholes, \
     .demo > .row > .half, \
     .demo > .row > .halves, \
     .demo > .row > .third, \
     .demo > .row > .thirds, \
     .demo > .row > .fourth, \
     .demo > .row > .fourths, \
     .demo > .row > .fifth, \
     .demo > .row > .fifths, \
     .demo > .row > .sixth, \
     .demo > .row > .sixths, \
     .demo > .row > .seventh,\
     .demo > .row > .sevenths, \
     .demo > .row > .eighth, \
     .demo > .row > .eighths, \
     .demo > .row > .ninth,  \
     .demo > .row > .ninths,  \
     .demo > .row > .tenth, \
     .demo > .row > .tenths, \
     .demo > .row > .eleventh,\
     .demo > .row > .elevenths, \
     .demo > .row > .twelfth,\
     .demo > .row > .twelfths').each(function() {
      $(this).attr('data-title', $(this).attr('class'));
      return $(this).attr('data-text', $(this).text());
    });
    return $('.demo > .row > .whole, \
     .demo > .row > .wholes, \
     .demo > .row > .half, \
     .demo > .row > .halves, \
     .demo > .row > .third, \
     .demo > .row > .thirds, \
     .demo > .row > .fourth, \
     .demo > .row > .fourths, \
     .demo > .row > .fifth, \
     .demo > .row > .fifths, \
     .demo > .row > .sixth, \
     .demo > .row > .sixths, \
     .demo > .row > .seventh,\
     .demo > .row > .sevenths, \
     .demo > .row > .eighth, \
     .demo > .row > .eighths, \
     .demo > .row > .ninth,  \
     .demo > .row > .ninths,  \
     .demo > .row > .tenth, \
     .demo > .row > .tenths, \
     .demo > .row > .eleventh,\
     .demo > .row > .elevenths, \
     .demo > .row > .twelfth,\
     .demo > .row > .twelfths').not('.equal').hover((function() {
      return $(this).text($(this).attr("data-title"));
    }), function() {
      return $(this).text($(this).attr("data-text"));
    });
  });

}).call(this);
