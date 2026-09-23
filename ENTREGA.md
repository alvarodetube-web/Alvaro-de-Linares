# Web de Álvaro de Linares

Creada el 23 de septiembre de 2026. Diseño editorial adaptable a móvil, tablet y escritorio. La implementación es HTML estático: el contenido y los enlaces son accesibles sin JavaScript. El script se utiliza únicamente para el menú móvil, preparar el correo y la impresión del media kit.

## Contenido

Inicio, sobre mí, redes, vídeos virales, prensa y TV, colaboraciones, libros/publicaciones, contacto, media kit; cuatro páginas temáticas (gadgets, trucos para casa, curiosidades y entretenimiento); fuentes, compatibilidad con la antigua sección Varios y página 404.

El contenido histórico procede de resultados indexados de la web anterior. No se ha restaurado una copia íntegra de 2025. Se han separado los datos históricos de las fuentes disponibles en la consulta actual. No se utilizan la portada redirigida, cifras agregadas sin validar, testimonios inventados, marcas patrocinadoras supuestas ni enlaces de compra sin verificar.

## SEO implementado

- HTML individual para cada ruta, con título y descripción únicos, canonical absoluto y un H1.
- Schema.org JSON-LD: Person, WebSite, WebPage, ProfilePage, CollectionPage, ContactPage y BreadcrumbList según la página.
- Identidad consistente y enlaces sameAs a los perfiles; ubicación Málaga, España, sin inventar dirección postal.
- Metadatos Open Graph y Twitter de título, descripción y URL. No se ha generado imagen social: no se solicitó una imagen específica.
- Sitemap XML con páginas indexables y robots.txt. Fuentes, Varios y 404 llevan noindex; las dos primeras son utilitarias, no páginas de captación.
- Arquitectura temática y enlaces internos; conservación de /videos/, /colaboraciones/ y /varios/.
- Diseño adaptable, enlace de salto al contenido, foco visible, etiquetas de formulario, menú accesible y respeto a movimiento reducido.

## Funcionalidad y límites

El contacto abre la aplicación de correo del visitante con un borrador; no hay servidor de formularios ni almacenamiento de consultas. No se han enviado mensajes.

El media kit permite imprimir o guardar PDF desde el navegador. No inventa métricas de audiencia, tarifas o datos demográficos. Para un kit comercial definitivo se requieren estadísticas de las cuentas.

Las tarjetas históricas indican que los recuentos son autodeclarados en la antigua web, sin fecha de medición, y enlazan a los canales cuando no existe un enlace individual verificable. Hay un ejemplo directo de vídeo en Snapchat.

La fotografía de referencia procede de La Opinión de Málaga y lleva crédito. Su licencia de reutilización pública no se ha confirmado: sustituirla por una fotografía propia autorizada o confirmar los derechos antes de lanzar públicamente. No es una fotografía generada.

El correo público se ha contrastado en dos índices de la descripción de YouTube, pero no directamente mediante acceso a la cuenta. Confirmar el buzón profesional preferido antes de una campaña.

## Estado de publicación

Se registró el sitio privado appgprj_6ab3861dc7f88191b5657eeaac33759a. La conexión de Sites dejó de estar disponible durante la construcción; no se ha podido completar el despliegue. La URL prevista no acredita una publicación efectiva. No se modificó alvarodelinares.es ni su DNS.

## Lanzamiento en el dominio definitivo

1. Confirmar control del dominio y recuperar la redirección incorrecta con su proveedor. No se ha intentado cambiarla sin acceso autorizado.
2. Confirmar fotografía, correo y métricas del media kit. Revisar datos del titular y textos legales aplicables a la explotación concreta, que no se han inventado.
3. Generar con SITE_ORIGIN=https://alvarodelinares.es (o el dominio definitivo). Esto actualiza canonical, schema, Open Graph y sitemap de forma coherente.
4. Publicar y comprobar respuesta 200 de las páginas, 404 real de rutas inexistentes, HTTPS y ausencia de bloqueos de indexación. Mantener privacidad hasta completar revisión.
5. Configurar redirecciones 301 solo para rutas antiguas que cambien; Varios ya conserva una ruta útil. Mantener /videos/ y /colaboraciones/.
6. Dar de alta el dominio en Google Search Console y Bing Webmaster Tools con la cuenta del propietario, enviar el sitemap y revisar indexación. No se ha accedido a esas cuentas.
7. Publicar contenido original de forma continuada: páginas específicas de los vídeos con enlace, fecha real, transcripción propia y contexto; añadir VideoObject solo cuando estén verificadas sus propiedades.
8. Medir impresiones, consultas y clics. El SEO técnico no garantiza posiciones ni aparecer en todas las búsquedas; la privacidad del sitio impide la indexación pública.

## Uso local

Con Node.js instalado, desde esta carpeta:

    node build.mjs --full
    node verify.mjs
    node serve.mjs

Abrir http://127.0.0.1:4173/. Para subir a un alojamiento estático, usar el contenido de dist. El proyecto no requiere instalar dependencias.

Fuentes detalladas y sus límites: dist/fuentes/index.html. Resultado de comprobaciones estáticas: verification.json. Las comprobaciones estáticas no equivalen a una auditoría completa de accesibilidad, rendimiento ni posicionamiento.

## Verificación final

16 páginas HTML, 404 referencias internas comprobadas y 16 documentos JSON-LD analizados sin errores. Respuesta HTTP 200 de la portada local. Fotografía descargada y verificada visualmente. La revisión visual en navegador y móvil no se completó: la autorización de control del navegador expiró. No se afirman resultados de Lighthouse o pruebas de interacción que no se hayan ejecutado.


## Revisión de diseño

Portada reorganizada con el nombre del creador, redes bajo el titular, menú Inicio / Vídeos / Colaboraciones / Varios, presentación personal, categorías y Lo más visto. Aproximación a la estructura histórica; no fue posible recuperar los estilos CSS originales. Conserva las 16 páginas y el SEO. Verificación actual: 447 referencias internas sin errores.

