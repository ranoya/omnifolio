< !DOCTYPE html >

    <
    html >

    <
    head >
    <
    meta charset = "utf-8" >
    <
    meta name = "pinterest"
content = "nopin" / >
    <
    meta name = "pinterest"
content = "nohover" >
    <
    meta http - equiv = "X-UA-Compatible"
content = "IE=edge,chrome=1" >
    <
    meta name = "viewport"
content = "width=device-width, initial-scale=1, maximum-scale=1" >
    <
    title > Orbitalis < /title> <
meta name = "generator"
content = "artesanal" / >
    <
    meta name = "description"
content = "Orbitalis, arte generativa da série comportamental" >
    <
    meta name = "author"
content = "Prof. Dr. Guilherme Ranoya" >
    <
    meta name = "keywords"
content = "arte generativa, computação criativa, código criativo" >
    <
    meta property = "og:url"
content = "https://www.ranoya.com/arte/SerieComportamentais" >
    <
    meta property = "og:title"
content = "Série Comportamentais" >
    <
    meta property = "og:description"
content = "Organização de composições generativas criadas por Guilherme Ranoya" >
    <
    meta property = "og:type"
content = "article" >
    <
    meta property = "og:locale"
content = "pt_BR" >
    <
    meta property = "og:image:width"
content = "600" >
    <
    meta property = "og:image:height"
content = "600" >
    <
    meta property = "og:site_name"
content = "ranoya.com" >
    <
    meta property = "og:image:type"
content = "image/jpeg" >
    <
    meta property = "og:image"
content = "https://www.ranoya.com/Assets/coverimages/portfolio600.jpg" / >
    <
    meta property = "og:image:secure_url"
content = "https://www.ranoya.com/Assets/coverimages/portfolio600.jpg" >
    <
    link rel = "image_src"
type = "image/jpg"
href = "https://www.ranoya.com/Assets/coverimages/portfolio600.jpg" / >

    <
    link rel = "icon"
type = "image/png"
href = "https://www.ranoya.com/Assets/coverimages/portfolio16.png" >
    <
    link rel = "shortcut icon"
href = "https://www.ranoya.com/Assets/coverimages/portfolio57.png" / >
    <
    link rel = "apple-touch-icon"
href = "https://www.ranoya.com/Assets/coverimages/portfolio57.png" / >
    <
    link rel = "apple-touch-icon"
sizes = "72x72"
href = "https://www.ranoya.com/Assets/coverimages/portfolio72.png" / >
    <
    link rel = "apple-touch-icon"
sizes = "114x114"
href = "https://www.ranoya.com/Assets/coverimages/portfolio114.png" / >
    <
    link rel = "apple-touch-icon"
sizes = "144x144"
href = "https://www.ranoya.com/Assets/coverimages/portfolio144.png" / >

    <
    link REL = "stylesheet"
type = "text/css"
href = "../mostra.css" >

    <
    !--Chrome, Firefox OS and Opera-- >
    <
    meta name = "theme-color"
content = "#FFFFFF" >
    <
    !--Windows Phone-- >
    <
    meta name = "msapplication-navbutton-color"
content = "#FFFFFF" >
    <
    !--iOS Safari-- >
    <
    meta name = "apple-mobile-web-app-status-bar-style"
content = "#FFFFFF" >
    <
    meta name = "pinterest"
content = "nopin" / >
    <
    meta name = "pinterest"
content = "nohover" >
    <
    script src = "https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.min.js" > < /script> <
script src = "../singlecolors.js" > < /script>

    <
    /head>



    <
    body style = "margin: 0; padding: 0; overflow-y: hidden; overflow-x: hidden;" >


    <
    div id = "dorbitantis"
style = "position: absolute; top: 0; left: 0; width: 100%; height: 100vh; margin: 0; padding: 0;" > < /div>

    <
    script type = "module" >
    import orbitais from "../Pecas/concentricon.js";

let orbis = orbitais({
    p5,
    'bgcolor': getComputedStyle(document.documentElement)
        .getPropertyValue('--cor-invert'),
    'fcolor': getComputedStyle(document.documentElement)
        .getPropertyValue('--cor-base'),
    'el': 'dorbitantis'
});

<
/script>


<
/body>

<
/html>