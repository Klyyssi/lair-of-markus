var $ = require("jquery");
require("howler");

module.exports = function() {
    
    var song = new Howl({
        urls: ["audio/8bit.ogg"],
        loop: true
    });
    
    var enableMusic = function() {
        song.play();
    };
    
    var disableMusic = function() {
        song.stop();
    };
    
    return {
        play: enableMusic,
        stop: disableMusic
    };
}();