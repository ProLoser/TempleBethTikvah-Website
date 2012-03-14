$(document).ready(function(){
	// Install WYMEditor on all textareas
    $('textarea').wymeditor({
        skin: 'refresh', // Compact skin was customized for use with Refresh
		updateSelector: ':submit',		// Hook the update to all submit buttons
    });
});