/* COPYRIGHT
------------------------------------------------------------------  
  Omni Magazine for Drupal 8.x - Version 1.0                           
  Copyright (C) 2016 esors.com All Rights Reserved.           
  @license - Copyrighted Commercial Software                   
------------------------------------------------------------------  
  Theme Name: Omni Magazine                                            
  Author: ESORS                                           
  Date: 15th February 2016                                        
  Website: http://www.esors.com/                              
------------------------------------------------------------------  
  This file may not be redistributed in whole or   
  significant part.                                            
----------------------------------------------------------------*/

(function(jQuery) {
    

  jQuery().ready(function() { 
    
    jQuery('#primary-list').smartmenus({
      subIndicatorsText: ''
    });
      
    jQuery('#primary-mega').smartmenus({
      subIndicatorsText: '',
    });
    
    jQuery('.menu-button.list').click(function() {
      var $this = jQuery(this),
          $menu = jQuery('#primary-list');
      if ($menu.is(':animated')) {
        return false;
      }
      if (!$this.hasClass('collapsed')) {
        $menu.slideUp(250, function() { jQuery(this).addClass('collapsed').css('display', ''); });
        $this.addClass('collapsed');
      } else {
        $menu.slideDown(250, function() { jQuery(this).removeClass('collapsed'); });
        $this.removeClass('collapsed');
      }
      return false;
    }); 
    
    jQuery('.menu-button.mega').click(function() {
      var $this = jQuery(this),
          $menu = jQuery('#primary-mega');
      if ($menu.is(':animated')) {
        return false;
      }
      if (!$this.hasClass('collapsed')) {
        $menu.slideUp(250, function() { jQuery(this).addClass('collapsed').css('display', ''); });
        $this.addClass('collapsed');
      } else {
        $menu.slideDown(250, function() { jQuery(this).removeClass('collapsed'); });
        $this.removeClass('collapsed');
      }
      return false;
    });   
  
    jQuery('#primary .pab-grid .column > .inner').matchHeight();    
  
    jQuery('.pab-category.base .column').matchHeight();
    
    jQuery('.pab-category.grid .column .inner').matchHeight();
    
    jQuery('#secondary > .block > .inner').matchHeight({ property: 'min-height' });
    
    jQuery('#tertiary > .block > .inner').matchHeight({ property: 'min-height' }); 
    
    jQuery('.slider-basic').slick({ 
      dots: true,
      adaptiveHeight: true
    });   
    
    jQuery('.slider-headline').slick({ 
      dots: true,
      adaptiveHeight: true
    });
    
    jQuery('.slider-thumbnail').slick({ 
      dots: true,
      adaptiveHeight: true,
      asNavFor: '.pager-thumbnail'
    });
    
    jQuery('.pager-thumbnail').slick({
      asNavFor: '.slider-thumbnail',
      arrows: true,
      dots: false,
      adaptiveHeight: true,
      focusOnSelect: true   
    });
    
    jQuery('.slider-playlist').slick({ 
      dots: true,
      asNavFor: '.pager-playlist'
    });
    
    jQuery('.pager-playlist').slick({
      asNavFor: '.slider-playlist',
      dots: false,
      vertical: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1441,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
        
    jQuery('.slider-gallery').slick({ 
      adaptiveHeight: true
    });
    
    jQuery('.slider-newsflash').slick({ 
      arrows: false,
      adaptiveHeight: true,
      vertical: true
    });       
    
    jQuery('.slider-merging').slick({ 
      arrows: true,
      dots: false,
      slidesToShow: 1,
      adaptiveHeight: true
    });
    
    jQuery(".tab_nav li").click(function(e){
      if (!jQuery(this).hasClass("active")) {
        var tabNum = jQuery(this).index();
        var nthChild = tabNum+1;
        
        jQuery(this).addClass("active").siblings('li').removeClass('active');        
        jQuery(this).parent().next().children("li.active").removeClass('active');
        jQuery(this).parent().next().children("li:nth-child("+nthChild+")").addClass("active");
      }
    });
    
    jQuery('ul.accordion .content').hide();
	  jQuery('ul.accordion .active .content').show();
    jQuery('ul.accordion .active h3').addClass('selected');

    jQuery('ul.accordion h3').click(function(){
      if (jQuery(this).hasClass('selected')) {
        jQuery(this).removeClass('selected');
        jQuery(this).siblings(".content").slideUp();
      } else {
        jQuery('ul.accordion h3').removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery('ul.accordion .content').slideUp();
        jQuery(this).siblings(".content").slideDown();
      }
      return false;
    });
    
  }); 
    
})(jQuery);
