$(function() {
  viewport_info();
  fix_nav();
  fix_list();
}); // End of $(function()

$(window).resize(function() {  
  console.log('resizing...');
  viewport_info();
  fix_nav();
}); // End of $(window).resize(function()

var fix_nav = function() {
  if ($device == 'mobile') {
    $('#navbar').removeClass('container');
  } else {
    $('#navbar').addClass('container');
  } // End of if ($device == 'mobile')
} // End of var fix_nav = function()

var fix_list = function() {
  $('ul, ol').each(function(i) {

    var id = $(this)[0].id;
    console.log('list['+i+'] id: ' + id);
    
    var style_position = $(this).css('list-style-position');
    console.log('list['+i+'] style position: ' + style_position);

    var style_type = $(this).css('list-style-type');
    console.log('list['+i+'] style type: ' + style_type);

    if (style_position == 'outside' && style_type != 'none') {
      $(this).css('margin-left', '1rem');
    } // End of if (style_type != 'none')

  }); // End of $('ul, ol').each(function()
} // End of var fix_list = function()