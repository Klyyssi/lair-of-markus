var $ = require("jquery");
require("jquery-ui");

module.exports = function() {
    var idToDialogData = [
        {dialogId: "about-dialog", btnId: "about", width:500, height: 500},
        {dialogId: "music-dialog", btnId: "music", width:300, height: 250},
        {dialogId: "projects-dialog", btnId: "projects", width:450, height: 250},
        {dialogId: "contact-dialog", btnId: "contact", width:450, height: 250}
    ];
    
    var createDialog = function(dialogData) {
        $( "#" + dialogData.dialogId ).dialog({
            resizable: false,
            autoOpen: false,
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
};