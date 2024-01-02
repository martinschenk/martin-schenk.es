//console.log('in photoswipe.js')

import PhotoSwipeLightbox from '../../node_modules/photoswipe/dist/photoswipe-lightbox.esm.js';
import '../../node_modules/photoswipe/dist/photoswipe.css';

const lightbox = new PhotoSwipeLightbox({
    // may select multiple "galleries"
    gallery: '#gallery-mammuts',
    // Elements within gallery (slides)
    children: 'a',
    // setup PhotoSwipe Core dynamic import
    pswpModule: () => import('../../node_modules/photoswipe/dist/photoswipe.esm.js')
});
lightbox.init();