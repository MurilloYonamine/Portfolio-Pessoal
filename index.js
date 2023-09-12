const express = require('express');
const exphbs = require('express-handlebars');
const path = require('path');

const app = express();

// Routes
const homeRoutes = require("./routes/homeRoutes");
// const emailRoutes = require("./routes/emailRoutes");

// Controller
const HomeController = require("./controllers/HomeController");
// const EmailController = require("./controllers/EmailController");

// Template engine
app.engine(
    "handlebars",
    exphbs.engine({
        extname: "handlebars",
        defaultLayout: "layouts/main",
        layoutsDir: path.join(__dirname, "views/"),
        partialsDir: [path.join(__dirname, "views/")],
    })
);

app.set('view engine', 'handlebars');

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

//public path
app.use(express.static('public'));

//Routes
app.use("/", homeRoutes);
// app.use("/", emailRoutes);

app.listen(3000, () => {
    console.log(`Servidor rodando em http://localhost:3000`);
});
