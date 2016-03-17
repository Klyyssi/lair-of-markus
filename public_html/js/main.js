
//setup dialogs
(function() {
    
    var idToDialogData = [
        {dialogId: "about-dialog", btnId: "about", width:650, height: 400},
        {dialogId: "music-dialog", btnId: "music", width:300, height: 150},
        {dialogId: "projects-dialog", btnId: "projects", width:450, height: 250},
        {dialogId: "contact-dialog", btnId: "contact", width:450, height: 250}
    ];
    
    var createDialog = function(dialogData) {
        $( "#" + dialogData.dialogId ).dialog({
            resizable: true,
            autoOpen: false,
            draggable: false,
            dialogClass: "no-close",
            width: dialogData.width,
            height: dialogData.height,
            buttons: [
                {
                  text: "OK",
                  click: function() {
                    $( this ).dialog( "close" );
                  }
                }
            ]
        });
    };
    
    var addDialogOpenHandler = function(dialogData) {
        $("#" + dialogData.btnId ).click(function(event) {
            event.preventDefault();
            $("#" + dialogData.dialogId).dialog("open");
        });
    };
    
    idToDialogData.forEach(function(data) {
        createDialog(data);
        addDialogOpenHandler(data);
    });
})();

(function() {
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
    
})();
