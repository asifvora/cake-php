<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="utf-8" />
        <?= $this->Html->charset()?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Medical Technology</title>

        <?= $this->Html->css('bootstrap.min.css')?>
        <?= $this->Html->css('style.css')?>
        <?= $this->Html->css('media.css')?>
        <?= $this->Html->css('animate.css')?>
        <?= $this->Html->css('base.css')?>
        <?= $this->Html->css('fancySelect.css')?>
        <?= $this->Html->css('cake.css')?>
        <?= $this->Html->css('datepicker/dcalendar.picker.css')?>
        <?= $this->Html->css('fancybox/source/helpers/jquery.fancybox-buttons.css')?>
        <?= $this->Html->css('fancybox/source/helpers/jquery.fancybox-thumbs.css')?>
        <?= $this->Html->css('fancybox/source/jquery.fancybox.css')?>

    </head>
    <body>
        <header>
            <div class="wrapper">

                <div class="logo">
                    <a href="#">
                        <?= $this->Html->image('logo.png')?>
                    </a>
                </div>
                <div class="header_rightside">
                    <!--<div class="search">
                      <input name="" type="text"  value=""  placeholder="Search"/>
                    </div>-->
                    <div class="search">
                        <div class="search-mob">
                            <!--                            <form method="get" id="searchform" action="#"> 
                                                            <div>
                            
                                                                <input type="hidden" id="searchsubmit"> 
                                                                    <input type="text" class="input searchoption" value="Search" name="s"  placeholder="Search" id="s" onblur="if ( this.value == '' ) {
                                                                                this.value = '' ;
                                                                            }" onfocus="if ( this.value == 'Search' ) {
                                                                                        this.value = '' ;
                                                                                    }">
                                                                        <input type="submit" class="submit" value="">
                                                                            </div>
                                                                            </form>-->
                        </div>
                    </div>
                    <div class="social_icon">
                        <ul>
                            <li>
                                <a href="#">
                                    <?= $this->Html->image('facebook_icon.jpg')?>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <?= $this->Html->image('tweeter_icon.jpg')?>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <?= $this->Html->image('googleplus_icon.jpg')?>
                                </a>
                            </li>
                            <li>
                                <?= $this->Html->link(__('LogOut'), ['controller'=>'Users', 'action'=>'logout'])?>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>

