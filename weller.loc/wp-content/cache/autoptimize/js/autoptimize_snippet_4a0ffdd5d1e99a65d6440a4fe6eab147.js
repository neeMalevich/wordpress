function popupModal(){let modal=document.querySelector(".modal-order-header");let trigger=document.querySelector(".modalorderheader");let closeButton=document.querySelector(".close-button-order-header");let body=document.querySelector("body");function toggleModal(){modal.classList.toggle("show-modal-order-header");body.classList.toggle("_is-no-scroll");}
function windowOnClick(event){if(event.target===modal){toggleModal();}}
trigger.addEventListener("click",toggleModal);closeButton.addEventListener("click",toggleModal);window.addEventListener("click",windowOnClick);}
popupModal();$(document).ready(function(){$(".hamburger-container").click(function(){$("#menu").slideToggle();});$(window).resize(function(){if(window.innerWidth>768){$("#menu").removeAttr("style");}});var topBar=$(".hamburger li:nth-child(1)"),middleBar=$(".hamburger li:nth-child(2)"),bottomBar=$(".hamburger li:nth-child(3)");$(".hamburger-container").on("click",function(){if(middleBar.hasClass("rot-45deg")){topBar.removeClass("rot45deg");middleBar.removeClass("rot-45deg");bottomBar.removeClass("hidden");}else{bottomBar.addClass("hidden");topBar.addClass("rot45deg");middleBar.addClass("rot-45deg");}});});$(document).ready(function(){$('.caro-slider').carouFredSel({scroll:{items:1,fx:'crossfade',easing:'swing',duration:1500,pauseOnHover:'resume',}});$("#zoom").on("click",function(){$('#modal').modal('show');});$('.products_block').each(function(){if($(this).find('a').attr('href')==document.location.pathname){$(this).addClass('active')}});$('#btn_send').on('click',function(e){e.preventDefault();var act=$('input[name=act]').val();var name=$('input[name=name]').val();var email=$('input[name=email]').val();var text=$('textarea[name=message]').val();if(name!=''&&email!=''&&text!=''){$.post("/email_send.php",{act:act,name:name,email:email,text:text},onAjaxSuccess);}});function onAjaxSuccess(data)
{alert(data);}});