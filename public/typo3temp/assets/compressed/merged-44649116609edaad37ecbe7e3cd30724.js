
/*!
 * Samariterbund leopold v1.0.0 (https://handala-design.com)
 * Copyright 2017-2022 Khaled Ahmad
 * Licensed under the GPL-2.0-or-later license
 */
let video = jQuery('video')

video.muted = true
setTimeout(function(){ jQuery('video').trigger('play'); }, 1000);
