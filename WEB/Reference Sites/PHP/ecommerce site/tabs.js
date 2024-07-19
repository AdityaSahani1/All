$(document).ready(function() {
    bindTabListeners();
});
function bindTabListeners(_ul) {
    var _parent = (_ul) ? _ul : "tab";
    $("ul." + _parent + "-header > li > a").click(function() {
        var _parent = $(this).parent('li').parent("ul");
    	if($(this).parent('li').hasClass('active')) return false;
    	else {
            _parent.children('.active').removeClass('active');
    		$(this).parent('li').addClass('active');
    		
            var _index = _parent.children("li").children("a").index(this);
            var _content = _parent.next('ul.' + _parent + '-content');   
    		_content.children("li.active").hide().removeClass('active');
            $(_content.children("li").get(_index)).show().addClass('active');
    		return false;
    	}
    });    
}
