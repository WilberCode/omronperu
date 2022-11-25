<?php include 'includes/config.php' ?> 

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMRON PERÚ: Cuida tu salud</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="canonical" href="<?=theCurrentUrl();?>" />
    <meta name="keywords" content="omron, salud, tensiometros, tensiometro de brazo HEM-7120, tensiometro de muñeca HEM-6124  ">
    <meta name="description" content="Cuida tu Salud - Tensiómetro precisos y fáciles de usar">
    <meta property="og:type" content="website">
    <meta property="og:title" content="OMRON PERÚ">
    <meta property="og:site_name" content="OMRON PERÚ">
    <meta property="og:url" content="<?=theCurrentUrl();?>"/>
    <meta property="og:description" content="Cuida tu Salud - Tensiómetro precisos y fáciles de usar">
    <meta property="og:image" content="http://omronperu.pe/build/img/omron-banner-screenshot.jpg">
    <link rel="stylesheet" href="build/css/app.css?v=<?=theVersion();?>"> 
 
          <!-- Google tag (gtag.js) --> 
          <script async src="https://www.googletagmanager.com/gtag/js?id=G-4YLWQZYPHE"></script>
            <script>
            window.onload = function(){
                let hotname =  window.location.hostname;
                if (hotname == 'omronperu.pe') {
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    
                    gtag('config', 'G-4YLWQZYPHE');
                }
            } 
            </script>

             <!-- trackEvent - google analytics --> 
            <script type="text/javascript"> 
              window.onload = function(){
                setTimeout(function(){ 
                    var _gaq = _gaq || []; 
                    _gaq.push(['_setAccount', 'G-4YLWQZYPHE']);
                    _gaq.push(['_trackPageview']);

                    (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })(); 
                },3000);
            }
               
            </script>
</head>

<body> 
    <main>
        <div class="max-w-[1920px] mx-auto"> 
            <figure class="block" >
                <a href="https://omronhealthcare.la/pe/productos?categoria=MonitoresBrazo"> 
                    <img class=""   src="build/img/omron-banner.jpg" alt="">
                </a>
            </figure>
            <div >
                      <div class="grid grid-cols-4 sm:grid-cols-8 gap-0   "> 
                          <div> 
                            <img loading="lazy" src="build/img/consiguelosen.jpg" alt="CONSÍGUELOS EN:" title="CONSÍGUELOS EN" >
                          </div>
                          <a href="https://inkafarma.pe/buscador?keyword=omron" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Inkafarma', 'Enlace de Tiendas Omron', 'Inkafarma']);">
                              <img loading="lazy" src="build/img/inkafarma.jpg" alt="Inkafarma"  title="Inkafarma">
                          </a> 
                          <a href="https://www.mifarma.com.pe/buscador?keyword=omron" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Mifarma', 'Enlace de Tiendas Omron', 'Mifarma']);">
                              <img loading="lazy" src="build/img/mifarma.jpg" alt="Mifarma" title="Mifarma" >
                          </a> 
                          <a href="https://farmaciauniversal.com/buscador/resultados?q=omron" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Farmacia Universal', 'Enlace de Tiendas Omron', 'Farmacia Universal']);">
                              <img loading="lazy" src="build/img/farmacia-universal.jpg" alt="Farmacia Universal" title="Farmacia Universal">
                          </a> 
                          <a href="https://boticasperu.pe/catalogsearch/result/?q=omron" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Boticas Perú', 'Enlace de Tiendas Omron', 'Boticas Perú']);">
                              <img loading="lazy" src="build/img/boticas-peru.jpg" alt="Boticas Perú" title="Boticas Perú">
                          </a> 
                        
                          <a href="https://www.coolbox.pe/omron?_q=omron&map=ft" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Coolbox', 'Enlace de Tiendas Omron', 'Coolbox']);">
                              <img loading="lazy" src="build/img/coolbox.jpg" alt="Coolbox" title="Coolbox" >
                          </a> 
                       
                          <a href="https://hiraoka.com.pe/marca-omron" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Hiraoka', 'Enlace de Tiendas Omron', 'Hiraoka']);">
                              <img loading="lazy" src="build/img/hiraoka.jpg" alt="Hiraoka" title="Hiraoka" >
                          </a> 
                     
                            <a  href="https://lumiluperu.com/search?q=omron&options%5Bprefix%5D=last" target="_blank"  onclick="_gaq.push(['_trackEvent', 'Lumilu Péru', 'Enlace de Tiendas Omron', 'Lumilu Péru']);" >
                                <img   loading="lazy" src="build/img/lumilu-peru.jpg" alt="Lumilu Péru" title="Lumilu Péru">
                            </a>  
                          
                      </div>
                  </div>
        </div>
     </main>
</body>

</html>