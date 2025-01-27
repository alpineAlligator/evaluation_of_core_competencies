<!DOCTYPE html>
<html>
    <head>
        <title>JavaScriptjQuery</title>
        <link rel="stylesheet" href="3_style.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="3_jQuery.js"></script>
    </head>

    <body>
        <div class="navbar">
            <h4>LandingPage</h4>
        </div>
        <div class="hero-section">
            <h1>Create Engaging Landing Pages</h1>
            <p>Build beautiful landing pages in record time with Anima’s Landing Page UI kit for Figma. No code required!</p>
        </div>
        <div class="features">
            <div class="visuals">

                <svg class="ellipse" width="379" height="380" viewBox="0 0 379 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="189.313" cy="189.883" r="189.313" fill="#F8D57E"/>
                </svg>
                
                <svg class="red1" xmlns="http://www.w3.org/2000/svg" width="101" height="127" viewBox="0 0 101 127" fill="none">
                    <path d="M0 63.0345C27.6596 63.0345 50.0822 34.813 50.0822 0C50.0822 34.813 72.5048 63.0345 100.164 63.0345C72.5048 63.0345 50.0822 91.256 50.0822 126.069C50.0822 91.256 27.6596 63.0345 0 63.0345Z" fill="#FF6250"/>
                </svg>

                <svg class="white1" xmlns="http://www.w3.org/2000/svg" width="51" height="63" viewBox="0 0 51 63" fill="none">
                    <path d="M0 31.5C13.8223 31.5 25.0274 17.397 25.0274 0C25.0274 17.397 36.2325 31.5 50.0548 31.5C36.2325 31.5 25.0274 45.603 25.0274 63C25.0274 45.603 13.8223 31.5 0 31.5Z" fill="#F8F9FF"/>
                </svg>

                <svg class="top-speaker" xmlns="http://www.w3.org/2000/svg" width="66" height="15" viewBox="0 0 66 15" fill="none">
                    <rect x="0.104492" y="0.429535" width="65.7908" height="14.272" rx="7.136" fill="#2D2D2D"/>
                    <rect x="17.0813" y="6.46765" width="29.6418" height="2.19569" rx="1.09785" fill="#CFCFCF"/>
                    <circle cx="50.0165" cy="7.5655" r="1.09785" fill="#CFCFCF"/>
                </svg>

                <svg class="button-right" width="7" height="54" viewBox="0 0 7 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.409558" y="0.863843" width="6.55416" height="52.5025" rx="2.84924" fill="url(#paint0_linear_534_261)" stroke="#D8D8D8" stroke-width="0.0470949"/>
                    <defs>
                    <linearGradient id="paint0_linear_534_261" x1="3.68664" y1="0.88739" x2="-19.1064" y2="12.8975" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2D2D2D"/>
                    <stop offset="0.546159" stop-color="#726F6F"/>
                    <stop offset="1" stop-color="#2D2D2D"/>
                    </linearGradient>
                    </defs>
                </svg>

                <svg class="button-left-bottom" width="8" height="39" viewBox="0 0 8 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.585095" y="0.581982" width="6.55417" height="38.2305" rx="2.84924" fill="url(#paint0_linear_534_262)" stroke="#D8D8D8" stroke-width="0.0470949"/>
                    <defs>
                    <linearGradient id="paint0_linear_534_262" x1="3.86218" y1="0.60553" x2="-15.2466" y2="14.4378" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2D2D2D"/>
                    <stop offset="0.546159" stop-color="#726F6F"/>
                    <stop offset="1" stop-color="#2D2D2D"/>
                    </linearGradient>
                    </defs>
                </svg>

                <svg class="button-left-middle" width="8" height="39" viewBox="0 0 8 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.585095" y="0.668133" width="6.55417" height="38.2305" rx="2.84924" fill="url(#paint0_linear_534_263)" stroke="#D8D8D8" stroke-width="0.0470949"/>
                    <defs>
                    <linearGradient id="paint0_linear_534_263" x1="3.86218" y1="0.691681" x2="-15.2466" y2="14.5239" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2D2D2D"/>
                    <stop offset="0.546159" stop-color="#726F6F"/>
                    <stop offset="1" stop-color="#2D2D2D"/>
                    </linearGradient>
                    </defs>
                </svg>

                <svg class="button-left-top" width="8" height="18" viewBox="0 0 8 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.585095" y="0.221997" width="6.55417" height="17.3714" rx="2.84924" fill="url(#paint0_linear_534_264)" stroke="#D8D8D8" stroke-width="0.0470949"/>
                    <defs>
                    <linearGradient id="paint0_linear_534_264" x1="3.86218" y1="0.245544" x2="-4.35167" y2="13.3502" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2D2D2D"/>
                    <stop offset="0.546159" stop-color="#726F6F"/>
                    <stop offset="1" stop-color="#2D2D2D"/>
                    </linearGradient>
                    </defs>
                </svg>

                <svg class="device" width="220" height="420" viewBox="0 0 220 420" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.529738" y="0.664107" width="218.94" height="418.671" rx="38.6991" fill="url(#paint0_linear_534_265)" stroke="#D8D8D8" stroke-width="0.548923"/>
                    <defs>
                    <linearGradient id="paint0_linear_534_265" x1="110" y1="0.938568" x2="-55.0357" y2="367.088" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2D2D2D"/>
                    <stop offset="0.546159" stop-color="#726F6F"/>
                    <stop offset="1" stop-color="#2D2D2D"/>
                    </linearGradient>
                    </defs>
                </svg>
                    
                <div class="insert"> </div>               

            </div>

            <div class="header">
                <div class="our-features">
                    <h2>Our features</h2>
                    <p>Few good reasons why you should use Anima Landing Page Ui Kit to make your own pages. <button id="load-reasons">Click for more reaons.</button></p>
                </div>

                <div class="card">                            
                    <?php
                    $i = 1;
                    while ($i<5):
                    ?>

                    <div class="card-info" id="section-<?=$i?>">
                        <p>Section <?=$i?></p>
                    </div>             
                            
                    <?php
                    $i++;
                    endwhile;
                    ?>    
                </div>
            </div>
        </div>

        <div class="projects">
            <h1>Discover our latest work</h1>
            <p>Explore our portfolio and see the latest and greatest projects that we've brought to life.</p>
        </div>


    </body>

</html>