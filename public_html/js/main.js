
//setup dialog
(function() {
    $( "#dialog" ).dialog({
        resizable: true,
        autoOpen: false,
        draggable: false,
        dialogClass: "no-close",
        width: 500,
        height: 350,
        buttons: [
            {
              text: "OK",
              click: function() {
                $( this ).dialog( "close" );
              }
            }
          ]
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
    
    var addDialogOpenHandler = function(id, content) {
        $("#" + id).click(function() {
            //$("#dialog").html("Hello!");
            $("#dialog").dialog("open");
        });
    };
        
    idToInfotext.map(function(idAndInfo) {
        addMouseOverAndFocusInListeners(idAndInfo);
        addDialogOpenHandler(idAndInfo.id, "");
    });
    
})();
