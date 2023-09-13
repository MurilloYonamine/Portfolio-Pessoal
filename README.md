# Portfolio Pessoal

Este é o README para o meu portfólio pessoal, desenvolvido com Node.js, Express e Express Handlebars, seguindo a arquitetura MVC (Model-View-Controller) para uma organização eficiente do código. O objetivo deste documento é fornecer uma visão geral da estrutura do projeto e das tecnologias utilizadas.

## Descrição

Meu portfólio pessoal é uma aplicação web que exibe informações sobre mim, meus projetos e formas de contato. Ele foi desenvolvido utilizando as seguintes tecnologias:

- Node.js: Uma plataforma JavaScript que permite executar código JavaScript no servidor.
- Express: Um framework Node.js para construir aplicativos web.
- Express Handlebars: Uma engine de template que permite renderizar as páginas HTML de forma dinâmica.

## Estrutura do Projeto

O código foi dividido em várias partes para facilitar a manutenção e organização:

### Model-View-Controller (MVC)

- **Controller**: O código responsável por receber as requisições do cliente, processá-las e retornar as respostas apropriadas. Os controladores estão localizados no diretório `controllers`.

- **Routes**: Aqui, definimos as rotas da aplicação, associando as URLs aos controladores correspondentes. As rotas estão no diretório `routes`.

- **Views**: As views são os templates HTML usados para renderizar as páginas da aplicação. Estão no diretório `views`.

- **Public**: Todos os recursos estáticos, como folhas de estilo, imagens e arquivos JavaScript, estão localizados no diretório `public`.

### HTML e Bootstrap

O HTML principal do projeto está localizado no arquivo `index.html`, que segue as melhores práticas de acessibilidade e é responsivo, graças ao uso do framework Bootstrap.

### Banco de Dados

Este projeto não faz uso de um banco de dados, pois se concentra principalmente na apresentação de informações estáticas.

## Executando o Projeto

Para executar o projeto em seu ambiente local, siga os passos abaixo:

1. Certifique-se de ter o Node.js instalado em seu computador.

2. Clone este repositório para sua máquina:
   git clone https://github.com/seu-usuario/seu-portfolio.git
   
3. Acesse o diretório do projeto:
  cd seu-portfolio

5. Instale as dependências do projeto:
  npm install

6. Inicie a aplicação:
  npm start

Agora, você pode acessar o portfólio pessoal em seu navegador, normalmente em http://localhost:3000.
