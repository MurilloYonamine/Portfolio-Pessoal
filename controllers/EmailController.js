// const Email = require('../models/Email');
// const nodemailer = require('nodemailer');

// module.exports = class HomeController {
//     static async enviarEmail(req, res) {
//         // Obter os dados do e-mail
//         const nome = req.body.nome;
//         const email = req.body.email;
//         const mensagem = req.body.mensagem;

//         // Criar um objeto de e-mail
//         const mail = {
//             nome,
//             email,
//             mensagem,
//             to: 'profissionalmurillogomes@gmail.com'
//         };

//         // Enviar o e-mail
//         nodemailer.sendMailAsync(mail, (err, success) => {
//             if (err) {
//                 res.status(500).send(err);
//             } else {
//                 res.status(200).send(success);
//             }
//         });
//     }
// };