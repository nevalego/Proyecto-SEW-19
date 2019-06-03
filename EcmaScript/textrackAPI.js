"use script";

class testTrackAPI {
    constructor() {
        this.track = new TextTrack();
        this.init();
    }

    init() {
        var video = document.getElementsByTagName("video"),
            track;
        video.addEventListener("loadedmetadata", function () {

            var video = document.getElementById("video"),
                i,
                track,
                loadwebvtt = document.getElementById("loadwebvtt"),
                loadcues = document.getElementById("loadcues"),
                hideTracks = function () {
                    // Oddly, there's no way to remove a track from a video, so hide them instead
                    for (i = 0; i < video.textTracks.length; i++) {
                        video.textTracks[i].mode = "hidden";
                    }
                };

            loadwebvtt.addEventListener("click", function () {
                hideTracks();
                track = document.createElement("track");
                track.kind = "captions";
                track.label = "English";
                track.srclang = "en";
                track.src = "captions/sintel-en.vtt";
                video.appendChild(track);
                track.addEventListener("load", function () {
                    this.mode = "showing";
                    video.textTracks[0].mode = "showing"; // thanks Firefox
                });

            });

            loadcues.addEventListener("click", function () {
                hideTracks();
                track = video.addTextTrack("captions", "English", "en");
                track.mode = "showing";
                track.addCue(new VTTCue(0, 3, "La diferencia entre el pasado, el presente"));
            });
        }());
    }
}

var subtitulos = new testTrackAPI();