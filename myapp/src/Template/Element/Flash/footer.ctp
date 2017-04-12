
<footer>
    <div class="wrapper">
        <div class="goto_top"><a href="#"><?= $this->Html->image('goto_top.jpg')?></a></div>
        <div class="mts_footer">
            <ul class="footer_menu">
                <li><a href="/pages/">Home</a></li>
                <li><a href="/pages/about">About Us</a></li> 
                <li ><a href="/pages/contact">Contact Us</a></li>
                <li><a href="/categories">Categories</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><?php echo $this->Html->link('Rahul', '#/rahul');?></li>
                <li><?php echo $this->Html->link('Asif', '#/asif');?></li>
                <li><?php echo $this->Html->link('Red', '#/red');?></li>




            </ul>
            <div class="copyright">Copyright &copy; 2014 <span>Sechel Ventures</span> </div></div>
    </div>

</footer>                  

<?= $this->Html->script('jquery.js')?>
<?= $this->Html->script('html5shiv.js')?>
<?= $this->Html->script('cssua.min.js')?>
<?= $this->Html->script('jquery-latest.js')?>
<?= $this->Html->script('jquery.nicescroll.min.js')?>
<?= $this->Html->script('jquery.jribbble-1.0.1.ugly.js')?>
<?= $this->Html->script('wow.min.js')?>
<?= $this->Html->script('message.js')?>
<?= $this->Html->script('datepicker/jquery-3.2.0.js')?>
<?= $this->Html->script('datepicker/dcalendar.picker.js')?>
<?= $this->Html->script('ng/1.5.6-angular-route.min.js')?>
<?= $this->Html->script('ng/1.5.6-angular.min.js')?>
<?= $this->Html->script('ng/ng/app/app.js')?>
<?= $this->Html->script('fancybox/source/helpers/jquery.fancybox-buttons.js')?>
<?= $this->Html->script('fancybox/source/helpers/jquery.fancybox-media.js')?>
<?= $this->Html->script('fancybox/source/helpers/jquery.fancybox-thumbs')?>
<?= $this->Html->script('fancybox/source/jquery.fancybox.js')?>
<?= $this->Html->script('fancybox/source/jquery.fancybox.pack.js')?>
<?= $this->Html->script('model/rmodal.js')?>



<script type="text/javascript">
    /*window.onload = function () {
        var modal = new RModal ( document.getElementById ( 'modal' ) , {
            //content: 'Abracadabra'
            beforeOpen : function ( next ) {
                console.log ( 'beforeOpen' ) ;
                next () ;
            }
            , afterOpen : function () {
                console.log ( 'opened' ) ;
            }

            , beforeClose : function ( next ) {
                console.log ( 'beforeClose' ) ;
                next () ;
            }
            , afterClose : function () {
                console.log ( 'closed' ) ;
            }
            // , bodyClass: 'modal-open'
            // , dialogClass: 'modal-dialog'
            // , dialogOpenClass: 'animated fadeIn'
            // , dialogCloseClass: 'animated fadeOut'

            // , focus: true
            // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

            // , escapeClose: true
        } ) ;

        document.addEventListener ( 'keydown' , function ( ev ) {
            modal.keydown ( ev ) ;
        } , false ) ;

        document.getElementById ( 'showModal' ).addEventListener ( "click" , function ( ev ) {
            ev.preventDefault () ;
            modal.open () ;
        } , false ) ;

        window.modal = modal ;
    }*/
</script>
<script>

    /*var app = angular.module ( "mainApp" , [ "ngRoute" ] ) ;
    app.config ( function ( $routeProvider ) {
        $routeProvider
                .when ( "/" , {
                    templateUrl : "employees/home.ctp" ,
                    controller : 'EmployeesController'

                } )
                .when ( "/asif" , {
                    templateUrl : "employees/asif.ctp" ,
                    controller : 'EmployeesController'

                } )
                .when ( "/red" , {
                    templateUrl : "employees/red.html"

                } )
                .when ( "/rahul" , {
                    templateUrl : "employees/rahul.ctp" ,
                    controller : 'EmployeesController'

                } ) ;
    } ) ;*/
</script>

<script type="text/javascript">
    $ ( document ).ready ( function () {
        /*
         *  Simple image gallery. Uses default settings
         */

        $ ( '.fancybox' ).fancybox () ;

        /*
         *  Different effects
         */

        // Change title type, overlay closing speed
        $ ( ".fancybox-effects-a" ).fancybox ( {
            helpers : {
                title : {
                    type : 'outside'
                } ,
                overlay : {
                    speedOut : 0
                }
            }
        } ) ;

        // Disable opening and closing animations, change title type
        $ ( ".fancybox-effects-b" ).fancybox ( {
            openEffect : 'none' ,
            closeEffect : 'none' ,
            helpers : {
                title : {
                    type : 'over'
                }
            }
        } ) ;

        // Set custom style, close if clicked, change title type and overlay color
        $ ( ".fancybox-effects-c" ).fancybox ( {
            wrapCSS : 'fancybox-custom' ,
            closeClick : true ,
            openEffect : 'none' ,
            helpers : {
                title : {
                    type : 'inside'
                } ,
                overlay : {
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            }
        } ) ;

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $ ( ".fancybox-effects-d" ).fancybox ( {
            padding : 0 ,
            openEffect : 'elastic' ,
            openSpeed : 150 ,
            closeEffect : 'elastic' ,
            closeSpeed : 150 ,
            closeClick : true ,
            helpers : {
                overlay : null
            }
        } ) ;

        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */

        $ ( '.fancybox-buttons' ).fancybox ( {
            openEffect : 'none' ,
            closeEffect : 'none' ,
            prevEffect : 'none' ,
            nextEffect : 'none' ,
            closeBtn : false ,
            helpers : {
                title : {
                    type : 'inside'
                } ,
                buttons : { }
            } ,
            afterLoad : function () {
                this.title = 'Image ' + ( this.index + 1 ) + ' of ' + this.group.length + ( this.title ? ' - ' + this.title : '' ) ;
            }
        } ) ;


        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $ ( '.fancybox-thumbs' ).fancybox ( {
            prevEffect : 'none' ,
            nextEffect : 'none' ,
            closeBtn : false ,
            arrows : false ,
            nextClick : true ,
            helpers : {
                thumbs : {
                    width : 50 ,
                    height : 50
                }
            }
        } ) ;

        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
         */
        $ ( '.fancybox-media' )
                .attr ( 'rel' , 'media-gallery' )
                .fancybox ( {
                    openEffect : 'none' ,
                    closeEffect : 'none' ,
                    prevEffect : 'none' ,
                    nextEffect : 'none' ,
                    arrows : false ,
                    helpers : {
                        media : { } ,
                        buttons : { }
                    }
                } ) ;

        /*
         *  Open manually
         */

        $ ( "#fancybox-manual-a" ).click ( function () {
            $.fancybox.open ( '1_b.jpg' ) ;
        } ) ;

        $ ( "#fancybox-manual-b" ).click ( function () {
            $.fancybox.open ( {
                href : 'iframe.html' ,
                type : 'iframe' ,
                padding : 5
            } ) ;
        } ) ;

        $ ( "#fancybox-manual-c" ).click ( function () {
            $.fancybox.open ( [
                {
                    href : '1_b.jpg' ,
                    title : 'My title'
                } , {
                    href : '2_b.jpg' ,
                    title : '2nd title'
                } , {
                    href : '3_b.jpg'
                }
            ] , {
                helpers : {
                    thumbs : {
                        width : 75 ,
                        height : 50
                    }
                }
            } ) ;
        } ) ;


    } ) ;
</script>

</body>
</html>
