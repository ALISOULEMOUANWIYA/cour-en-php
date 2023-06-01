circle('layer-1');

            function circle(id) {

                var el = document.getElementById(id);

                var elDisplay = el.children[0];
                var elInteraction = el.children[1];
//                elDisplay.children[0].style.background="#fff";
                var offsetRad = null;
                var targetRad = 0;
                var previousRad;


                try {
                    elInteraction.addEventListener('mousedown', down);
                }
                catch (err) {
                    console.log("Interaction not found");
                }

                function down(event) {
                    offsetRad = getRotation(event);
                    previousRad = offsetRad;
                    window.addEventListener('mousemove', move);
                    window.addEventListener('mouseup', up);
                }

                function move(event) {

                    var newRad = getRotation(event);
                    targetRad += (newRad - previousRad);
                    previousRad = newRad;
                    elDisplay.style.transform = 'rotate(' + (targetRad / Math.PI * 180) + 'deg)';
                }

                function up() {
                    window.removeEventListener('mousemove', move);
                    window.removeEventListener('mouseup', up);
                }

                function getRotation(event) {
                    var pos = mousePos(event, elInteraction);
                    var x = pos.x - elInteraction.clientWidth * .5;
                    var y = pos.y - elInteraction.clientHeight * .5;
                    return Math.atan2(y, x);
                }

                function mousePos(event, currentElement) {
                    var totalOffsetX = 0;
                    var totalOffsetY = 0;
                    var canvasX = 0;
                    var canvasY = 0;

                    do {
                        totalOffsetX += currentElement.offsetLeft - currentElement.scrollLeft;
                        totalOffsetY += currentElement.offsetTop - currentElement.scrollTop;
                    }
                    while (currentElement = currentElement.offsetParent)

                    canvasX = event.pageX - totalOffsetX;
                    canvasY = event.pageY - totalOffsetY;

                    return {
                        x: canvasX,
                        y: canvasY
                    };
                }
            }