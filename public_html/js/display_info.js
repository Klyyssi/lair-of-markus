var $ = require("jquery");

module.exports = function() {
    var idToInfotext = [
        {id: "about", text: "Display info about me..."},
        {id: "cv", text: "Open my CV in a new tab..."},
        {id: "projects", text: "Display info about my projects..."},
        {id: "music", text: "Enable/disable music..."},
        {id: "contact", text: "My contact information..."}
    ];
    
    var addMouseOverAndFocusInListeners = function(idAndText) {
        var updateDisplayTextFn = function() {
            $("#infodisplay").html(idAndText.text);
        };
        
        $("#" + idAndText.id).mouseover(updateDisplayTextFn);
        
        $("#" + idAndText.id).focusin(updateDisplayTextFn);
    };
        
    idToInfotext.forEach(addMouseOverAndFocusInListeners);
};