
(function() {
    var idToInfotext = [
        {id: "about", text: "Display info about me..."},
        {id: "cv", text: "Open my CV in a new tab..."},
        {id: "projects", text: "Display info about my projects..."},
        {id: "music", text: "Enable/disable music..."},
        {id: "contact", text: "My contact information..."}
    ];
    
    idToInfotext.map(function(idAndInfo) {
        var updateDisplayTextFn = function() {
            $("#infodisplay").html(idAndInfo.text);
        };
        
        $("#" + idAndInfo.id).mouseover(updateDisplayTextFn);
        
        $("#" + idAndInfo.id).focusin(updateDisplayTextFn);
    });
    
})();