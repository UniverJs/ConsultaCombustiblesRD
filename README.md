# ConsultaCombustiblesRD
Feed para XML consulta prescios semanales combustibles R.D. PHP

Aqui tienes un funcion que consulta el feed de la pagina del Ministerio de Industria y Comercio de la Republica Dominicana y 
captura el xml leyendo sus Items y permitiendo ocuparlos en variables locales para html por lo que puedes integrar la misma en tu
portal o usar como ejemplo para construir API para algun desarrollo en otro lenguaje que consuma webservices. 

Puedes hacerlo sin el "for" para solo mostrar una salida, pero si necesitas colsultar varios 
SubItems es obligatorio su uso.

/* 
   Poblamos html para el desplegue. Puedes ocupar cualquiera de estos elementos:
<channel>
   <title>
   <link>
   <description>
<item>
   <title>
   <pubDate>
   <description>
   <link>

Para el standar de xml para rss existen otros mas pero no se ocupan en este xml en particular.
*/

Cualquier Mejora es Bienvenida..!
Espero que les sea de utilidad.
