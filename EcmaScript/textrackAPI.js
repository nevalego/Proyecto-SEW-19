"use script";

var videoElement = document.getElementById("video");
var textTracks = videoElement.textTracks; // Lista con cada idioma de los subtitulos
var textTrack = textTracks[0]; // un solo idioma de los subtitulos

console.log(textTracks[0].cues.length);
var kind = textTrack.kind // e.g. "subtitles"
var mode = textTrack.mode // e.g. "disabled", hidden" or "showing"
var cues = textTrack.cues;
var cue = cues[0]; // corresponds to the first cue in a track src file
var cueText = cue.id; // "The Web is always changing", for example (or some JSON!)
console.log(cueText)
var trackElements = document.querySelectorAll("track");
// for each track element
for (var i = 0; i < trackElements.length; i++) {
    trackElements[i].addEventListener("load", function() {
        var textTrack = this.track; // gotcha: "this" is an HTMLTrackElement, not a TextTrack object
        var isSubtitles = textTrack.kind === "captions"; // for example...
        // for each cue
        for (var j = 0; j < textTrack.cues.length; ++j) {
            var cue = textTrack.cues[j];
            // do something
        }
    });
}