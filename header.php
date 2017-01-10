<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>

    <header role="banner" class="header">
      <div class="container">
        <h1 class="header__title">
          <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="hidden"><?php bloginfo('name'); ?></span>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
              <g>
                <path d="M22.13,22H17.87L10.25,11.65H7.66v-1.1H9.79a7.55,7.55,0,0,0,2.29-.33,5.69,5.69,0,0,0,1.82-.94,4.23,4.23,0,0,0,1.63-3.42,4.68,4.68,0,0,0-.35-1.81,4.23,4.23,0,0,0-1-1.42,4.37,4.37,0,0,0-1.46-.93,5.12,5.12,0,0,0-1.82-.33V0h.63A12.71,12.71,0,0,1,15,.43a7.31,7.31,0,0,1,2.48,1.19A5.08,5.08,0,0,1,19,3.43a5.27,5.27,0,0,1,.5,2.3,4.77,4.77,0,0,1-.38,1.92A5.28,5.28,0,0,1,18,9.27a7,7,0,0,1-1.7,1.25,9,9,0,0,1-2.19.82Z" style="fill: #234091"/>
                <path d="M0,1.37V0H10V1.37H9.56a5.35,5.35,0,0,0-2.12.27,1.41,1.41,0,0,0-.67,1A20.74,20.74,0,0,0,6.6,6.11v9.54A29.17,29.17,0,0,0,6.72,19a1.73,1.73,0,0,0,.65,1.2,3.62,3.62,0,0,0,2,.39H10V22H0V20.63H.65a3.8,3.8,0,0,0,1.95-.36,1.63,1.63,0,0,0,.69-1.12,25,25,0,0,0,.15-3.51V6.11a23.71,23.71,0,0,0-.15-3.39,1.45,1.45,0,0,0-.65-1.06A5.1,5.1,0,0,0,.47,1.37Z" style="fill: #bdc5c6"/>
              </g>
            </svg>
          </a>
        </h1>

        <div class="header__menu">
          <button type="button" class="toggle">
            <span class="hidden"><?php esc_html_e('Menu', 'rossi-associati'); ?></span>
            <span class="toggle__bar"></span>
            <span class="toggle__bar"></span>
            <span class="toggle__bar"></span>
          </button>
        </div>

        <nav role="navigation" class="header__nav">
          <h2 class="hidden"><?php esc_html_e('Navigation', 'rossi-associati'); ?></h2>

          <ul class="nav__items">
            <li class="nav__item nav__item--logo">
              <a rel="home" href="<?php echo esc_url(home_url('/')); ?>">
                <span class="hidden"><?php bloginfo('name'); ?></span>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 76">
                  <g>
                    <g class="brand">
                      <path d="M94.25,35.34H87.4L75.16,18.72H71V16.95h3.42a12.13,12.13,0,0,0,3.68-.53A9.13,9.13,0,0,0,81,14.91a6.79,6.79,0,0,0,2.63-5.5,7.52,7.52,0,0,0-.56-2.91,6.8,6.8,0,0,0-1.55-2.28A7,7,0,0,0,79.2,2.74a8.23,8.23,0,0,0-2.92-.53V0h1a20.41,20.41,0,0,1,5.58.68,11.74,11.74,0,0,1,4,1.91,8.16,8.16,0,0,1,2.4,2.92,8.46,8.46,0,0,1,.81,3.7,7.66,7.66,0,0,1-.62,3.08,8.49,8.49,0,0,1-1.76,2.59,11.26,11.26,0,0,1-2.73,2,14.48,14.48,0,0,1-3.51,1.31Z" style="fill: #234091"/>
                      <path d="M58.7,2.2V0H74.81V2.2h-.75a8.6,8.6,0,0,0-3.4.43,2.27,2.27,0,0,0-1.08,1.6,33.32,33.32,0,0,0-.27,5.58V25.14a46.87,46.87,0,0,0,.19,5.45,2.78,2.78,0,0,0,1,1.92,5.81,5.81,0,0,0,3.23.63h1v2.2H58.7v-2.2h1a6.1,6.1,0,0,0,3.13-.57A2.61,2.61,0,0,0,64,30.77a40.14,40.14,0,0,0,.23-5.64V9.81A38.08,38.08,0,0,0,64,4.36a2.33,2.33,0,0,0-1-1.7,8.2,8.2,0,0,0-3.48-.47Z" style="fill: #bdc5c6"/>
                    </g>
                    <g class="logo" style="fill: #231f20">
                      <path d="M6,55.22H7a3.59,3.59,0,0,1,1.18.26,1.7,1.7,0,0,1,.8.65,1.76,1.76,0,0,1,.31,1q0,1.59-2,1.93l1.25,2.34A1.69,1.69,0,0,0,9.1,62a1.14,1.14,0,0,0,.38.15,2.44,2.44,0,0,0,.49,0v.25H6.54L4.67,59H4.1v2a3.3,3.3,0,0,0,0,.66.57.57,0,0,0,.2.33,1,1,0,0,0,.34.17l.64,0h.05v.25H0v-.25H.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.64.64,0,0,0,.22-.32A3.46,3.46,0,0,0,1.57,61V56.68a3.34,3.34,0,0,0,0-.67.57.57,0,0,0-.2-.33A.85.85,0,0,0,1,55.51l-.64,0H0v-.26Zm-2.69.26H1.47a1.05,1.05,0,0,1,.27.33H3.28ZM1.76,61.9l-.12.2-.17.15h2l-.1-.16a1.7,1.7,0,0,1-.08-.19ZM1.81,56l0,.24v.24H3.28V56Zm0,5.25v.31l0,.16H3.28v-.48Zm0-4.59v.47H3.27v-.47Zm0,.65v.49H3.27v-.49Zm0,.66v.45H3.27v-.49Zm0,.66v.47H3.27v-.47Zm0,.65v.49H3.27v-.49Zm0,.66v.45H3.27v-.47Zm0,.65v.49H3.27v-.49Zm2.94-1.77a1.49,1.49,0,0,0,1.7-1.66,1.65,1.65,0,0,0-.57-1.36,2,2,0,0,0-1.24-.32H4.1v3.34Zm1.47-.18L6,58.79l-.27.12-.32.1L5,59.08v0H6.38l.57-.25.21-.09.22-.13Zm-1.15.64.26.49H6.74l-.25-.49Zm.36.66.26.47H7.09l-.23-.46Zm.36.65.26.49H7.43l-.25-.49Zm1.6-4.89-.27-.11-.26-.07h-1l.23.15.2.18H7.62ZM6.18,61.24l.25.49H7.78l-.25-.49ZM6.65,58l-.1.23-.15.23H7.65a2.1,2.1,0,0,0,.44-.49Zm-.21-2,.15.28.09.2H8.15L8,56.24,7.83,56Zm.1,5.9.18.34H8.05l-.18-.34Zm.23-4.6v.24l-.05.24h1.5l.05-.21,0-.26Zm-.05-.65,0,.21v.26H8.32v-.28l-.06-.18Z"/>
                      <path d="M18.74,56.06a3.48,3.48,0,0,1,1.39,2.88,3.76,3.76,0,0,1-.39,1.7,3.44,3.44,0,0,1-1.15,1.31,5.52,5.52,0,0,1-3.18.79,7.47,7.47,0,0,1-2-.25,4.4,4.4,0,0,1-1.57-.82,3.45,3.45,0,0,1-1.44-2.85,3.54,3.54,0,0,1,1.55-3,5.16,5.16,0,0,1,3.15-.9,5.76,5.76,0,0,1,3.66,1.08Zm-8.05,2.56v.47h1.67v-.47ZM10.8,58l0,.25-.05.21h1.67l.06-.49Zm-.09,1.31,0,.24.06.24h1.63l0-.24v-.24Zm.34-2-.12.26-.09.22h1.63l.13-.49Zm-.18,2.63.09.25.13.22h1.53l-.06-.18-.06-.28Zm.61-3.28-.2.25-.14.22h1.52l.21-.47Zm-.3,3.93.15.25.21.23h1.34l-.21-.49Zm1-4.59-.51.45H13l.11-.2L13.3,56Zm-.49,5.25.28.26.29.22h1l-.3-.49Zm2-5.72L14,55.3l-.81.18a4,4,0,0,0-.68.34h1Zm-1.13,6.39a4,4,0,0,0,1.33.47l-.28-.26-.2-.21Zm4.16-5.72a1.56,1.56,0,0,0-1.39-1h-.23l-.25.05a.83.83,0,0,0-.31.14,2.53,2.53,0,0,0-.84,1.31,3.64,3.64,0,0,0-.14.45q-.05.23-.1.52t-.07.55v1.4a4.06,4.06,0,0,0,.08.43l.15.64c0,.12.05.23.08.31a3,3,0,0,0,.12.32,1.77,1.77,0,0,0,.58.85,1.5,1.5,0,0,0,.92.28,1.56,1.56,0,0,0,1.41-.91A5.37,5.37,0,0,0,17.24,59v-.14a5.88,5.88,0,0,0-.5-2.65Zm-.42,6.26a1.3,1.3,0,0,0,.33,0l.3-.11.34-.17.37-.25h-.83a2.42,2.42,0,0,1-.51.56Zm1-6.85L17,55.51l-.7-.23.26.27.18.26h.79Zm-.4.38.13.26.11.2h1.18l-.23-.25L17.83,56Zm.23,5.25-.22.49h.95l.28-.28.17-.2Zm0-4.59.13.47h1.4l-.14-.25-.14-.22Zm.16,3.93-.05.25-.07.23h1.26l.16-.24.13-.24Zm0-3.28.09.49H19l-.18-.49Zm.11,2.63-.07.47h1.47l.1-.24.07-.23Zm0-2,0,.49h1.65L19,58Zm0,1.31v.49h1.61l.07-.49Zm0-.65v.47h1.67v-.46Z"/>
                      <path d="M29.11,57.84h-.24a6.39,6.39,0,0,0-.86-1.1,5.19,5.19,0,0,0-1.59-1.1,4.66,4.66,0,0,0-1.9-.41,2.81,2.81,0,0,0-1.39.3.92.92,0,0,0-.52.84.78.78,0,0,0,.52.71l.25.11a1.71,1.71,0,0,0,.39.11l1.07.21,1.84.28a1.74,1.74,0,0,1,.46.1l.46.11.25.07.59.19a2.3,2.3,0,0,1,.6.32,2,2,0,0,1,.85,1.73A2.11,2.11,0,0,1,29,62.08a3.9,3.9,0,0,1-2.4.66h-.49l-.37,0-.32,0-.39-.11a3.62,3.62,0,0,1-.49-.16l-.4-.17a4.35,4.35,0,0,1-.45-.28l-.53-.37-.1-.06-1.42,1.06h-.26v-3h.26a3.89,3.89,0,0,0,.39.59l.53.56a5.59,5.59,0,0,0,.64.57,6.71,6.71,0,0,0,.76.49,5,5,0,0,0,2.59.69A3.23,3.23,0,0,0,28,62.21a.82.82,0,0,0,.49-.76.78.78,0,0,0-.44-.71l-.28-.12-.33-.12-.55-.11-.59-.12L24.26,60q-3-.42-3-2.42a2.23,2.23,0,0,1,1-1.83A3.82,3.82,0,0,1,24.56,55a5,5,0,0,1,3.1,1.1l1.28-1h.17Zm-7.65-.53v.47h1.28l-.3-.18a1.42,1.42,0,0,1-.23-.29Zm.17-.66-.06.18-.09.29h.65l-.05-.21a.68.68,0,0,1,0-.16v-.1ZM21.49,58l0,.26.11.22H26l-1.71-.26-.67-.12-.42-.1Zm1,3.5-.21-.16-.23-.24-.21-.23-.23-.3v.93Zm-.88.86.88-.67h-.87Zm.54-6.17,0-.11a.78.78,0,0,1,.14-.2,1.61,1.61,0,0,0-.37.26,2.67,2.67,0,0,0-.26.35h.36Zm-.41,2.46.26.3.26.2h6.1L28.09,59l-.27-.11-.21-.07-.52-.14Zm.82.65.17.07.21.07.37.12.44.11a3.63,3.63,0,0,0,.49.08h4.83l-.2-.22-.23-.23Zm3,.66.54.07q.54.07,1,.17a7.14,7.14,0,0,1,.81.23H29.3l0-.24-.09-.23Zm2.36-3.61.26.25.28.31v-.55Zm.54-.61-.53.43h.53Zm-.2,4.88.22.16a.49.49,0,0,1,.1.12l.14.2h.52l0-.22v-.24Zm.53.66v.2l0,.26-.14.34a2.11,2.11,0,0,0,.33-.3l.11-.23.11-.27Z"/>
                      <path d="M38.66,57.84h-.23a6.39,6.39,0,0,0-.85-1.11A5.19,5.19,0,0,0,36,55.64a4.66,4.66,0,0,0-1.88-.41,2.81,2.81,0,0,0-1.39.3.92.92,0,0,0-.52.84.78.78,0,0,0,.52.71l.25.11a1.71,1.71,0,0,0,.39.11l1.07.21,1.83.28a1.74,1.74,0,0,1,.46.1l.46.11.25.07.59.19a2.3,2.3,0,0,1,.6.32,2,2,0,0,1,.85,1.73,2.11,2.11,0,0,1-.87,1.77,3.9,3.9,0,0,1-2.4.66h-.49l-.37,0-.3,0-.39-.11a3.62,3.62,0,0,1-.49-.16l-.4-.17a4.35,4.35,0,0,1-.45-.28l-.53-.37-.1-.06-1.42,1H31v-3h.26a3.89,3.89,0,0,0,.39.59l.53.56a5.59,5.59,0,0,0,.63.57,6.71,6.71,0,0,0,.76.49,5,5,0,0,0,2.59.69,3.23,3.23,0,0,0,1.44-.26.82.82,0,0,0,.49-.76.78.78,0,0,0-.44-.71l-.28-.12L37,60.5l-.56-.11-.59-.12L33.8,60q-3-.42-3-2.42a2.23,2.23,0,0,1,1-1.83A3.82,3.82,0,0,1,34.12,55a5,5,0,0,1,3.1,1.1l1.28-1h.16ZM31,57.31v.47H32.3L32,57.6a1.42,1.42,0,0,1-.23-.29Zm.17-.66-.06.18-.09.29h.65l-.05-.21a.68.68,0,0,1,0-.16v-.1ZM31,58l.06.26.11.2h4.37l-1.71-.26L33.21,58l-.42-.1Zm1,3.5-.21-.16-.23-.24-.21-.23-.23-.3v.93Zm-.88.86.86-.67H31.2Zm.54-6.17,0-.11a.78.78,0,0,1,.14-.2,1.61,1.61,0,0,0-.37.26,2.67,2.67,0,0,0-.27.37h.36Zm-.41,2.46.24.3.26.2h6.12L37.65,59l-.27-.11-.19-.09-.52-.14Zm.82.65.17.07.21.07.37.12.44.11a3.63,3.63,0,0,0,.49.08h4.83l-.18-.25-.23-.23Zm3,.66.54.07q.54.07,1,.17a7.14,7.14,0,0,1,.78.22h1.41l0-.24-.09-.23ZM37.5,56.3l.26.25.28.31v-.55Zm.54-.61-.53.43H38Zm-.2,4.88.22.16a.49.49,0,0,1,.12.15l.14.2h.52l0-.22v-.28Zm.53.66v.2l0,.26-.14.34a2.11,2.11,0,0,0,.33-.3l.11-.23.11-.27Z"/>
                      <path d="M45.87,62.5H40.2v-.25h.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.64.64,0,0,0,.22-.32,3.46,3.46,0,0,0,.05-.69v-4.4a3.34,3.34,0,0,0,0-.67.57.57,0,0,0-.2-.33.85.85,0,0,0-.36-.16l-.62,0H40.2v-.26h5.67v.26h-.36a4,4,0,0,0-.61,0,.52.52,0,0,0-.34.15.52.52,0,0,0-.22.34,1.13,1.13,0,0,0,0,.12.93.93,0,0,0,0,.15V61a3.3,3.3,0,0,0,0,.66.57.57,0,0,0,.2.33,1,1,0,0,0,.34.17l.64,0h.34Zm-2.3-6.86a.49.49,0,0,1,.12-.17h-2a1.05,1.05,0,0,1,.27.33h1.56ZM42,61.9l-.12.2-.15.15h2l-.1-.16a1.7,1.7,0,0,1-.08-.19ZM42,56l0,.24v.24h1.43V56Zm0,5.25v.31l0,.16h1.47v-.48Zm0-4.59v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.49Zm0,.66v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.47Zm0,.65v.49h1.42v-.49Z"/>
                      <path d="M61.27,57.87H61a8.77,8.77,0,0,0-.78-.92,9.36,9.36,0,0,0-.92-.83,3.29,3.29,0,0,0-.84-.49,2.77,2.77,0,0,0-.95-.15H56.42v3.08h.28a2.05,2.05,0,0,0,1.09-.29,2.82,2.82,0,0,0,.89-1h.26v2.81h-.26l-.15-.25-.17-.22-.3-.28-.15-.13-.17-.12a2,2,0,0,0-1-.29h-.28v3.44h1.11l.29,0a2.66,2.66,0,0,0,.43-.08l.42-.15a3.74,3.74,0,0,0,.85-.53,8.1,8.1,0,0,0,1.61-1.61h.23V62.5H52.32v-.25h.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.64.64,0,0,0,.22-.32,3.46,3.46,0,0,0,.05-.69V56.68a3.34,3.34,0,0,0,0-.67.57.57,0,0,0-.2-.33.85.85,0,0,0-.36-.16l-.62,0h-.34v-.26h8.95Zm-5.66-2.39H53.83a1.05,1.05,0,0,1,.27.33h1.53ZM54.07,61.9l-.12.2-.15.15h1.8v-.34Zm.05-5.9,0,.25v.24H55.6V56Zm0,5.26v.31l0,.16H55.6v-.49Zm0-4.59v.47h1.43v-.48Zm0,.65v.49h1.43v-.49Zm0,.66v.44h1.43v-.49Zm0,.66v.47h1.43v-.48Zm0,.65v.49h1.43v-.49Zm0,.66v.44h1.43v-.47Zm0,.65v.49h1.43V60.6ZM57.93,59l.26.2.17.16v-.58H57.6Zm.43-.38V58l-.2.21-.23.17-.28.17ZM59.12,62l-.49.23h2v-.42h-1.2Zm1.41-6.57H58.8l.32.18.31.23h1.09Zm.1,6.17v-.87l-.32.32-.4.36-.23.2Zm-.95-5.57.29.25a3.43,3.43,0,0,1,.31.3l.25.28v-.84Z"/>
                      <path d="M70.26,60.48a1.23,1.23,0,0,0-.07.4,1.43,1.43,0,0,0,.18.71,1.19,1.19,0,0,0,.54.49l.23.11a.7.7,0,0,0,.29,0h.31v.25H67.82v-.25a1.51,1.51,0,0,0,1.08-.45,6.31,6.31,0,0,0,1-1.43l3-5.33h.26l3.37,6.09.32.53.15.17.19.17a1.46,1.46,0,0,0,.93.27h.15v.25H72.61v-.25h.55a.86.86,0,0,0,.49-.14.41.41,0,0,0,.21-.36.94.94,0,0,0-.13-.4l-.49-.88Zm-1.42,1.63-.22.14h1.23l-.16-.34h-.58Zm.8-.55,0-.31-.2.27-.07.09-.11.12h.36Zm2.07-3.87-1.37,2.54h2.75Zm.14-.25.21.36h1.63l-.26-.49H71.89Zm.16-.3h1.31l-.26-.47h-.79Zm.4,1.29h1.65l-.26-.49H72.14Zm0-2H73L72.67,56Zm.38,2.62h1.66l-.27-.47H72.52Zm.37.66H74.8l-.27-.49H72.89Zm.36.65h1.66l-.26-.47H73.24Zm.36.66h1.67l-.26-.47H73.6Zm.06,1.19h2.26l-.2-.34h-1.9a.65.65,0,0,1-.2.36Zm.09-.92a1,1,0,0,1,.08.19,1.2,1.2,0,0,0,0,.2h1.71l-.26-.49H73.92Z"/>
                      <path d="M86.83,57.84h-.21a6.39,6.39,0,0,0-.86-1.1,5.19,5.19,0,0,0-1.61-1.09,4.66,4.66,0,0,0-1.88-.41,2.81,2.81,0,0,0-1.39.3.92.92,0,0,0-.52.84.78.78,0,0,0,.52.71l.25.11a1.71,1.71,0,0,0,.39.11l1.07.21,1.84.28a1.74,1.74,0,0,1,.46.1l.46.11.25.07.59.19a2.3,2.3,0,0,1,.6.32,2,2,0,0,1,.82,1.73,2.11,2.11,0,0,1-.87,1.77,3.9,3.9,0,0,1-2.4.66h-.49l-.37,0-.3,0-.39-.11a3.62,3.62,0,0,1-.49-.16l-.4-.17a4.35,4.35,0,0,1-.45-.28l-.53-.37-.1-.06-1.41,1.06h-.26v-3h.26a3.89,3.89,0,0,0,.39.59l.53.56a5.59,5.59,0,0,0,.64.57,6.71,6.71,0,0,0,.76.49,5,5,0,0,0,2.59.69,3.23,3.23,0,0,0,1.44-.26.82.82,0,0,0,.49-.76.78.78,0,0,0-.44-.71l-.28-.12-.33-.12-.59-.11L84,60.27,81.95,60q-3-.42-3-2.42a2.23,2.23,0,0,1,1-1.83A3.82,3.82,0,0,1,82.27,55a5,5,0,0,1,3.1,1.1l1.28-1h.17Zm-7.66-.53v.47h1.28l-.3-.18a1.42,1.42,0,0,1-.23-.29Zm.17-.66-.06.18-.09.29h.65l-.07-.2a.68.68,0,0,1,0-.16v-.11ZM79.2,58l.06.26.11.22h4.37L82,58.18l-.67-.12-.42-.1Zm1.06,3.5-.21-.16-.23-.24-.21-.23-.23-.3v.93Zm-.88.86.86-.67h-.86Zm.54-6.17L80,56a.78.78,0,0,1,.14-.2,1.61,1.61,0,0,0-.37.26,2.67,2.67,0,0,0-.27.37h.36Zm-.41,2.46.23.27.26.2h6.12l-.29-.15-.27-.11-.21-.07-.52-.14Zm.82.65.17.07.21.07.37.12.44.11a3.63,3.63,0,0,0,.49.08h4.83l-.21-.22-.23-.23Zm3,.66.54.07q.54.07,1,.17a7.14,7.14,0,0,1,.78.22H87l0-.24-.09-.23Zm2.32-3.59.26.25.28.31v-.57Zm.54-.61-.53.43h.53ZM86,60.59l.22.16a.49.49,0,0,1,.1.12l.14.2H87l0-.22v-.26Zm.53.66v.2l0,.26-.14.34a2.11,2.11,0,0,0,.33-.3l.11-.23.11-.27Z"/>
                      <path d="M96.81,57.84h-.23a6.39,6.39,0,0,0-.86-1.1,5.19,5.19,0,0,0-1.61-1.09,4.66,4.66,0,0,0-1.88-.41,2.81,2.81,0,0,0-1.39.3.92.92,0,0,0-.52.84.78.78,0,0,0,.52.71l.25.11a1.71,1.71,0,0,0,.39.11l1.07.21,1.84.28a1.74,1.74,0,0,1,.46.1l.46.11.25.07.59.19a2.3,2.3,0,0,1,.6.32,2,2,0,0,1,.85,1.73,2.11,2.11,0,0,1-.87,1.77,3.9,3.9,0,0,1-2.4.66h-.49l-.37,0-.3,0-.39-.11a3.62,3.62,0,0,1-.49-.16l-.4-.17a4.35,4.35,0,0,1-.45-.28l-.53-.37-.1-.06L89.4,62.58h-.26v-3h.26a3.89,3.89,0,0,0,.39.59l.53.56a5.59,5.59,0,0,0,.64.57,6.71,6.71,0,0,0,.76.49,5,5,0,0,0,2.59.69,3.23,3.23,0,0,0,1.44-.26.82.82,0,0,0,.49-.76.78.78,0,0,0-.44-.71l-.28-.12-.33-.12-.6-.11L94,60.27,91.93,60q-3-.42-3-2.42a2.23,2.23,0,0,1,1-1.83A3.82,3.82,0,0,1,92.25,55a5,5,0,0,1,3.1,1.1l1.28-1h.17Zm-7.65-.53v.47h1.28l-.3-.18a1.42,1.42,0,0,1-.23-.29Zm.17-.66-.06.18-.09.29h.65l-.05-.21a.68.68,0,0,1,0-.16v-.1ZM89.18,58l.06.26.11.22h4.37L92,58.18l-.67-.12-.42-.1Zm1,3.5L90,61.3l-.23-.24-.22-.23-.23-.3v.93Zm-.88.86.86-.67h-.86Zm.54-6.17,0-.11a.78.78,0,0,1,.14-.2,1.61,1.61,0,0,0-.37.26,2.67,2.67,0,0,0-.27.37h.36Zm-.41,2.46.23.27.26.2h6.12l-.29-.15-.27-.11-.21-.07-.52-.14Zm.82.65.17.07.21.07.37.12.44.11a3.63,3.63,0,0,0,.49.08h4.83l-.18-.25-.23-.23Zm3,.66.54.07q.54.07,1,.17a7.14,7.14,0,0,1,.78.22H97l0-.24-.09-.23Zm2.36-3.61.26.25.28.31v-.55Zm.54-.61-.53.43h.53ZM96,60.57l.22.16a.49.49,0,0,1,.1.12l.14.2h.52l0-.22v-.24Zm.53.66v.2l0,.26-.14.34a2.11,2.11,0,0,0,.33-.3l.11-.23.11-.27Z"/>
                      <path d="M107.07,56.06a3.48,3.48,0,0,1,1.39,2.88,3.76,3.76,0,0,1-.39,1.7,3.44,3.44,0,0,1-1.14,1.31,5.52,5.52,0,0,1-3.19.79,7.47,7.47,0,0,1-2-.25,4.4,4.4,0,0,1-1.57-.82,3.45,3.45,0,0,1-1.44-2.85,3.54,3.54,0,0,1,1.55-3,5.16,5.16,0,0,1,3.15-.89,5.76,5.76,0,0,1,3.66,1.08ZM99,58.62v.47h1.67v-.47Zm.11-.66-.05.25,0,.23h1.67l.06-.49ZM99,59.27l0,.24.06.24h1.63l0-.24v-.24Zm.34-2-.12.26-.09.22h1.64l.13-.49Zm-.18,2.63.09.25.13.22h1.53l-.06-.18-.06-.28Zm.64-3.28-.2.25-.14.22H101l.21-.47Zm-.3,3.93.15.25.21.23h1.34l-.21-.49Zm1-4.59-.54.49h1.33l.11-.2.21-.28ZM100,61.25l.28.26.29.22h1l-.3-.49Zm2-5.71.27-.24-.81.18a4,4,0,0,0-.68.34h1Zm-1.13,6.39a4,4,0,0,0,1.33.47l-.28-.26-.2-.21Zm4.16-5.7a1.56,1.56,0,0,0-1.39-1h-.23l-.25.05a.83.83,0,0,0-.31.14,2.53,2.53,0,0,0-.86,1.31,3.64,3.64,0,0,0-.14.45q-.05.23-.1.52t-.07.55v1.4a4.06,4.06,0,0,0,.08.43l.15.64c0,.12.05.23.08.31a3,3,0,0,0,.12.32,1.77,1.77,0,0,0,.58.85,1.5,1.5,0,0,0,.92.28,1.56,1.56,0,0,0,1.41-.91,5.37,5.37,0,0,0,.49-2.58v-.16a5.89,5.89,0,0,0-.47-2.65Zm-.42,6.26a1.3,1.3,0,0,0,.33,0l.3-.11.34-.17.37-.25h-.83a2.42,2.42,0,0,1-.51.54Zm1-6.85-.26-.11-.69-.25.26.27.18.26h.79Zm-.4.38.13.26.1.22h1.18l-.23-.25-.25-.23Zm.27,5.25-.22.49h.93l.28-.28.17-.2Zm0-4.59.13.47H107l-.14-.25-.14-.22Zm.16,3.93-.05.25-.07.23h1.26l.16-.24.13-.24Zm0-3.28.09.49h1.55l-.18-.49Zm.11,2.63-.07.42h1.47l.1-.24.07-.23Zm0-2,0,.49h1.65l-.1-.49Zm0,1.31v.49h1.6l.07-.49Zm0-.65v.47h1.67v-.48Z"/>
                      <path d="M117.55,58.19l-.17,0-.17-.34q-.14-.28-.3-.56a6.12,6.12,0,0,0-.68-1,3.36,3.36,0,0,0-1-.79,3.74,3.74,0,0,0-.54-.2,2.21,2.21,0,0,0-.61-.08,1.47,1.47,0,0,0-1.3.93,4.23,4.23,0,0,0-.36,1.12,8.47,8.47,0,0,0-.12,1.52,8.74,8.74,0,0,0,.1,1.35,5.18,5.18,0,0,0,.12.58,5.27,5.27,0,0,0,.19.57,1.47,1.47,0,0,0,1.44,1,3.25,3.25,0,0,0,1.93-.64A4.55,4.55,0,0,0,117.55,60l.21.11-.1.24a1.78,1.78,0,0,1-.18.31l-.39.53a3.37,3.37,0,0,1-.39.45,4,4,0,0,1-.44.36,4.17,4.17,0,0,1-2.51.75,4.42,4.42,0,0,1-3.07-1.12,3.83,3.83,0,0,1-.09-5.56,4.22,4.22,0,0,1,3-1.08,3.58,3.58,0,0,1,.93.13,6.61,6.61,0,0,1,.92.34l.39.17.31,0a1.47,1.47,0,0,0,1.08-.52h.2Zm-7.83.43v.47h1.57v-.47Zm.09-.66-.07.49h1.57l.06-.49Zm-.06,1.31,0,.32,0,.15h1.51l0-.49Zm.28-2-.09.24-.07.24h1.54l.11-.49Zm-.14,2.63.09.25.11.22h1.4l-.05-.22-.05-.25Zm.52-3.28-.17.27-.12.2h1.47l.07-.24.11-.23Zm-.23,3.93.17.29.15.18h1.22l-.18-.49ZM111,56l-.27.24-.22.24h1.29l.29-.49Zm-.39,5.25.25.25.29.23h.88l-.13-.21-.14-.27Zm1.9-5.72.31-.28-.42.05-.23.05-.35.11-.26.13-.32.2h1Zm-1.09,6.39a3.42,3.42,0,0,0,1.15.47l-.25-.24-.17-.23Zm5.29-6.2-.15.06-.16.06h-.39l.15.13h.55Zm-.36.45.25.33.16.23,0-.56Z"/>
                      <path d="M124,62.5h-5.68v-.25h.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.64.64,0,0,0,.22-.32,3.46,3.46,0,0,0,.05-.69v-4.4a3.34,3.34,0,0,0,0-.67.57.57,0,0,0-.2-.33.85.85,0,0,0-.36-.16l-.62,0h-.34v-.26H124v.26h-.34a4,4,0,0,0-.61,0,.52.52,0,0,0-.34.15.52.52,0,0,0-.22.34,1.12,1.12,0,0,0,0,.12.93.93,0,0,0,0,.15V61a3.3,3.3,0,0,0,0,.66.57.57,0,0,0,.2.33,1,1,0,0,0,.34.17l.64,0h.34Zm-2.3-6.86a.49.49,0,0,1,.12-.17h-2a1.05,1.05,0,0,1,.27.33h1.56ZM120.1,61.9l-.12.2-.15.15h2l-.1-.16a1.7,1.7,0,0,1-.08-.19Zm.05-5.9,0,.24v.24h1.43V56Zm0,5.25v.31l0,.16h1.47v-.48Zm0-4.59v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.49Zm0,.66v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.47Zm0,.65v.49h1.42v-.49Z"/>
                      <path d="M127,60.48a1.23,1.23,0,0,0-.07.4,1.43,1.43,0,0,0,.18.71,1.19,1.19,0,0,0,.54.49l.23.11a.7.7,0,0,0,.29,0h.31v.25h-3.91v-.25a1.51,1.51,0,0,0,1.08-.45,6.31,6.31,0,0,0,1-1.43l3-5.33h.26l3.37,6.09.32.53.15.17.19.17a1.46,1.46,0,0,0,.93.27H135v.25h-5.66v-.25h.55a.86.86,0,0,0,.49-.14.41.41,0,0,0,.21-.36.94.94,0,0,0-.13-.4l-.49-.88Zm-1.42,1.63-.22.14h1.23l-.16-.34h-.58Zm.8-.55,0-.31-.2.27-.07.09-.11.12h.36Zm2.07-3.87-1.37,2.54h2.75Zm.14-.26.21.36h1.63l-.26-.49h-1.53Zm.16-.3h1.31l-.26-.47H129Zm.4,1.3h1.65l-.26-.49h-1.65Zm0-2h.58l-.31-.49Zm.38,2.62h1.62l-.27-.47h-1.65Zm.37.66h1.66l-.27-.49h-1.65Zm.36.65h1.66l-.26-.47H130Zm.36.66h1.67l-.26-.47h-1.67Zm.06,1.19h2.26l-.2-.34h-1.87a.65.65,0,0,1-.2.36Zm.09-.92a1,1,0,0,1,.08.19,1.2,1.2,0,0,0,0,.2h1.73l-.26-.49h-1.67Z"/>
                      <path d="M143.54,58.42h-.25a2.39,2.39,0,0,0-.14-.37q-.1-.21-.22-.42l-.23-.42-.29-.41a5.72,5.72,0,0,0-1.08-1.06,1.42,1.42,0,0,0-.88-.27h-.2V61a3,3,0,0,0,.05.67.61.61,0,0,0,.19.33.86.86,0,0,0,.35.17l.64,0h.34v.25h-5.66v-.25h.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.65.65,0,0,0,.22-.32,3.46,3.46,0,0,0,.05-.69V55.47h-.48l-.13,0-.2.07a2.27,2.27,0,0,0-.46.32,7.25,7.25,0,0,0-.74.75,4.92,4.92,0,0,0-.59.89l-.2.37-.2.53h-.25V55.22h9.06Zm-7.91-2.75.22-.2h-1.12v.41h.68Zm-.91.4v.78l.23-.36.3-.42Zm3.07,6-.15.15h2l-.12-.16-.06-.18h-1.56Zm1.66-.38v-.48H138v.28l0,.2Zm0-5.9v-.34H138v.33Zm0,.66V56H138v.49Zm0,.65v-.47H138v.47Zm0,.66v-.49H138v.49Zm0,.66V58H138v.47Zm0,.65v-.47H138v.47Zm0,.66v-.49H138v.49Zm0,.65v-.47H138v.46Zm0,.66v-.49H138v.49Zm3.33-5.59h-1.44l.22.15.32.26h.91Zm-.71.59a8.58,8.58,0,0,1,.71.88v-.88Z"/>
                      <path d="M150,62.5h-5.68v-.25h.34a3.41,3.41,0,0,0,.59,0h.21l.16-.12a.64.64,0,0,0,.22-.32,3.46,3.46,0,0,0,.05-.69v-4.4a3.34,3.34,0,0,0,0-.67.57.57,0,0,0-.2-.33.85.85,0,0,0-.36-.16l-.62,0h-.34v-.26H150v.26h-.34a4,4,0,0,0-.61,0,.52.52,0,0,0-.34.15.52.52,0,0,0-.22.34,1.13,1.13,0,0,0,0,.12.93.93,0,0,0,0,.15V61a3.3,3.3,0,0,0,0,.66.57.57,0,0,0,.2.33,1,1,0,0,0,.34.17l.64,0H150Zm-2.3-6.86a.49.49,0,0,1,.11-.17h-2a1.05,1.05,0,0,1,.27.33h1.56Zm-1.62,6.26-.12.2-.15.15h2l-.1-.16a1.7,1.7,0,0,1-.08-.19Zm.05-5.9,0,.24v.24h1.43V56Zm0,5.25v.31l0,.16h1.47v-.48Zm0-4.59v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.49Zm0,.66v.47h1.42v-.47Zm0,.65v.49h1.42v-.49Zm0,.66v.45h1.42v-.47Zm0,.65v.49h1.42v-.49Z"/>
                      <path d="M38,72h-.19a5.22,5.22,0,0,0-.7-.9,4.26,4.26,0,0,0-1.32-.89,3.81,3.81,0,0,0-1.54-.33,2.3,2.3,0,0,0-1.14.25.76.76,0,0,0-.43.68.63.63,0,0,0,.42.59l.2.09a1.4,1.4,0,0,0,.32.09l.87.17,1.51.23a2.23,2.23,0,0,1,.38.08l.37.09.21.06.49.15a1.9,1.9,0,0,1,.49.26A1.67,1.67,0,0,1,38.66,74a1.72,1.72,0,0,1-.71,1.48A3.18,3.18,0,0,1,36,76h-.4l-.3,0-.24,0-.3-.14-.42-.13L34,75.53a3.61,3.61,0,0,1-.37-.23L33.2,75l-.08-.05L32,75.81h-.21V73.35H32a3.11,3.11,0,0,0,.32.49l.43.46a4.55,4.55,0,0,0,.52.46,5.44,5.44,0,0,0,.62.41,4.07,4.07,0,0,0,2.12.57,2.65,2.65,0,0,0,1.17-.21.67.67,0,0,0,.42-.62.64.64,0,0,0-.36-.59l-.23-.1-.28-.08L36.21,74l-.49-.1L34,73.71q-2.49-.34-2.49-2a1.82,1.82,0,0,1,.78-1.48,3.13,3.13,0,0,1,2-.6,4.12,4.12,0,0,1,2.53.9l1.09-.84H38Zm-6.26-.43v.39h1l-.24-.15a1.17,1.17,0,0,1-.19-.24Zm.14-.54-.05.15-.07.24h.53l0-.17a.54.54,0,0,1,0-.13V71Zm-.12,1.08.05.21.09.18h3.58l-1.4-.21-.55-.1-.34-.08Zm.85,2.86-.17-.13-.2-.2-.17-.19-.2-.25v.76Zm-.72.71.7-.55h-.7Zm.44-5,0-.09a.65.65,0,0,1,.11-.16,1.31,1.31,0,0,0-.3.21,2.16,2.16,0,0,0-.22.3h.3Zm-.33,2,.2.22.21.16h5l-.24-.12L37,72.78l-.17-.06-.42-.11Zm.67.53.14.06.17.06.3.1.36.09.38.06h4l-.15-.2-.2-.19Zm2.45.54.44.06.8.14a5.85,5.85,0,0,1,.64.18h1.14v-.21l-.09-.2Zm1.93-3,.21.2.23.26v-.48Zm.44-.49-.43.35h.43Zm-.16,4,.18.13a.4.4,0,0,1,.08.1l.11.16h.44l0-.18v-.24Zm.43.54v.16l0,.21-.11.29a1.74,1.74,0,0,0,.27-.25L38,75l.09-.22Z"/>
                      <path d="M45.72,71v2.1h-.17a2.41,2.41,0,0,0-.23-.52l-.06-.11a1.17,1.17,0,0,0-.1-.17L45,72a3.51,3.51,0,0,0-.7-.69.94.94,0,0,0-.56-.18h-.14v3.92a1.38,1.38,0,0,0,0,.2.34.34,0,0,0,.11.17l.12.07.12,0,.42,0h.22v.17H40.88V75.6h.61l.14,0,.11-.08a.49.49,0,0,0,.14-.21.54.54,0,0,1,0-.21.81.81,0,0,0,0-.25V71.17H41.6l-.2.06a1.26,1.26,0,0,0-.33.21,5.5,5.5,0,0,0-.49.49,3.34,3.34,0,0,0-.39.58l-.12.24-.14.34h-.16V71Zm-5.33.44.15-.14.14-.13h-.74v.28Zm-.1.11h-.35v.49ZM42,75.39a.46.46,0,0,1-.08.12l-.1.1h1.32l-.08-.11,0-.11Zm0-.12h1V75h-1v.19Zm0-3.87H43v-.22h-.94Zm0,.43H43v-.32h-.94Zm0,.42H43v-.3h-.94Zm0,.43H43v-.31h-.94Zm0,.43H43v-.32h-.94Zm0,.42H43v-.31h-.94Zm0,.43H43v-.3h-.94Zm0,.42H43v-.31h-.94Zm0,.42H43v-.31h-.94Zm3.13-3.38v-.28h-.94l.14.11.21.17Zm0,.11h-.49a4.26,4.26,0,0,1,.49.57Z"/>
                      <path d="M51,71h2.26v.18q-1,.1-1,1.28v1.34a3.86,3.86,0,0,1-.06.79,1.64,1.64,0,0,1-.26.57,1.56,1.56,0,0,1-.82.58,4.08,4.08,0,0,1-1.34.2,2.6,2.6,0,0,1-1.41-.34l-.26-.21L48,75.2l-.1-.15-.1-.23-.06-.15,0-.11,0-.32V71.94a2.15,2.15,0,0,0,0-.43.43.43,0,0,0-.12-.22.46.46,0,0,0-.24-.11l-.41,0h-.23V71h3.72v.18h-.61l-.14,0-.11.09a.37.37,0,0,0-.12.19l0,.27v2.76a1.25,1.25,0,0,0,.23.81,1.09,1.09,0,0,0,.38.29,1.16,1.16,0,0,0,.49.1,1.75,1.75,0,0,0,.77-.2,1.4,1.4,0,0,0,.59-.49,1.32,1.32,0,0,0,.2-.49,4.49,4.49,0,0,0,.05-.78V72.44q0-1.28-1-1.28Zm-3.22.39h1a.49.49,0,0,1,.11-.21H47.57a.61.61,0,0,1,.18.22Zm.07.43h.93v-.33h-1l0,.15Zm0,.42h.93v-.3h-.93Zm0,.43h.93v-.31h-.93Zm0,.43h.93v-.31h-.93Zm0,.42h.93V73.2h-.93Zm0,.43h.93v-.28h-.93Zm0,.42h.91v-.31h-.92v.18Zm.1.43h.84v-.32h-.92l0,.18Zm.29.42h.71l-.07-.14,0-.17H48l.11.17Zm.13.12.23.16.24.11.28.08a1.25,1.25,0,0,0,.3,0l-.24-.17-.18-.2Zm3.83-4.08.11-.12h-.7l.18.12Zm-.05.12h-.26l.11.14.06.16v-.11a.39.39,0,0,1,.09-.17Z"/>
                      <path d="M53.75,75.77v-.17h.61l.14,0,.11-.08a.49.49,0,0,0,.14-.21.54.54,0,0,1,0-.21.81.81,0,0,0,0-.25V72a2,2,0,0,0,0-.43.33.33,0,0,0-.13-.22.43.43,0,0,0-.23-.11l-.42,0h-.22V71h4.38l.3.05a2.49,2.49,0,0,1,.93.35,2.2,2.2,0,0,1,.74.86,2.44,2.44,0,0,1,.28,1.12,2.36,2.36,0,0,1-.23,1,2.67,2.67,0,0,1-.28.46,2.26,2.26,0,0,1-.37.37,2,2,0,0,1-.35.23,2.27,2.27,0,0,1-.42.16l-.34.05-.39,0-.31,0h-.43Zm2.15-4.38v-.22H54.72a.86.86,0,0,1,.18.22Zm0,4h-1a.46.46,0,0,1-.08.12l-.1.1H55.9Zm0-3.87h-1l0,.15v.16h.94Zm0,3.44H55v.18l0,.11h1Zm0-3H55v.3h.93Zm0,.42H55v.3h.93Zm0,.42H55v.32h.93Zm0,.43H55v.31h.93Zm0,.42H55V74h.93Zm0,.43H55v.31h.93Zm0,.42H55v.31h.93Zm.54,1.09h1a.88.88,0,0,0,.38-.08.79.79,0,0,0,.28-.22,2.92,2.92,0,0,0,.46-1.91v-.26l0-.46a2.58,2.58,0,0,0,0-.29,2,2,0,0,0-.06-.29,1.33,1.33,0,0,0-.1-.26l-.14-.23a.75.75,0,0,0-.43-.35l-.41-.06h-.93Zm2.24-4.21a1.75,1.75,0,0,0-.75-.22,1,1,0,0,1,.32.22Zm-.44,4-.1.1a.77.77,0,0,1-.2.12,1.32,1.32,0,0,0,.42-.06,1.85,1.85,0,0,0,.35-.16Zm.95-.43h-.7l-.06.15-.1.16h.54l.17-.14Zm-.33-3.44h-.49l.09.14.09.17h.63L59,71.66Zm.63,3h-.85l-.09.31h.73Zm-.22-2.57h-.68l0,.14,0,.16h.78l-.09-.16Zm.4,2.14h-.93l-.05.31h.87l.06-.14Zm-.14-1.72h-.84l0,.31h.9Zm.19,1.29h-1V74h.95Zm-.07-.86h-.91v.32h1Zm.07.43h-1v.31h1v-.31Z"/>
                      <path d="M64.67,75.61v.17H61v-.17h.59l.13,0,.11-.08a.42.42,0,0,0,.14-.21,1.78,1.78,0,0,0,0-.45V71.69a1.52,1.52,0,0,0,0-.21.26.26,0,0,0-.1-.15l-.14-.09-.11,0-.42,0H61V71h3.71v.17h-.22a2.14,2.14,0,0,0-.41,0,.42.42,0,0,0-.22.08.44.44,0,0,0-.15.25l0,.18v3.11a2.29,2.29,0,0,0,0,.44.46.46,0,0,0,.14.2.49.49,0,0,0,.21.12l.42,0Zm-1.55-4.21,0-.11.08-.11H61.93a.78.78,0,0,1,.18.22Zm0,4h-1a.46.46,0,0,1-.08.12l-.1.1h1.32A1.2,1.2,0,0,1,63.13,75.39Zm0-3.87h-1v.31h1Zm0,3.44h-1v.18l0,.11h1Zm0-3h-.93v.3h.93Zm0,.42h-.93v.3h.93Zm0,.42h-.93v.32h.93Zm0,.43h-.93v.31h.93Zm0,.42h-.93V74h.93Zm0,.43h-.93v.31h.93Zm0,.42h-.93v.31h.93Z"/>
                      <path d="M68.51,70.82a3.8,3.8,0,0,1,2.4.7,2.27,2.27,0,0,1,.9,1.89,2.47,2.47,0,0,1-.25,1.12,2.26,2.26,0,0,1-.74.85,3.64,3.64,0,0,1-2.08.49,4.81,4.81,0,0,1-1.33-.16,3.12,3.12,0,0,1-1-.53,2.28,2.28,0,0,1-.94-1.86,2.31,2.31,0,0,1,1-1.94A3.41,3.41,0,0,1,68.51,70.82ZM66.73,73.2H65.62v.31h1.09Zm.05-.43H65.71a.58.58,0,0,0,0,.17l0,.15h1.09Zm0,.86h-1.1l0,.16,0,.16h1.08l0-.16Zm.14-1.28h-1l-.08.17-.05.14H66.8Zm-.08,1.72H65.76l.06.17.08.14h1l0-.12Zm.25-2.14h-.91l-.13.16-.09.14h1Zm-.13,2.57H66l.11.17.13.14H67Zm.41-3H66.6l-.35.31h.87l.07-.12Zm-.21,3.44H66.3l.19.17.19.14h.66Zm.31-3.56.17-.19.16-.15-.24.05-.28.07-.19.06-.25.14Zm0,4h-.55a2.52,2.52,0,0,0,.86.3l-.22-.17Zm2.5-2a3.76,3.76,0,0,0-.33-1.74A1,1,0,0,0,68.7,71h-.19l-.17,0-.2.09a1.73,1.73,0,0,0-.56.86,3.12,3.12,0,0,0-.15.57q0,.27-.06.46v.77l.05.4.1.42.14.41a1.22,1.22,0,0,0,.38.56,1,1,0,0,0,.6.17,1,1,0,0,0,.93-.59,3.53,3.53,0,0,0,.33-1.69Zm-.26,2a1.7,1.7,0,0,1-.34.36.87.87,0,0,0,.23,0l.22-.08a2.93,2.93,0,0,0,.43-.26Zm.49-4L70,71.24l-.17-.07L69.36,71l.13.19.12.17Zm.16.12h-.6l.08.17.06.14h.77l-.15-.16Zm.35,3.44H69.9l-.14.31h.62l.19-.19Zm.06-3h-.82l.09.3h.92l-.1-.16ZM71,74.5H70l0,.17-.05.14h.83l.11-.15Zm0-2.14H70l.05.31h1Zm.14,1.72h-1l-.05.31h1l.06-.16Zm0-1.29h-1v.32h1.08Zm.07.86H70.12V74h1Zm0-.42H70.11v.31H71.2v-.31Z"/>
                      <path d="M77.6,75.77v-.17h.21a1,1,0,0,0,.65-.14.92.92,0,0,0,.15-.65v-3a.66.66,0,0,0-.11-.45,1,1,0,0,0-.69-.18h-.23V71H81.3v.17h-.23a1.46,1.46,0,0,0-.58.07.88.88,0,0,0-.22.72v3.65h.55A2.31,2.31,0,0,0,82,75.3a3.32,3.32,0,0,0,.65-.49,7.31,7.31,0,0,0,.68-.77h.16v1.75Zm2.16-4.38,0-.11.08-.11H78.57a.86.86,0,0,1,.18.22Zm0,4h-1l-.07.12-.11.1h1.18Zm0-3.87h-1l0,.15v.16h1v-.31Zm0,3.44h-.93v.18l0,.11h1Zm0-3h-.93v.3h.93Zm0,.42h-.93v.3h.93Zm0,.42h-.93v.32h.93Zm0,.43h-.93v.31h.93Zm0,.42h-.93V74h.93Zm0,.43h-.93v.31h.93Zm0,.42h-.93v.31h.93Zm2.55.77-.27.18-.3.14h1.3v-.32Zm.17-.12h.56v-.52a7.37,7.37,0,0,1-.57.49Z"/>
                      <path d="M90.32,71v1.74h-.15a6.75,6.75,0,0,0-1.11-1.15,2.44,2.44,0,0,0-.58-.33,1.77,1.77,0,0,0-.6-.09h-.74v2h.18A1.32,1.32,0,0,0,88,73a1.91,1.91,0,0,0,.58-.64h.17v1.84h-.17L88.52,74l-.11-.14-.2-.19a1,1,0,0,0-.21-.15,1.24,1.24,0,0,0-.68-.2h-.18v2.25h.72l.2,0,.3-.06.27-.09a1.72,1.72,0,0,0,.32-.18l.22-.16a5.54,5.54,0,0,0,1-1.05h.16v1.75H84.46v-.17h.61l.14,0,.11-.08a.49.49,0,0,0,.14-.21.54.54,0,0,1,0-.21.81.81,0,0,0,0-.25V72a2,2,0,0,0,0-.43.33.33,0,0,0-.13-.22.43.43,0,0,0-.23-.11l-.42,0h-.22V71Zm-3.71.39v-.22H85.43a.86.86,0,0,1,.18.22Zm0,4h-1a.46.46,0,0,1-.08.12l-.1.1h1.18Zm0-3.87h-1l0,.16v.16h1Zm0,3.44h-.94v.19l0,.11h1Zm0-3h-.94v.3h.95Zm0,.42h-.94v.3h.95Zm0,.42h-.94v.32h.95Zm0,.43h-.94v.31h.95Zm0,.42h-.94V74h.95Zm0,.43h-.94v.31h.95Zm0,.42h-.94v.31h.95Zm1.3-1.18.22.13.17.12.11.11v-.36Zm0-.11h.49v-.36l-.12.12-.16.13Zm1.15,2.11-.2.13-.32.14h1.3v-.28Zm.72-3.88v-.28H88.7l.21.12.21.15Zm-.56,3.77h.64v-.57a4.12,4.12,0,0,1-.49.44Zm.56-3.65h-.55l.2.17a1.8,1.8,0,0,1,.2.2l.16.19Z"/>
                      <path d="M97,70.91l.07,1.76h-.19l-.06-.13-.1-.17L96.48,72a2.56,2.56,0,0,0-.25-.31l-.29-.29a2,2,0,0,0-.55-.32L95.1,71a2,2,0,0,0-.35,0,.91.91,0,0,0-.85.46,4.63,4.63,0,0,0,0,3.73,1.11,1.11,0,0,0,1.68.13,1.68,1.68,0,0,0,.19-.92,1.17,1.17,0,0,0-.13-.69.84.84,0,0,0-.61-.15h-.26v-.16h3.69v.16h-.33a1.38,1.38,0,0,0-.36,0,.43.43,0,0,0-.2.15.7.7,0,0,0-.14.3,1.44,1.44,0,0,0,0,.3v.92a1.76,1.76,0,0,0,.06.41l-.1.07a1.34,1.34,0,0,0-.82-.25,3.46,3.46,0,0,0-.85.15l-.36.11-.2,0-.22,0-.49,0a2.85,2.85,0,0,1-2-.74,2.4,2.4,0,0,1-.81-1.84,2.47,2.47,0,0,1,.2-1,2.54,2.54,0,0,1,.61-.84,2.77,2.77,0,0,1,2-.66,3,3,0,0,1,.69.06l.32.1.36.16.25.11.19,0a1,1,0,0,0,.69-.33Zm-4.17,2.27h-1v.31h1Zm.05-.42h-1l0,.14,0,.17h1v-.18Zm-.05.85h-1l0,.19,0,.13h1ZM93,72.32H92l-.07.17-.05.14h1l0-.18ZM92.9,74h-1l.05.16.08.15H93l0-.15Zm.25-2.14h-.88l-.11.15-.09.15H93l.05-.13ZM93,74.47h-.87l.07.12.13.18h.78L93,74.59Zm.41-3h-.72l-.13.11-.19.2h.85l.09-.14Zm-.24,3.44h-.73a1.59,1.59,0,0,0,.35.3h.55l-.09-.14Zm.33-3.56.13-.15.21-.2a2.75,2.75,0,0,0-.49.1l-.22.11-.25.14Zm-.08,4H93l.28.13.4.14Zm3.46-.12h-1a.88.88,0,0,1-.18.32l.13,0a3.27,3.27,0,0,1,.74-.11h.18l.18,0Zm.05-1.39,0-.1,0-.07,0-.06H95.66l.15.23Zm-.05,1h-1l0,.32h1Zm0-.85h-1l0,.16v.15h1Zm0,.42h-1v.32h1Zm-.3-2.89V71.3a.79.79,0,0,1-.4.11l0,0Zm0,.12H96.3l.15.18.12.18Z"/>
                      <path d="M102,74.45h-2a.82.82,0,0,0-.05.27.87.87,0,0,0,.13.49.67.67,0,0,0,.34.32l.15.07.19,0H101v.17H98.47v-.17a1,1,0,0,0,.7-.29,2.71,2.71,0,0,0,.33-.38,5.62,5.62,0,0,0,.34-.56l2-3.51H102l2.21,4,.12.2.09.14a.8.8,0,0,0,.21.22.94.94,0,0,0,.62.18h.1v.17h-3.71v-.17H102a.56.56,0,0,0,.31-.09.27.27,0,0,0,.14-.23.63.63,0,0,0-.08-.27Zm-2.7.94-.18.13-.14.09h.81a1.06,1.06,0,0,1-.11-.22Zm.35-.12v-.32l-.12.18-.05.05-.07.08Zm2.26-1L101,72.62l-.89,1.66Zm-.77-1.91,0,.08.13.23h1.07l-.17-.31Zm.24-.42-.18.3h.86l-.17-.3Zm-.12.87.17.31h1.08l-.18-.31Zm.34-1.32-.19.33h.38Zm-.11,1.75.18.31h1.08l-.18-.31Zm.24.42.17.32H103l-.18-.32Zm.23.43.17.31h1.09l-.17-.31Zm.23.43.18.3h1.09l-.18-.3Zm.34.86a.46.46,0,0,1-.13.22h1.47l-.12-.22Zm-.1-.43,0,.05a.8.8,0,0,1,.08.26h1.16l-.17-.31Z"/>
                      <path d="M105.85,75.77v-.17h.23a1,1,0,0,0,.65-.14.92.92,0,0,0,.15-.65v-3a.66.66,0,0,0-.11-.45,1,1,0,0,0-.69-.18h-.23V71h3.72v.17h-.23a1.46,1.46,0,0,0-.58.07.88.88,0,0,0-.22.72v3.65h.55a2.31,2.31,0,0,0,1.19-.31,3.32,3.32,0,0,0,.65-.49,7.31,7.31,0,0,0,.68-.77h.16v1.75ZM108,71.39l0-.11.08-.11h-1.32a.86.86,0,0,1,.18.22Zm0,4h-1l-.07.12-.11.1H108Zm0-3.87h-1l0,.15v.16H108V71.6ZM108,75h-.93v.18l0,.11h1Zm0-3h-.93v.3H108Zm0,.42h-.93v.3H108Zm0,.42h-.93v.32H108Zm0,.43h-.93v.31H108Zm0,.42h-.93V74H108Zm0,.43h-.93v.31H108Zm0,.42h-.93v.31H108Zm2.55.77-.27.18-.3.14h1.3v-.32Zm.17-.12h.56v-.52a7.37,7.37,0,0,1-.58.49Z"/>
                      <path d="M118.33,71v1.74h-.15a6.75,6.75,0,0,0-1.1-1.14,2.44,2.44,0,0,0-.58-.33,1.77,1.77,0,0,0-.6-.09h-.74v2h.18a1.32,1.32,0,0,0,.72-.2,1.91,1.91,0,0,0,.58-.64h.17v1.84h-.17l-.11-.16-.11-.14-.2-.19a1,1,0,0,0-.21-.15,1.24,1.24,0,0,0-.68-.2h-.18v2.25h.72l.2,0,.3-.06.27-.09a1.72,1.72,0,0,0,.32-.18l.22-.16a5.54,5.54,0,0,0,1-1.05h.16v1.75h-5.92v-.17h.61l.14,0,.11-.08a.49.49,0,0,0,.14-.21.54.54,0,0,1,0-.21.81.81,0,0,0,0-.25V72a2,2,0,0,0,0-.43.33.33,0,0,0-.13-.22.43.43,0,0,0-.23-.11l-.42,0h-.22V71Zm-3.71.39v-.22h-1.18a.86.86,0,0,1,.18.22Zm0,4h-1a.46.46,0,0,1-.08.12l-.1.1h1.18Zm0-3.87h-1l0,.16v.16h.94Zm0,3.44h-.94v.19l0,.11h1Zm0-3h-.94v.3h.94Zm0,.42h-.94v.3h.94Zm0,.42h-.94v.32h.94Zm0,.43h-.94v.31h.94Zm0,.42h-.94V74h.94Zm0,.43h-.94v.31h.94Zm0,.42h-.94v.31h.94Zm1.3-1.18.22.13.17.12.11.11v-.36Zm0-.11h.49v-.36l-.12.12-.16.13Zm1.15,2.11-.2.13-.32.14h1.3v-.28Zm.72-3.88v-.28h-1.13l.21.12.21.15Zm-.56,3.77h.64v-.57a4.12,4.12,0,0,1-.49.44Zm.56-3.65h-.55l.2.17a1.8,1.8,0,0,1,.2.2l.16.19Z"/>
                    </g>
                  </g>
                </svg>
              </a>
            </li>

            <?php if (has_nav_menu('menu_left') || has_nav_menu('menu_right')): ?>
              <?php wp_nav_menu(array(
                'theme_location' => 'menu_left',
                'items_wrap' => '%3$s',
                'walker' => new walkerMenu()
              )); ?>
              <?php wp_nav_menu(array(
                'theme_location' => 'menu_right',
                'items_wrap' => '%3$s',
                'walker' => new walkerMenu()
              )); ?>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </header>
