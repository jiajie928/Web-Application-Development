<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .outer
            {
                width: 900px;
                height: 600px;
                margin: auto;
                overflow: hidden;
            }
            .outer .inner
            {
                width: 100%;
                height: 100%;
                display: flex;
                transition: all 1s;
            }
            .outer .inner img
            {
                width: 100%;
                height: 100%;
                flex-shrink: 0;
                object-fit: cover;
            }
            .indicator
            {
                position: absolute;
                display: flex;
                margin: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            .indicator span
            {
                width: 20px;
                height: 20px;
                border: 2px solid #ccc;
                border-radius: 50%;
                margin: 0 3px;
                cursor: pointer;
            }
            .indicator span.active
            {
                background-color: grey;
                border-color: #fff;
            }
        </style>
    </head>
    
    <body>
        <!-- frame -->
        <div class = "outer">
            <!-- slideshow pic -->
                <div class = "inner">
                    <img src="home_includes/loopy.png">
                    <img src="home_includes/graduation.JPG">
                    <img src="home_includes/ice_cream_cone.JPG">
                </div>
                <div class = "indicator">
                    <span class = "active"></span>
                    <span></span>
                    <span></span>
                </div>
        </div>

        <script>
            var doms = 
            {
                inner: document.querySelector(".outer .inner"),
                indicators: document.querySelectorAll(".indicator span"),

            };

            function moveTo(index)
            {   
                doms.inner.style.transform = "translateX(-"+ index +"00%)";
                var active = document.querySelector('.indicator span.active');
                active.classList.remove('active');
                doms.indicators[index].classList.add('active');
                //Calculate the next index
                var nextIndex = (index + 1) % doms.indicators.length;
                setTimeout(function(){
                                        moveTo(nextIndex);
                                    }, 3000);
            
            }

            doms.indicators.forEach(function(item,i)
                                    {
                                        item.onclick = function()
                                        {
                                            moveTo(i);
                                        };
                                    });
            
            moveTo(0);
        </script>
    </body>
</html>