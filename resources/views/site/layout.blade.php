<!DOCTYPE html>
 <html lang ="pt-br" >
 <head>
 <meta charset=" UTF -8" >
 <meta http-equiv ="X -UA - Compatible" content="IE = edge" >
 <meta name =" viewport" content=" width = device - width , initial - scale =1.0 " >
 <title> @yield ('title') </title>
 {{--carregar bootstrap sass e js--}}
 @vite (['resources/sass/app.scss', 'resources/js/app.js'])
 </head>
 <body>
 {{ - - conteúdo - -}}
 @yield ('content')
 </body>
 </html>