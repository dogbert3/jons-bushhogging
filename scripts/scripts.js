function initComparisons() {
    var x, i;
    // Find all elements with an "img-comp-overlay" class:
    x = document.getElementsByClassName("img-comp-overlay");
    for (i = 0; i < x.length; i++) {
        // For each "img-comp-overlay" element:
        compareImages(x[i]);
    }

    function compareImages(img) {
        var slider, clicked = 0, w, h, inactivityTimeout;
        // Get the width and height of the img element
        w = img.offsetWidth;
        h = img.offsetHeight;
        // Set the width of the img element to 50%:
        img.style.width = (w / 2) + "px";
        // Create slider:
        slider = document.createElement("DIV");
        slider.setAttribute("class", "img-comp-slider");
        // Insert slider:
        img.parentElement.insertBefore(slider, img);
        // Position the slider in the middle:
        slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
        slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
        // Execute a function when the mouse button is pressed:
        slider.addEventListener("mousedown", slideReady);
        // And another function when the mouse button is released:
        window.addEventListener("mouseup", slideFinish);
        // Or touched (for touch screens):
        slider.addEventListener("touchstart", slideReady);
        // And released (for touch screens):
        window.addEventListener("touchend", slideFinish);

        function slideReady(e) {
            // Prevent any other actions that may occur when moving over the image:
            e.preventDefault();
            // The slider is now clicked and ready to move:
            clicked = 1;
            clearTimeout(inactivityTimeout); // Clear previous inactivity timeout
            // Execute a function when the slider is moved:
            window.addEventListener("mousemove", slideMove);
            window.addEventListener("touchmove", slideMove);
        }

        function slideFinish() {
            // The slider is no longer clicked:
            clicked = 0;
            inactivityTimeout = setTimeout(() => {
                moveToCenter();
            }, 5000); // Set the inactivity timeout to 5 seconds
        }

        function slideMove(e) {
            var pos;
            // If the slider is no longer clicked, exit this function:
            if (clicked == 0) return false;
            // Get the cursor's x position:
            pos = getCursorPos(e);
            // Prevent the slider from being positioned outside the image:
            if (pos < 0) pos = 0;
            if (pos > w) pos = w;
            // Execute a function that will resize the overlay image according to the cursor:
            slide(pos);
        }

        function getCursorPos(e) {
            var a, x = 0;
            e = (e.changedTouches) ? e.changedTouches[0] : e;
            // Get the x positions of the image:
            a = img.getBoundingClientRect();
            // Calculate the cursor's x coordinate, relative to the image:
            x = e.pageX - a.left;
            // Consider any page scrolling:
            x = x - window.pageXOffset;
            return x;
        }

        function slide(x) {
            // Resize the image:
            img.style.width = x + "px";
            // Position the slider:
            slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
        }

        function moveToCenter() {
            let start = null;
            const duration = 2000; // 2 seconds
            const initialPos = parseFloat(slider.style.left);
            const targetPos = w / 2 - slider.offsetWidth / 2;
            const initialWidth = parseFloat(img.style.width);
            const targetWidth = w / 2;

            function animate(timestamp) {
                if (!start) start = timestamp;
                const progress = Math.min((timestamp - start) / duration, 1);
                const newPos = initialPos + (targetPos - initialPos) * progress;
                const newWidth = initialWidth + (targetWidth - initialWidth) * progress;
                slider.style.left = newPos + "px";
                img.style.width = newWidth + "px";
                if (progress < 1) {
                    requestAnimationFrame(animate);
                }
            }
            requestAnimationFrame(animate);
        }

        // Start inactivity timeout on page load
        inactivityTimeout = setTimeout(() => {
            moveToCenter();
        }, 15000);
    }
}
