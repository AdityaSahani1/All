$(function() {
   $(".open-modal").click(function() {
       if($(this).attr("rel")!="" && !$(".popup-container").get(0)) {
           var _source = $(this).attr("rel").toString();
           $("#container").after('<div class="popup-container"></div>');
           $('.popup-container').css({
               'top': $(document).scrollTop() + 25 + 'px'
           }).load(_source,null,function() {
               $(".close-modal").click(function() {
                   $(".popup-container").remove();
                   $('.modal-overlay').remove();
                   if ($.browser.msie && $.browser.version.substr(0,1)<7) {
                       $('input.replace-select').remove();
                       $('select').not($(".divlayer select")).css({'display':'inline'});
                   } 
                   return false;
               });
               if ($.browser.msie && $.browser.version.substr(0,1)<7) {
                   $("select").not($(".divlayer select")).each( function() {
                       var field = $("<input class='replace-select' />");
                       field.css({
                           'width':$(this).width()+"px"
                       });
                       field.val($(this).val());
                       $(this).before(field);
                   });
                   $('select').not($(".divlayer select")).css({'display':'none'});
               }
           });
       }
       return false;
   });
   $(".open-insert").toggle(
       function() {
           if ($(this).attr("rel") != "") {
                var _source = $(this).attr("rel").toString();
                var _parent = $(this).parent().parent();
                _parent.after("<"+_parent.get(0).tagName+" class=\"overlay-insert\"></+_parent.get(0).tagName+>");
                $(".overlay-insert").load(_source,null,function(){
                    $(".insertlayer").show("slow");
                });
           }
           return false;
       },
       function() {
           $(".insertlayer").hide("fast", function() {
               $(".overlay-insert").remove();
           });
           return false;
       }
   );
});
