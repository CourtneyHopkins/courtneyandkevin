<?php get_header(); ?>
<section class="hp-opening internal-header">
    <div class="header clearfix">
        <div class="menu-outer-border clearfix">
            <div class="menu-border clearfix">
                <div class="desktop-nav-catch">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.png" class="mobile-logo show-for-small-only" alt="" />
                    <ul class="menu">
                        <li><a href="/" rel="" class="field-note"><span>01. &nbsp;</span>Home</a></li>
                        <li><a href="/the-proposal/" rel="" class="field-note"><span>02. &nbsp;</span>The Proposal</a></li>
                        <li><a href="/the-wedding/" rel="" class="field-note"><span>03. &nbsp;</span>The Wedding</a></li>
                        <li><a href="/galleries/" rel="" class="field-note"><span>04. &nbsp;</span>Galleries</a></li>
                        <li><a href="/field-notes/" rel="" class="field-note"><span>05. &nbsp;</span>Field Notes</a></li>
                    </ul>
                </div>    
                <div class="right show-for-small-only mobile-menu-button clearfix">
                    <a class="right-off-canvas-toggle" href="#">menu</a>
                </div>
            </div>
        </div>    
    </div>
    <aside class="right-off-canvas-menu mobile-nav-catch"></aside>
    <div class="row">
        <h1 class="page-title text-center">The Wedding</h1>
    </div> 
</section>
<div class="row page-wrapper">
    <div class="page-inner-wrapper clearfix">
        <div class="small-12 columns">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="clearfix">
                    <div class="green-wrapper clearfix">
                        <div class="green-wrapper-border clearfix">
                            <div class="green-wrapper-border-inner clearfix">
                                <div class="small-12 columns text-center vertical-spacing wedding-meta">
                                    <h2>Saturday, May 14th, 2016</h2>
                                    <p>4:00pm &nbsp;|&nbsp; Gaie Lea &nbsp;|&nbsp; Staunton, VA</p>
                                    <!-- <a href="#" class="button"><span>RSVP Now</span></a> -->
                                </div>
                            </div>
                        </div>        
                    </div> 
                    <div class="show-for-medium-up">
                        <ul class="tabs vertical" data-tab>
                            <li class="tab-title active"><a href="#panel11">The Venue</a></li>
                            <li class="tab-title"><a href="#panel21">Accommodations</a></li>
                            <li class="tab-title"><a href="#panel31">Local Activities</a></li>
                            <li class="tab-title"><a href="#panel41">Registry</a></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="content active" id="panel11">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/venue.jpg" alt="Gaie Lea" />
                                        <div class="row">
                                            <div class="small-12 large-8 columns vertical-spacing">
                                                <p><strong>Both the wedding and reception will be held at Gaie Lea</strong>, an estate home built in 1952 and situated in Virginia’s historic Shenandoah Valley.</p>
                                                <p>The ceremony will be held in the home's <strong>front yard</strong> with panoramic views of the 200 acre farm and the Blue Ridge mountains.</p>
                                                <p>The reception will be help on the property's <strong>pavilion</strong>, overlooking a pond, with a yard that will have games during cocktail hour and a firepit for smore's later in the evening.</p>
                                                <p>
                                                    <a href="http://www.gaielea.com" class="button" target="_blank"><span>Explore the venue</span></a>
                                                    <a href="https://www.google.com/maps/place/267+Bells+Ln,+Staunton,+VA+24401/@38.1701253,-79.0353537,17z/data=!3m1!4b1!4m2!3m1!1s0x89b4a039838c4029:0x16306c2816ba72f6" class="button" target="_blank"><span>See Map</span></a>
                                                </p>
                                                <h3>Rain Contingency Plan</h3>
                                                <p>In the event of rain that day, we will move the ceremony into the pavilion where the reception will also be held. We will keep everyone posted that day as to what the plan will be based on the weather.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content" id="panel21">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/holiday-inn.jpg" alt="Gaie Lea" />
                                        <div class="row">
                                            <div class="small-12 large-8 columns vertical-spacing">
                                                <p>For your convenience, we have reserved a block of rooms for Friday and Saturday night at the <a href="http://www.ihg.com/holidayinn/hotels/us/en/staunton/shdva/hoteldetail" target="_blank">Holiday Inn Staunton Conference Center</a>, which is 5 minutes away from our wedding venue.</p>
                                                <p>In order to reserve a room at our reserved discount, please book by April 14, 2016. Once you have chosen your date(s) of stay, under "Have a Group Code?", enter our wedding code: <strong>H81</strong></p>
                                                <p>Check in will be at 3:00pm and check out at 11:00am</p>
                                                <p>The ceremony will begin at 4:00pm which gives guests who do not wish to come the night before an hour to check in and make their way to the ceremony, which is only a 5 minute drive away.</p>
                                                <p>
                                                    <a href="http://www.ihg.com/holidayinn/hotels/us/en/staunton/shdva/hoteldetail" class="button" target="_blank"><span>Book a room</span></a>
                                                    <a href="https://www.google.com/maps/place/Holiday+Inn+Staunton+Conference+Center/@38.1688517,-79.0098228,17z/data=!3m1!4b1!4m2!3m1!1s0x89b49f859cd6828b:0x276f91827f09873d" class="button" target="_blank"><span>See Map</span></a>
                                                </p>
                                                <hr>
                                                <p><strong>For those guests who wish to stay elsewhere, here is a list of other hotels in the surrounding area of a variety of price points:</strong></p><br>
                                                <div class="acc-list-group">
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/stonewall.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Stonewall Jackson Hotel</h3>
                                                            <p>Originally opened in 1924, this traditional conference hotel is a 3-minute walk from Staunton Amtrak and an 8-minute walk from Wilson Park.</p>
                                                            <a href="http://www.stonewalljacksonhotel.com/" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/hampton.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Hampton Inn Staunton</h3>
                                                            <p>This modern hotel is a 4-minute walk from the Staunton Mall and a 1.4-mile drive from the Frontier Culture Museum.</p>
                                                            <a href="http://hamptoninn3.hilton.com/en/hotels/virginia/hampton-inn-staunton-SHDVAHX/index.html" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/bestw.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Best Western Staunton Inn</h3>
                                                            <p>Off Interstate 81, this straightforward hotel is 2.1 miles from the Frontier Culture Museum, and 3.3 miles from the American Shakespeare Center.</p>
                                                            <a href="http://book.bestwestern.com/bestwestern/US/VA/Staunton-hotels/BEST-WESTERN-Staunton-Inn/Hotel-Overview.do?propertyCode=47081&cm_mmc=BL-_-Google-_-GMB-_-47081" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/comfort.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Comfort Inn</h3>
                                                            <p>This straightforward 5-story hotel in the Shenandoah Valley is off Interstate 81, 2.5 miles from the Woodrow Wilson Presidential Library in Downtown Staunton. The Frontier Culture Museum is 1.2 miles away.</p>
                                                            <a href="https://www.choicehotels.com/virginia/staunton/comfort-inn-hotels/va433?source=gglocaloz" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/sleep.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Sleep Inn</h3>
                                                            <a href="https://www.choicehotels.com/virginia/staunton/sleep-inn-hotels/va289?source=gglocaloz" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/red.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Red Roof Inn Staunton</h3>
                                                            <a href="https://www.redroof.com/property/Staunton/VA/24401/Hotels-close-to-Shenandoah-Valley-Regional-Airport-I-81/RRI706/" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 medium-4 large-2 columns show-for-medium-up">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/days.jpg" alt="" />
                                                        </div>
                                                        <div class="small-12 medium-8 large-10 columns show-for-medium-up acc-text">
                                                            <h3>Days Inn Staunton North</h3>
                                                            <p>This straightforward low-rise hotel off Interstate 81 is adjacent to the Club at Ironwood golf course, a 9-minute drive from the Woodrow Wilson Presidential Library and Museum, and 17.3 miles from the Grand Caverns.</p>
                                                            <a href="http://www.daysinn.com/hotels/virginia/staunton/days-inn-staunton-north/hotel-overview?cid=local" class="button" target="_blank"><span>Book a room</span></a>
                                                        </div>    
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content" id="panel31">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/Downtown-Staunton.jpg" alt="Gaie Lea" />
                                        <div class="row">
                                            <div class="small-12 large-8 columns vertical-spacing">
                                                <p>Both the wedding and reception will be held at Gaie Lea, an estate home built in 1952 and situated in Virginia’s historic Shenandoah Valley.</p>
                                                <p>The ceremony will be held in the home's front yard with panoramic views of the 200 acre farm and the Blue Ridge mountains.</p>
                                                <p>The reception will be help on the property's pavilion, overlooking a pond, with a yard that will have games during cocktail hour and a firepit for smore's later in the evening.</p>
                                                <p>
                                                    <a href="https://www.google.com/maps/place/Staunton,+VA/@38.1592754,-79.0629105,13z/data=!3m1!4b1!4m2!3m1!1s0x89b4a08eb8621697:0xe5d6e4710a09b66e" class="button" target="_blank"><span>See map of Staunton, VA</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content" id="panel41">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/zola_registry.jpg" alt="Gaie Lea" />
                                        <div class="row">
                                            <div class="small-12 large-8 columns vertical-spacing">
                                                <p>We are registered at Zola. Zola is an innovative Registry that is transforming how couples and guests share, buy, and ship wedding gifts.</p>
                                                <h3>Here's a video of how it works:</h3>
                                                <div class="flex-video">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ysI8hmJaj4s" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                                <br>
                                                <p class="text-center">
                                                    <a href="https://www.zola.com/" class="button" target="_blank"><span>See our Registry</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="show-for-small-only">
                        <ul class="accordion" data-accordion>
                            <li class="accordion-navigation">
                                <a href="#panel1a">The Venue</a>
                                <div id="panel1a" class="content">
                                    <p><strong>Both the wedding and reception will be held at Gaie Lea</strong>, an estate home built in 1952 and situated in Virginia’s historic Shenandoah Valley.</p>
                                    <p>The ceremony will be held in the home's <strong>front yard</strong> with panoramic views of the 200 acre farm and the Blue Ridge mountains.</p>
                                    <p>The reception will be help on the property's <strong>pavilion</strong>, overlooking a pond, with a yard that will have games during cocktail hour and a firepit for smore's later in the evening.</p>
                                    <p>
                                        <a href="http://www.gaielea.com" class="button" target="_blank"><span>Explore the venue</span></a>
                                        <a href="https://www.google.com/maps/place/267+Bells+Ln,+Staunton,+VA+24401/@38.1701253,-79.0353537,17z/data=!3m1!4b1!4m2!3m1!1s0x89b4a039838c4029:0x16306c2816ba72f6" class="button" target="_blank"><span>See Map</span></a>
                                    </p>
                                    <h3>Rain Contingency Plan</h3>
                                    <p>In the event of rain that day, we will move the ceremony into the pavilion where the reception will also be held. We will keep everyone posted that day as to what the plan will be based on the weather.</p>
                                </div>
                            </li>
                            <li class="accordion-navigation">
                                <a href="#panel2a">Accommodations</a>
                                <div id="panel2a" class="content">
                                    <p>For your convenience, we have reserved a block of rooms for Friday and Saturday night at the <a href="http://www.ihg.com/holidayinn/hotels/us/en/staunton/shdva/hoteldetail" target="_blank">Holiday Inn Staunton Conference Center</a>, which is 5 minutes away from our wedding venue.</p>
                                    <p>In order to reserve a room at our reserved discount, please book by April 14, 2016. Once you have chosen your date(s) of stay, under "Have a Group Code?", enter our wedding code: <strong>H81</strong></p>
                                    <p>Check in will be at 3:00pm and check out at 11:00am</p>
                                    <p>The ceremony will begin at 4:00pm which gives guests who do not wish to come the night before an hour to check in and make their way to the ceremony, which is only a 5 minute drive away.</p>
                                    <p>
                                        <a href="http://www.ihg.com/holidayinn/hotels/us/en/staunton/shdva/hoteldetail" class="button" target="_blank"><span>Book a room</span></a>
                                        <a href="https://www.google.com/maps/place/Holiday+Inn+Staunton+Conference+Center/@38.1688517,-79.0098228,17z/data=!3m1!4b1!4m2!3m1!1s0x89b49f859cd6828b:0x276f91827f09873d" class="button" target="_blank"><span>See Map</span></a>
                                    </p>
                                    <hr>
                                    <p><strong>For those guests who wish to stay elsewhere, click here for a list of other hotels in the surrounding area of a variety of price points:</strong></p><br>
                                    <a href="" class="button"><span>Staunton Hotel List</span></a>
                                    <!-- <div class="acc-list-group">
                                        <h3>Stonewall Jackson Hotel</h3>
                                        <p>Originally opened in 1924, this traditional conference hotel is a 3-minute walk from Staunton Amtrak and an 8-minute walk from Wilson Park.</p>
                                        <a href="http://www.stonewalljacksonhotel.com/" class="button" target="_blank"><span>Book a room at the Stonewall Jackson Hotel</span></a>
                                        <h3>Hampton Inn Staunton</h3>
                                        <p>This modern hotel is a 4-minute walk from the Staunton Mall and a 1.4-mile drive from the Frontier Culture Museum.</p>
                                        <a href="http://hamptoninn3.hilton.com/en/hotels/virginia/hampton-inn-staunton-SHDVAHX/index.html" class="button" target="_blank"><span>Book a room at the Hampton Inn Staunton</span></a>
                                        <h3>Best Western Staunton Inn</h3>
                                        <p>Off Interstate 81, this straightforward hotel is 2.1 miles from the Frontier Culture Museum, and 3.3 miles from the American Shakespeare Center.</p>
                                        <a href="http://book.bestwestern.com/bestwestern/US/VA/Staunton-hotels/BEST-WESTERN-Staunton-Inn/Hotel-Overview.do?propertyCode=47081&cm_mmc=BL-_-Google-_-GMB-_-47081" class="button" target="_blank"><span>Book a room at the Best Western Staunton Inn</span></a>
                                        <h3>Comfort Inn</h3>
                                        <p>This straightforward 5-story hotel in the Shenandoah Valley is off Interstate 81, 2.5 miles from the Woodrow Wilson Presidential Library in Downtown Staunton. The Frontier Culture Museum is 1.2 miles away.</p>
                                        <a href="https://www.choicehotels.com/virginia/staunton/comfort-inn-hotels/va433?source=gglocaloz" class="button" target="_blank"><span>Book a room at the Comfort Inn</span></a>
                                        <h3>Sleep Inn</h3>
                                        <a href="https://www.choicehotels.com/virginia/staunton/sleep-inn-hotels/va289?source=gglocaloz" class="button" target="_blank"><span>Book a room at the Sleep Inn</span></a>
                                        <h3>Red Roof Inn Staunton</h3>
                                        <a href="https://www.redroof.com/property/Staunton/VA/24401/Hotels-close-to-Shenandoah-Valley-Regional-Airport-I-81/RRI706/" class="button" target="_blank"><span>Book a room at the Red Roof Inn Staunton</span></a>
                                        <h3>Days Inn Staunton North</h3>
                                        <p>This straightforward low-rise hotel off Interstate 81 is adjacent to the Club at Ironwood golf course, a 9-minute drive from the Woodrow Wilson Presidential Library and Museum, and 17.3 miles from the Grand Caverns.</p>
                                        <a href="http://www.daysinn.com/hotels/virginia/staunton/days-inn-staunton-north/hotel-overview?cid=local" class="button" target="_blank"><span>Book a room at the Days Inn Staunton North</span></a>
                                    </div> -->
                                </div>
                            </li>
                            <li class="accordion-navigation">
                                <a href="#panel3a">Local Activities</a>
                                <div id="panel3a" class="content">
                                    Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                            <li class="accordion-navigation">
                                <a href="#panel4a">Registry</a>
                                <div id="panel4a" class="content">
                                    Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>    
    </div>    
</div>    
<?php get_footer(); ?>
