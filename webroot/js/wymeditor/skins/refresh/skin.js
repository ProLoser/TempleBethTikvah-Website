WYMeditor.SKINS['refresh'] = {
    init: function(wym) {
	
	/*** STRIKETHROUGH BUTTON BEGIN ***/
		//construct the button's html
		var html = "<li class='wym_tools_delete'>"
                 + "<a name='Delete' href='#'>"
                 + "Delete"
                 + "</a></li>";

		//add the button to the tools box
        jQuery(wym._box)
        .find(wym._options.toolsSelector + wym._options.toolsListSelector)
        .prepend(html);

		//handle click event
        jQuery(wym._box)
        .find('li.wym_tools_delete a').click(function() {
            //do something
            wym.wrap('<del>', '</del>');
            return(false);
        });
	/*** STRIKETHROUGH BUTTON END ***/
    
        //move the containers panel to the top area
        jQuery(wym._options.containersSelector + ', '
          + wym._options.classesSelector, wym._box)
          .appendTo( jQuery("div.wym_area_top", wym._box) )
          .addClass("wym_dropdown");

        //render following sections as buttons
        jQuery(wym._options.toolsSelector, wym._box)
          .addClass("wym_buttons");

        //make hover work under IE < 7
        jQuery(".wym_section", wym._box).hover(function(){
          jQuery(this).addClass("hover");
        },function(){
          jQuery(this).removeClass("hover");
        });

        var postInit = wym._options.postInit;
        wym._options.postInit = function(wym) {
	
            if (postInit) postInit.call(wym, wym);
            var rule = {
                name: 'body',
                css: 'background-color: #f0f0f0;'
            };
            wym.addCssRule( wym._doc.styleSheets[0], rule);
        };
    }
};