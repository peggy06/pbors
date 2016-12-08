        jQuery(document).ready(function () {

            var rplObj,x,y,ink,color,rplDelTimer;
            //fade out ripple when unclicked
            jQuery('.ripple-closed, .ripple-open').mouseup(function () {
                jQuery('.ink').css({ 'opacity': '0' });
                delRipple();
            })

            //Delete ripple element one second after last click
            function delRipple() {
                rplDelTimer = setTimeout(function () {
                    jQuery('.ink').remove();
                }, 600)
            }

            jQuery('body').mousemove(function (e) {
                //update mouse coordinates when it is moved
                x = e.pageX;
                y = e.pageY;
            })


            jQuery('.ripple-closed').mousedown(function () {
                rplObj = jQuery(this); //set $(this) variable for later use
                color = jQuery(this).data('color'); //Set color to code defined in html
                rippleClosed(); //run ripple function
            })

            jQuery('.ripple-open').mousedown(function () {
                rplObj = jQuery(this); //set $(this) variable for later use
                color = jQuery(this).data('color'); //Set color to code defined in html
                rippleOpen(); //run ripple function
            })



            function rippleClosed() {
                rplObj.prepend('<span class="ink"></span>'); //create ripple		
                ink = rplObj.find('.ink'); //create variable for ink span
                ink.css('background', color); //set ripple color to color variable

                //set diameter of ripple
                if (!ink.height() && !ink.width()) {
                    //set diameter to parents width/height (whichever is larger)
                    d = Math.max(rplObj.outerWidth(), rplObj.outerHeight());
                    ink.css({ height: d, width: d });
                }

                //set coordinates of ripple using position of mouse defined earlier
                x = x - rplObj.offset().left - ink.width() / 2;
                y = y - rplObj.offset().top - ink.height() / 2;

                //set the position and animate the expansion
                ink.css({ top: y + 'px', left: x + 'px' }).css({ 'transform': 'scale(1.8)' });

                //reset ripple deletion timer
                clearTimeout(rplDelTimer);
            }

            function rippleOpen() {
                rplObj.prepend('<span class="ink"></span>'); //create ripple		
                ink = rplObj.find('.ink'); //create variable for ink span
                ink.css('background', color); //set ripple color to color variable

                //set diameter of ripple
                if (!ink.height() && !ink.width()) {
                    //set diameter to parents width/height (whichever is larger)
                    d = Math.max(rplObj.outerWidth(), rplObj.outerHeight());
                    ink.css({ height: d, width: d });
                }

                //set coordinates of ripple using position of mouse defined earlier
                x = rplObj.offset();
                y = rplObj.offset();

                //set the position and animate the expansion
                ink.css({ top: y + 'px', left: x + 'px' }).css({ 'transform': 'scale(1.8)' });

                //reset ripple deletion timer
                clearTimeout(rplDelTimer);
            }

        });