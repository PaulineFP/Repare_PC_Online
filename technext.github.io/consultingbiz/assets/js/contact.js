// $(document).ready(function(){
//
//     (function($) {
//         "use strict";
//
//
//     jQuery.validator.addMethod('answercheck', function (value, element) {
//         return this.optional(element) || /^\bcat\b$/.test(value)
//     }, "type the correct answer -_-");
//
//     // validate contactForm form
//     $(function() {
//         $('#contactForm').validate({
//             rules: {
//                 name: {
//                     required: true,
//                     minlength: 2
//                 },
//                 email: {
//                     required: true,
//                     email: true,
//                     minlength: 5
//                 },
//                 message: {
//                     required: true,
//                     minlength: 6
//                 }
//             },
//             messages: {
//                 name: {
//                     required: "Veuillez inscrire votre nom",
//                     minlength: "Votre nom doit contenir minimum 2 charactères"
//                 },
//                 email: {
//                     required: "Veuillez indiquez un email valide",
//                     minlength: "Veuillez indiquez un email valide",
//                 },
//                 message: {
//                     required: "Veuillez décrire votre problème",
//                     minlength: "Votre message n'est pas assez explicite"
//                 }
//             },
//             submitHandler: function(form) {
//                 $(form).ajaxSubmit({
//                     type:"POST",
//                     data: $(form).serialize(),
//                     url:"contact_process.php",
//                     success: function() {
//                         $('#contactForm :input').attr('disabled', 'disabled');
//                         $('#contactForm').fadeTo( "slow", 1, function() {
//                             $(this).find(':input').attr('disabled', 'disabled');
//                             $(this).find('label').css('cursor','default');
//                             $('#success').fadeIn()
//                             $('.modal').modal('hide');
// 		                	$('#success').modal('show');
//                         })
//                     },
//                     error: function() {
//                         $('#contactForm').fadeTo( "slow", 1, function() {
//                             $('#error').fadeIn()
//                             $('.modal').modal('hide');
// 		                	$('#error').modal('show');
//                         })
//                     }
//                 })
//             }
//         })
//     })
//
//  })(jQuery)
// })