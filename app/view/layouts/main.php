<?php use GitPetra\Core\Application; ?>
<!doctype html>
<html lang="<?php echo Application::$app->language->dictionary['Lang_Lang']; ?>" dir="<?php echo Application::$app->language->dictionary['Lang_Dir']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo CSS . Application::$app->language->dictionary['Bootstrap']; ?>">
    <link rel="stylesheet" href="<?php echo CSS.'main.css'; ?>">
    <title><?php echo Application::$app->language->dictionary['Lang_Title']; ?></title>

    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
    <meta name="author" content="Mohammad AbuDayeh" />
    <meta property="og:title" content="<?php echo Application::$app->language->dictionary['Lang_Title']; ?>" />
    <meta property="og:description" content="OgDescription" />
    <meta property="og:url" content="<?php echo "https://" . $_SERVER["SERVER_NAME"] .DS. basename($_SERVER['REQUEST_URI']); ?>"/>
    <meta property="og:image" content="<?php echo IMG; ?>PWA/DND.png" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ar_JO" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@xDayeh" />
    <meta name="twitter:creator" content="@xDayeh" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo IMG; ?>PWA/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo IMG; ?>PWA/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMG; ?>PWA/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMG; ?>PWA/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMG; ?>PWA/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo IMG; ?>PWA/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo IMG; ?>PWA/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo IMG; ?>PWA/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo IMG; ?>PWA/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo IMG; ?>PWA/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo IMG; ?>PWA/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMG; ?>PWA/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo IMG; ?>PWA/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL_XP; ?>manifest.json">
    <meta name="msapplication-TileColor" content="#1a2530">
    <meta name="msapplication-TileImage" content="<?php echo IMG; ?>PWA/ms-icon-144x144.png">
    <meta name="theme-color" content="#1a2530">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="Framework" viewBox="0 0 125 125">
            <rect fill="#3da8f0" x="5" y="-15"  transform="matrix(0.7071 0.7071 -0.7071 0.7071 48.7933 8.8106)" width="35" height="35"/><rect fill="#F3BA2F" x="5" y="30"   transform="matrix(0.7071 0.7071 -0.7071 0.7071 48.7933 8.8106)" width="35" height="35"/><rect fill="#f07639" x="50" y="-15" transform="matrix(0.7071 0.7071 -0.7071 0.7071 48.7933 8.8106)" width="35" height="35"/><rect fill="#81bc33" x="50" y="30"  transform="matrix(0.7071 0.7071 -0.7071 0.7071 48.7933 8.8106)" width="35" height="35"/>
        </symbol>
        <symbol id="DoorOpen">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
        </symbol>
        <symbol id="BSC" viewBox="0 0 225 225">
            <path stroke="null" fill="#F3BA2F" d="m224.20002,28.09998l36.6,0c9.3,0 16.1,2.5 20.5,6.8c4.3,3.7 6.2,8.7 6.2,13.6l0,0c0,1.9 0,4.3 -0.6,6.2c-1.2,3.1 -3.1,6.2 -5.6,8.7c-1.2,1.2 -2.5,1.9 -3.7,2.5c4.3,1.2 8.1,3.7 11.2,6.8c2.5,3.1 3.7,6.8 3.7,12.4l0,0c0,3.1 -0.6,6.8 -1.9,9.3c-1.2,2.5 -3.7,5 -6.2,6.8c-3.1,1.9 -6.2,3.1 -9.3,4.3c-3.7,1.2 -8.1,1.2 -12.4,1.2l-37.9,0l0,-78.8l-0.6,0l0,0.2zm33.5,32.2c3.1,0 6.2,-0.6 9.3,-1.9c2.5,-1.2 3.7,-3.7 3.7,-6.2l0,0c0,-2.5 -1.2,-5 -3.1,-6.2c-2.5,-1.9 -5.6,-2.5 -8.7,-1.9l-17.4,0l0,16.7l16.1,0l0,-0.5l0.1,0zm4.3,31.7c3.1,0 6.2,-0.6 9.3,-1.9c2.5,-1.2 3.7,-3.7 3.1,-6.8l0,0c0,-2.5 -1.2,-5 -3.1,-6.2c-1.9,-1.2 -5.6,-2.5 -9.9,-2.5l-20.5,0l0,17.4l21.1,0z" class="st0" id="svg_19"/>
            <polygon stroke="null" fill="#F3BA2F" points="314.1000061035156,28.099990844726562 331.5000305175781,28.099990844726562 331.5000305175781,107.49996948242188 314.1000061035156,107.49996948242188 " class="st0" id="svg_18"/>
            <polygon stroke="null" fill="#F3BA2F" points="358.2000427246094,28.099990844726562 374.3000183105469,28.099990844726562 411.5000305175781,77.10000610351562 411.5000305175781,28.099990844726562 428.8000183105469,28.099990844726562 428.8000183105469,107.49996948242188 414.0000305175781,107.49996948242188 374.8999938964844,57.19999694824219 374.8999938964844,107.49996948242188 358.2000427246094,107.49996948242188 " class="st0" id="svg_17"/>
            <path stroke="null" fill="#F3BA2F" d="m481.60002,27.49998l16.1,0l34.1,80l-18,0l-7.4,-18l-33.5,0l-7.4,18l-18,0l34.1,-80zm18.6,47.1l-10.5,-26l-10.5,26l21,0z" class="st0" id="svg_16"/>
            <polygon stroke="null" fill="#F3BA2F" points="550.4000244140625,28.099990844726562 566.5,28.099990844726562 603.7000732421875,77.10000610351562 603.7000732421875,28.099990844726562 621.0999755859375,28.099990844726562 621.0999755859375,107.49996948242188 606.2000122070312,107.49996948242188 567.7000732421875,57.19999694824219 567.7000732421875,107.49996948242188 550.4000244140625,107.49996948242188 " class="st0" id="svg_15"/>
            <path stroke="null" fill="#F3BA2F" d="m684.30002,108.69998c-5.6,0 -11.2,-1.2 -16.1,-3.1c-9.9,-4.3 -17.4,-11.8 -21.7,-21.7c-1.9,-5 -3.1,-10.5 -3.1,-16.1l0,0c0,-10.5 4.3,-21.1 11.8,-29.1c3.7,-3.7 8.1,-6.8 13,-8.7c5.6,-2.5 11.2,-3.1 16.7,-3.1c3.1,0 6.8,0 9.9,0.6c3.1,0.6 5.6,1.2 8.1,2.5c2.5,1.2 5,2.5 6.8,3.7c1.9,1.2 4.3,3.1 6.2,5l-10.5,13c-3.1,-2.5 -6.2,-5 -9.3,-6.8s-6.8,-2.5 -10.5,-2.5c-3.1,0 -6.2,0.6 -9.3,1.9c-3.1,1.2 -5.6,3.1 -7.4,5.6s-3.7,5 -5,8.1c-1.2,3.1 -1.9,6.2 -1.9,9.3l0,0c0,3.1 0.6,6.8 1.9,9.9s2.5,5.6 5,8.1c4.3,5 10.5,7.4 16.7,7.4c3.7,0 8.1,-0.6 11.8,-2.5c3.1,-1.9 6.8,-4.3 9.3,-6.8l11.1,11.1c-1.9,1.9 -4.3,4.3 -6.2,6.2c-2.5,1.9 -5,3.1 -7.4,4.3c-2.5,1.2 -5.6,2.5 -8.7,3.1c-4.4,0.6 -8.1,0.6 -11.2,0.6l0,0z" class="st0" id="svg_14"/>
            <polygon stroke="null" fill="#F3BA2F" points="737.7000732421875,28.099990844726562 797.2000122070312,28.099990844726562 797.2000122070312,43.59999084472656 754.4000244140625,43.59999084472656 754.4000244140625,59.69999694824219 792.2000122070312,59.69999694824219 792.2000122070312,75.20001220703125 754.4000244140625,75.20001220703125 754.4000244140625,92 797.800048828125,92 797.800048828125,107.49996948242188 737.7000732421875,107.49996948242188 " class="st0" id="svg_13"/>
            <path stroke="null" fill="#F3BA2F" d="m246.50002,185.59998c-4.3,0 -8.7,-0.6 -12.4,-2.5c-3.7,-1.2 -7.4,-3.7 -11.2,-6.8l6.2,-6.8c2.5,2.5 5,3.7 8.1,5.6c3.1,1.2 6.2,1.9 9.3,1.9c2.5,0 5,-0.6 7.4,-1.9c1.9,-1.2 2.5,-3.1 2.5,-5l0,0c0,-0.6 0,-1.9 -0.6,-2.5c-0.6,-0.6 -1.2,-1.9 -1.9,-2.5c-1.2,-0.6 -2.5,-1.2 -3.7,-1.9c-1.9,-0.6 -4.3,-1.2 -6.2,-1.9c-2.5,-0.6 -5.6,-1.2 -8.1,-2.5c-1.9,-0.6 -4.3,-1.9 -5.6,-3.1c-1.2,-1.2 -2.5,-2.5 -3.7,-4.3c-1.2,-2.5 -1.2,-5 -1.2,-6.8l0,0c0,-2.5 0.6,-4.3 1.2,-6.8c0.6,-1.9 2.5,-3.7 3.7,-5c1.9,-1.2 3.7,-2.5 6.2,-3.1c2.5,-0.6 5,-1.2 7.4,-1.2c3.7,0 7.4,0.6 11.2,1.9c3.1,1.2 6.2,3.1 9.3,5l-5,7.4c-2.5,-1.9 -5,-3.1 -7.4,-4.3c-2.5,-1.2 -5,-1.2 -7.4,-1.2c-2.5,0 -5,0.6 -6.8,1.9c-1.2,1.2 -2.5,3.1 -2.5,5l0,0c0,1.2 0,1.9 0.6,3.1c0.6,0.6 1.2,1.9 1.9,2.5c1.2,0.6 2.5,1.2 4.3,1.9c1.9,0.6 3.7,1.2 6.8,1.9c2.5,0.6 5,1.2 8.1,2.5c1.9,0.6 3.7,1.9 5.6,3.1c1.2,1.2 2.5,3.1 3.1,4.3c0.6,1.9 1.2,3.7 1.2,6.2l0,0c0,2.5 -0.6,5 -1.2,6.8c-1.2,1.9 -2.5,3.7 -4.3,5.6c-1.9,1.2 -3.7,2.5 -6.2,3.1c-3.1,-0.2 -6.2,0.4 -8.7,0.4z" class="st0" id="svg_12"/>
            <polygon stroke="null" fill="#F3BA2F" points="277.5000305175781,129.20001220703125 288.1000061035156,129.20001220703125 304.8000183105469,155.20001220703125 322.20001220703125,129.20001220703125 332.70001220703125,129.20001220703125 332.70001220703125,185 322.8000183105469,185 322.8000183105469,144.70001220703125 305.4000244140625,170.70001220703125 304.8000183105469,170.70001220703125 287.5000305175781,144.70001220703125 287.5000305175781,185 277.5000305175781,185 " class="st0" id="svg_11"/>
            <path stroke="null" fill="#F3BA2F" d="m366.20002,128.59998l9.3,0l24.2,55.8l-10.5,0l-5.6,-13.6l-26,0l-5.6,13.6l-9.9,0l24.1,-55.8zm14.3,34.1l-9.9,-22.3l-9.3,22.3l19.2,0z" class="st0" id="svg_10"/>
            <path stroke="null" fill="#F3BA2F" d="m409.60002,129.19998l24.8,0c3.1,0 6.2,0.6 9.3,1.2c2.5,0.6 5,2.5 6.8,4.3c1.2,1.2 2.5,3.1 3.7,5.6c0.6,1.9 1.2,4.3 1.2,6.8l0,0c0,1.9 -0.6,4.3 -1.2,6.2c-0.6,1.9 -1.9,3.1 -2.5,5c-1.2,1.2 -2.5,2.5 -4.3,3.7c-1.9,1.2 -3.7,1.9 -5.6,2.5l14.9,21.1l-11.8,0l-13.6,-19.2l-12.4,0l0,19.2l-9.9,0l0.6,-56.4zm24.2,27.3c3.1,0 6.2,-0.6 8.1,-2.5c1.9,-1.9 3.1,-4.3 3.1,-6.8l0,0c0,-2.5 -1.2,-5 -3.1,-6.8c-2.5,-1.9 -5.6,-2.5 -8.7,-2.5l-14.3,0l0,18.6l14.9,0z" class="st0" id="svg_9"/>
            <polygon stroke="null" fill="#F3BA2F" points="480.8999938964844,137.89996337890625 462.8999938964844,137.89996337890625 462.8999938964844,129.20001220703125 508.2000427246094,129.20001220703125 508.2000427246094,137.89996337890625 490.2000427246094,137.89996337890625 490.2000427246094,185 480.3000183105469,185 " class="st0" id="svg_8"/>
            <path stroke="null" fill="#F3BA2F" d="m568.40002,185.59998c-3.7,0 -7.4,-0.6 -11.2,-2.5c-6.8,-3.1 -12.4,-8.1 -14.9,-14.9c-1.2,-3.7 -2.5,-7.4 -1.9,-11.2l0,0c0,-3.7 0.6,-7.4 1.9,-11.2c2.5,-6.8 8.1,-12.4 14.9,-15.5c3.7,-1.2 7.4,-2.5 11.8,-2.5c2.5,0 5,0 6.8,0.6c1.9,0.6 3.7,1.2 5.6,1.9c1.9,0.6 3.1,1.9 5,2.5c1.2,1.2 3.1,2.5 4.3,3.7l-6.2,7.4c-1.9,-1.9 -4.3,-3.7 -6.8,-5c-2.5,-1.2 -5.6,-1.9 -8.7,-1.9c-2.5,0 -5,0.6 -7.4,1.2c-2.5,1.2 -4.3,2.5 -6.2,4.3c-1.9,1.9 -3.1,3.7 -3.7,6.2s-1.2,5 -1.2,7.4l0,0c0,2.5 0.6,5 1.2,7.4s1.9,4.3 3.7,6.2c1.9,1.9 3.7,3.1 6.2,4.3c2.5,1.2 5,1.9 7.4,1.2c3.1,0 6.2,-0.6 8.7,-1.9c2.5,-1.2 5,-3.1 7.4,-5.6l6.2,6.2c-1.2,1.2 -3.1,3.1 -4.3,4.3c-1.9,1.2 -3.1,2.5 -5,3.1c-1.9,0.6 -3.7,1.9 -6.2,1.9c-2.5,2.4 -5,2.4 -7.4,2.4l0,0z" class="st0" id="svg_7"/>
            <polygon stroke="null" fill="#F3BA2F" points="601.2000122070312,129.20001220703125 610.5,129.20001220703125 610.5,152.10000610351562 637.2000122070312,152.10000610351562 637.2000122070312,129.20001220703125 647.0999755859375,129.20001220703125 647.0999755859375,185 637.2000122070312,185 637.2000122070312,161.39996337890625 610.5,161.39996337890625 610.5,185 601.2000122070312,185 " class="st0" id="svg_6"/>
            <path stroke="null" fill="#F3BA2F" d="m681.20002,128.59998l9.3,0l24.2,55.8l-10.5,0l-5.6,-13.6l-26,0l-5.6,13.6l-9.9,0l24.1,-55.8zm13.7,34.1l-9.3,-22.3l-9.3,22.3l18.6,0z" class="st0" id="svg_5"/>
            <polygon stroke="null" fill="#F3BA2F" points="724.6000366210938,129.20001220703125 734.6000366210938,129.20001220703125 734.6000366210938,185 724.6000366210938,185 " class="st0" id="svg_4"/>
            <polygon stroke="null" fill="#F3BA2F" points="749.4000244140625,129.20001220703125 758.0999755859375,129.20001220703125 787.8999633789062,167.5999755859375 787.8999633789062,129.20001220703125 797.800048828125,129.20001220703125 797.800048828125,185 789.7000732421875,185 759.4000244140625,145.29998779296875 759.4000244140625,185 749.4000244140625,185 " class="st0" id="svg_3"/>
            <path stroke="null" fill="#F3BA2F" d="m115.10002,181.29998l0,24.2l-21.1,12.4l-20.5,-12.4l0,-24.2l20.5,12.4l21.1,-12.4zm-112.9,-83.7l20.5,12.4l0,41.5l35.3,21.1l0,24.2l-55.8,-32.9l0,-66.3zm183.6,0l0,66.4l-56.4,32.9l0,-24.2l35.3,-21.1l0,-41.5l21.1,-12.5zm-56.5,-32.9l21.1,12.4l0,0l0,24.2l-35.3,21.1l0,42.1l-20.5,12.4l-20.4,-12.4l0,-42.2l-36.6,-21.1l0,-24.2l21.1,-12.4l35.3,21.1l35.3,-21zm-91.7,53.9l20.5,12.4l0,24.2l-20.5,-12.4l0,-24.2zm112.8,0l0,24.2l-20.5,12.4l0,-24.2l20.5,-12.4zm-127.7,-75l21.1,12.4l-21.1,12.4l0,24.2l-20.5,-12.4l0,-24.2l20.5,-12.4zm142.6,0l21.1,12.4l0,24.2l-21.1,12.4l0,-24.2l-20.5,-12.4l20.5,-12.4zm-71.3,0l21.1,12.4l-21.1,12.4l-20.5,-12.4l20.5,-12.4zm0,-41.5l56.4,32.9l-20.5,12.4l-35.3,-21.1l-36,21.1l-20.5,-12.4l55.9,-32.9z" class="st0" id="svg_2"/>
        </symbol>
        <symbol id="MetaMask" viewBox="0 0 318.6 318.6">
            <title>MetaMask</title>
            <style>
                .st1,.st6{fill:#e4761b;stroke:#e4761b;stroke-linecap:round;stroke-linejoin:round}.st6{fill:#f6851b;stroke:#f6851b}
            </style>
            <path fill="#e2761b" stroke="#e2761b" stroke-linecap="round" stroke-linejoin="round" d="m274.1 35.5-99.5 73.9L193 65.8z"/>
            <path d="m44.4 35.5 98.7 74.6-17.5-44.3zm193.9 171.3-26.5 40.6 56.7 15.6 16.3-55.3zm-204.4.9L50.1 263l56.7-15.6-26.5-40.6z" class="st1"/>
            <path d="m103.6 138.2-15.8 23.9 56.3 2.5-2-60.5zm111.3 0-39-34.8-1.3 61.2 56.2-2.5zM106.8 247.4l33.8-16.5-29.2-22.8zm71.1-16.5 33.9 16.5-4.7-39.3z" class="st1"/>
            <path fill="#d7c1b3" stroke="#d7c1b3" stroke-linecap="round" stroke-linejoin="round" d="m211.8 247.4-33.9-16.5 2.7 22.1-.3 9.3zm-105 0 31.5 14.9-.2-9.3 2.5-22.1z"/>
            <path fill="#233447" stroke="#233447" stroke-linecap="round" stroke-linejoin="round" d="m138.8 193.5-28.2-8.3 19.9-9.1zm40.9 0 8.3-17.4 20 9.1z"/>
            <path fill="#cd6116" stroke="#cd6116" stroke-linecap="round" stroke-linejoin="round" d="m106.8 247.4 4.8-40.6-31.3.9zM207 206.8l4.8 40.6 26.5-39.7zm23.8-44.7-56.2 2.5 5.2 28.9 8.3-17.4 20 9.1zm-120.2 23.1 20-9.1 8.2 17.4 5.3-28.9-56.3-2.5z"/>
            <path fill="#e4751f" stroke="#e4751f" stroke-linecap="round" stroke-linejoin="round" d="m87.8 162.1 23.6 46-.8-22.9zm120.3 23.1-1 22.9 23.7-46zm-64-20.6-5.3 28.9 6.6 34.1 1.5-44.9zm30.5 0-2.7 18 1.2 45 6.7-34.1z"/>
            <path d="m179.8 193.5-6.7 34.1 4.8 3.3 29.2-22.8 1-22.9zm-69.2-8.3.8 22.9 29.2 22.8 4.8-3.3-6.6-34.1z" class="st6"/>
            <path fill="#c0ad9e" stroke="#c0ad9e" stroke-linecap="round" stroke-linejoin="round" d="m180.3 262.3.3-9.3-2.5-2.2h-37.7l-2.3 2.2.2 9.3-31.5-14.9 11 9 22.3 15.5h38.3l22.4-15.5 11-9z"/>
            <path fill="#161616" stroke="#161616" stroke-linecap="round" stroke-linejoin="round" d="m177.9 230.9-4.8-3.3h-27.7l-4.8 3.3-2.5 22.1 2.3-2.2h37.7l2.5 2.2z"/>
            <path fill="#763d16" stroke="#763d16" stroke-linecap="round" stroke-linejoin="round" d="m278.3 114.2 8.5-40.8-12.7-37.9-96.2 71.4 37 31.3 52.3 15.3 11.6-13.5-5-3.6 8-7.3-6.2-4.8 8-6.1zM31.8 73.4l8.5 40.8-5.4 4 8 6.1-6.1 4.8 8 7.3-5 3.6 11.5 13.5 52.3-15.3 37-31.3-96.2-71.4z"/>
            <path d="m267.2 153.5-52.3-15.3 15.9 23.9-23.7 46 31.2-.4h46.5zm-163.6-15.3-52.3 15.3-17.4 54.2h46.4l31.1.4-23.6-46zm71 26.4 3.3-57.7 15.2-41.1h-67.5l15 41.1 3.5 57.7 1.2 18.2.1 44.8h27.7l.2-44.8z" class="st6"/>
        </symbol>
        <symbol id="TrustWallet" viewBox="0 0 64 64">
            <path d="M32.3999 64C50.073 64 64.3999 49.6731 64.3999 32C64.3999 14.3269 50.073 0 32.3999 0C14.7268 0 0.399902 14.3269 0.399902 32C0.399902 49.6731 14.7268 64 32.3999 64Z" fill="#3375BB"/>
            <path d="M32.6267 14C38.9508 19.2816 46.2029 18.9559 48.275 18.9559C47.8217 48.9937 44.3683 43.0373 32.6267 51.46C20.8851 43.0373 17.4533 48.9937 17 18.9559C19.0505 18.9559 26.3026 19.2816 32.6267 14Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
        <symbol id="Telegram">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
        </symbol>
        <symbol id="Twitter">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </symbol>
        <symbol id="Reddit">
            <path d="M6.167 8a.831.831 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661zm1.843 3.647c.315 0 1.403-.038 1.976-.611a.232.232 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83.458 0 .83-.381.83-.83a.831.831 0 0 0-1.66 0z"/>
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.203.203 0 0 0-.153.028.186.186 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224c-.02.115-.029.23-.029.353 0 1.795 2.091 3.256 4.669 3.256 2.577 0 4.668-1.451 4.668-3.256 0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165z"/>
        </symbol>
        <symbol id="Envelope">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </symbol>
        <symbol id="Github">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </symbol>
        <symbol id="Language">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
        </symbol>
    </svg>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm border-bottom p-0 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL_XP; ?>">
                <svg width="25" height="25"><use xlink:href="#Framework"/></svg>
                <span><?php echo Application::$app->language->dictionary['Lang_Framework']; ?></span>
            </a>
            <button class="navbar-toggler px-1 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo htmlentities(basename($_SERVER['REQUEST_URI']))=='about' ? 'active' : ''; ?>" href="<?php echo URL_XP."about" ?>"><?php echo Application::$app->language->dictionary['Lang_About']; ?></a>
                    </li>
                </ul>
                <a href="/language" class="text-decoration-none text-dark px-2"><?php echo Application::$app->language->dictionary['Lang_Footer']; ?> <svg width="16" height="20"><use xlink:href="#Language"/></svg></a>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-wallet"></i> Please choose your wallet type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-dark btn-sm enableEthereumButton"><svg width="25" height="25"><use xlink:href="#MetaMask"/></svg> MetaMask</button>
                        <button type="button" class="btn btn-dark btn-sm disabled"><svg width="25" height="25"><use xlink:href="#BSC"/></svg> Binance Smart chain</button>
                        <button type="button" class="btn btn-dark btn-sm disabled"><svg width="25" height="25"><use xlink:href="#TrustWallet"/></svg> TrustWallet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center justify-content-center py-5">
        <div class="row py-lg-5">
        {{content}}
        </div>
    </div>

    <footer class="fixed-bottom bg-light text-dark shadow border-top" id="Footer">
        <div class="container">
            <div class="row py-1">
                <div class="col fw-bold">
                    <small><?php echo Application::$app->language->dictionary['Copy'];?></small>
                    <div class="float-end">
                        <a class="text-dark text-decoration-none" href="https://t.me/#" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Telegram"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://twitter.com/xDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Twitter"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://www.reddit.com/user/AbuDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Reddit"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="mailto:e@hotmail.com" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Envelope"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://github.com/xDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Github"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo JS.'bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php echo JS.'main.js'; ?>"></script>
</body>
</html>