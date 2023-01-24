const express = require("express");
const UserController = require("../controladores/user");

const api = express.Router();

//EndPoints


//Crear usuario
api.post("/user", UserController.register);

//Login usuario con token
api.post("/user", UserController.login);



module.exports = api;
  