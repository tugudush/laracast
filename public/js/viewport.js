var viewport_info = function() {
  var viewport_width, viewport_height, viewport_size, device, orientation;
  
  viewport_width = $(window).width();
  viewport_height = $(window).height();
  viewport_size = `${viewport_width} x ${viewport_height}`;

  $viewport_width = viewport_width;
  $viewport_height = viewport_height;
  $viewport_size = viewport_size;

  $screen_width = window.screen.width;  
  $screen_height = window.screen.height;
  $screen_size = `${$screen_width} x ${$screen_height}`;

  $avail_width = window.screen.availWidth;
  $avail_height = window.screen.availHeight;
  $avail_size = `${$avail_width} x ${$avail_height}`;

  console.log(`viewport size: ${$viewport_size}`);
  console.log(`screen size: ${$screen_size}`);
  console.log(`avail size: ${$avail_size}`);

  if ($screen_width < 768) {
    $('body').addClass('mobile');
    device = 'mobile';
  } // end of if (viewport_width < 768)
  else if ($screen_width >= 768 && $screen_width <= 1024) {
    $('body').removeClass('mobile');
    device = 'tablet';
  } else {
    device = 'desktop';
  }

  $device = device;

  if ($screen_width >= $screen_height) {
    orientation = 'landscape';
  } else {
    orientation = 'portrait';
  }

  $orientation = orientation;
} // End of var viewport_info = function()