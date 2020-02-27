require('../css/presentations.css');

import Reveal from 'reveal.js';
import hljs from 'highlight.js';

window.Reveal = Reveal;
window.hljs = hljs;

(function () {

    Reveal.initialize(
        {
            controls: true,
            progress: true,
            history: true,
            center: true,
            // Display the page number of the current slide
            slideNumber: true,
            dependencies: [
                {src: require('reveal.js/plugin/zoom-js/zoom.js'), async: true},
                {src: require('reveal.js/plugin/markdown/marked'), async: true},
                {src: require('reveal.js/plugin/markdown/markdown'), async: true},
                {src: require('reveal.js/plugin/notes/notes.js'), async: true},
            ]
        });

    hljs.initHighlighting();
})();

