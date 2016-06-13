var $ = require("jquery");
require("jquery-ui");

module.exports = function() {
    var idToDialogData = [
        {dialogId: "about-dialog", btnId: "about", width:400},
        {dialogId: "music-dialog", btnId: "music", width:300},
        {dialogId: "projects-dialog", btnId: "projects", width:400},
        {dialogId: "contact-dialog", btnId: "contact", width:400}
    ];
    
    var createDialog = function(dialogData) {
        $( "#" + dialogData.dialogId ).dialog({
            resizable: false,
            autoOpen: false,
            dialogClass: "no-close responsive-width",
            open: function() {
                $(this).parent().find(".ui-dialog-buttonpane button").focus();
            },
            width: dialogData.width,
            height: "auto",
            position: {
                my: "top",
                at: "top",
                of: $("#innerframe")
            },
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