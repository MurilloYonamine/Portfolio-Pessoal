const express = require('express');
const exphbs = require('express-handlebars');
const path = require('path');


const app = express();

// Routes
const homeRoutes = require("./routes/homeRoutes");

// Controller
const HomeController = require("./controllers/HomeController");

// Template engine
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

app.use(
    express.urlencoded({
        extended: true
    })
);

app.use(express.json());

//public path
app.use(express.static('public'));

//Routes
app.use("/", homeRoutes);

app.listen(3000);
