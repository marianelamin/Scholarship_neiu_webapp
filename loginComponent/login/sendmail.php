<?php
echo '<pre>';
echo "This is the post content:\n";
var_dump($_POST);
echo'</pre>';


    echo 'you are good!  Now check your email and confirm, it is you!';
    $solicitante = 'marianela_min@yahoo.com ';
    $asunto = "Bienvenido a Proyecto de Amor";
    $body_header = "Hola recibiste este correo porque tienes deseos de ser parte de Proyecto de amor."
    ." Porfavor introduce los siguientes numeros en el portal para que puedas avanzar con tu inscripcion.\n";
    $body_footer = "\n\nSi no solicitaste ser parte de Proyecto de amor porfavor haz caso omiso a este correo.";
    $encabezado = "From: no-reply@pdaorgve.com\r\nReply-To: proyectodeamor@gmail.com";
    
    
    require("server.php");
	$cedula = intval($_POST['entry_cedula']);
    $email = $mysqli->escape_string($_POST['entry_email']);
    
    $sql = "SELECT * FROM ci WHERE ci = '$cedula';";
    $response = $mysqli->query($sql) or die($mysqli->error);
    echo '<pre>';
    echo "This is the query respose:\n";
    var_dump($response);
    echo 'response->num_rows: '.$response->num_rows;
    $row = $response->fetch_assoc();
    $usr_id = $row['ci_id'];
    echo 'user_id of cedula: '.$usr_id;
    echo'</pre>';

    if($response->num_rows == 0)
    {

    }

    
    //TO-DO: this should be a random number of 6 characters.
    $message_body = 123456;
    // TO-DO: store in the database along with the email and keep track of the user_id
    
    //enviar el email
    $to = $solicitante;
    $subject = $asunto;
    $body = $body_header.$message_body.$body_footer;
    $headers = $encabezado;
    
    // if (mail($to, $subject, $body, $headers)){
        if(true){ // change this line to mail(,,,)
              
            echo "<section>";
            echo "<h2>Gracias por tu interes en Proyecto de Amor</h2>";
            echo "<div><div><p class='success'>";
            //echo "Email sent to: ${to}<br />";
            //echo "${headers}<br />";
            echo "Hola <b>${solicitante}</b>";
            echo "<br />Porfavor chequea tu correo e introduce el codigo enviado.<br />";
            echo " \"${body}\" ";
            echo "</p></div></div></section>";
           
          
            // header("Location: usr_confirm.php?usr_id=3");
    
          }
          else{
            echo "<section>";
            echo "<h2>Gracias por tu interes en proyecto de amor</h2>";
            echo "<div><p class='error'> Oops, algo inesperado ocurrio.  Intenta llenar la forma otra vez.";
            echo "</p></div></section>";  
          }  



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="" type="image/x-icon">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php require_once ("../css/style_config.php"); ?>
	<title> PdA - Inscripción General </title>
	<link rel="stylesheet" type="text/css" href="../css/style_reg_form.css">

	<script type="text/javascript" nonce="">

          /**
 * @license
 *
 * H5F 1.1.1
 * See https://github.com/ryanseddon/H5F/ for details.
 *
 * Copyright (c) 2013 Ryan Seddon
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */
 (function(e,t){"function"==typeof define&&define.amd?define(t):"object"==typeof module&&module.exports?module.exports=t():e.H5F=t()})(this,function(){var e,t,a,i,n,r,l,s,o,u,d,c,v,p,f,m,b,h,g,y,w,C,N,A,E,$,x=document,k=x.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder",onSubmit:Function.prototype,onInvalid:Function.prototype};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var s=0,o=e.length;o>s;s++)l(e[s]);else l(e)},l=function(a){var i,r=a.elements,l=r.length,c=!!a.attributes.novalidate;if(g(a,"invalid",o,!0),g(a,"blur",o,!0),g(a,"input",o,!0),g(a,"keyup",o,!0),g(a,"focus",o,!0),g(a,"change",o,!0),g(a,"click",u,!0),g(a,"submit",function(i){return e=!0,t||c||a.checkValidity()?(n.onSubmit.call(a,i),void 0):(w(i),void 0)},!1),!v())for(a.checkValidity=function(){return d(a)};l--;)i=!!r[l].attributes.required,"fieldset"!==r[l].nodeName.toLowerCase()&&s(r[l])},s=function(e){var t=e,a=h(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,l=/^(input|keyup)$/i,s=r.test(n.type)?n.type:n.pattern?n.pattern:!1,o=p(t,s),u=m(t,"step"),v=m(t,"min"),b=m(t,"max"),g=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return d.call(this,t)},t.setCustomValidity=function(e){c.call(t,e)},t.validity={valueMissing:a,patternMismatch:o,rangeUnderflow:v,rangeOverflow:b,stepMismatch:u,customError:g,valid:!(a||o||u||v||b||g)},n.placeholder&&!l.test(i)&&f(t)},o=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,l=/^(checkbox|radio)$/i,u=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||s(t),t.validity.valid&&(""!==t.value||l.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&u&&(y(t.form,"keyup",o,!0),u=!1))},d=function(t){var a,i,r,l,s,u=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var d=0,c=a.length;c>d;d++)i=a[d],r=!!i.attributes.disabled,l=!!i.attributes.required,s=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&!r&&(l||s&&l)&&(o(i),i.validity.valid||u||(e&&i.focus(),u=!0,n.onInvalid.call(t,i)));return!u}return o(t),t.validity.valid},c=function(e){var t=this;t.validationMessage=e},u=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(k,"validity")&&E(k,"checkValidity")},p=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},f=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,l=/^password$/i,s=!!("placeholder"in k);s||!r.test(e.nodeName)||l.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,g(e.form,"submit",function(){i="submit",f(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),l=(r-a)%n;return h(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==l:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},b=function(e){var t=!!e.attributes.required;return t?h(e):!1},h=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},g=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});
</script>

</head>

<body dir="ltr" class="ss-base-body">
	<div itemscope="" itemtype="http://schema.org/CreativeWork/FormObject">
		<meta itemprop="name" content="Inscripción Misiones PDA">
		<meta itemprop="description" content="Por favor responde cada una de las siguientes preguntas. Información sujeta a verificación.">

		<meta itemprop="url" content="https://docs.google.com/forms/d/e/1FAIpQLSehf_TzdVsRi89QO_uMXbJIRUT1TvspUudgZXSGgXMejvgz7Q/viewform?usp=send_form">
		<meta itemprop="embedUrl" content="https://docs.google.com/forms/d/e/1FAIpQLSehf_TzdVsRi89QO_uMXbJIRUT1TvspUudgZXSGgXMejvgz7Q/viewform?usp=send_form&amp;embedded=true">
		<meta itemprop="faviconUrl" content="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_qp2.png">




		<div class="ss-form-container">
			<div class="ss-header-image-container">
				<div class="ss-header-image-image">
					<div class="ss-header-image-sizer"></div>
				</div>
			</div>
			<div class="ss-top-of-page">
				<div class="ss-form-heading">
					<h1 class="ss-form-title" dir="ltr">Inscripción Misiones PDA</h1>
					<div class="ss-form-desc ss-no-ignore-whitespace" dir="ltr">Por favor responde cada una de las siguientes preguntas. Información sujeta a verificación.</div>

					<div class="ss-required-asterisk" aria-hidden="true">* Requerido</div>
				</div>
			</div>
			<div class="ss-form">
				<form action="usr_confirm.php" method="POST" id="ss-form" target="_self" autocomplete="on" _lpchecked="1">
					<ol role="list" class="ss-question-list">

						<div class="ss-form-question errorbox-good" role="listitem">
							<div dir="auto" class="ss-item ss-item-required ss-text">
								<div class="ss-form-entry">
									<label class="ss-q-item-label" for="entry_6digits">
										<div class="ss-q-title">Introduce los 6 digitos enviados a tu correo:
											<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
											<span class="ss-required-asterisk" aria-hidden="true">*</span>
										</div>
										<div class="ss-q-help ss-secondary-text" dir="auto"></div>
									</label>
									<input type="number" name="entry.6digits" value="" class="ss-q-short" id="entry_6digits" dir="auto" aria-label="1er Nombre  " aria-required="true" required="" title="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
									<div class="error-message" id="1418297321_errorMessage"></div>
									<div class="required-message">Campo requerido</div>
								</div>
							</div>
						</div>
                        <div>
                            <input hidden type="number" name="entry.6digitsConfirmed" value="<?=htmlentities($message_body)?>" />
                        </div>
						
						<div class="ss-item ss-navigate">
							<table id="navigation-table">
								<tbody>
									<tr>
										<td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
											<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</ol>
				</form>
			</div>

			<div class="ss-footer">
				
			</div>

            <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic="" aria-relevant="additions">  .  </div>
            <!-- <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic="" aria-relevant="additions">Screen reader support enabled</div> -->
		</div>

		<script nonce="" type="text/javascript" src="./Inscripción Misiones PDA_files/2434231517-formviewer_prd.js"></script>

		<script type="text/javascript" nonce="">H5F.setup(document.getElementById('ss-form'));
		_initFormViewer(
	"[100,null,[[[2005063964,[[1,6,[\x220\x22]\n,\x22Debe colocar un n\xfamero de c\xe9dula. Si es menor sin c\xe9dula, favor colocar la fecha de nacimiento sin guiones de la siguiente forma DDMMAAAA\x22]\n]\n]\n,[1522088102,[[2,102,null,\x22Debe colocar una direcci\xf3n de correo electr\xf3nico v\xe1lida\x22]\n]\n]\n]\n]\n]\n");</script>
</div>
</body>
</html>