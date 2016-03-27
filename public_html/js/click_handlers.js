var $ = require("jquery");
var music = require("./audio.js");
require("jquery-ui");

module.exports = function() {
    
    var closeDialog = function(dialogId) {
        $("#" + dialogId).dialog("close");
    };
    
    var modifyInnerHTML = function(id, newVal) {
        $("#" + id).html(newVal);
    };
    
    $("#enable_music").click(function() {
        music.play();
        closeDialog("music-dialog");
        modifyInnerHTML("music", "&#9658; Music [Enabled]");
    });
    
    $("#disable_music").click(function() {
        music.stop();
        closeDialog("music-dialog");
        modifyInnerHTML("music", "&#9658; Music [Disabled]");
    });
};