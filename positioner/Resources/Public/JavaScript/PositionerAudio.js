// main container

var positionerAudio = new Object();

positionerAudio.prefixIdPlayerDiv = ( ((typeof(positionerAudioprefixIdPlayerDiv) == 'undefined') || (positionerAudioprefixIdPlayerDiv == ''))  ? 'positionerAudioPlayerId': positionerAudioprefixIdPlayerDiv);
//positionerAudio.prefixIdPlayerHtml = ( ((typeof(positionerAudioprefixIdPlayerHtml) == 'undefined') || (positionerAudioprefixIdPlayerDiv == '')) ? '<'+'div id="jp_container_1" style="display: none;" class="jp-no-solution jp-gui jp-repeat-off jp-repeat jp-restore-screen jp-full-screen jp-duration jp-current-time jp-playback-rate-bar-value jp-playback-rate-bar jp-volume-max jp-volume-bar-value jp-volume-bar jp-unmute jp-mute jp-video-play jp-play jp-pause jp-stop jp-seek-bar jp-play-bar">Display-Element für den Skin'+'<'+'div id="'+positionerAudio.prefixIdPlayerDiv+'" >DOM-Element für den Player'+'<'+'/div>'+'<'+'/div>': positionerAudioprefixIdPlayerHtml);
//
//alert(positionerAudio.prefixIdPlayerHtml );
//// Setze ein Element, um Code aus zuspielen
//( function () {
//    $(document).ready( function (){
//       $(this).append(positionerAudio.prefixIdPlayerHtml);
//    });
//}) (jQuery);


// parameters
//positionerAudio.swfPathDefault = '/typo3conf/ext/positioner/Resources/Public/JavaScript/Jplayer.swf';
positionerAudio.swfPathDefault = 'Jplayer.swf';
positionerAudio.solution = 'flash, html'; // parameter to generate a fallback to flash, if there is HTML5

// Variables 	
positionerAudio.setMedia = new Object();
positionerAudio.supplied = '';
positionerAudio.swfPath = positionerAudio.swfPathDefault;

positionerAudio.resetJPlayerParas = function () {
    this.setMedia = new Object();
    this.supplied = '';
    positionerAudio.solution = this.solutionDefault;
    positionerAudio.swfPath = this.swfPathDefault;
}

positionerAudio.detectAudioSetMedia = function (pathValue) {
    value = String(pathValue);
    var tagValue = value.split('.');
    // erstelle Parameter an Hand der Extensionen 
    switch (tagValue[(tagValue.length-1)]) {
        case 'mp3':
            this.setMedia['mp3'] = value;
            return 'mp3';
            break;
        case 'wav':
            this.setMedia["wav"] = value;
            return 'wav';
            break;
        case 'ogg':
            this.setMedia["ogg"] = value;
            return 'ogg';
            break;
        case 'oga':
            this.setMedia["ogg"] = value;
            return 'ogg';
            break;
        case 'webm':
            this.setMedia["webma"] = value;
            return 'webma';
            break;
        case 'webma':
            this.setMedia["webma"] = value;
            return 'webma';
            break;
        case 'fla':
            this.setMedia["fla"] = value;
            return 'fla';
            break;
        case 'm4a':
            this.setMedia["mp4"] = value;
            return 'mp4';
            break;
        case 'mp4a':
            return this.setMedia["mp4"] = value;
            return 'mp4';
            break;
        case 'mp4':
            return this.setMedia["mp4"] = value;
            return 'mp4';
            break;
        /*
         case 'webmv':
         this.setMedia["mp3"] = value;
         break;
         case 'mp4v':
         this.setMedia["mp3"] = value;
         break;
         case 'flv':
         this.setMedia["mp3"] = value;
         break;
         */
        default :
            break;
    }
    return false;
}

positionerAudio.detectSuppliedMedias = function(fileList) {
    this.resetJPlayerParas();

    var onlyEmpty = true;
    var check, list;
    var addSpacer = '';
    for (var i = 0; i < fileList.length; i++) {
        // detectAudioSetMedia is an object-method 
        // it constructs the array positionerAudio.setMedia als Parametzer of 'jPlayer("setMedia",...' for jPlayer
        check = this.detectAudioSetMedia(fileList[i]);
        if (check === false) continue;
        this.supplied = this.supplied + addSpacer + check;
        onlyEmpty = false;
        addSpacer = ', ';
    }
    return (!onlyEmpty); // true, if one or more  audiofile are defined, fals in any other case
}


positionerAudio.playSound = function(selfNode,check, errormessage){
    var res = selfNode.id.split('-');
    // bestimme den übergeordneten Knoten, zu dem die als Dateilinks angegebenen Audio-Elemente gespeichert sind
    res = $("#"+check+res[1]+"").next("div").find("a").text( function () {
        return $(this).text();
    });
    // Make the parameter for the jPlayer, List of file, Supplied-Modus,
    if (positionerAudio.detectSuppliedMedias(res) === false) return false;
    $().ready( function() {
        $("#"+positionerAudio.prefixIdPlayerDiv+"").jPlayer("destroy").jPlayer({
            errorAlerts: true,
            warningAlerts: true,
            swfPath: positionerAudio.swfPath,
            solution: positionerAudio.solution, 			// Flash with an HTML5 fallback.
            supplied: positionerAudio.supplied,
            ready:    function () {
                $(this).jPlayer( 'setMedia', positionerAudio.setMedia ).jPlayer("play");
            }
        });
    });
}

