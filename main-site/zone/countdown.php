<?php ?>

<div id="counter" class="countdown countdown-container container"
     data-start="<?php echo time(); ?>"
     data-end="1669352400"
     data-now="<?php echo time(); ?>"
     data-border-color="rgba(255, 255, 255, .8)">
    <div class="clock row">
        <div class="clock-item clock-days countdown-time-value col-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-days" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-days type-time">DAYS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-hours countdown-time-value col-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-hours" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-hours type-time">HOURS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-minutes countdown-time-value col-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-minutes" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-minutes type-time">MINUTES</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->

        <div class="clock-item clock-seconds countdown-time-value col-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas-seconds" class="clock-canvas"></div>

                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-seconds type-time">SECONDS</p>
                    </div><!-- /.text -->
                </div><!-- /.inner -->
            </div><!-- /.wrap -->
        </div><!-- /.clock-item -->
    </div><!-- /.clock -->
</div><!-- /.countdown-wrapper -->


<link rel="stylesheet" type="text/css" href="/wp-content/themes/zone/countdown/demo.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/zone/countdown/kinetic.js"></script>
<script type="text/javascript" src="/wp-content/themes/zone/countdown/jquery.final-countdown.js"></script>
<script type="text/javascript">  
    $('document').ready(function() {
        'use strict';
        
    	$('.countdown').final_countdown({
    		'start': <?php echo time(); ?>,
            'end': 1669370400,   
            'now': <?php echo time(); ?>,
                
        });
    });
</script>